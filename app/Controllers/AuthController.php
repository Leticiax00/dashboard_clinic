<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use Twilio\Rest\Client;

helper(['form', 'auth']);

class AuthController extends Controller
{
    // Exibe o formulário de login
    public function login()
    {
        helper(['form']);
        return view('login/index'); 
    }

    // Processa a tentativa de login
    public function authenticate()
    {
        $session = session();
        $model = new UserModel();
        
        // 1. Coleta os dados do formulário
        $email = $this->request->getVar('email');
        $senha = $this->request->getVar('senha'); 
        $user = $model->where('email', $email)->first();

        if ($user) {
            $verifyPass = password_verify($senha, $user['senha']);

            if ($verifyPass) {
                $ses_data = [
                    'user_id'    => $user['id'],
                    'user_nome'  => $user['nome'],
                    'user_email' => $user['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/inicial'); 

            } else {
                $session->setFlashdata('msg_login', 'Senha incorreta!');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg_login', 'E-mail não encontrado!');
            return redirect()->to('/login');
        }
    }

    // Método de Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/index');
    }

    public function register()
    {
        helper(['form']);

        return view('login/cadastre-se'); 
    }

    public function save()
    {
        helper(['form']);
        $model = new UserModel();
        
        // 1. Regras de Validação
        $rules = [
            'nome' => 'required|min_length[3]|max_length[100]',
            'email' => 'required|valid_email|is_unique[usuarios.email]',
            'telefone' => 'permit_empty|max_length[20]',
            'senha' => 'required|min_length[8]',
            'conf_senha' => 'required|matches[senha]'
        ];

        if ($this->validate($rules)) {
            $data = [
                'nome' => $this->request->getVar('nome'),
                'email' => $this->request->getVar('email'),
                'telefone' => $this->request->getVar('telefone'),
                'senha' => $this->request->getVar('senha'), 
            ];

            // 3. Salva no Banco de Dados
            $model->save($data);

            // 4. Sucesso e Redirecionamento
            $session = session();
            $session->setFlashdata('msg_cadastro', 'Cadastro realizado com sucesso! Faça seu login.');
            return redirect()->to('/login'); 

        } else {
            $data['validation'] = $this->validator;
            
            return view('login/cadastre-se', $data); 
        }
    }

    public function forgotPassword()
    {
        return view('login/esqueci-senha');
    }

    public function selectMethod()
    {
        $session = session();
        $model = new UserModel();
        $input = $this->request->getVar('email_recover');
        $user = $model->where('email', $input)->orWhere('telefone', $input)->first();

        if (!$user) {
            $session->setFlashdata('error', 'Conta não encontrada.');
            return redirect()->back()->withInput();
        }
        
        // Dados mascarados para exibição
        $maskedEmail = mask_email($user['email']);
        $maskedPhone = $user['telefone'] ? mask_phone($user['telefone']) : null;
        $session->setTempdata('user_reset_id', $user['id'], 300); // 5 minutos
        
        $data = [
            'user_id' => $user['id'],
            'email' => $user['email'],
            'maskedEmail' => $maskedEmail,
            'maskedPhone' => $maskedPhone,
        ];

        return view('login/select-model', $data);
    }

public function sendCode($user_id, $method)
{
    $session = session();
    $model = new UserModel();
    $user = $model->find($user_id);
    
    
    $token = bin2hex(random_bytes(3)); 
    $expiry = date('Y-m-d H:i:s', strtotime('+30 minutes'));

  
    $model->update($user_id, [
        'reset_token' => $token,
        'token_expiry' => $expiry,
    ]);

    if ($method === 'email') {     
        $session->setFlashdata('success', "Código de verificação enviado para o seu e-mail. Código de teste: $token");
        
    } elseif ($method === 'phone') {
        
        $user_phone = $user['telefone']; 

        if (empty($user_phone)) {
            $session->setFlashdata('error', 'Seu registro não possui um telefone para SMS.');
            return redirect()->back();
        }
        
        try {
            $sid = getenv('TWILIO_SID');
            $token = getenv('TWILIO_TOKEN');
            $from = getenv('TWILIO_PHONE_FROM');
            $twilio = new Client($sid, $token);
            $message = $twilio->messages
                ->create($user_phone, 
                         [
                             "from" => $from, // Seu número de remetente Twilio
                             "body" => "Seu código de redefinição Webclinic é: " . $token
                         ]
                );
            
            // Sucesso
            $session->setFlashdata('success', "Código de verificação enviado por SMS com sucesso.");

        } catch (\Exception $e) {
            // Falha na API (Muito comum se o formato do número de destino estiver errado!)
            $session->setFlashdata('error', 'Erro ao enviar o SMS. Verifique o formato do número (+55...) ou tente por e-mail.');
            return redirect()->back(); 
        }
    }
    
    // Redireciona para a tela onde o usuário insere o código
    return redirect()->to(base_url('senha/resetar/' . $user_id));
}
    
    // Rota GET /senha/resetar/(:any)
    public function resetPassword($user_id)
    {
        $session = session();
        
        // Garante que a mensagem de sucesso do envio seja exibida
        $success = $session->getFlashdata('success'); 

        return view('login/reset-senha', ['user_id' => $user_id, 'success' => $success]);
    }

    // Rota POST /senha/atualizar
    public function updatePassword()
    {
        $session = session();
        $model = new UserModel();
        $user_id = $this->request->getVar('user_id');
        $token_digitado = $this->request->getVar('token');
        $nova_senha = $this->request->getVar('nova_senha');
        $conf_senha = $this->request->getVar('conf_senha');
        
        $user = $model->find($user_id);
        
        if (!$user) {
            $session->setFlashdata('error', 'Usuário inválido ou sessão expirada.');
            return redirect()->to('/senha');
        }

        // 1. Validação do Token e Expiração
        $current_time = date('Y-m-d H:i:s');

        if ($user['reset_token'] !== $token_digitado || $current_time > $user['token_expiry']) {
            $session->setFlashdata('error', 'Código de verificação inválido ou expirado.');
            return redirect()->back();
        }

        // 2. Validação da Nova Senha
        $rules = [
            'nova_senha' => 'required|min_length[8]',
            'conf_senha' => 'required|matches[nova_senha]'
        ];

        if (!$this->validate($rules)) {
            $session->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        // 3. Atualiza a Senha (O Model irá criptografar automaticamente)
        $model->update($user_id, [
            'senha' => $nova_senha,
            'reset_token' => null, // Limpa o token após o uso
            'token_expiry' => null
        ]);

        // 4. Sucesso
        $session->setFlashdata('msg_login', 'Sua senha foi atualizada com sucesso. Faça seu login.');
        return redirect()->to('/login');
    }


}
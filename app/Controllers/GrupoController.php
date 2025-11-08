<?php
namespace App\Controllers;

use App\Models\GrupoPacienteModel;
use CodeIgniter\Controller;

class GrupoController extends Controller
{
    /**
     * Processa o formulário POST e salva um novo grupo de pacientes no banco de dados.
     */
    public function salvarGrupo()
    {
        // Instancia o Model para interagir com a tabela 'grupos_pacientes'
        $model = new GrupoPacienteModel();
        
        // Pega o dado enviado pelo formulário (input com name="nome_grupo")
        $nomeGrupo = $this->request->getPost('nome_grupo');
        
        // Verifica se o campo não está vazio
        if (!empty($nomeGrupo)) {
            $data = [
                'nome_grupo' => $nomeGrupo,
            ];

            try {
                // Insere no banco de dados. 
                // CRÍTICO: O Model precisa ter protected $allowedFields = ['nome_grupo'];
                $model->insert($data);
                
                // Redireciona de volta com uma mensagem de sucesso
                return redirect()->back()->with('success', 'Grupo cadastrado com sucesso!');
            } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
                 // Trata erro de duplicidade ou conexão
                 return redirect()->back()->with('error', 'Erro no banco de dados: ' . $e->getMessage());
            }

        } else {
            // Se o nome do grupo estiver vazio
            return redirect()->back()->with('error', 'Nome do grupo é obrigatório.');
        }
    }
}
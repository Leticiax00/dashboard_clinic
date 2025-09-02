<?php

namespace App\Controllers;
use App\Models\PacienteModel;

class Pacientes extends BaseController
{
    // 🔹 Salvar novo paciente
    public function salvar()
    {
        $pacienteModel = new PacienteModel();

        // Upload de arquivo (laudo)
        $laudoUrl = null;
        $file = $this->request->getFile('arquivo');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $laudoUrl = $file->store('laudos'); // salva em writable/uploads/laudos
        }

        $data = [
            'nome'              => $this->request->getPost('nome'),
            'data_nascimento'   => $this->request->getPost('data_nasc'),
            'cpf'               => $this->request->getPost('cpf'),
            'rg'                => $this->request->getPost('rg'),
            'endereco'          => $this->request->getPost('endereco'),
            'convenio_medico'   => $this->request->getPost('conv_med'),
            'grupo_pacientes'   => $this->request->getPost('grupo_pacientes'),
            'sexo'              => $this->request->getPost('sexo'),
            'medico_solicitante'=> $this->request->getPost('medico_solicitante'),
            'laudo_url'         => $laudoUrl,
            'observacoes'       => $this->request->getPost('observacoes'),
            'data_cadastro'     => date('Y-m-d H:i:s')
        ];

        $pacienteModel->insert($data);

        return redirect()->back()->with('success', 'Paciente cadastrado com sucesso!');
    }

    // 🔹 Listar todos os pacientes
    public function index()
    {
        $pacienteModel = new PacienteModel();
        $data['pacientes'] = $pacienteModel->findAll();

        return view('paghome', $data);
    }

    // 🔹 Editar paciente
    public function editar($id)
    {
        $pacienteModel = new PacienteModel();
        $paciente = $pacienteModel->find($id);

        if (!$paciente) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Paciente não encontrado: ".$id);
        }

        return view('editar_paciente', ['paciente' => $paciente]);
    }

    // 🔹 Atualizar paciente
    public function atualizar($id)
    {
        $pacienteModel = new PacienteModel();

        $data = [
            'nome'              => $this->request->getPost('nome'),
            'data_nascimento'   => $this->request->getPost('data_nascimento'),
            'endereco'          => $this->request->getPost('endereco'),
            'rg'                => $this->request->getPost('rg'),
            'cpf'               => $this->request->getPost('cpf'),
            'convenio_medico'   => $this->request->getPost('convenio_medico'),
            'grupo_pacientes'   => $this->request->getPost('grupo_pacientes'),
            'sexo'              => $this->request->getPost('sexo'),
            'medico_solicitante'=> $this->request->getPost('medico_solicitante'),
            'laudo_url'         => $this->request->getPost('laudo_url'),
            'observacoes'       => $this->request->getPost('observacoes'),
        ];

        $pacienteModel->update($id, $data);

        return redirect()->to('/paghome')->with('success', 'Paciente atualizado com sucesso!');
    }
}

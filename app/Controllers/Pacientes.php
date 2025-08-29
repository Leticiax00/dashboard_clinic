<?php

namespace App\Controllers;
use App\Models\PacienteModel;

class Pacientes extends BaseController
{
    public function salvar()
    {
        $pacienteModel = new PacienteModel();

        // Verifica se foi enviado um arquivo
        $laudoUrl = null;
        $file = $this->request->getFile('arquivo');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $laudoUrl = $file->store('laudos'); // salva em writable/uploads/laudos
        }

        $data = [
            'nome'              => $this->request->getPost('nome'),
            'data_nascimento'   => $this->request->getPost('data_nasc'), // cuidado: no Model está "data_nascimento"
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

    // 🔹 Novo método para listar pacientes
    public function index()
    {
        $pacienteModel = new PacienteModel();
        $data['paghome'] = $pacienteModel->findAll();

        return view('paghome', $data);
    }
}

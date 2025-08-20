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
            'data_nasc'         => $this->request->getPost('data_nasc'),
            'cpf'               => $this->request->getPost('cpf'),
            'rg'                => $this->request->getPost('rg'),
            'endereco'          => $this->request->getPost('endereco'),
            'conv_med'          => $this->request->getPost('conv_med'),
            'grupo_pacientes'   => $this->request->getPost('opcao'), // grupo selecionado
            'sexo'              => $this->request->getPost('opcao'), // sexo selecionado
            'medico_solicitante'=> $this->request->getPost('opcao'), // médico selecionado
            'laudo_url'         => $laudoUrl,
            'observacoes'       => $this->request->getPost('observacoes'),
            'data_cadastro'     => date('Y-m-d H:i:s')
        ];

        $pacienteModel->insert($data);

        return redirect()->back()->with('success', 'Paciente cadastrado com sucesso!');
    }
}

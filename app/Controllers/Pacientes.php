<?php

namespace App\Controllers;

use App\Models\PacientesModel;
use CodeIgniter\Controller;

class Pacientes extends BaseController
{
    public function index()
    {
        $model = new PacientesModel();
        $data['pacientes'] = $model->findAll();
        return view('paghome', $data);
    }

    public function salvar()
    {
        $model = new PacientesModel();

        $data = [
            'nome' => $this->request->getPost('nome'),
            'data_nascimento' => $this->request->getPost('data_nasc'),
            'endereco' => $this->request->getPost('endereco'),
            'rg' => $this->request->getPost('rg'),
            'cpf' => $this->request->getPost('cpf'),
            'convenio_medico' => $this->request->getPost('conv_med'),
            'grupo_pacientes' => $this->request->getPost('grupo_pacientes'),
            'sexo' => $this->request->getPost('sexo'),
            'medico_solicitante' => $this->request->getPost('medico_solicitante'),
            'laudo_url' => '', // pode ajustar upload depois
            'observacoes' => $this->request->getPost('observacoes'),
            'data_cadastro' => date('Y-m-d H:i:s')
        ];

        $model->save($data);

        return redirect()->to(base_url('pacientes'));
    }

    public function detalhes($id)
    {
        $model = new PacienteModel();
        $data['paciente'] = $model->find($id);

        if (!$data['paciente']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Paciente não encontrado');
        }

        return view('pacientes_detalhes', $data);
    }

    public function editar($id)
    {
        $model = new PacienteModel();
        $data['paciente'] = $model->find($id);

        if (!$data['paciente']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Paciente não encontrado');
        }

        return view('editar_paciente', $data);
    }

    public function atualizar($id)
    {
        $model = new PacienteModel();

        $data = [
            'nome' => $this->request->getPost('nome'),
            'data_nascimento' => $this->request->getPost('data_nascimento'),
            'endereco' => $this->request->getPost('endereco'),
            'rg' => $this->request->getPost('rg'),
            'cpf' => $this->request->getPost('cpf'),
            'convenio_medico' => $this->request->getPost('convenio_medico'),
            'grupo_pacientes' => $this->request->getPost('grupo_pacientes'),
            'sexo' => $this->request->getPost('sexo'),
            'medico_solicitante' => $this->request->getPost('medico_solicitante'),
            'observacoes' => $this->request->getPost('observacoes'),
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('pacientes'));
    }

    public function excluir($id)
    {
        $model = new PacienteModel();
        $model->delete($id);
        return redirect()->to(base_url('pacientes'));
    }

    public function adicionar_consulta($id)
{
    $pacienteModel = new \App\Models\PacientesModel();
    $paciente = $pacienteModel->find($id);

    if (!$paciente) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Paciente não encontrado');
    }

    return view('consultas/form', ['paciente' => $paciente]);
}


}

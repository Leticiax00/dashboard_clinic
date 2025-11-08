<?php

namespace App\Controllers;

<<<<<<< HEAD
use App\Models\ConsultaModel;
use App\Models\PacientesModel;
use CodeIgniter\Controller;

class Consultas extends Controller
{
    public function index()
    {
        $consultaModel = new ConsultaModel();
        $pacienteModel = new PacientesModel();

        // Busca todas as consultas com dados do paciente
        $consultas = $consultaModel
            ->select('consultas.*, pacientes.nome as nome_paciente')
            ->join('pacientes', 'pacientes.id = consultas.paciente_id')
            ->orderBy('data_consulta', 'ASC')
            ->findAll();

        return view('consultas', ['consultas' => $consultas]);
    }

    // Criar consulta a partir de um paciente já existente
    public function criar($paciente_id)
    {
        $pacienteModel = new PacientesModel();
        $paciente = $pacienteModel->find($paciente_id);

        if (!$paciente) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Paciente não encontrado');
        }

        $dataSelecionada = $this->request->getGet('data');

        return view('consultas/form', [
            'paciente' => $paciente,
            'dataSelecionada' => $dataSelecionada
        ]);
    }

    public function salvar()
    {
        $consultaModel = new ConsultaModel();

        $data = [
            'paciente_id' => $this->request->getPost('paciente_id'),
            'data_consulta' => $this->request->getPost('data_consulta'),
            'hora_consulta' => $this->request->getPost('hora_consulta'),
            'motivo' => $this->request->getPost('motivo'),
            'observacoes' => $this->request->getPost('observacoes'),
            'status' => 'agendada'
        ];

        $consultaModel->insert($data);

        return redirect()->to('/consultas')->with('sucesso', 'Consulta agendada com sucesso!');
    }
}
=======
class Consultas extends BaseController
{
    public function index()
    {
        return view('consultas'); 
    }
}
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7

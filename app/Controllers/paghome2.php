<?php

namespace App\Controllers;

use App\Models\PacientesModel; 

class Paghome2 extends BaseController
{
    public function index()
    {
        $pacienteModel = new PacientesModel();
        $dados['pacientes'] = $pacienteModel->findAll();

        return view('paghome2', $dados);
    }
}
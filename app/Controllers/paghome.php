<?php

namespace App\Controllers;

use App\Models\PacienteModel;

class Paghome extends BaseController
{
    public function index()
    {
        $pacienteModel = new PacienteModel();

        // Puxa todos os registros
        $data['pacientes'] = $pacienteModel->findAll();

        return view('paghome', $data);
    }
}

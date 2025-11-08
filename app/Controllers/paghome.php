<?php

namespace App\Controllers;

use App\Models\PacientesModel;

class Paghome extends BaseController
{
    public function index()
    {
        $pacienteModel = new PacientesModel();

        // Puxa todos os registros
        $data['pacientes'] = $pacienteModel->findAll();

        return view('paghome', $data);
    }
}

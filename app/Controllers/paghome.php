<?php

namespace App\Controllers;

<<<<<<< HEAD
use App\Models\PacientesModel;
=======
use App\Models\PacienteModel;
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7

class Paghome extends BaseController
{
    public function index()
    {
<<<<<<< HEAD
        $pacienteModel = new PacientesModel();
=======
        $pacienteModel = new PacienteModel();
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7

        // Puxa todos os registros
        $data['pacientes'] = $pacienteModel->findAll();

        return view('paghome', $data);
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class PacientesModel extends Model
{
    protected $table = 'pacientes';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nome', 'data_nascimento', 'endereco', 'rg', 'cpf',
        'convenio_medico', 'grupo_pacientes', 'sexo',
        'medico_solicitante', 'laudo_url', 'observacoes', 'data_cadastro'
    ];
}

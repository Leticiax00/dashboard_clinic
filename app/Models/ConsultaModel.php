<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsultaModel extends Model
{
    protected $table = 'consultas';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'paciente_id',
        'data_consulta',
        'hora_consulta',
        'motivo',
        'observacoes',
        'status'
    ];
}

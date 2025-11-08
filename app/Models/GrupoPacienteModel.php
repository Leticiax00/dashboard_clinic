<?php namespace App\Models;

use CodeIgniter\Model;

class GrupoPacienteModel extends Model
{
    protected $table = 'grupos_pacientes'; // Nome exato da sua tabela no banco
    protected $primaryKey = 'id';
    
    // CRÍTICO PARA INSERÇÃO: Define quais campos podem ser escritos.
    protected $allowedFields = ['nome_grupo']; 

    /**
     * Retorna todos os grupos de pacientes cadastrados.
     * Necessário para popular o <select> na view de cadastro de paciente.
     */
    public function getAllGroups()
    {
        return $this->findAll();
    }
}
<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'usuarios';
protected $primaryKey = 'id';
protected $returnType = 'array';

protected $allowedFields = ['nome', 'email', 'senha', 'telefone', 'reset_token', 'token_expiry'];

    // --- Criptografia da Senha ---
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['senha'])) {
            // Criptografa a senha antes de salvar no banco
            $data['data']['senha'] = password_hash($data['data']['senha'], PASSWORD_DEFAULT);
        }
        return $data;
    }
} 
<?php
namespace App\Controllers;

use App\Models\GrupoPacienteModel; // Importa o Model de Grupos
use CodeIgniter\Controller;

class PacienteController extends Controller
{
    /**
     * Carrega a view de cadastro de paciente e popula o SELECT de Grupos.
     */
    public function index() 
    {
        // 1. Instanciar o Model de Grupos
        $grupoModel = new GrupoPacienteModel();
        
        // 2. Buscar todos os grupos no banco
        $grupos = $grupoModel->getAllGroups(); 
        
        // Removida a linha dd($grupos); para permitir que a View carregue.
        
        // 3. Preparar o array de dados para a View
        $data = [
            // CRÍTICO: O nome da chave 'grupos_pacientes' deve ser usado na View
            'grupos_pacientes' => $grupos,
        ];
        
        // 4. Carregar a View 'cadastro_pac.php', passando os dados
        return view('cadastro_pac', $data);
    }
}

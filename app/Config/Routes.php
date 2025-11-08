<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
<<<<<<< HEAD
$routes->get('/', function () {
    return view('login/index');
});

// Rotas principais
=======
$routes->get('/', 'Home::index');
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7
$routes->get('inicial', 'Inicial');
$routes->get('cadastro_pac', to: 'Cadastro_pac');
$routes->get('paghome', 'Paghome');
$routes->get('group_pac','Group_pac');
$routes->get('medico_solicitante','Medico_solicitante');
$routes->get('consultas', 'Consultas');
<<<<<<< HEAD
$routes->get('pacientes', 'Pacientes::index');
$routes->get('paghome2', 'Paghome2');


// CadastroPac
$routes->get('pacientes/detalhes/(:num)', 'Pacientes::detalhes/$1');
$routes->get('pacientes/editar/(:num)', 'Pacientes::editar/$1');
$routes->post('pacientes/editar/(:num)', 'Pacientes::atualizar/$1');
$routes->get('pacientes/excluir/(:num)', 'Pacientes::excluir/$1');
$routes->post('pacientes/salvar', 'Pacientes::salvar');

// Tela de Login e Autenticação
$routes->get('login', 'AuthController::login'); // Exibe o formulário de login
$routes->post('login', 'AuthController::authenticate');   // Processa a submissão do formulário
$routes->get('logout', 'AuthController::logout');         // Logout
// Rotas de Cadastro (Assumindo que você as implementará a seguir)
$routes->get('cadastro', 'AuthController::register');
$routes->post('cadastro/salvar', 'AuthController::save');
// Rota de Área Restrita (você precisará criar o Controller e View de Dashboard)
$routes->get('dashboard', 'DashboardController::index', ['filter' => 'auth']); // Exemplo de área protegida

// Esqueci minha senha 
$routes->get('senha', 'AuthController::forgotPassword'); // 1. Exibe a tela "Esqueci minha senha"
$routes->post('senha/selecionar-metodo', 'AuthController::selectMethod'); // 2. Processa a escolha (Email/Celular)
$routes->get('senha/resetar/(:any)', 'AuthController::resetPassword/$1'); // 3. Tela de Nova Senha (com o Token na URL)
$routes->post('senha/atualizar', 'AuthController::updatePassword');    // 4. Processa a atualização da senha

$routes->get('senha/enviar-codigo/(:num)/(:alpha)', 'AuthController::sendCode/$1/$2'); // Envia o código via Email ou SMS


// Grupo de Pacientes 
$routes->get('cadastro/paciente', 'PacienteController::index');
$routes->post('grupos/salvar', 'GrupoController::salvarGrupo');

// Cadastro de Exames Oferecidos
$routes->get('exames_oferecidos', 'ExamesOferecidos::index');

// Consultas 
$routes->get('pacientes/adicionar_consulta/(:num)', 'Consultas::criar/$1');
$routes->post('consultas/salvar', 'Consultas::salvar');

$routes->get('consultas', 'Consultas::index');
$routes->get('consultas/criar/(:num)', 'Consultas::criar/$1');
=======
$routes->post('pacientes/salvar', 'Pacientes::salvar');
$routes->get('pacientes', 'Pacientes::index'); 
$routes->post('pacientes/salvar', 'Pacientes::salvar'); 
$routes->get('pacientes/editar/(:num)', 'Pacientes::editar/$1');
$routes->post('pacientes/atualizar/(:num)', 'Pacientes::atualizar/$1');
>>>>>>> 8b77ee2d72a2e04167a97232eb6ef5ed11b6d0b7



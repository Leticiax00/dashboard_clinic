<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('cadastro_pac', to: 'Cadastro_pac');
$routes->get('paghome', 'Paghome');



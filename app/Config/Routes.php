<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'frontend\Home::index');
$routes->get('/login', 'login::login');

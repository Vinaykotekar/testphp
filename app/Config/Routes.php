<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->post('/handleLogin', 'Home::handleLogin');
$routes->get('/welcome', 'Home::welcome');
$routes->get('/register', 'Home::register');
$routes->post('/handleRegister', 'Home::handleRegister');
$routes->get('/logout', 'Home::logout');

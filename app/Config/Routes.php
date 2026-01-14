<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('LoginController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);

// Login routes
$routes->get('/', 'LoginController::index');
$routes->post('login', 'LoginController::attemptLogin');
$routes->get('logout', 'LoginController::logout');

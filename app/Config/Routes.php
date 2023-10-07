<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('/product', 'MainController::product');
$routes->get('/about', 'MainController::about');
$routes->get('/services', 'MainController::services');
$routes->get('/contact', 'MainController::contact');


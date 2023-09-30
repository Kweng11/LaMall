<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/productDetail','ProductController::index');
$routes->get('/shop', 'ProductController::shop');
$routes->get('/admins', 'AdminController::admin');

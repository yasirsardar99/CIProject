<?php

use CodeIgniter\Router\RouteCollection;



/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('/shops', 'ShopController::index');
$routes->match(['get', 'post'], '/edit-user', 'Home::editUser');
$routes->get('/products', 'ShopController::product');

<?php

use CodeIgniter\Router\RouteCollection;



/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('/create-user', 'Home::create');
$routes->post('/store-user', 'Home::store');
$routes->get('/shops', 'ShopController::index');
$routes->match(['get', 'post'], '/edit-user/(:any)', 'Home::editUser/$1');
$routes->post('/update-user/(:any)', 'Home::update/$1');
$routes->get('/delete-user/(:any)','Home::delete/$1' );
$routes->get('/products', 'ShopController::product');

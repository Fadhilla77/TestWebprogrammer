<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Products::index');
$routes->group('auth', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('login', 'Auth::login');
    $routes->post('loginAttempt', 'Auth::loginAttempt');
    $routes->get('logout', 'Auth::logout');
    $routes->post('processLogin', 'Auth::processLogin');
});
$routes->get('products', 'Products::index');
$routes->get('products/create', 'Products::create');
$routes->post('products/store', 'Products::store');

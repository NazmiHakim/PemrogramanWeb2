<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::beranda');

$routes->get('/beranda', 'Home::beranda');

// Login routes
$routes->get('/login', 'Auth::login');
$routes->post('/login/process', 'Auth::processLogin');
$routes->get('/logout', 'Auth::logout');

// nanti tambah route CRUD buku di sini...
$routes->get('/buku', 'Buku::index');
$routes->get('/buku/create', 'Buku::create');
$routes->post('/buku/store', 'Buku::store');
$routes->get('/buku/edit/(:num)', 'Buku::edit/$1');
$routes->post('/buku/update/(:num)', 'Buku::update/$1');
$routes->get('/buku/delete/(:num)', 'Buku::delete/$1');

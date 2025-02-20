<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AnmarController::index');
$routes->get('/home', 'AnmarController::home');
$routes->get('/tentang', 'AnmarController::tentang');
$routes->get('/legalitas', 'AnmarController::legalitas');
$routes->get('/layanan', 'AnmarController::layanan');
$routes->get('/paket', 'AnmarController::paket');
$routes->get('/rekening', 'AnmarController::rekening');
$routes->get('/kontak', 'AnmarController::kontak');
$routes->get('/kantor', 'AnmarController::kantor');
$routes->get('/sambutan', 'AnmarController::sambutan');
$routes->get('/galeri', 'AnmarController::galeri');


$routes->get('/admin', 'LoginController::index');
$routes->post('/admin', 'LoginController::login');
$routes->get('/admin/logout', 'LoginController::logout');

$routes->group('/admin', ['filter' => 'auth'], function($routes) {
    $routes->get('dashboard', 'DashboardController::index');
    $routes->get('paket', 'PaketController::index');
    $routes->get('paket/create', 'PaketController::create');
    $routes->post('paket/save', 'PaketController::save');
    $routes->get('paket/edit/(:num)', 'PaketController::edit/$1');
    $routes->put('paket/update/(:num)', 'PaketController::update/$1');
    $routes->delete('paket/delete/(:num)', 'PaketController::delete/$1');
    $routes->get('pengaturan', 'PengaturanController::index');
    $routes->put('pengaturan/update', 'PengaturanController::update');
    $routes->get('ubah-password', 'UbahPasswordController::index');
    $routes->post('ubah-password/change', 'UbahPasswordController::change_password');
});

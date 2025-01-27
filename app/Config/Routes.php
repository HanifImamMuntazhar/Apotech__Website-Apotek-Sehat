<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route untuk halaman utama
$routes->get('/', 'Apotech::index'); // Halaman utama

// Routes for user login and dashboard
$routes->group('auth', function($routes) {
    $routes->post('userAuth/processLogin', 'Auth\UserAuth::processLogin'); // Route for POST login
});

// Routes for user
$routes->group('user', function ($routes) {
    $routes->get('login', 'Auth\UserAuth::login'); // Route for user login page
    $routes->get('dashboard', 'Auth\UserAuth::dashboard'); // Route for user dashboard
    $routes->get('logout', 'Auth\UserAuth::logout'); // Route for user logout
});


// Routes untuk admin
$routes->group('admin', function ($routes) {
    $routes->get('login', 'Auth\AdminAuth::login'); // Halaman login admin
    $routes->post('processLogin', 'Auth\AdminAuth::processLogin'); // Proses login admin
    $routes->get('dashboard', 'AdminController::dashboard'); // Dashboard admin
    $routes->get('logout', 'Auth\AdminAuth::logout'); // Logout admin
    $routes->get('chart', 'AdminController::chart'); // Halaman chart admin

    // CRUD Obat
    $routes->post('addObat', 'AdminController::addObat'); // Tambah obat
    $routes->get('getObat/(:num)', 'AdminController::getObat/$1'); // Dapatkan detail obat berdasarkan ID
    $routes->post('updateObat/(:num)', 'AdminController::updateObat/$1'); // Update obat berdasarkan ID
    $routes->post('deleteObat/(:num)', 'AdminController::deleteObat/$1'); // Hapus obat berdasarkan ID
});

// Route untuk halaman daftar obat
$routes->get('/daftar-obat', 'ObatController::index'); // Halaman yang menampilkan seluruh daftar obat

// Routes untuk pie
$routes->get('pie/getChartData', 'Pie::getChartData');

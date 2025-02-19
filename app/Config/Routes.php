<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'BerandaController::index');
$routes->get('/beranda', 'BerandaController::index');

$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/berita', 'BeritaController::index');
$routes->get('/isi_berita', 'BeritaController::create');
$routes->post('/berita_store', 'BeritaController::store');
$routes->get('edit_berita/(:num)', 'BeritaController::edit/$1');
$routes->post('update_berita/(:num)', 'BeritaController::update/$1');
$routes->get('delete_berita/(:num)', 'BeritaController::delete/$1');

$routes->get('/user', 'UserController::index');
$routes->get('isi_user', 'UserController::create');
$routes->post('user_store', 'UserController::store');
$routes->get('edit_user/(:num)', 'UserController::edit/$1');
$routes->post('update_user/(:num)', 'UserController::update/$1');
$routes->get('delete_user/(:num)', 'UserController::delete/$1');

    $routes->get('/pengumuman', 'PengumumanController::index');
    $routes->get('isi_pengumuman', 'PengumumanController::create');
    $routes->post('pengumuman_store', 'PengumumanController::store');
    $routes->get('edit_pengumuman/(:num)', 'PengumumanController::edit/$1');
    $routes->post('update_pengumuman/(:num)', 'PengumumanController::update/$1');
    $routes->get('delete_pengumuman/(:num)', 'PengumumanController::delete/$1');


//semua routing yg hanya bisa diakses setelah login dikelompokkan  ke dalam grup bernama //admin 

$routes->get('/', 'BerandaController::index');
$routes->get('/beranda', 'BerandaController::index');


$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('', 'BarangController::index');
    $routes->get('/barang', 'BarangController::barang');
    $routes->get('isi_barang', 'BarangController::create');
    $routes->post('barang_store', 'BarangController::barang_store');
    $routes->get('admin/upload_success', 'BarangController::create_barang');
    $routes->get('edit_barang/(:num)', 'BarangController::edit/$1');
    $routes->post('update_barang/(:num)', 'BarangController::update/$1');
    $routes->get('delete_barang/(:num)', 'BarangController::delete/$1');

    $routes->get('admin/edit/(:num)', 'BarangController::edit/$1');
$routes->post('admin/update/(:num)', 'BarangController::update/$1');

    
    $routes->get('', 'UserController::index');
    $routes->get('isi_user', 'UserController::create');
    $routes->post('user_store', 'UserController::store');
    $routes->get('edit_user/(:num)', 'UserController::edit/$1');
    $routes->post('update_user/(:num)', 'UserController::update/$1');
    $routes->get('delete_user/(:num)', 'UserController::delete/$1');

    $routes->get('/admin/upload', 'UploadController::upload');
    $routes->post('/admin/upload', 'UploadController::upload');
    $routes->get('/admin/upload_success', 'UploadController::upload_success');


    $routes->get('ganti_password', 'AuthController::ganti_password');
    $routes->post('proses_ganti_password', 'AuthController::proses_ganti_password');

    $routes->get('detail/(:num)', 'BerandaController::detail/$1');
    
    });
    
    //route dibawah ini tidak harus login
    $routes->get('login', 'AuthController::login');
    $routes->post('login', 'AuthController::login');
    $routes->get('logout', 'AuthController::logout');
    
    $routes->get('register_user', 'AuthController::form_register');
    $routes->post('proses_register_user', 'AuthController::proses_register_user');
    $routes->get('activate/(:any)', 'AuthController::activate/$1');
    
    $routes->get('lupa_password', 'AuthController::lupa_password');
    $routes->post('proses_lupa_password', 'AuthController::proses_lupa_password');

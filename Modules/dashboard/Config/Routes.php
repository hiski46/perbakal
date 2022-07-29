<?php

$routes->group('dashboard', ['namespace' => 'Modules\dashboard\Controllers'], function ($routes) {
    $routes->get('/', 'Dashboard::index');
    $routes->get('(:any)', 'Dashboard::$1');
    // $routes->post('procurement', 'MaterialRequest::index', ['namespace' => 'Procurement\Controllers']);
    // $routes->post('procurement/(:any)', 'MaterialRequest::$1', ['namespace' => 'Procurement\Controllers']);
    // $routes->add('procurement/(:any)', 'MaterialRequest::$1', ['namespace' => 'Procurement\Controllers']);
    // $routes->delete('procurement/(:any)', 'MaterialRequest::$1', ['namespace' => 'Procurement\Controllers']);
    // $routes->put('procurement/(:any)', 'MaterialRequest::$1', ['namespace' => 'Procurement\Controllers']);
    // $routes->get('procurement_settings', 'Procurement_settings::index', ['namespace' => 'Procurement\Controllers']);
});
$routes->group('baner', ['namespace' => 'Modules\dashboard\Controllers'], function ($routes) {
    $routes->get('/', 'Baner::index');
    $routes->get('(:any)', 'Baner::$1');
    $routes->post('/', 'Baner::index');
    $routes->post('(:any)', 'Baner::$1');
    $routes->delete('(:any)', 'Baner::$1');
});
$routes->group('kontak_alamat', ['namespace' => 'Modules\dashboard\Controllers'], function ($routes) {
    $routes->get('/', 'KontakAlamat::index');
    $routes->get('(:any)', 'KontakAlamat::$1');
    $routes->post('/', 'KontakAlamat::index');
    $routes->post('(:any)', 'KontakAlamat::$1');
    $routes->delete('(:any)', 'KontakAlamat::$1');
});
$routes->group('organisasi', ['namespace' => 'Modules\dashboard\Controllers'], function ($routes) {
    $routes->get('(:any)', 'Organisasi::$1');
    $routes->post('(:any)', 'Organisasi::$1');
    $routes->delete('(:any)', 'Organisasi::$1');
});
$routes->group('pengurus', ['namespace' => 'Modules\dashboard\Controllers'], function ($routes) {
    $routes->get('/', 'Pengurus::index');
    $routes->get('(:any)', 'Pengurus::$1');
    $routes->post('/', 'Pengurus::index');
    $routes->post('(:any)', 'Pengurus::$1');
    $routes->delete('(:any)', 'Pengurus::$1');
});
$routes->group('berita', ['namespace' => 'Modules\dashboard\Controllers'], function ($routes) {
    $routes->get('/', 'Berita::index');
    $routes->get('(:any)', 'Berita::$1');
    $routes->post('/', 'Berita::index');
    $routes->post('(:any)', 'Berita::$1');
    $routes->delete('(:any)', 'Berita::$1');
});

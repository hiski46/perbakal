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
});

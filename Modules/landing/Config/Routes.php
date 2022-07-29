<?php

$routes->group('landing_page', ['namespace' => 'Modules\landing\Controllers'], function ($routes) {
    $routes->get('/', 'Home::index');
    $routes->get('(:any)', 'Home::$1');
    // $routes->post('procurement', 'MaterialRequest::index', ['namespace' => 'Procurement\Controllers']);
    // $routes->post('procurement/(:any)', 'MaterialRequest::$1', ['namespace' => 'Procurement\Controllers']);
    // $routes->add('procurement/(:any)', 'MaterialRequest::$1', ['namespace' => 'Procurement\Controllers']);
    // $routes->delete('procurement/(:any)', 'MaterialRequest::$1', ['namespace' => 'Procurement\Controllers']);
    // $routes->put('procurement/(:any)', 'MaterialRequest::$1', ['namespace' => 'Procurement\Controllers']);
    // $routes->get('procurement_settings', 'Procurement_settings::index', ['namespace' => 'Procurement\Controllers']);
});

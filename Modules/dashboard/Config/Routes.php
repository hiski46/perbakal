<?php

$routes->group('dashboard', ['namespace' => 'Modules\dashboard\Controllers'], function ($routes) {
    $routes->get('/', 'Dashboard::index');
});

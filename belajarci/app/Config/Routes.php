<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('latihanpertama', 'LatihanPertama::index');
$routes->get('latihanpertama/lihat', 'LatihanPertama::lihat');
$routes->get('latihanpertama', 'LatihanPertama::index');
$routes->get('latihanpertama/subdetail', 'Latihanpertama::subdetail');
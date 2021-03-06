<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Main::index'); // untuk Main

// kelompok INPUT
$routes->get('/input', 'Main::input'); // untuk ke layar input
$routes->get('/input/get-form', 'Main::getForm');
$routes->post('/input/save', 'Main::saveForm');
$routes->post('/fetch_tgl', 'Dynamic::fetch');

// Kelompok Monitor
$routes->get('/monitor', 'Main::monitor'); // untuk ke layar monitor
$routes->get('/monitor/list', 'Main::watch');
$routes->get('/sta/(:segment)/per/(:segment)/ming/(:segment)', 'Main::detail/$1/$2/$3');

$routes->get('/about', 'Main::about'); // untuk menampilkan halaman about

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

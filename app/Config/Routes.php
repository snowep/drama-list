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
$routes->get('/', 'Home::index');

$routes->get('/person/actor', 'Person::actorIndex');

$routes->get('/drama/add', 'Drama::dramaAdd');
$routes->add('/drama/save', 'Drama::dramaSave');
$routes->get('/drama/writer/add/(:any)', 'Drama::dramaWriterAdd/$1');
$routes->add('/drama/writer/save', 'Drama::dramaWriterSave');
$routes->get('/drama/(:any)', 'Drama::dramaDetails/$1');
// $routes->get('/drama/edit-drama/(:any)', 'Drama::editDrama/$1');
// $routes->get('/drama/add-cast/(:any)', 'Drama::addCast/$1');
// $routes->get('/drama/save-cast/(:any)', 'Drama::saveCast/$1');
// $routes->delete('/drama/(:num)', 'Drama::delete/$1');

$routes->get('/person/actor/add', 'Person::actorAdd');
// $routes->add('/person/actor/save-actor', 'Person::saveActor');
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Dashboard::index');
$routes->get('/pages/chartjs', 'Pages::chartjs');
$routes->get('/pages/forms', 'Pages::forms');
$routes->get('/pages/icons', 'Pages::icons');
$routes->get('/pages/blank-page', 'Pages::samplesBlankPage');
$routes->get('/pages/error-404', 'Pages::samplesError404');
$routes->get('/pages/error-500', 'Pages::samplesError500');
$routes->get('/pages/login', 'Pages::samplesLogin');
$routes->get('/pages/register', 'Pages::samplesRegister');
$routes->get('/pages/tables', 'Pages::tables');
$routes->get('/pages/button', 'Pages::uiFeaturesButton');
$routes->get('/pages/typography', 'Pages::uiFeaturesTypography');

/*
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

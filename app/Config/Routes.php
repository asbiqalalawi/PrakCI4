<<<<<<< HEAD
<?php

namespace Config;
=======
<?php namespace Config;
>>>>>>> df3fea4917a300414f062e43420095d5216b10d6

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
<<<<<<< HEAD
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
=======
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
>>>>>>> df3fea4917a300414f062e43420095d5216b10d6
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
$routes->get('/index/(:any)/(:num)', 'Helloworld::index/$1/$2');
$routes->get('/show', 'Helloworld::show');
<<<<<<< HEAD
$routes->get('/asbiq', function () {
=======
$routes->get('/asbiq', function(){
>>>>>>> df3fea4917a300414f062e43420095d5216b10d6
	echo view('mahasiswa/header');
	echo view('mahasiswa/index');
	echo view('mahasiswa/footer');
});
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
<<<<<<< HEAD
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
=======
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
>>>>>>> df3fea4917a300414f062e43420095d5216b10d6
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

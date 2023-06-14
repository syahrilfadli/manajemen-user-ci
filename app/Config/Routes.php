<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// $routes->get('/', 'Users\Users::index');
// Route untuk menampilkan daftar user
$routes->get('/', 'Users::index');

// Route untuk menampilkan halaman tambah user
$routes->get('users/create', 'Users::create');

// Route untuk menyimpan data user baru
$routes->post('users/store', 'Users::store');
$routes->get('users/edit/(:uuid)', 'Users::edit/$1', ['as' => 'user_edit']); // Rute untuk halaman edit dengan UUID dinamis


// // Route untuk menampilkan halaman edit user berdasarkan ID
// $routes->get('users/edit/(:uuid)', 'Users::edit/$1');

// // Route untuk mengupdate data user berdasarkan ID
$routes->post('users/update/(:uuid)', 'Users::update/$1', ['as' => 'user_update']);

// // Route untuk menghapus user berdasarkan ID
$routes->get('users/delete/(:uuid)', 'Users::delete/$1', ['as' => 'user_delete']);


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

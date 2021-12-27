<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Investors');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/investors', 'Investors::index');
$routes->get('/investors/([0-9]+)', 'Investors::index_with_id/$1');

$routes->get('/investors/post/editor/([0-9]+)', 'Investors::content_editor/$1');
$routes->get('/investors/menu/add/', 'Investors::menu_add');
$routes->post('/investors/menu/add/', 'Investors::menu_add_action');
$routes->get('/investors/menu/edit/([0-9]+)', 'Investors::menu_edit/$1');
$routes->post('/investors/menu/edit', 'Investors::menu_edit_action');
$routes->get('/investors/menu/delete/([0-9]+)', 'Investors::menu_delete_action/$1');
$routes->get('/investors/menu/', 'Investors::menu_list');
$routes->get('/investors/content/([0-9]+)', 'Investors::content_list/$1');
$routes->get('/investors/content/([0-9]+)/add', 'Investors::content_editor/$1');
$routes->post('/investors/content/add', 'Investors::content_editor_action/$1');
$routes->get('/investors/content/edit/([0-9]+)', 'Investors::content_editor_edit/$1');
$routes->post('/investors/content/edit', 'Investors::content_editor_edit_action');
$routes->get('/investors/content/delete/([0-9]+)', 'Investors::content_delete/$1');
$routes->get('/investors/content/([0-9]+)/add/file', 'Investors::content_file/$1');
$routes->post('/investors/content/add/file', 'Investors::content_file_action');
$routes->get('/investors/content/file/download/([0-9]+)', 'Investors::download_file/$1');
$routes->get('/investors/post/([0-9]+)', 'Investors::post_without_year/$1');
$routes->get('/investors/post/([0-9]+)/([0-9]+)', 'Investors::post_year/$1/$2');

$routes->get('/maps', 'Maps::index');
$routes->post('/maps/all', 'Maps::getAll');
$routes->post('/maps/(:any)', 'Maps::getCity/$1');

$routes->get('/careers', 'Career::index');
$routes->get('/careers/([0-9]+)', 'Career::detail/$1');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

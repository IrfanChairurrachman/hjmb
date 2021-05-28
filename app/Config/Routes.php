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
$routes->setDefaultController('Home');
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
$routes->get('/', 'Home::index');


$routes->get('/produk', 'Page::produk');
$routes->get('/berita', 'Page::berita');
$routes->get('/service', 'Page::service');
// $routes->get('/berita/{id}', 'Page::berita{id}');
$routes->get('/artikel', 'Page::artikel');
// $routes->get('/artikel/{id}', 'Page::artikel{id}');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');

$routes->get('berita/(:num)/(:any)', 'Page::berita/$1');
$routes->get('artikel/(:num)/(:any)', 'Page::artikel/$1');

// LOGIN ROUTE
$routes->get('login', 'Login::index');
$routes->post('login/proses', 'Login::proses');

// ADMIN ROUTE
$routes->get('admin', 'Home::admin', ['filter' => 'ceklogin']);
$routes->get('admin/info/edit/(:num)', 'Home::info_edit/$1', ['filter' => 'ceklogin']);
$routes->post('admin/edit/update', 'Home::info_update', ['filter' => 'ceklogin']);


$routes->get('admin/category', 'Category::index', ['filter' => 'ceklogin']);
$routes->get('admin/category/create', 'Category::create', ['filter' => 'ceklogin']);
$routes->post('admin/category/create', 'Category::store', ['filter' => 'ceklogin']);
$routes->get('admin/category/edit/(:num)', 'Category::edit/$1', ['filter' => 'ceklogin']);
$routes->post('admin/category/update', 'Category::update', ['filter' => 'ceklogin']);
$routes->get('admin/category/delete/(:num)', 'Category::delete/$1', ['filter' => 'ceklogin']);

$routes->get('admin/product', 'Product::index', ['filter' => 'ceklogin']);
$routes->get('admin/product/create', 'Product::create', ['filter' => 'ceklogin']);
$routes->post('admin/product/store', 'Product::store', ['filter' => 'ceklogin']);
$routes->get('admin/product/show/(:num)', 'Product::show/$1', ['filter' => 'ceklogin']);
$routes->get('admin/product/edit/(:num)', 'Product::edit/$1', ['filter' => 'ceklogin']);
$routes->post('admin/product/update/(:num)', 'Product::update', ['filter' => 'ceklogin']);
$routes->get('admin/product/delete/(:num)', 'Product::delete/$1', ['filter' => 'ceklogin']);

$routes->get('admin/news', 'News::index', ['filter' => 'ceklogin']);
$routes->get('admin/news/show/(:num)', 'News::show/$1', ['filter' => 'ceklogin']);
$routes->get('admin/news/create', 'News::create', ['filter' => 'ceklogin']);
$routes->post('admin/news/store', 'News::store', ['filter' => 'ceklogin']);
$routes->get('admin/news/edit/(:num)', 'News::edit/$1', ['filter' => 'ceklogin']);
$routes->post('admin/news/update/(:num)', 'News::update', ['filter' => 'ceklogin']);
$routes->get('admin/news/delete/(:num)', 'News::delete/$1', ['filter' => 'ceklogin']);

$routes->get('admin/article', 'Article::index', ['filter' => 'ceklogin']);
$routes->get('admin/article/show/(:num)', 'Article::show/$1', ['filter' => 'ceklogin']);
$routes->get('admin/article/create', 'Article::create', ['filter' => 'ceklogin']);
$routes->post('admin/article/store', 'Article::store', ['filter' => 'ceklogin']);
$routes->get('admin/article/edit/(:num)', 'Article::edit/$1', ['filter' => 'ceklogin']);
$routes->post('admin/article/update/(:num)', 'Article::update', ['filter' => 'ceklogin']);
$routes->get('admin/article/delete/(:num)', 'Article::delete/$1', ['filter' => 'ceklogin']);

$routes->get('admin/feedback', 'Feedback::index', ['filter' => 'ceklogin']);
$routes->get('admin/fb/show/(:num)', 'Feedback::show/$1', ['filter' => 'ceklogin']);
$routes->get('admin/fb/delete/(:num)', 'Feedback::delete/$1', ['filter' => 'ceklogin']);
$routes->post('fb/store', 'Feedback::store');

// $routes->group('admin', ['filter' => 'ceklogin'], function($routes) {
	//     $routes->get('admin', 'Admin::index');
	//     $routes->get('admin/product', 'Admin::product');
	//     $routes->post('admin/news', 'Admin::news');
	// });
	
$routes->get('/logout', 'Login::logout', ['filter' => 'ceklogin']);

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

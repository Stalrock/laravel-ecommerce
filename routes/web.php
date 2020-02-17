<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/////////////ROUTE CLIENT////////////
//*************ROUTE-HOME**********
Route::get('/', 'HomeController@index')->name('home');

//************ROUTE-PRODUIT****************
Route::get('/{sex}', 'ProductsController@index')->name('products.show');
Route::get('/{sex}/{category}', 'ProductsController@category')->name('products.by-category');
Route::get('/{sex}/{category}/{subcategory}', 'ProductsController@subcategory')->name('products.by-subcategory');

//***************ROUTE-PANIER******************


//************ROUTE-CONNEXION****************


//////////////ROUTE ADMIN/////////////////

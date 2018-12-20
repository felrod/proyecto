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

Route::get('/', 'PagesController@home');

Route::get('/aboutus', 'PagesController@aboutUs');

Route::get('/contacts', 'PagesController@contacts');

Route::get('/cart', 'PagesController@cart');

Route::get('/profile', 'PagesController@profile');

Route::get('/editprofile', 'PagesController@editProfile');

Route::get('/news', 'PagesController@news');

Route::get('/offers', 'PagesController@offers');

Route::get('/hotsales', 'PagesController@hotSales');

Route::get('/terms&conds', 'PagesController@termsConditions');

Route::get('/faq', 'PagesController@faq');

Route::get('/signsucces', 'PagesController@signSuccess');

Route::get('/login', 'PagesController@login');

Route::get('/signup', 'PagesController@signUp');

Route::resource('/products', 'ProductsController');

Route::get('/cel', 'PagesController@catCelulares');

Route::get('/airesycalefaccion', 'PagesController@catAire');

Route::get('/cams', 'PagesController@catCamaras');

Route::get('/cocina', 'PagesController@catCocina');

Route::get('/office', 'PagesController@catOficina');

Route::get('/informatica', 'PagesController@catInformatica');

Route::get('/lavado', 'PagesController@catLavado');

Route::get('/gaming', 'PagesController@catGaming');

Route::get('/tv', 'PagesController@catTv');

Route::get('/offices', 'PagesController@offices');

Route::get('/addCart/{id}','ProductsController@addCart');

Auth::routes();

Route::get('/home', 'PagesController@home')->name('home');

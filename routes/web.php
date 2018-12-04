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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'PagesController@home');

Route::get('/aboutus', 'PagesController@aboutUs');

Route::get('/contacts', 'PagesController@contacts');

Route::get('/cart', 'PagesController@cart');

Route::get('/profile', 'PagesController@profile');

Route::get('/editprofile', 'PagesController@editProfile');

Route::get('/news', 'PagesController@news');

Route::get('/offers', 'PagesController@offers');

Route::get('hotsales', 'PagesController@hotSales');

Route::get('/terms&conds', 'PagesController@termsConditions');

Route::get('/faq', 'PagesController@faq');

Route::get('/signsucces', 'PagesController@signSuccess');

Route::get('/login', 'PagesController@login');

Route::get('/signup', 'PagesController@signUp');

Route::get('/products', 'PagesController@products');

Route::get('/productdetail', 'PagesController@productDetails');

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

// Route::get('/cart', 'ProductsController@addCart');

Route::get('/profile', 'PagesController@profile');

Route::get('/editprofile', 'PagesController@editProfile');

Route::get('/news', 'PagesController@news');

Route::get('/offers', 'PagesController@offers');

Route::get('/hotsales', 'PagesController@hotSales');

Route::get('/terms&conditions', 'PagesController@termsConditions');

Route::get('/faq', 'PagesController@faq');

Route::get('/signsucces', 'PagesController@signSuccess');

Route::get('/login', 'PagesController@login');

Route::get('/signup', 'PagesController@signUp');

// route::middleware('auth')->group(function()
// {
// Route::get('/products/create','ProductsController@create')->name('products.create');
// Route::post('/products/create','ProductsController@store')->name('products.store');
//
// Route::delete('/products/{id}','ProductsController@destroy')->name('products.destroy');
//
// Route::get('/products/{id}/edit','ProductsController@edit')->name('products.edit');
// });


Route::get('/products', 'ProductsController@index');
Route::post('/products', 'ProductsController@store')->name('products.store');
Route::get('/products/create', 'ProductsController@create')->name('products.create');
Route::get('/products/{id}', 'ProductsController@show')->name('products.show');
Route::put('/products/{id}', 'ProductsController@update')->name('products.update');
Route::delete('/products/{id}', 'ProductsController@destroy')->name('products.destroy');
Route::get('/products/{id}/edit', 'ProductsController@edit')->name('products.edit');


// Route::resource('/products', 'ProductsController')->except(['create','destroy','edit']);

// Route::resource('/products', 'ProductsController');


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

// Route::get('/addCart/{id}','ProductsController@addCart');

Auth::routes();

Route::get('/home', 'PagesController@home')->name('home');

Route::match(['get', 'post'], '/search', 'productsController@findProduct')->name('product.finder');


Route::get('/add-to-cart/{id}',[

'uses' => 'ProductsController@addToCart',
'as' => 'addtocart'

]);

Route::get('/remove-from-cart/{id}',[

'uses' => 'ProductsController@removefromcart',
'as' => 'removefromcart'

]);
Route::get('shoppingCart',[

'uses' => 'ProductsController@Cart',
'as' => 'shoppingCart'

]);

Route::get('checkout',[

'uses' => 'ProductsController@checkout',
'as' => 'checkout',
 'middleware' =>'auth'
]);

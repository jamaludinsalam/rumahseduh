<?php

use function foo\func;
use Symfony\Component\HttpKernel\Fragment\RoutableFragmentRenderer;

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
    return view('welcome');
});


Route::resource('menu', 'MenuController');
Route::get('/', 'HomeController@index')->name('home');

// Route::get('/category', 'CategoryController@index')->name('admin.category');
// Route::get('/product', 'ProductController@index')->name('admin.product')->middleware('admin');
Route::view('/frontt', 'admin.layouts.main');
Route::view('/admin2', 'admin.admin');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/beverages', 'HomeController@beverages')->name('beverages');
Route::get('/foods', 'HomeController@foods')->name('foods');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/invoice', 'HomeController@invoice')->name('invoice');
Route::get('shops/{product}', 'HomeController@shops');
Route::resource('/cart', 'CartController');

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth']], function()
{
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
    Route::post('product/image-upload/{product}', 'ProductController@uploadImages')->name('upload.images');
    Route::post('product/image-destroy/{product}', 'ProductController@destroyImages')->name('destroy.images');
    Route::get('/menuadmin', 'MenuController@index');
    Route::view('/order', 'admin.order');
    Route::view('/galleries', 'admin.galleries');
 
});

Route::group(['middleware' => 'auth'], function(){

});


Route::post('/justapage', function() {

    // This is the message that will show in the sweetalert-popup:
    alert()->success('It worked!', 'The form was submitted');

    // Redirect back to the page you were looking at
    return back();
});










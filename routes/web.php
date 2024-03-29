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
})->middleware('cors');


Route::resource('menu', 'MenuController')->middleware('cors');
Route::get('/', 'HomeController@index')->name('home')->middleware('cors');

// Route::get('/category', 'CategoryController@index')->name('admin.category');
// Route::get('/product', 'ProductController@index')->name('admin.product')->middleware('admin');
Route::view('/frontt', 'admin.layouts.main');
Route::view('/admin2', 'admin.admin');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('cors');
Route::get('/beverages', 'HomeController@beverages')->name('beverages')->middleware('cors');
Route::get('/foods', 'HomeController@foods')->name('foods')->middleware('cors');
Route::get('/about', 'HomeController@about')->name('about')->middleware('cors');
Route::get('/contact', 'HomeController@contact')->name('contact')->middleware('cors');
Route::get('/gallery', 'HomeController@gallery')->name('gallery')->middleware('cors');
Route::get('/gallery/{gallery}', 'HomeController@gallerys')->name('gallerys')->middleware('cors');
Route::get('/shop', 'HomeController@shop')->name('shop')->middleware('cors');
Route::get('shops/{product}', 'HomeController@shops')->name('shops')->middleware('cors');
Route::get('/blog', 'HomeController@blog')->name('blog')->middleware('cors');
Route::get('blogs/{post}', 'HomeController@blogs')->name('blogs')->middleware('cors');
Route::resource('/cart', 'CartController')->middleware('cors');


Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth','cors']], function()
{
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('order', 'OrderController');
    Route::resource('post', 'PostController');
    Route::get('dashboard', 'AdminController@index')->name('dashboard');
    Route::post('product/image-upload/{product}', 'ProductController@uploadImages')->name('upload.images');
    Route::post('product/image-destroy/{product}', 'ProductController@destroyImages')->name('destroy.images');
    Route::get('/menuadmin', 'MenuController@index')->name('menus.index');
    Route::view('/galleries', 'admin.galleries');
    Route::get('product/image-upload/{product}','ProductController@upload')->name('product.upload');
    Route::get('orders/{type?}', 'OrderController@Orders')->name('orders.index');
    Route::delete('product/delete/{product}', 'ProductController@delete')->name('product.delete');
 
});

Route::group(['middleware' => 'auth', 'cors'], function(){
    Route::Resource('address', 'AddressController');  
    Route::get('/checkout/address', 'CheckoutController@address')->name('checkout.address');
    Route::post('/checkout/order', 'CheckoutController@order')->name('checkout.order');
    Route::get('myorder', 'HomeController@myorder')->name('myorder');
    Route::get('invoice/{order}', 'HomeController@invoice')->name('invoice');
    Route::patch('myoder/update-image/{order}' , 'HomeController@updateImages')->name('update.image');
});


Route::get('test', function(){
    // $orders=App\Order::find(2);
    // $new=$orders->user;
    // dd($orders);

    $orders=App\Order::where('user_id', Auth::id())->get();
    // // $new=$orders->user();
    // dd($orders);
    // $user = Auth::user();

    // $orders = self::$user->orders()->orderBy('order_id', 'asc')->get();

    dd($orders);
});

Route::post('/justapage', function() {

    // This is the message that will show in the sweetalert-popup:
    
    Alert::message('Robots are working!');

    // Redirect back to the page you were looking at
    return back();
});










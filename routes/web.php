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

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::get('/empresa', 'Frontend\HomeController@empresa')->name('empresa');
Route::get('/productos', 'Frontend\HomeController@productos')->name('productos');
Route::get('/videos', 'Frontend\HomeController@videos')->name('videos');
Route::get('/distribuidores', 'Frontend\HomeController@distribuidores')->name('distribuidores');
Route::get('/contacto', 'Frontend\HomeController@contacto')->name('contacto');

Route::get('/sliders', 'Frontend\HomeController@getslide')->name('slider');
Route::get('/page', 'Frontend\HomeController@getpage')->name('getpage');

Auth::routes();

//Route::get('/login', 'backend\HomeController@index')->name('login');

Route::group(['prefix' => 'admin'],function(){
    Route::get('/', 'Backend\DashboardController@index')->name('dashboard');
    Route::get('/categories', 'Backend\CategoryController@index')->name('category');
    Route::get('/products', 'Backend\ProductController@index')->name('product');
    Route::get('/orders', 'Backend\OrderController@index')->name('order');
    Route::get('/invoices', 'Backend\InvoiceController@index')->name('order');
    Route::get('/pages', 'Backend\PageController@index')->name('pages');
    Route::get('/blog', 'Backend\BlogController@index')->name('blogs');
    Route::get('/media', 'Backend\MediaController@index')->name('multimedia');
    Route::get('/category-blog', 'Backend\CategoryBLogController@index')->name('categoryBlog');
    Route::get('/posts', 'Backend\BLogController@index')->name('post');
});

Route::group(['prefix' => 'outlet'],function(){
    Route::get('/', 'Frontend\OutletController@index')->name('dashboard');
});

Route::group(['prefix' => 'usuario'],function(){
    Route::get('/', 'Frontend\UsuarioController@index')->name('dashboard');
});

Route::group(['prefix' => 'exposure-team'],function(){
    Route::get('/', 'Frontend\ExposureController@index')->name('dashboard');
});
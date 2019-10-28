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
Route::get('/inicio', 'Frontend\HomeController@getinicio')->name('getinicio');
Route::get('/getempresa', 'Frontend\HomeController@getempresa')->name('getempresa');

Route::get('/getproductos', 'Frontend\HomeController@getproductos')->name('getproductos');
Route::get('/getvideos', 'Frontend\HomeController@getvideos')->name('getvideos');
Route::get('/getdistribuidores', 'Frontend\HomeController@getdistribuidores')->name('getdistribuidores');
Route::get('/getcontacto', 'Frontend\HomeController@getcontacto')->name('getcontacto');

Auth::routes();

//Route::get('/login', 'backend\HomeController@index')->name('login');

Route::group(['prefix' => 'admin'],function(){
    Route::get('/', 'Backend\DashboardController@index')->name('dashboard');

    Route::get('/categories', 'Backend\CategoryController@index')->name('category.index');
    Route::get('/categories/create', 'Backend\CategoryController@create')->name('category.build');
    Route::post('/categories', 'Backend\CategoryController@store')->name('category.store');
    Route::get('/categories/{category}/edit', 'Backend\CategoryController@edit')->name('category.edit');
    Route::put('/categories/{category}', 'Backend\CategoryController@update')->name('category.update');
    Route::delete('/categories/{category}', 'Backend\CategoryController@destroy')->name('category.destroy');


    Route::get('/products', 'Backend\ProductController@index')->name('product.index');
    Route::get('/products/create', 'Backend\ProductController@create')->name('product.build');
    Route::post('/products', 'Backend\ProductController@store')->name('product.store');
    Route::get('/products/{product}/', 'Backend\ProductController@edit')->name('product.edit');
    Route::put('/products/{product}', 'Backend\ProductController@update')->name('product.update');
    Route::delete('/products/{product}', 'Backend\ProductController@destroy')->name('product.destroy');

    Route::get('/orders', 'Backend\OrderController@index')->name('order.index');
    Route::get('/orders/{order}/edit', 'Backend\OrderController@edit')->name('order.edit');
    Route::delete('/orders/{order}', 'Backend\OrderController@destroy')->name('order.destroy');

    Route::get('/invoices', 'Backend\InvoiceController@index')->name('invoice.index');
    Route::get('/invoices/{invoice}/edit', 'Backend\InvoiceController@edit')->name('invoice.edit');
    Route::delete('/invoices/{invoice}', 'Backend\InvoiceController@destroy')->name('invoice.destroy');

    /*Route::resource('/categories', 'CategoryController')->except(['show'])->names([
        'index'  => 'category.index',
        'create' => 'category.build',
        'store'  => 'category.store',
        'edit'   => 'category.edit',
        'update' => 'category.update',
        'delete' => 'category.destroy'
    ]);*/


    //Route::get('/orders', 'Backend\OrderController@index')->name('order');
    //Route::get('/invoices', 'Backend\InvoiceController@index')->name('order');

    Route::get('/pages', 'Backend\PageController@index')->name('pages');
    Route::get('/pages/{id}/edit', 'Backend\PageController@edit')->name('pages.edit');
    Route::post('/pages','Backend\PageController@store')->name('pages.store');
    Route::put('pages/{id}','Backend\PageController@update')->name('pages.update');


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

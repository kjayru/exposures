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

Route::get('/productos/{cat}', 'Frontend\HomeController@productoCategory')->name('productos.categoria');
Route::get('/productos/{cat}/{slug}', 'Frontend\HomeController@productoDetalle')->name('productos.detalle');
Route::get('/videos', 'Frontend\HomeController@videos')->name('videos');
Route::get('/distribuidores', 'Frontend\HomeController@distribuidores')->name('distribuidores');

Route::get('/distribuidores/{id}','Frontend\HomeController@dealerSearch')->name('buscador-dealer');
Route::get('/contacto', 'Frontend\HomeController@contacto')->name('contacto');

Route::get('/sliders', 'Frontend\HomeController@getslide')->name('slider');
Route::get('/inicio', 'Frontend\HomeController@getinicio')->name('getinicio');
Route::get('/getempresa', 'Frontend\HomeController@getempresa')->name('getempresa');

Route::get('/getproductos', 'Frontend\HomeController@getproductos')->name('getproductos');
Route::get('/getvideos', 'Frontend\HomeController@getvideos')->name('getvideos');
Route::get('/getdistribuidores', 'Frontend\HomeController@getdistribuidores')->name('getdistribuidores');
Route::get('/getcontacto', 'Frontend\HomeController@getcontacto')->name('getcontacto');

Route::post('/addproduct', 'Frontend\OutletController@addCart')->name('addcart');
Route::get('/carrito', 'Frontend\OutletController@productos')->name('carrito');
Route::post('/getremoveitem', 'Frontend\OutletController@getRemoveItem')->name('removecart');
Route::get('/ingresar','Frontend\HomeController@ingresar')->name('ingresar');
//Route::get('/jobslug', 'Frontend\HomeController@jobslug')->name('jobslug');


Auth::routes();

//Route::get('/login', 'backend\HomeController@index')->name('login');

Route::group(['prefix' => 'admin'],function(){
    Route::get('/', 'Backend\DashboardController@index')->name('dashboard');


    //Roles
    Route::post('roles/store','Backend\RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');
    Route::get('roles','Backend\RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');
    Route::get('roles/create','Backend\RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');
    Route::put('roles/{role}','Backend\RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');
    Route::get('roles/{role}','Backend\RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');
    Route::delete('roles/{role}','Backend\RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');
    Route::get('roles/{role}/edit','Backend\RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');

    //users
    Route::post('users/store','Backend\UserController@store')->name('users.store')
    ->middleware('permission:users.create');
    Route::get('users','Backend\UserController@index')->name('users.index')
    ->middleware('permission:users.index');
    Route::get('users/create','Backend\UserController@create')->name('users.create')
    ->middleware('permission:users.create');
    Route::get('users/{user}/edit','Backend\UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');
    Route::put('users/{user}','Backend\UserController@update')->name('users.update')
    ->middleware('permission:users.edit');
    Route::get('users/{user}','Backend\UserController@show')->name('users.show')
    ->middleware('permission:users.show');
    Route::delete('users/{user}','Backend\UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy');


    Route::get('/categories', 'Backend\CategoryController@index')->name('category.index')
    ->middleware('permission:categories.index');
    Route::get('/categories/create', 'Backend\CategoryController@create')->name('category.build')
    ->middleware('permission:categories.create');
    Route::post('/categories', 'Backend\CategoryController@store')->name('category.store')
    ->middleware('permission:categories.create');
    Route::get('/categories/{category}/edit', 'Backend\CategoryController@edit')->name('category.edit')
    ->middleware('permission:categories.edit');
    Route::put('/categories/{category}', 'Backend\CategoryController@update')->name('category.update')
    ->middleware('permission:categories.edit');
    Route::delete('/categories/{category}', 'Backend\CategoryController@destroy')->name('category.destroy')
    ->middleware('permission:categories.destroy');


    Route::get('/products', 'Backend\ProductController@index')->name('product.index')
    ->middleware('permission:products.index');
    Route::get('/products/create', 'Backend\ProductController@create')->name('product.build')
    ->middleware('permission:products.create');
    Route::post('/products', 'Backend\ProductController@store')->name('product.store')
    ->middleware('permission:products.create');
    Route::get('/products/{product}/edit', 'Backend\ProductController@edit')->name('product.edit')
    ->middleware('permission:products.edit');
    Route::put('/products/{product}', 'Backend\ProductController@update')->name('product.update')
    ->middleware('permission:products.edit');
    Route::delete('/products/{product}', 'Backend\ProductController@destroy')->name('product.destroy')
    ->middleware('permission:products.destroy');

    Route::get('/orders', 'Backend\OrderController@index')->name('order.index');
    Route::get('/orders/{order}/edit', 'Backend\OrderController@edit')->name('order.edit');
    Route::delete('/orders/{order}', 'Backend\OrderController@destroy')->name('order.destroy');

    Route::get('/invoices', 'Backend\InvoiceController@index')->name('invoice.index');
    Route::get('/invoices/{invoice}/edit', 'Backend\InvoiceController@edit')->name('invoice.edit');
    Route::delete('/invoices/{invoice}', 'Backend\InvoiceController@destroy')->name('invoice.destroy');


    Route::get('/media', 'Backend\MediaController@index')->name('media.index');
    Route::get('/media/create', 'Backend\MediaController@create')->name('media.create');
    Route::delete('/media/{media}', 'Backend\MediaController@destroy')->name('media.destroy');
    Route::post('/media', 'Backend\MediaController@store')->name('media.store');
    Route::post('media/savephoto','Backend\MediaController@savephoto')->name('media.savephoto');



    /*Route::resource('/categories', 'CategoryController')->except(['show'])->names([
        'index'  => 'category.index',
        'create' => 'category.build',
        'store'  => 'category.store',
        'edit'   => 'category.edit',
        'update' => 'category.update',
        'delete' => 'category.destroy'
    ]);*/


    Route::get('/pages', 'Backend\PageController@index')->name('pages');
    Route::get('/pages/{id}/edit', 'Backend\PageController@edit')->name('pages.edit');
    Route::post('/pages','Backend\PageController@store')->name('pages.store');
    Route::put('pages/{id}','Backend\PageController@update')->name('pages.update');


    Route::get('/category-blog', 'Backend\CategoryBLogController@index')->name('catblog.index');
    Route::get('/category-blog/create', 'Backend\CategoryBLogController@create')->name('catblog.created');
    Route::post('/category-blog', 'Backend\CategoryBLogController@store')->name('catblog.store');
    Route::get('/category-blog/{catblog}/edit', 'Backend\CategoryBLogController@edit')->name('catblog.edit');
    Route::put('/category-blog/{catblog}', 'Backend\CategoryBLogController@update')->name('catblog.update');
    Route::delete('/category-blog/{catblog}', 'Backend\CategoryBLogController@destroy')->name('catblog.destroy');



    Route::get('/testimonials', 'Backend\TestimonyController@index')->name('testimony.index');
    Route::get('/testimonials/create', 'Backend\TestimonyController@create')->name('testimony.created');
    Route::post('/testimonials', 'Backend\TestimonyController@store')->name('testimony.store');
    Route::get('/testimonials/{testimony}/edit', 'Backend\TestimonyController@edit')->name('testimony.edit');
    Route::put('/testimonials/{testimony}', 'Backend\TestimonyController@update')->name('testimony.update');
    Route::delete('/testimonials/{testimony}', 'Backend\TestimonyController@destroy')->name('testimony.destroy');


    Route::get('/posts', 'Backend\BLogController@index')->name('post.index');
    Route::get('/posts/create', 'Backend\BLogController@create')->name('post.created');
    Route::post('/posts', 'Backend\BLogController@store')->name('post.store');
    Route::get('/posts/{post}/edit', 'Backend\BLogController@edit')->name('post.edit');
    Route::put('/posts/{post}', 'Backend\BLogController@update')->name('post.update');
    Route::delete('/posts/{testimony}', 'Backend\BLogController@destroy')->name('post.destroy');

    //banner

    Route::get('/banners', 'Backend\BannerController@index')->name('banner.index');
    Route::get('/banners/create', 'Backend\BannerController@create')->name('banner.created');
    Route::post('/banners', 'Backend\BannerController@store')->name('banner.store');
    Route::get('/banners/{banner}/edit', 'Backend\BannerController@edit')->name('banner.edit');
    Route::put('/banners/{banner}', 'Backend\BannerController@update')->name('banner.update');
    Route::delete('/banners/{banner}', 'Backend\BannerController@destroy')->name('banner.destroy');

    Route::delete('/banners/slide/{id}','Backend\BannerController@destroyitem')->name('banner.destroyitem');


    //dealers

    Route::get('/dealers', 'Backend\DealerController@index')->name('dealer.index');
    Route::get('/dealers/create', 'Backend\DealerController@create')->name('dealer.created');
    Route::post('/dealers', 'Backend\DealerController@store')->name('dealer.store');
    Route::get('/dealers/{dealer}/edit', 'Backend\DealerController@edit')->name('dealer.edit');
    Route::put('/dealers/{dealer}', 'Backend\DealerController@update')->name('dealer.update');
    Route::delete('/dealers/{dealer}', 'Backend\DealerController@destroy')->name('dealer.destroy');

    //videos

    Route::get('/videos', 'Backend\VideoController@index')->name('video.index');
    Route::get('/videos/create', 'Backend\VideoController@create')->name('video.created');
    Route::post('/videos', 'Backend\VideoController@store')->name('video.store');
    Route::get('/videos/{video}/edit', 'Backend\VideoController@edit')->name('video.edit');
    Route::put('/videos/{video}', 'Backend\VideoController@update')->name('video.update');
    Route::delete('/videos/{video}', 'Backend\VideoController@destroy')->name('video.destroy');
});


Route::group(['prefix' => 'outlet'],function(){
    Route::get('/', 'Frontend\OutletController@index')->name('outlet.index');
    Route::get('/{slug}', 'Frontend\OutletController@categoria')->name('outlet.categoria');
    Route::get('/{slug}/{prod}', 'Frontend\OutletController@detalle')->name('outlet.detalle');


});

Route::group(['prefix' => 'usuario'],function(){
    Route::get('/', 'Frontend\UsuarioController@index')->name('dashboard');
    Route::get('/configuracion','Frontend\UsuarioController@configuracion')->name('configuracion');
    Route::post('/updatedatos','Frontend\UsuarioController@updatedatos')->name('updatedatos');
});

Route::group(['prefix' => 'exposure-team'],function(){
    Route::get('/', 'Frontend\ExposureController@index')->name('exposure.index');
    Route::get('/{cat}', 'Frontend\ExposureController@categoria')->name('exposure.categoria');
    Route::get('/{cat}/{slug}', 'Frontend\ExposureController@detalle')->name('exposure.detalle');


});


Route::group(['prefix'=>'checkout'],function(){
    Route::get('/payment', 'Frontend\CartController@index')->name('cart.index')->middleware('permission:carts.index');

    Route::post('/charge', 'Frontend\CartController@charge')->name('cart.charge');
    Route::get('/paymentsuccess', 'Frontend\CartController@payment_success')->name('cart.success');
    Route::get('/paymenterror', 'Frontend\CartController@payment_error')->name('cart.error');

    Route::post('/savebilling','Frontend\CartController@savebilling')->name('cart.billing');
    Route::post('/activestatus','Frontend\CartController@activestatus')->name('cart.activestatus');


});

//Route::get('/procesopago/{id}', 'Frontend\OutletController@procesopago')->name('outlet.procesopago');

/*
Route::get('payment', 'Frontend\OutletController@listar');
Route::post('charge', 'Frontend\OutletController@charge');
Route::get('paymentsuccess', 'Frontend\OutletController@payment_success');
Route::get('paymenterror', 'Frontend\OutletController@payment_error');*/

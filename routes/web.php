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



Route::get('login', 'Site\Auth\LoginController@login');
Route::post('login', 'Site\Auth\LoginController@postLogin');
Route::get('logout', 'Site\Auth\LoginController@logout');
Route::get('forgot', 'Site\Auth\LoginController@forgot');
Route::post('forgot', 'Site\Auth\LoginController@sendpassword');
Route::get('register', 'Site\Auth\RegisterController@register');
Route::post('register/store', 'Site\Auth\RegisterController@registerStore');

Route::get('/', 'Site\Landing\LandingController@index');
/**----Website URL Start -----*/
Route::get('dashboard', 'Site\Dashboard\DashboardController@dashboard');

Route::get('products', 'Site\Product\ProductController@product');
Route::get('product_details/{id}', 'Site\Product\ProductController@product_detail');

Route::get('bulk_products', 'Site\Product\BulkProductController@blukProduct');
Route::get('bulk_product_details/{id}', 'Site\Product\ProductController@blukProductDetail');
Route::get('faq', 'Site\Faq\FaqController@faq');
Route::get('contact-us', 'Site\Contact\ContactController@contact');
Route::get('cart', 'Site\Cart\CartController@cart');
Route::get('checkout', 'Site\Cart\CartController@checkout');

Route::get('pages/{name}', 'Site\Staticpage\StaticpageController@index');

/**----Website URL END -----*/


/* Admin route */
Route::get('admin/login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
//Route::get('admin/login', 'Auth\LoginController@getLogin');
Route::post('admin/login', 'Auth\LoginController@postLogin');
Route::get('admin/logout', 'Auth\LoginController@logout');
Route::get('admin/forgot', 'Auth\LoginController@forgot');

Route::group(array('prefix' => 'admin','middleware' => 'auth'), function() {
    
    Route::group(array('prefix' => 'dashboard'), function() {
        Route::get('dashboard', 'Admin\Dashboard\DashboardController@index');
    });
	
	Route::group(array('prefix' => 'manage-admin'), function() {
        
		Route::get('admin-user', 'Admin\SubAdmin\SubAdminController@index');
        Route::get('admin-user/create', 'Admin\SubAdmin\SubAdminController@create');
        Route::post('admin-user/add', 'Admin\SubAdmin\SubAdminController@store');
        Route::get('admin-user/{id}/edit', 'Admin\SubAdmin\SubAdminController@edit');
		Route::post('admin-user/update', 'Admin\SubAdmin\SubAdminController@update');
		
        Route::get('admin-roles/', 'Admin\SubAdmin\PermissionController@index');
        Route::get('admin-roles/create', 'Admin\SubAdmin\PermissionController@create');
        Route::post('admin-roles/add', 'Admin\SubAdmin\PermissionController@store');
        Route::get('admin-roles/{id}/edit', 'Admin\SubAdmin\PermissionController@edit');
        Route::post('admin-roles/update', 'Admin\SubAdmin\PermissionController@update');

		Route::get('customer', 'Admin\SubAdmin\SubAdminController@customer');
        Route::get('customer/create', 'Admin\SubAdmin\SubAdminController@customerCreate');
        Route::post('customer/add', 'Admin\SubAdmin\SubAdminController@customerStore');
        Route::get('customer/{id}/edit', 'Admin\SubAdmin\SubAdminController@customerEdit');
		Route::post('customer/update', 'Admin\SubAdmin\SubAdminController@customerUpdate');
    });

    Route::group(array('prefix' => 'manage-staticPage'), function() {
		Route::get('page', 'Admin\Site\Page\PageController@index');
		Route::get('indexData', 'Admin\Site\Page\PageController@indexData');
		Route::get('page/create', 'Admin\Site\Page\PageController@create');
		Route::post('page/add', 'Admin\Site\Page\PageController@store');
		Route::get('page/{id}/edit', 'Admin\Site\Page\PageController@edit');
		Route::post('page/update', 'Admin\Site\Page\PageController@update');
	});

    Route::group(array('prefix' => 'manage-site'), function() {
		Route::get('currency', 'Admin\Site\Currency\CurrencyController@index');
		Route::get('indexData', 'Admin\Site\Currency\CurrencyController@indexData');
		Route::get('currency/create', 'Admin\Site\Currency\CurrencyController@create');
		Route::post('currency/add', 'Admin\Site\Currency\CurrencyController@store');
		Route::get('currency/{id}/edit', 'Admin\Site\Currency\CurrencyController@edit');
		Route::post('currency/update', 'Admin\Site\Currency\CurrencyController@update');
	});


	Route::group(array('prefix' => 'manage-product'), function() {
		Route::get('product', 'Admin\Product\ProductController@index');
		Route::get('product/create', 'Admin\Product\ProductController@create');
		Route::post('product/add', 'Admin\Product\ProductController@add');
	});
	//Product Category admin/manage_category_product/
	Route::group(array('prefix' => 'manage_category_product'), function() {
		Route::get('category', 'Admin\Product\CategoryProductController@index');
		Route::get('category/indexData', 'Admin\Product\CategoryProductController@indexData');
		Route::get('category/create', 'Admin\Product\CategoryProductController@create');
		Route::post('category/add', 'Admin\Product\CategoryProductController@store');
		Route::get('category/{id}/edit', 'Admin\Product\CategoryProductController@edit');
		Route::post('category/update', 'Admin\Product\CategoryProductController@update');
	});
	
	///Admin Bulk order Start
	Route::group(array('prefix' => 'manage_bulk_product'), function() {
		Route::get('bulk_product', 'Admin\Product\BulkProduct\BulkProductController@index');
		Route::get('bulk_product/create', 'Admin\Product\BulkProduct\BulkProductController@create');
		Route::post('bulk_product/add', 'Admin\Product\BulkProduct\BulkProductController@store');
		Route::get('bulk_product/{id}/edit', 'Admin\Product\BulkProduct\BulkProductController@edit');
		Route::post('bulk_product/update', 'Admin\Product\BulkProduct\BulkProductController@update');
	});

	Route::group(array('prefix' => 'manage-order'), function() {
		Route::get('order', 'Admin\Order\OrderController@index');
	});
	
	
	Route::group(array('prefix' => 'manage-social'), function() {
		Route::get('social', 'Admin\Site\Social\SocialController@index');
		Route::post('social/update', 'Admin\Site\Social\SocialController@update');
	});
	
	Route::group(array('prefix' => 'manage-meta'), function() {
		Route::get('meta', 'Admin\Site\Social\SocialController@metaIndex');
		Route::post('meta/updateMeta', 'Admin\Site\Social\SocialController@updateMeta');
	});
	
	Route::group(array('prefix' => 'manage-setting'), function() {
		Route::get('setting', 'Admin\Site\Setting\SettingController@index');
		Route::post('setting/update', 'Admin\Site\Setting\SettingController@update');
	});
	
});


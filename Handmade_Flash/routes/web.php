<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home', function () {
    return view('admin.indexAdmin');
});

// category
Route::group(['prefix' => 'admin/category/'], function () {
	Route::get('add',
		['as' 	=> 'admin.category.getAddCategory',
		'uses' 	=> 'CategoryController@getAddCategory'
    ]);
    Route::post('postAdd',['as'=>'postAdd','uses'=>'CategoryController@postAddCategory']);
    Route::get('edit/{id}', [
		'as' 	=> 'admin.category.getEditCategory',
		'uses' 	=> 'CategoryController@getEditCategory'
	]);
	Route::get('list',
		['as' 	=> 'admin.category.getListCategory',
		'uses' 	=> 'CategoryController@getListCategory'
	]);

	Route::get('edit/{id}', [
		'as' 	=> 'admin.category.getEditCategory',
		'uses' 	=> 'CategoryController@getEditCategory'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.category.postEditCategory',
		'uses' 	=> 'CategoryController@postEditCategory'
	]);

	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteCategory',
		'uses' 	=> 'CategoryController@getDeleteCategory'
	]);

});	

// product
Route::group(['prefix' => 'admin/product/'], function () {
	Route::get('add',
		['as' 	=> 'admin.product.getAddProduct',
		'uses' 	=> 'ProductController@getAddProduct'
    ]);
	Route::post('postAdd',['as'=>'postAdd','uses'=>'ProductController@postAddProduct']);
	
	Route::get('list',
		['as' 	=> 'admin.product.getListProduct',
		'uses' 	=> 'ProductController@getListProduct'
	]);

	// Updated Product
	Route::get('edit/{id}', [
		'as' 	=> 'admin.products.getEditProduct',
		'uses' 	=> 'ProductController@getEditProduct'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.products.postEditProduct',
		'uses' 	=> 'ProductController@postEditProduct'
	]);

	// Delete Product
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteProduct',
		'uses' 	=> 'ProductController@getDeleteProduct'
	]);
});	

// User
Route::group(['prefix' => 'admin/user/'], function () {
	Route::get('add',
		['as' 	=> 'admin.user.getAddUser',
		'uses' 	=> 'UserController@getAddUser'
    ]);
	Route::post('postAdd',['as'=>'postAdd','uses'=>'UserController@postAddUser']);
	
	Route::get('list',
		['as' 	=> 'admin.user.getListUser',
		'uses' 	=> 'UserController@getListUser'
	]);

	// Updated User
	Route::get('edit/{id}', [
		'as' 	=> 'admin.user.getEditUser',
		'uses' 	=> 'UserController@getEditUser'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.user.postEditUser',
		'uses' 	=> 'UserController@postEditUser'
	]);

	// Delete User
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteUser',
		'uses' 	=> 'UserController@getDeleteUser'
	]);
});	

// Slider
Route::group(['prefix' => 'admin/slider/'], function () {
	Route::get('add',
		['as' 	=> 'admin.slider.getAddSlider',
		'uses' 	=> 'SliderController@getAddSlider'
    ]);
	Route::post('postAdd',['as'=>'postAdd','uses'=>'SliderController@postAddSlider']);
	
	Route::get('list',
		['as' 	=> 'admin.slider.getListSlider',
		'uses' 	=> 'SliderController@getListSlider'
	]);

	// Updated Slide
	Route::get('edit/{id}', [
		'as' 	=> 'admin.slider.getEditSlider',
		'uses' 	=> 'SliderController@getEditSlider'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.slider.postEditSlider',
		'uses' 	=> 'SliderController@postEditSlider'
	]);

	// Delete Slider
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteSlider',
		'uses' 	=> 'SliderController@getDeleteSlider'
	]);
});	

// Customer
Route::group(['prefix' => 'admin/customer/'], function () {
	Route::get('add',
		['as' 	=> 'admin.customer.getAddCustomer',
		'uses' 	=> 'CustomerController@getAddCustomer'
    ]);
	Route::post('postAdd',['as'=>'postAdd','uses'=>'CustomerController@postAddCustomer']);
	
	Route::get('list',
		['as' 	=> 'admin.customer.getListCustomer',
		'uses' 	=> 'CustomerController@getListCustomer'
	]);

	// Updated Customer
	Route::get('edit/{id}', [
		'as' 	=> 'admin.customer.getEditCustomer',
		'uses' 	=> 'CustomerController@getEditCustomer'
	]);

	Route::post('edit/{id}', [
		'as' 	=> 'admin.customer.postEditCustomer',
		'uses' 	=> 'CustomerController@postEditCustomer'
	]);

	// Delete Customer
	Route::get('delete/{id}', [
		'as' 	=> 'getDeleteCustomer',
		'uses' 	=> 'CustomerController@getDeleteCustomer'
	]);
});	


// Page User Profile
Route::group(['prefix' => 'user/'], function () {
	Route::get('view',
		['as' 	=> 'user.getViewUserProfile',
		'uses' 	=> 'UserProfileController@getViewUserProfile'
	]);
});	
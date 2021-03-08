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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

    //Product route
Route::get('/backend/product/create','Backend\ProductController@create'); 
Route::get('/backend/product/list','Backend\ProductController@list'); 
Route::post('/backend/product/store','Backend\ProductController@store'); 
Route::get('/backend/product/edit/{id}','Backend\ProductController@edit'); 
Route::post('/backend/product/update/{id}','Backend\ProductController@update'); 
Route::get('/backend/product/destroy/{id}','Backend\ProductController@destroy');

// Customer route
Route::get('/backend/customer/create','Backend\CustomerController@create');
Route::post('/backend/customer/store','Backend\CustomerController@store');
Route::get('/backend/customer/list','Backend\CustomerController@list');
Route::get('/backend/customer/edit/{id}','Backend\CustomerController@edit');
Route::post('/backend/customer/update/{id}','Backend\CustomerController@update');
Route::get('/backend/customer/destroy/{id}','Backend\CustomerController@destroy');

//Supplier route
Route::get('/backend/supplier/create','Backend\SupplierController@create');
Route::post('/backend/supplier/store','Backend\SupplierController@store');
Route::get('/backend/supplier/list','Backend\SupplierController@list');
Route::get('/backend/supplier/list','Backend\SupplierController@list');
Route::get('/backend/supplier/edit/{id}','Backend\SupplierController@edit');
Route::post('/backend/supplier/update/{id}','Backend\SupplierController@update');
Route::get('/backend/supplier/destroy/{id}','Backend\SupplierController@destroy');

// purchase route
Route::get('/backend/purchase/create','Backend\PurchaseController@create');

});
 


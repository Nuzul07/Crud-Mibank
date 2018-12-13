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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/', 'HomeController@index');

Route::prefix('admin')->group(function(){
	Route::get('/', 'AdminController@index');
	Route::get('/usermibank', 'AdminController@indexusermibank');
	Route::get('/usermibank/add', 'AdminController@addusermibank');
	Route::post('/usermibank/save', 'AdminController@saveusermibank');
	Route::get('/usermibank/edit/{id}', 'AdminController@editusermibank');
	Route::post('/usermibank/update', 'AdminController@updateusermibank');
	Route::get('/usermibank/delete/{id}', 'AdminController@deleteusermibank');
	Route::get('/transaction', 'AdminController@indextransaction');
	Route::get('/transaction/add', 'AdminController@addtransaction');
	Route::post('/transaction/save', 'AdminController@savetransaction');
	Route::get('/transaction/edit/{id}', 'AdminController@edittransaction');
	Route::post('/transaction/update', 'AdminController@updatetransaction');
	Route::get('/transaction/delete/{id}', 'AdminController@deletetransaction');
});

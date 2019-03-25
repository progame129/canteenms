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



Route::get('/' ,[
'as' =>'home-page',
'uses' => 'FontendController@showHome'
]);

Route::get('/contact' ,[
'as' =>'contact-page',
'uses' => 'FontendController@showContacts'
]);

Route::group(['middleware' => 'auth'], function () {
});

Route::resource('bill', 'AdminBillController');

Route::get('/danh-sach-don-hang', [
	'as'=>'danh-sach-don-hang',
	'uses'=>'Admin\AdminBillController@index'
]);

Route::get('/chi-tiet-don-hang', [
	'as'=>'chi-tiet-don-hang',
	'uses'=>'Admin\AdminBillController@edit'
]);

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


Route::group(['middleware' => 'auth'], function () {

});
Route::get('/test/quan-ly-danh-muc-san-pham', [
    'as'=>'manage_product_catalog',
    'uses'=>'FrontendController@showProducts'
]);
Route::resource('category', 'AdminCategoryController');


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

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

Route::get('/welcome', function () {
	return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {

});
Route::get('/test/quan-ly-danh-muc-san-pham', [
	'as'=>'manage_product_catalog',
	'uses'=>'FrontendController@showProducts'
]);
Route::resource('category', 'AdminCategoryController');

Route::get('/about' ,[
	'as' =>'about-page',
	'uses' => 'FontendController@showAbout'
]);
Route::get('/' ,[
	'as' =>'home-page',
	'uses' => 'FontendController@showHome'
]);
Route::get('/menu' ,[
	'as' =>'menu-page',
	'uses' => 'FontendController@showMenu'
]);
Route::get('/new' ,[
	'as' =>'new-page',
	'uses' => 'FontendController@showNew'
]);
Route::get('/contact' ,[
	'as' =>'contact-page',
	'uses' => 'FontendController@showContacts'
]);

Route::get('/bunbo' ,[
'as' =>'bunbo-page',
'uses' => 'FontendController@showbunbo'
]);

Route::group(['middleware' => 'auth'], function () {
});

Route::resource('bill', 'AdminBillController');

Route::get('/danh-sach-don-hang', [
	'as'=>'danh-sach-don-hang',
	'uses'=>'Admin\AdminBillController@index'
]);

Route::get('/danh-sach-san-pham', [
	'as'=>'danh-sach-san-pham',
	'uses'=>'Admin\AdminBillController@listProduct'
]);

Route::get('/delete-product', [
    'as'=>'delete-product',
    'uses'=>'Admin\ProductController@deleteProduct'
]);

Route::get('/edit-product/{id}', [
    'as'=>'edit-product',
    'uses'=>'handleController@edit'
]);
Route::post('/edit-product/{id}', [
    'as'=>'edit-product',
    'uses'=>'handleController@update'
]);




Route::get('/danh-muc-san-pham', [
    'as'=>'danh-muc-san-pham',
    'uses'=>'Admin\AdminBillController@listCategory'
]);

Route::get('/product_get' ,[
'as' =>'product_get',
'uses' => 'FontendController@showProduct_add'
]);


Route::get('/category_get' ,[
'as' =>'category_get',
'uses' => 'FontendController@showCategory_add'
]);

 Route::post('/category_add' ,[
   'as' =>'category_add',
     'uses' => 'handleController@handleRequestCategory'
 ]);

 Route::post('/product_add' ,[
     'as' =>'product_add',
    'uses' => 'handleController@handleRequestProduct']);

Route::get('/delete-category', [
    'as'=>'delete-category',
    'uses'=>'Admin\CategoryController@deleteCategory'
]);

Route::get('/edit-category', [
    'as'=>'edit-category',
    'uses'=>'Admin\CategoryController@editCategory'
]);

Route::get('/chi-tiet-don-hang/{id}', [
	'as'=>'chi-tiet-don-hang',
	'uses'=>'Admin\AdminBillController@edit'
]);

Route::put('/danh-sach-don-hang/{id}', [
	'as'=>'danh-sach-don-hang',
	'uses'=>'Admin\AdminBillController@update'
]);

Route::delete('/danh-sach-don-hang/{id}', [
	'as'=>'danh-sach-don-hang',
	'uses'=>'Admin\AdminBillController@destroy'
]);


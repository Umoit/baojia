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
//主页
Route::get('/', 'IndexController@index')->name('home');

//json


//登录
Route::get('login','UserController@getLogin')->name('login');
Route::post('login','UserController@postLogin')->name('post.login');

//注册
Route::get('register','UserController@getRegister')->name('register');
Route::post('register','UserController@postRegister')->name('post.register');
//用户
//Route::resource('user', 'UserController', ['only' => ['show', 'update', 'edit']]);

Route::get('logout', 'UserController@logout')->name('logout');


Route::get('tracking','TrackingController@index')->name('tracking');
Route::post('tracking','TrackingController@postCheck');



//文章
Route::get('article/{article}','ArticleController@show')->name('articleShow');



//后台


Route::get('admin/login','Admin\IndexController@getLogin');
Route::post('admin/login','Admin\IndexController@postLogin')->name('admin.login');

Route::group(['prefix' => 'admin'],function(){
	Route::resource('admin', 'Admin\AdminController');
	Route::get('admin/{id}/delete', 'Admin\AdminController@delete')->name('admin.delete');	

	Route::get('logout','Admin\IndexController@logout')->name('admin.logout');
	
	Route::get('test','Admin\IndexController@test')->name('admin.test');

	Route::get('dashboard','Admin\IndexController@dashboard')->name('admin.dashboard');


	
	//报价
	Route::resource('offer','Admin\OfferController');
	Route::get('offer/{id}/delete', 'Admin\OfferController@delete')->name('offer.delete');	
	Route::post('offer/import', 'Admin\ExcelController@offerImport')->name('offer.import');

	Route::get('offerCheck/{data?}', 'Admin\OfferController@getCheck')->name('offer.check');
	//Route::get('offerEdit/{data?}', 'Admin\OfferController@getOfferCheck')->name('offer.edit');

	


	//国家
	Route::resource('country','Admin\CountryController');
	Route::get('country/{id}/delete', 'Admin\CountryController@delete')->name('country.delete');
	Route::post('country/import', 'Admin\ExcelController@countryImport')->name('country.import');
	Route::get('countryClear', 'Admin\CountryController@clearCountry')->name('country.clear');


	//用户
	Route::resource('user', 'Admin\UserController');	
	Route::get('user/{id}/delete', 'Admin\UserController@delete')->name('user.delete');	
	//Route::post('user/login', 'UserController@postLogin')->name('user.login');	

	//权限
	Route::get('permission/autoCreate','Admin\PermissionController@autoCreate')->name('permission.autoCreate');
	
	Route::resource('role','Admin\RoleController');
	Route::resource('permission','Admin\PermissionController');
	Route::get('role/{id}/delete', 'Admin\RoleController@delete')->name('role.delete');	
	Route::get('permission/{id}/delete', 'Admin\PermissionController@delete')->name('permission.delete');	
	
	//货单
	Route::resource('waybill','Admin\WaybillController');
	Route::get('waybill/{id}/delete', 'Admin\WaybillController@delete')->name('waybill.delete');



	Route::post('wbitem/add', 'Admin\WaybillController@itemStore')->name('wbitem.store');


	Route::get('wbitem/{id}', 'Admin\WaybillController@itemEdit')->name('wbitem.edit');
	Route::post('wbitem/{id}', 'Admin\WaybillController@itemUpdate')->name('wbitem.update');
	Route::get('wbitem/{id}/delete', 'Admin\WaybillController@itemDelete')->name('wbitem.delete');	
	

});

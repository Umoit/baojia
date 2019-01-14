<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('excel/export','Admin\ExcelController@export');
Route::post('excel/articleImport','Admin\ExcelController@articleImport')->name('article.import');


	//上传
	//Route::post('img/upload','Admin\FileController@imgUpload')->name('img.upload');
	Route::post('image/upload','Admin\FileController@imageUpload')->name('image.upload');

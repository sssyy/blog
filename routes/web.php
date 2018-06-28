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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'IndexController@index');
Route::get('/home', 'IndexController@index');
Route::get('/admin/profile', 'IndexController@index');
Route::get('/admin/label/index', 'IndexController@index')->name('admin.label.index');
Route::namespace('Content')->prefix('content')->group(function () {

    Route::post('/','ContentController@store');
    Route::get('/','ContentController@index');
	Route::get('/create','ContentController@create');
    Route::get('/{id}','ContentController@show');
});

Route::namespace('Label')->prefix('label')->group(function () {

    Route::get('/index', 'LabelController@index')->name('admin.category.index');
    Route::get('/create', 'LabelController@create')->name('admin.category.create');
    Route::post('/store', 'LabelController@store')->name('admin.category.store');
    Route::get('/edit/{category}', 'LabelController@edit')->name('admin.category.edit');
    Route::patch('/update/{category}', 'LabelController@update')->name('admin.category.update');
    Route::get('/destroy/{category}', 'LabelController@destroy')->name('admin.category.destroy');
});
// 分类


Route::view('/test', 'Content.test');
Route::post('/test', 'Content\ContentController@testUpload');




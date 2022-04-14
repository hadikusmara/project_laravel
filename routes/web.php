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
Route::get('/', 'AdminController@index')->name('userhome');

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('adminhome');


    Route::get('/Introduction', 'HtmlintroController@index')->name('htmlintro');
    Route::get('/htmlintro_next', 'HtmlintroController@index_next')->name('htmlintro_next');

    Route::get('/htmlEditors', 'htmlEditorsController@index')->name('htmlEditors');



	Route::get('/CssText', 'CssTextController@index')->name('CssText');
	Route::get('/CssText_next', 'CssTextController@index_next')->name('CssText_next');
    

    Route::get('/jsIntroduction', 'JsintroController@index')->name('jsintro');
  

});
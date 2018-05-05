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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::redirect('/', 'itablog');

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/

/**    RUTAS DEL FRONTEND       **/
Route::get('itablog', 'Web\PageController@blog')->name('itablog');
Route::get('entrada/{slug}', 'Web\PageController@post')->name('post');
Route::get('categoria/{slug}', 'Web\PageController@category')->name('category');
Route::get('etiqueta/{slug}', 'Web\PageController@tag')->name('tag');


/**     RUTAS BACKEND        **/
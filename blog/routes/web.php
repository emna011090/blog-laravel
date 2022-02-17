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

// Route::get('/', function () {
//     return view('layout');
// });
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PostController@index');
//Route::get('/detail/{id}', [PostController::class, 'show']);
Route::resource('detail', 'PostController');


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

Route::get('auth/steam', 'AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'AuthController@handle')->name('auth.steam.handle');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/users', 'AdminController@users');
    Route::get('/users/{id}', 'AdminController@user_edit');
    Route::post('/users/{id}/update', 'AdminController@user_update');
    Route::get('/users/{id}/delete', 'AdminController@user_delete');
    Route::get('/users/{id}/package/{package}', 'AdminController@user_package');
});


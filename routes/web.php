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

Route::get('/', 'PageController@index')->name('index');

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/datasiswa', 'AdminController@datasiswa')->name('datasiswa');
    Route::get('/siswa/{user}', "AdminController@siswashow")->name('siswashow');
    Route::get('/siswa/{user}/edit', "AdminController@siswaedit")->name('siswaedit');
    Route::patch('/siswa/{user}', "AdminController@update")->name('siswaupdate');
    Route::delete('/siswa/{user}', "AdminController@destroy");
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', 'UserController@index')->name('home');
    Route::get('/profile', 'UserController@editprofile')->name('editprofile');
    Route::patch('/profile/{id}', "AdminController@update")->name('updateprofile');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['register' => false]);
// Auth::routes();

Route::resource('posts', 'PostController');
Route::resource('users', 'UserController');
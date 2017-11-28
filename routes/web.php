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
})->name('welcome');


Route::any('user/profile', function() {
	$url = route('welcome');
	echo "<a href='{$url}'>welcome</a>";
})->name('p');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

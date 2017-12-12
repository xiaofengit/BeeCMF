<?php

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| 后台管理路由
| 通过 RouteServiceProvider 加载，并且包含在 "backend" 路由组
| prefix = 'backend'
| namespace 'App\Http\Controllers\Backend'
|
*/
Route::get('/', 'IndexController@index')->name('backend.index');
Route::get('password/reset', 'IndexController@showResetForm')->name('backend.password.form');
Route::post('password/reset', 'IndexController@resetPassword')->name('backend.password.reset');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('backend.login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('backend.logout');

// Authentication Routes...
/*$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');*/
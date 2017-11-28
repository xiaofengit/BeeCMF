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
Route::get('/', 'IndexController@index');
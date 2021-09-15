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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::any('/wechat-menu/resources', [\App\Http\Controllers\HomeController::class, 'wechatMenuAjax']);
Route::any('/serve', [\App\Http\Controllers\HomeController::class, 'serve']);
Route::get('/clear-quota', [\App\Http\Controllers\HomeController::class, 'clearQuota']);

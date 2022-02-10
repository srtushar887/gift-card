<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Auth::routes();



Route::post('/user-custom-register-submit', [Controllers\Auth\UserCustomLoginController::class, 'custom_register'])->name('user.custom.register.submit');
Route::post('/user-custom-login-submit', [Controllers\Auth\UserCustomLoginController::class, 'custom_login'])->name('user.custom.login.submit');


Route::group(['middleware' => ['auth']], function() {
    Route::group(['prefix' => 'home'], function (){
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });
});





Route::prefix('admin')->group(function (){
    Route::get('/login', [Controllers\Auth\AdminLoginController::class,'showLoginform'])->name('admin.login');
    Route::post('/login', [Controllers\Auth\AdminLoginController::class,'login'])->name('admin.login.submit');
    Route::get('/logout', [Controllers\Auth\AdminLoginController::class,'logout'])->name('admin.logout');
});

Route::group(['middleware' => ['auth:admin']], function() {
    Route::prefix('admin')->group(function() {
        Route::get('/', [Controllers\Admin\AdminController::class,'index'])->name('admin.dashboard');
    });
});

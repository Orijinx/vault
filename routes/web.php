<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrijinxPageController;

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
//Маршрутк, отображающий главную страницу
// Route::any('/', 'MainController@IndexView');

Route::any('/vault', [App\Http\Controllers\MainController::class, 'IndexView']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/logout', function () {
//     Auth::logout();
//     return back();
// });

Route::get('/',[OrijinxPageController::class,'IndexView'])->name('index');

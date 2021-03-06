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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', "App\Http\Controllers\BookController@index");
Route::get('/tornament', function () {
    return view('tornament');
});

Route::resource("books","App\Http\Controllers\BookController");
Route::resource("teams","App\Http\Controllers\TeamController");
Route::resource('users', "App\Http\Controllers\UserController");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

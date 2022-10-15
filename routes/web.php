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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::post('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('home');
Route::get('/items/register', [App\Http\Controllers\ItemController::class, 'register'])->name('home');
Route::post('/items/register', [App\Http\Controllers\ItemController::class, 'register'])->name('home');
Route::post('/items/edit', [App\Http\Controllers\ItemController::class, 'edit'])->name('home');


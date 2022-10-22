<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
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

Auth::routes();

// この中はログイン必須。
Route::group(['middleware' => 'auth'], function(){
    Route::get('/',[ItemController::class, 'index'])->name('items.list');
    Route::get('/home',[HomeController::class, 'index'])->name('home');
    Route::post('/register', [HomeController::class, 'register'])->name('home');
    Route::get('/items/register', [ItemController::class, 'register'])->name('home');
    Route::post('/items/register', [ItemController::class, 'register'])->name('home');
    Route::post('/items/edit', [ItemController::class, 'edit'])->name('home');
});


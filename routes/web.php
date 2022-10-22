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
    Route::post('/register', [App\Http\Controllers\HomeController::class, 'register']);
    Route::get('/items/register', [App\Http\Controllers\ItemController::class, 'register']);
    Route::post('/items/register', [App\Http\Controllers\ItemController::class, 'register']);
    Route::post('/items/edit', [App\Http\Controllers\ItemController::class, 'edit']);
});


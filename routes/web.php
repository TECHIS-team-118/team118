<?php

use App\Http\Controllers\HomeController;
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

Auth::routes();

// この中はログイン必須。
Route::group(['middleware' => 'auth'], function(){
    Route::get('/home',[HomeController::class, 'index'])->name('home');
    //登録ボタン押された時
    Route::post('/register', [App\Http\Controllers\ItemController::class, 'create'])->name('items.create');
    //登録画面を返す
    Route::get('/items/register', [App\Http\Controllers\ItemController::class, 'register'])->name('items.register');
    //編集ボタンを押された時
    Route::post('/items/edit/{id}', [App\Http\Controllers\ItemController::class, 'update'])->name('items.update');
    //編集画面を返す
    Route::get('/items/edit/{id}', [App\Http\Controllers\ItemController::class, 'edit'])->name('items.edit');
    
});



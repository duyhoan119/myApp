<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;
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
Route::prefix('users')->name('users.')->group(function(){
    Route::get('/',[userController::class,'index'])->name('list');
    Route::get('/add/{user?}',[userController::class,'Form'])->name('add');
    Route::post('/store/{id?}',[userController::class,'store'])->name('store');
    Route::delete('/delete/{id}',[userController::class,'delete'])->name('delete');
});

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
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


Route::get('/',[BlogController::class,'index'])->name('blog.index');
Route::get('/blogs/{id}/detail',[BlogController::class,'show'])->name('blog.show');


Route::middleware('checkAuth')->group(function (){
    Route::prefix('blogs')->group(function (){
        Route::get('/auth',[BlogController::class,'indexAuth'])->name('blog.indexAuth');
        Route::get('/create',[BlogController::class,'create'])->name('blog.create');
        Route::post('/create',[BlogController::class,'store'])->name('blog.store');
        Route::get('/{id}/update',[BlogController::class,'edit'])->name('blog.edit');
        Route::post('/{id}/update',[BlogController::class,'update'])->name('blog.update');
        Route::get('/{id}/delete',[BlogController::class,'destroy'])->name('blog.destroy');

    });
});


Route::prefix('users')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('user.index');
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/create',[UserController::class,'store'])->name('user.store');
    Route::get('/{id}/update',[UserController::class,'edit'])->name('user.edit');
    Route::post('/{id}/update',[UserController::class,'update'])->name('user.update');
    Route::get('/{id}/delete',[UserController::class,'destroy'])->name('user.destroy');
    Route::get('/{id}/detail',[UserController::class,'show'])->name('user.show');

});

Route::get('register',[AuthController::class,"showForm"])->name('showForm');
Route::post('register',[AuthController::class,"register"])->name('register')->middleware('checkRegister');

Route::get('login',[AuthController::class,"showFormLogin"])->name('showFormLogin');
Route::post('login',[AuthController::class,"login"])->name('login');
Route::get('logout',[AuthController::class,"logout"])->name('logout');

Route::get('demo',function (){
   return view('demo');
});



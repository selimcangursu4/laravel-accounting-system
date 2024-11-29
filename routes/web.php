<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[LoginController::class, 'index'])->name('login');
Route::post('/login/post',[LoginController::class, 'login'])->name('login.post');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


Route::prefix('/sales')->group(function(){

    Route::get('/customers/view',[CustomerController::class,'index'])->name('customer.view');

});


Route::prefix('/settings')->group(function(){
    Route::get('/users/view',[UserController::class,'index'])->name('user.view');
    Route::get('/users/create',[UserController::class,'create'])->name('user.create');
    Route::post('/users/fetch',[UserController::class,'fetch'])->name('user.fetch');

});

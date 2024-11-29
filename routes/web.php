<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[LoginController::class, 'index'])->name('login');
Route::post('/login/post',[LoginController::class, 'login'])->name('login.post');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


Route::prefix('/sales')->group(function(){

    Route::get('/customers/view',[CustomerController::class,'index'])->name('customer.view');

});


Route::prefix('/settings')->group(function(){
    Route::get('/',[SettingController ::class,'index'])->name('settings.index');
    Route::get('/users/view',[UserController::class,'index'])->name('user.view');
    Route::get('/users/create',[UserController::class,'create'])->name('user.create');
    Route::post('/users/fetch',[UserController::class,'fetch'])->name('user.fetch');
    Route::post('/update-country', [UserController::class, 'changeCountry'])->name('country.change');
    Route::post('/change-city',[UserController::class, 'changeCity'])->name('city.change');
    Route::post('/users/create',[UserController::class, 'store'])->name('user.store');

});

<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',[LoginController::class, 'index'])->name('login');
Route::post('/login/post',[LoginController::class, 'login'])->name('login.post');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::post('send/sms',[SmsController::class,'singleSms'])->name('send.sms');



Route::prefix('/sales')->middleware('auth')->group(function(){

    Route::get('/customers/view',[CustomerController::class,'index'])->name('customer.view');
    Route::post('/customers/fetch',[CustomerController::class,'fetch'])->name('customer.fetch');
    Route::get('/customers/create',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/update-country', [CustomerController::class, 'changeCountry'])->name('customer.country.change');
    Route::post('/change-city',[CustomerController::class, 'changeCity'])->name('customer.city.change');
    Route::post('/customers/store',[CustomerController::class, 'store'])->name('customer.store');
    Route::post('/customers/spam/create',[CustomerController::class, 'spam'])->name('customer.spam.create');
    Route::get('/customers/edit/{id}',[CustomerController::class, 'edit'])->name('customer.edit');

});

Route::prefix('/settings')->middleware('auth')->group(function(){

    Route::get('/',[SettingController ::class,'index'])->name('settings.index');
    Route::get('/users/view',[UserController::class,'index'])->name('user.view');
    Route::get('/users/create',[UserController::class,'create'])->name('user.create');
    Route::post('/users/fetch',[UserController::class,'fetch'])->name('user.fetch');
    Route::post('/update-country', [UserController::class, 'changeCountry'])->name('country.change');
    Route::post('/change-city',[UserController::class, 'changeCity'])->name('city.change');
    Route::post('/users/create',[UserController::class, 'store'])->name('user.store');
    Route::post('/users/spam/create',[UserController::class, 'spam'])->name('user.spam.create');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/update',[UserController::class, 'update'])->name('users.update');

});

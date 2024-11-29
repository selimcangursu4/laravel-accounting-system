<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;




Route::get('/',[LoginController::class, 'index'])->name('login');
Route::post('/login/post',[LoginController::class, 'login'])->name('login.post');


Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


route::get('/master' ,function(){
    return view('partials.master');
});

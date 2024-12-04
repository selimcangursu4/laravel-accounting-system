<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarehouseController;
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
    Route::post('/customers/profile/update',[CustomerController::class, 'updateProfile'])->name('customer.profile.update');
    Route::post('/customers/address/update',[CustomerController::class, 'updateAddress'])->name('customer.address.update');
    Route::post('/customers/order-info/update',[CustomerController::class,'updateOrderInfo'])->name('customer.order-info.update');
    Route::post('/customers/representative/update',[CustomerController::class, 'updateRepresentative'])->name('customer.representative.update');

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

Route::prefix('/stock')->middleware('auth')->group(function(){

    Route::get('/warehouse/view',[WarehouseController::class,'index'])->name('warehouse.view');
    Route::get('/warehouse/create',[WarehouseController::class,'create'])->name('warehouse.create');
    Route::post('/update-country', [WarehouseController::class, 'changeCountry'])->name('warehouse.country.change');
    Route::post('/change-city',[WarehouseController::class, 'changeCity'])->name('warehouse.city.change');
    Route::post('/warehouse/update',[WarehouseController::class, 'store'])->name('warehouse.store');
    Route::get('/warehouse/fetch',[WarehouseController::class,'fetch'])->name('warehouse.fetch');
    Route::get('/warehouses/edit/{id}',[WarehouseController::class, 'edit'])->name('warehouses.edit');
    Route::post('/warehouses/update',[WarehouseController::class, 'update'])->name('warehouses.update');
    Route::post('/warehouses/delete',[WarehouseController::class, 'delete'])->name('warehouses.delete');

});


Route::prefix('acquisition')->middleware('auth')->group(function(){

    Route::get('/suppliers/view',[SupplierController::class,'index'])->name('suppliers.view');
    Route::get('/get-city',[SupplierController::class,'getCity'])->name('suppliers.getCity');
    Route::get('/get-district',[SupplierController::class,'getDistrict'])->name('suppliers.getDistrict');
    Route::get('/suppliers/fetch',[SupplierController::class,'fetch'])->name('suppliers.fetch');
    Route::get('/suppliers/create',[SupplierController::class,'create'])->name('suppliers.create');
    Route::post('/suppliers/store',[SupplierController::class,'store'])->name('suppliers.store');
    Route::get('/suppliers/edit/{id}',[SupplierController::class,'edit'])->name('suppliers.edit');
    Route::post('/suppliers/update',[SupplierController::class,'update'])->name('suppliers.update');
    Route::post('/suppliers/delete',[SupplierController::class,'delete'])->name('suppliers.delete');
    Route::post('/suppliers/passive',[SupplierController::class,'passive'])->name('suppliers.passive');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;




Route::get('/',function(){
    return view('welcome');
});

//Route::get('/',[Homecontroller::class,'index']);
Route::post('/user',[Homecontroller::class,'store'])->name('user.store');








// service routes

// Route::get('/service/create',[Servicecontroller::class,'create'])->name('create');

// Route::post('/service',[Servicecontroller::class,'store'])->name('store');

// Route::get('/service',[Servicecontroller::class,'index'])->name('index');

// Route::get('/service/{service}/edit',[Servicecontroller::class,'edit'])->name('edit');

// Route::put('/service/{service}',[Servicecontroller::class,'update'])->name('update');

// Route::delete('/service/{service}',[Servicecontroller::class,'destroy'])->name('delete');

// Route::get('/service/{service}',[Servicecontroller::class,'show'])->name('show');


Route::resource('service',ServiceController::class);

Route::get('/product/create',[ProductController::class,'create'])->name('product.create');

Route::post('/product',[ProductController::class,'store'])->name('product.store');








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

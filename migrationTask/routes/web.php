<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'user'], function () {
    //نمایش تمام رکورد های یک جدول
    Route::get('/search',[UserController::class,'fetchAll'])->name('user.serch');
    //نمایش یک رکورد از یک جدول با استفاده از آی دی
    Route::get('/search/id',[UserController::class,'fetchById']);
     //نمایش لیست
    Route::get('/list', [UserController::class, 'list'])->name('user.list');
    //اضافه کردن یوزر
    Route::get('/register',[UserController::class,'registerForm'])->name('register_form');
    Route::post('/register/form_submit',[UserController::class,'insertUser'])->name('insertUser');
    });
    //
    
Route::group(['prefix' => 'product'] , function (){
    Route::get('/register',[productController::class , 'create'])->name('product.create');
    Route::post('/register',[productController::class ,'store'])->name('product.store');
    Route::get('/list',[productController::class,'list'])->name('product.list');
});


Route::group(['prefix' => 'order'],function(){
    Route::get('/view',[OrderController::class,'viewCart']);
    Route::post('/add',[OrderController::class,'addCart']);
});







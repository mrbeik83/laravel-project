<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/data',function(){
//     dd(User::getAll());
// });
// Route::get('/all',function(){
//     // return User::getAll();
//     echo 1;
// });
Route::get('/search',function(){
    return UserController::fetchAll();
});
// });
Route::get('/search/id/{id}',function($id){
    return UserController::fetch_byId($id);
});
Route::get('/select',function(){
    return UserController::selectName();
});
Route::get('/insert',function(){
    return UserController::insertUser();
});
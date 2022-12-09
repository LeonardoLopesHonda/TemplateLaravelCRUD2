<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::resource('/user',UserController::class);
Route::resource('/products',ProductController::class);


/*Route::get('/view', function (){
    return view('viewDetails');
});*/
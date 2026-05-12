<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

//another way to return a view
// Route::view('/about', 'about');

Route::get('/home', function () {
    return view('home');
});


Route::get('/about/{name}', function ($name) {
    // echo $name;
    return view('about', ['name' => $name]);
});

//syntax to call a function from a controller
Route::get('/user/{name}', [userController::class, 'getUser']);
Route::get('/user', [userController::class, 'showUser']);
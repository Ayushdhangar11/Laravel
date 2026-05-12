<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userformControl;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/userForm' ,'userForm');

Route::post('/addUser' , [userformControl::class, 'addUser']);
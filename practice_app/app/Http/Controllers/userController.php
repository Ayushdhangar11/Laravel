<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //
    function getUser($name)
    {
        return $name;
    }

    function showUser()
    {
        return view('user');
    }
}

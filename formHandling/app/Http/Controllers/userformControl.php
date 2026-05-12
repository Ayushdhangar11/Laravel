<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userformControl extends Controller
{
    //
    function addUser(Request $request){
    //         echo $request->name;
//         echo $request->email;
//         echo $request->password;
//         echo $request->Gender;
//         $skills = $request->input('skills', []);
// foreach ((array) $skills as $skill) {
//     echo $skill . "<br>";

        $validated = $request->validate(
        [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'password' => 'required|string|min:8',
        'Gender' => 'required|in:male,female',
        'city' => 'required|in:Mumbai,Pune,Banglore',
        'skills' => 'sometimes|array',
        'skills.*' => 'in:php,node,js',
    ],
    [
        'name.required' => 'User name is required',
        'email.email' => 'Write email in correct format',
    ]
);
        return $request->all();
    }
         

}


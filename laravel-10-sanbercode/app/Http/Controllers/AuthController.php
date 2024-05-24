<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function send(Request $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');

        return view('welcome', ['firstName' => $firstName, 'lastName' => $lastName]);
    }

    public function welcome()
    {
        return view('welcome');
    }
}

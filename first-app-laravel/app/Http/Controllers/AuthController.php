<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('register');
    }

    public function welcome2() {
        return view('welcome2');
    }

    public function submit(Request $request) {
        $nama = $request ['name'];
        $lastname = $request ['lastname'];
        return view('welcome2', ['name' => $nama, 'lastname' => $lastname]);
    }
}

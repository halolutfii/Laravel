<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Table extends Controller
{
    public function table() {
        return view('table');
    }
};

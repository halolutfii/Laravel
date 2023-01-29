<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTable extends Controller
{
    public function datatable() {
        return view('datatable');
    }
}

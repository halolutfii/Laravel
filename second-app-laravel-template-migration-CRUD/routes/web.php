<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\DataTable;
use App\Http\Controllers\Table;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'welcome']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/submit', [AuthController::class, 'submit']);

Route::get('/table', [Table::class, 'table']);

Route::get('/datatable', [DataTable::class, 'datatable']);

Route::get('/castcreate', [CastController::class, 'create']);

Route::post('/cast',  [CastController::class, 'createe']);

Route::get('/cast', [CastController::class, 'index']);

Route::get('/cast/{cast_id}', [CastController::class, 'show']);

Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);

Route::put('/cast/{cast_id}', [CastController::class, 'update']);

Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);




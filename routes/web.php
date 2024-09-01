<?php

use App\Http\Controllers\AnuadaController;
use App\Http\Controllers\AnuadaSecondController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;


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

Route::get('/Anuada', [AnuadaController::class, 'anuada']);
Route::get('/Second', [AnuadaSecondController::class, 'ericson']);
Route::get('/About', [AboutController::class, 'About']);
Route::get('/Dashboard', [Dashboard::class, 'dashboard']);

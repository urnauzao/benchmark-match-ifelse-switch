<?php

use App\Http\Controllers\BenchmarkMatchController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exemplo1', [BenchmarkMatchController::class, 'exemplo1']);
Route::get('/exemplo2', [BenchmarkMatchController::class, 'exemplo2']);



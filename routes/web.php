<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});






Route::post('dashboard', [Controller::class, 'exhbit']);

Route::get('dashboard', [Controller::class, 'exhbit2']);

Route::get('header', [Controller::class, 'header']);

Route::get('welcome', [Controller::class, 'destroy']);
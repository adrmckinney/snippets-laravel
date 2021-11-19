<?php

use App\Http\Controllers\UserController;
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
Route::fallback(function () {
    return view('welcome');
});

// Auth::routes();

// Route::post('/register', 'App\HTTP\Controllers\UserController@store');
//Route::post('/register', 'UserController@store');
//Route::get('/users/', [UserController::class, 'store'])->middleware(['auth']);
Route::post('/register', [UserController::class, 'store'])->middleware(['auth']);

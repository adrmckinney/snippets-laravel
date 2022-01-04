<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/snippets', [\App\Http\Controllers\API\SnippetController::class, 'index']);
Route::post('/create-snippet', [\App\Http\Controllers\API\SnippetController::class, 'store']);
Route::get('/edit-snippet/{id}', [\App\Http\Controllers\API\SnippetController::class, 'edit']);
Route::put('/update-snippet/{id}', [\App\Http\Controllers\API\SnippetController::class, 'update']);
Route::delete('/delete-snippet/{id}', [\App\Http\Controllers\API\SnippetController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/register', 'UserController@store');
Route::post('/register', [\App\Http\Controllers\UserController::class, 'store'])->middleware(['auth']);

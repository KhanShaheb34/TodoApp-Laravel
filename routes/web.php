<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index']);
Route::post('/', [TodoController::class, 'store']);
Route::get('/create', [TodoController::class, 'create']);
Route::get('/{id}/edit', [TodoController::class, 'edit']);
Route::get('/{id}/complete', [TodoController::class, 'complete']);
Route::put('/{id}', [TodoController::class, 'update']);
Route::delete('/{id}', [TodoController::class, 'destroy']);
Route::get('/{id}', [TodoController::class, 'show']);

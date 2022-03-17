<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', [EventController::class, 'index']);
Route::get('/events/criar', [EventController::class, 'criar']);
Route::get('/events/entrar', [EventController::class, 'entrar']);
Route::get('/events/cadastrar', [EventController::class, 'cadastrar']);
Route::post('/events', [EventController::class, 'store']);

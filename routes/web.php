<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StronaGlownaController;
use App\Http\Controllers\InternalEventsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', StronaGlownaController::class);
Route::get('/wydarzenia-wewnetrzne', [InternalEventsController::class, 'index']);
Route::get('/wydarzenia-wewnetrzne/edycja/{id}', [InternalEventsController::class, 'edit']);
Route::post('/wydarzenia-wewnetrzne/aktualizacja/{id}', [InternalEventsController::class, 'update']);
Route::get('/wydarzenia-wewnetrzne/nowy', [InternalEventsController::class, 'create']);
Route::post('/wydarzenia-wewnetrzne/dodawanie', [InternalEventsController::class, 'addToDB']);
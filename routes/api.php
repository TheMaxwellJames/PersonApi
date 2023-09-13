<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/persons', [PersonController::class, 'store']); // CREATE

Route::get('/persons{id}', [PersonController::class, 'show']); // READ

Route::put('/persons{id}', [PersonController::class, 'update']); // UPDATE

Route::delete('/persons{id}', [PersonController::class, 'destroy']); // DELETE


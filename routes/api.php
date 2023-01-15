<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(["auth:sanctum"])->group(function () {
    Route::get('movie',[MovieController::class, 'index']);
    Route::get('/movie/{id}',[MovieController::class, 'detail']);
    Route::post('/movie-create', [MovieController::class, 'create']);
    Route::put('/movie/{id}', [MovieController::class, 'store_movie']);
    Route::delete('/movie/{id}', [MovieController::class, 'destroy']);
});

//Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);

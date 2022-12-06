<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\ArtController;
use App\Http\Controllers\api\DecelerationController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function () {
    Route::post("create_art", [ArtController::class, 'create']);
    Route::get("get_art", [ArtController::class, 'index']);
    Route::get("get_art/{id}", [ArtController::class, 'show']);
    Route::post("create_dd", [DecelerationController::class, 'create']);
    Route::get("get_dd", [DecelerationController::class, 'index']);
    Route::get("get_dd/{id}", [DecelerationController::class, 'show']);
});

Route::post("login", [AuthController::class, 'login']);

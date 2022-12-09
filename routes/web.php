<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DecelerationController;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\SheetController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('sheet_data', [SheetController::class, 'index']);
Route::get('insert_data', [SheetController::class, 'create']);
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('user', UserController::class);
    Route::resource('dd', DecelerationController::class);
    Route::resource('art', ArtController::class);
});

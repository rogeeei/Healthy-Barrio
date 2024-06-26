<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CitizenDetailsController;
use App\Http\Controllers\CitizenHistoryController;
use App\Models\CitizenDetails;

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
//Route::post('/login', [AuthController::class,  'login'])->name('user.login');
//Route::get('/logout', [AuthController::class, 'logout']);
Route::post('/user', [UserController::class,   'store'])->name('user.store');



Route::controller(UserController::class)->group(function () {
    Route::get('/user',                    'index');
    Route::put('/user/{id}',                'update')->name('user.update');
    Route::put('/user/email/{id}',          'email')->name('user.email');
    Route::delete('/user/{id}',             'destroy');
});

Route::controller(CitizenDetailsController::class)->group(function () {
    Route::get('/citizen',                     'index');
    Route::get('/citizen/{id}',                'show');
    Route::post('/citizen',                    'store');
    Route::delete('/citizen/{id}',             'destroy');
});

Route::controller(CitizenHistoryController::class)->group(function () {
    Route::get('/citizen-history',                     'index');
    Route::get('/citizen-history/{id}',                'show');
});

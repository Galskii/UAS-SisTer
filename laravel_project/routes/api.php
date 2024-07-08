<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\GuestController;
use App\Http\Controllers\API\VilaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('vila', VilaController::class);
Route::post('/vila/{id}', [VilaController::class, 'update']);
Route::resource('guest', GuestController::class);
Route::post('/guest/{id}', [GuestController::class, 'update']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register',[AuthController::class,'register']);
Route::post('/reset',[AuthController::class,'reset']);
Route::post('/forgot',[AuthController::class,'forgot']);
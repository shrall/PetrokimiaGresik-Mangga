<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\EducationController;
use App\Http\Controllers\Api\EstablishmentStatusController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\ReligionController;
use App\Http\Controllers\Api\SectorController;
use App\Http\Controllers\Api\SubSectorController;
use App\Http\Controllers\Api\User\UserController;
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

Route::post('login', [LoginController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);
Route::group(['prefix' => 'location'], function () {
    Route::get('/province', [LocationController::class, 'province']);
    Route::get('/city', [LocationController::class, 'city']);
    Route::get('/district', [LocationController::class, 'district']);
    Route::get('/village', [LocationController::class, 'village']);
});
Route::apiResource('sector', SectorController::class);
Route::apiResource('subsector', SubSectorController::class);
Route::apiResource('education', EducationController::class);
Route::apiResource('religion', ReligionController::class);
Route::apiResource('establishmentstatus', EstablishmentStatusController::class);

Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('user', UserController::class);
    Route::post('logout', [LoginController::class, 'logout']);
});

<?php

use App\Http\Controllers\AwareContactController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\FloodMonitorController;
use App\Http\Controllers\WifiController;
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

Route::get('aware-contacts', [AwareContactController::class, 'index']);
Route::get('facilities', [FacilityController::class, 'index']);
Route::get('flood-monitors', [FloodMonitorController::class, 'index']);
Route::get('complaints', [ComplaintController::class, 'index']);
Route::get('wifis', [WifiController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

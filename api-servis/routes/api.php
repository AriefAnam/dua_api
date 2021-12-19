<?php

use App\Http\Controllers\DataServisController;
use App\Http\Controllers\IdController;
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

Route::get('servis',[DataServisController::class,'index']);
Route::get('idservis',[IdController::class,'getID']);
Route::post('servis',[DataServisController::class,'create']);
Route::put('servis',[DataServisController::class,'update']);
Route::delete('servis',[DataServisController::class,'delete']);
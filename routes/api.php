<?php

use App\Http\Controllers\Api\GMSPurchasesController;
use App\Http\Controllers\Api\UserInfoController;
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


Route::middleware('api-checks')->group(function () {
    Route::get('/steamid', [UserInfoController::class, 'GetSID']);
    Route::get('/purchases', [GMSPurchasesController::class, 'getPurchases']);
});

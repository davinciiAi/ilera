<?php

use App\Http\Controllers\API\IPNController;
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

Route::group(['namespace' => 'API'], function () {
    Route::post('ipn-notify', [IPNController::class, 'IPNPayment']);
    Route::post('ipn-withdrawals', [IPNController::class, 'IPNWithdrawals']);
    Route::post('cancel-pm', [IPNController::class, 'cancelPM']);
    Route::post('success-pm', [IPNController::class, 'successPM']);
    Route::post('perfect-money', [IPNController::class, 'perfectMoney']);
    Route::post('payeer', [IPNController::class, 'payeer']);
});

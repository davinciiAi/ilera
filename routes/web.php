<?php

use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Admin\InvestmentController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\ReferralController;
use App\Http\Controllers\User\UserAccountController;
use App\Http\Controllers\User\UserDepositController;
use App\Http\Controllers\User\UserWithdrawalController;
use App\Http\Controllers\User\WithdrawalController;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [HomeController::class, 'login']);
Route::get('/login', [HomeController::class, 'loginPage']);
Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => ['auth']], function () {

    //User Routes
    Route::get('dashboard', [UserAccountController::class, 'index']);
    Route::get('add_dependent', [UserAccountController::class, 'addDependent']);
    Route::post('add_dependent', [UserAccountController::class, 'addNewDependent'])->name('add_dependent');
    Route::get('dependents', [UserAccountController::class, 'dependents'])->name('dependents');
});

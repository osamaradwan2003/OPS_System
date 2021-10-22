<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\WalletController;
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

Route::prefix('stores')->middleware(['api'])->name('stores.')->group(function(){
  Route::post(
    '/getData',
    [StoresController::class, 'getData']
  )->name('getDate');
});


Route::prefix('wallet')->middleware(['api'])->name('wallet.')->group(function(){
  Route::post(
    '/getData',
    [WalletController::class, 'getData']
  )->name('getDate');
});

Route::prefix('employee')->middleware(['api'])->name('employee.')->group(function(){
  Route::post(
    '/getData',
    [EmployeeController::class, 'getData']
  )->name('getData');
});


<?php

use Illuminate\Support\Facades\Route;
use Modules\Picker\Http\Controllers\PickOrderController;
use Modules\Picker\Http\Controllers\ListOrdersController;
use Modules\Picker\Http\Controllers\EndPickOrderController;
use Modules\Picker\Http\Controllers\GetOrderDetailsController;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

Route::prefix('v1')->group(function () {
    Route::get('/orders', ListOrdersController::class);
    Route::get('/orders/{id}', GetOrderDetailsController::class);
    Route::post('/orders/{id}/pick', PickOrderController::class);
    Route::post('/orders/{id}/end-picking', EndPickOrderController::class);
});

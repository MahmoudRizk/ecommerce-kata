<?php

use Illuminate\Support\Facades\Route;
use Modules\Delivery\Http\Controllers\ListOrdersController;
use Modules\Delivery\Http\Controllers\PickOrderForDeliveryController;

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
    Route::post('/orders/{id}/pick', PickOrderForDeliveryController::class);
});

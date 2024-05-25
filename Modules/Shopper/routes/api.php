<?php

use Illuminate\Support\Facades\Route;
use Modules\Shopper\Http\Controllers\GetOrdersController;
use Modules\Shopper\Http\Controllers\CancelOrderController;
use Modules\Shopper\Http\Controllers\InsertOrderController;
use Modules\Shopper\Http\Controllers\ConfirmOrderController;
use Modules\Shopper\Http\Controllers\ListProductsController;
use Modules\Shopper\Http\Controllers\CustomerSignupController;
use Modules\Shopper\Http\Controllers\GetOrderDetailsController;

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
    Route::get('/products', ListProductsController::class);
    
    Route::post('/signup', CustomerSignupController::class);

    Route::get('/orders', GetOrdersController::class);
    Route::get('/orders/{id}', GetOrderDetailsController::class);

    Route::put('/orders/{id}', InsertOrderController::class);
    Route::post('/orders/{id}/confirm', ConfirmOrderController::class);
    Route::post('/orders/{id}/cancel', CancelOrderController::class);
    
});

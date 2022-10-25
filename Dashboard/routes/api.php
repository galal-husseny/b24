<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apis\ProductsController;

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


Route::prefix('dashboard')->group(function(){
    Route::prefix('products')->controller(ProductsController::class)->group(function(){
        Route::get('/','index'); //     api/v1/dashboard/products/
        Route::get('/create','create'); // api/v1/dashboard/products/create
        Route::get('/edit/{id}','edit'); // api/v1/dashboard/products/edit/1
        Route::post('/store','store'); //api/v1/dashboard/products/store
        Route::put('/update/{id}','update');
        Route::delete('/delete/{id}','delete');
    });
});

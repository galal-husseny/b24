<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apis\ProductsController;
use App\Http\Controllers\Apis\Auth\LoginController;
use App\Http\Controllers\Apis\Auth\ProfileController;
use App\Http\Controllers\Apis\Auth\RegisterController;

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


Route::prefix('dashboard')->middleware('lang')->group(function(){
    Route::prefix('products')->middleware('auth.api')->controller(ProductsController::class)->group(function(){
        Route::get('/','index');
        Route::get('/create','create');
        Route::get('/edit/{id}','edit');
        Route::post('/store','store');
        Route::post('/update/{id}','update');
        Route::post('/delete/{id}','delete');
    });
    Route::prefix('admins')->group(function(){
        Route::post('register',RegisterController::class);
        Route::post('login',[LoginController::class,'login']);
        Route::middleware('auth.api')->group(function(){
            Route::post('logout-current-token',[LoginController::class,'logoutCurrentToken']);
            Route::post('logout-all-tokens',[LoginController::class,'logoutAllTokens']);
            Route::post('logout-specific-token',[LoginController::class,'logoutSpecificToken']);
            Route::get('profile',ProfileController::class );
       });
    });
});

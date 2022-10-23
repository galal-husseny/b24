<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard',[DashboardController::class,'index']);
Route::get('dashboard/products',[ProductsController::class,'index']);
Route::get('dashboard/products/create',[ProductsController::class,'create']);
Route::get('dashboard/products/edit/{id}',[ProductsController::class,'edit']);
Route::post('dashboard/products/store',[ProductsController::class,'store']);


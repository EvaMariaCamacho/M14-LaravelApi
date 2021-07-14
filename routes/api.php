<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PaintingController;
use App\Http\Controllers\AutenticarController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route Shop Controller

Route::get('shops', [ShopController::class, 'index']);
Route::post('shops', [ShopController::class, 'store']);
Route::get('shops/{shop}', [ShopController::class, 'show']);
Route::put('shops/{shop}', [ShopController::class, 'update']);
Route::delete('shops/{shop}', [ShopController::class, 'destroy']);
Route::resource('shop', App\Http\Controllers\ShopController::class);


//Route Painting Controller

Route::get('paintings', [PaintingController::class, 'index']);
Route::post('paintings', [PaintingController::class, 'store']);
Route::get('paintings/{painting}', [PaintingController::class, 'show']);
Route::put('paintings/{painting}', [PaintingController::class, 'update']);
Route::delete('paintings/{painting}', [PaintingController::class, 'destroy']);

Route::post('registro', [AutenticarController::class, 'registro']);
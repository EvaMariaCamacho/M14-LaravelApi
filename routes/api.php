<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\PaintingController;
use App\Http\Controllers\AutenticarController;
use App\Http\Controllers\API\ShopVueController;
use App\Http\Controllers\API\UserController;


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

Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::post('logout', [UserController::class, 'logout'])->middleware('auth:sanctum');

Route::group(['prefix' => 'shopvue'], function () {
    Route::get('/', [ShopVueController::class, 'index']);
    Route::post('add', [ShopVueController::class, 'add']);
    Route::get('edit/{id}', [ShopVueController::class, 'edit']);
    Route::post('update/{id}', [ShopVueController::class, 'update']);
    Route::delete('delete/{id}', [ShopVueController::class, 'delete']);
});

//Route::get('/demo-url',  function  (Request $request)  {
 //  return response()->json(['Laravel 8 CORS Demo']);
//});

//Route Shop Controller

//Route::get('shops', [ShopController::class, 'index']);
//Route::post('shops', [ShopController::class, 'store']);
//Route::get('shops/{shop}', [ShopController::class, 'show']);
//Route::put('shops/{shop}', [ShopController::class, 'update']);
//Route::delete('shops/{shop}', [ShopController::class, 'destroy']);


//Route Painting Controller

//Route::get('paintings', [PaintingController::class, 'index']);
//Route::post('paintings', [PaintingController::class, 'store']);
//Route::get('paintings/{painting}', [PaintingController::class, 'show']);
//Route::put('paintings/{painting}', [PaintingController::class, 'update']);
//Route::delete('paintings/{painting}', [PaintingController::class, 'destroy']);


//Route Registros / acceso autenticar

Route::post('registro', [AutenticarController::class, 'registro']);
Route::post('acceso', [AutenticarController::class, 'acceso']);
Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::post('cerrarsesion', [AutenticarController::class, 'cerrarSesion']);
    //Route::apiResource('shops', App\Http\Controllers\ShopController::class);
    Route::apiResource('paintings', App\Http\Controllers\PaintingController::class);
});
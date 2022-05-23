<?php

use App\Http\Controllers\CodigoPostalController;
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

//Route::apiResource('zip-codes', CodigoPostalController::class);
Route::get('zip-codes/{zip_code}', [CodigoPostalController::class, 'search'])->name('zip-codes.search');
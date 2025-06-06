<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get
Route::get('categories',[CategoryController::class,'index']);
Route::post('categories',[CategoryController::class,'store']);
Route::put('categories/{category}',[CategoryController::class,'update']);
Route::delete('categories/{category}',[CategoryController::class,'destroy']);
Route::get('categories/{category}',[CategoryController::class,'show']);


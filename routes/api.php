<?php

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
Route::post('shirt/storm',[\App\Http\Controllers\ShirtPoroductController::class,'Store']);
Route::post('shirt/storm1',[\App\Http\Controllers\ShirtPoroductController::class,'Store1']);
Route::get('shirt/Show',[\App\Http\Controllers\ShirtPoroductController::class,'Show']);


Route::post('User/storm',[\App\Http\Controllers\Usercontroller::class,'Store']);
Route::get('User/{user}/Show',[\App\Http\Controllers\Usercontroller::class,'Show']);
Route::Put('User/{user}/update',[\App\Http\Controllers\Usercontroller::class,'update']);
Route::delete('User/{user}/delete',[\App\Http\Controllers\Usercontroller::class,'delete']);
Route::get('User/ShowAll',[\App\Http\Controllers\Usercontroller::class,'ShowAll']);

Route::middleware('auth,sanctum')->group(function (){

});

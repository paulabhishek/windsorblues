<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController;

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
Route::get("upcomingevent", [EventController::class, 'index']);
//Route::group(['namespace' => 'Api', 'prefix' => 'v1'], function () {
//    Route::apiResource('events', 'EventController');
////    Route::apiResource('images', 'ImageController');
//});


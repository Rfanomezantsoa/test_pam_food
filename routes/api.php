<?php

use App\Http\Controllers\Api\aff\HeadlineHeroController;
use App\Http\Controllers\Api\aff\ImageBoxController;
use App\Http\Controllers\Api\com\ArticleController;
use App\Http\Controllers\Api\meal\FoodController as MealFoodController;
use App\Http\Controllers\Api\meal\MenuController;
use App\Http\Controllers\Api\sys\ReservationController;
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

Route::apiResource('foods',MealFoodController::class);
Route::apiResource('headlineheros',HeadlineHeroController::class);
Route::apiResource('imageboxes',ImageBoxController::class);


Route::get('/menus/name/{label}',[MenuController::class,'findbyname'])
    ->name('menus.label')
    ->where('label' , '[a-z]+');
Route::apiResource('menus',MenuController::class);
Route::apiResource('articles',ArticleController::class);

Route::put('/reservations/validate/{reservations}',[ReservationController::class,'setvalidate'])
    ->name('menus.validate')
    ->where('label' , '[0-9]+');

Route::put('/reservations/unvalidate/{reservations}',[ReservationController::class,'setunvalidate'])
    ->name('menus.unvalidate')
    ->where('label' , '[0-9]+');

Route::apiResource('reservations',ReservationController::class);




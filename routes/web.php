<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeagueController;
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


Route::get("/login",[AuthenticationController::class,"login"])->name("login");
Route::post("/login",[AuthenticationController::class,"authentication"]);

Route::group(["middleware"=>["auth"]],function (){
    Route::get("/",[DashboardController::class,"dashboard"]);
    Route::group(["prefix"=>"/league"],function (){
        Route::get("/schedule",[LeagueController::class,"schedule"]);
        Route::get("/table",[LeagueController::class,"table"]);
    });

    Route::group(["prefix"=>"/system"],function (){
        Route::get("/users",[\App\Http\Controllers\UserController::class,"users"]);
        Route::get("/teams",[\App\Http\Controllers\TeamController::class,"teams"]);
    });
});

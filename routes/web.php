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
Route::get("/schedule/users",[LeagueController::class,"scheduleForUsers"]);
Route::get("/fixture",[LeagueController::class,"scheduleForUsers"]);
Route::get("/",[LeagueController::class,"leagueTable"]);
Route::get("/schedule/fixtures",[LeagueController::class,"scheduleForUsers"]);
Route::group(["middleware"=>["auth"]],function (){
    Route::get("/dashboard",[DashboardController::class,"dashboard"]);
    Route::get("/logout",[AuthenticationController::class,"logout"]);
    Route::group(["prefix"=>"/league"],function (){
        Route::get("/schedule",[LeagueController::class,"schedule"]);
        Route::get("/detail/{id}",[LeagueController::class,"matchdetail"]);
        Route::post("/detail/{id}",[LeagueController::class,"postmatchdetail"]);
        Route::get("/detail/{id}/start",[LeagueController::class,"startmatch"]);
        Route::get("/detail/{id}/end",[LeagueController::class,"endmatch"]);
        Route::post("/detail/{id}",[LeagueController::class,"postMatchDetail"]);
        Route::get("/reschedule/{id}",[LeagueController::class,"reschedule"]);
        Route::post("/reschedule/{id}",[LeagueController::class,"postReschedule"]);
        Route::get("/table",[LeagueController::class,"table"]);
    });

    Route::group(["prefix"=>"/system"],function (){
        Route::get("/users",[\App\Http\Controllers\UserController::class,"users"]);
        Route::get("/users/create",[\App\Http\Controllers\UserController::class,"createUser"]);
        Route::post("/users/create",[\App\Http\Controllers\UserController::class,"postCreateUser"]);

        Route::get("/teams",[\App\Http\Controllers\TeamController::class,"teams"]);
        Route::get("/teams/detail/{id}",[\App\Http\Controllers\TeamController::class,"teamDetail"]);
        Route::get("/teams/player/create/{id}",[\App\Http\Controllers\TeamController::class,"createTeamPlayer"]);
        Route::post("/teams/player/create/{id}",[\App\Http\Controllers\TeamController::class,"postCreateTeamPlayer"]);
        Route::get("/teams/create",[\App\Http\Controllers\TeamController::class,"createTeam"]);
        Route::get("/teams/player/{id}",[\App\Http\Controllers\TeamController::class,"playerStatsById"]);
        Route::post("/teams/create",[\App\Http\Controllers\TeamController::class,"postCreateTeam"]);

        Route::get("/league",[\App\Http\Controllers\LeagueController::class,"league"]);
        Route::get("/league/create",[\App\Http\Controllers\LeagueController::class,"createLeague"]);
        Route::post("/league/create",[\App\Http\Controllers\LeagueController::class,"postCreateLeague"]);

    });
});

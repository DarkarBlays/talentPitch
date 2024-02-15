<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ChallengesController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProgramsParticipantsController;


//Obteniendo todas las rutas para la api de Users
Route::apiResource('users',UsersController::class);

//Obteniendo todas las rutas para la api de challenges
Route::apiResource('challenges',ChallengesController::class);

//Obteniendo todas las rutas para la api de programs
Route::apiResource('programs',ProgramsController::class);

//Obteniendo todas las rutas para la api de companies
Route::apiResource('companies',CompaniesController::class);

//Obteniendo todas las rutas para la api de programs_participants
Route::apiResource('programs_participants',ProgramsParticipantsController::class);
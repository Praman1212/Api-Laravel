<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('student',[ApiController::class,'index']);

Route::post('student',[ApiController::class,'store']);
//Showing the data
Route::get('student/{student}',[ApiController::class,'show']);

//Edit
Route::get('student/{student}/edit',[ApiController::class,'edit']);
//Update
Route::put('student/{student}/update',[ApiController::class,'update']);
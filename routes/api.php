<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('student',[ApiController::class,'index']);

Route::post('student',[ApiController::class,'store']);

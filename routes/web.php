<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::get('student',[ApiController::class,'viewPage']);

Route::post('student',[ApiController::class,'store'])->name('student.store');
<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

//Get all data
Route::get('student',[ApiController::class,'viewPage']);

//Store data
Route::post('student',[ApiController::class,'store'])->name('student.store');

//Edit
// Route::get('student/{student}/edit',[ApiController::class,'edit'])->name('student.edit');


//Update data
Route::put('student/{student}/update',[ApiController::class,'update']);
 
//Delete data
// Route::delete('student/{student}',[ApiController::class,'delete'])->name('student.delete');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskController;

Route::get('/', [taskController::class,'index']) ->name('home');




// create route
Route::get('/create', function () {
    return view('create');
})->name('create');

// edit route
Route::get('/edit/{id}', [taskController::class,'edit'])->name('edit');;


// create todo route
Route::post('/create', [taskController::class,'store'])->name('store');


//delete todo route
Route::get('/delete/{id}', [taskController::class,'delete'])->name('delete');

//update todo route
Route::post('/update', [taskController::class,'updateData'])->name('updateData');
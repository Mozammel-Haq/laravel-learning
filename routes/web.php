<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\LearnJobsController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', [LearnJobsController::class,'index']);

Route::get('/contact', [contactController::class,'index']);
Route::get('/contact/update/{id}', [contactController::class,'update']);


Route::get('/single_job/{id}', function ($id) {

    return view('single_job',["id"=>$id]);
});
Route::get('/students', [StudentController::class,'index']);
Route::get('/students/create', [StudentController::class,'create']);
Route::get('/students/update/{id}', [StudentController::class,'update']);
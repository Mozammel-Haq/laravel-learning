<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    $jobs = [
        [
            "id"=>1,
            "name"=>"Programmer",
            "sallery"=> 5000
        ],
        [
           "id"=>2,
            "name"=>"Teacher",
            "sallery"=> 7000 
        ],
        [
           "id"=>3,
            "name"=>"Graphic Designier",
            "sallery"=> 10000 
        ]
        ];
    return view('jobs',["jobs"=>$jobs]);
});


Route::get('/contact', [contactController::class,'index']);
Route::get('/contact/update/{id}', [contactController::class,'update']);


Route::get('/single_job/{id}', function ($id) {

    return view('single_job',["id"=>$id]);
});
Route::get('/students', [StudentController::class,'index']);
Route::get('/students/create', [StudentController::class,'create']);
Route::get('/students/update/{id}', [StudentController::class,'update']);
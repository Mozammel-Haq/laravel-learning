<?php

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
Route::get('/contact', function () {
    return view('contact');
});


Route::get('/single_job/{id}', function ($id) {

    return view('single_job',["id"=>$id]);
});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnJobsController extends Controller
{
    function index(){
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
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
        return view("students.index");
    }
    function create(){
        return view("students.create");
    }
    function update(Request $request){
        $id = $request->id;
        return view("students.edit",['id'=>$id]);
    }
}

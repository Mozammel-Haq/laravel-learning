<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    function index(){
        return "This is the Contact Page Coming From Controller";
    }

    function update(Request $request){
        $id = $request->id;
        return "The contact is deleted Successfully id = $id";
    }
}

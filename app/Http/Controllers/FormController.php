<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request){
        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        return view('result', compact('name','age','gender'));
    }

}

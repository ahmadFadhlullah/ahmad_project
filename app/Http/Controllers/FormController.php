<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class FormController extends Controller
{
    public function index(Request $request){
        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        return view('result', compact('name','age','gender'));
    }

    public function store(Request $request){
        $person = new Person();
        $person->name = $request->name;
        $person->gender = $request->gender;
        $person->age = $request->age;
        $person->save();
        return redirect('/database');
    }

}

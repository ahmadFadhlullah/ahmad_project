<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
class FormController extends Controller
{
    public function index(){
        $all = Person::all();
        return view('table',compact('all'));
    }

    public function store(Request $request){
        $person = new Person;
        $person->name = $request->name;
        $person->gender = $request->gender;
        $person->age = $request->age;

        $person->save();
        return redirect('/');

    }
    public function show($id){
        $person = Person::find($id);

        return view('result',compact('person'));
    }

    public function create(){
        return view('welcome');
    }

    public function edit($id){
        $person = Person::find($id);

        return view('edit',compact('person'));
    }

    public function update(Request $request, $id ){
        $person = Person::find($id);
        $person->name = $request->name;
        $person->gender = $request->gender;
        $person->age = $request->age;

        $person->save();
        return redirect('/');
    }
}

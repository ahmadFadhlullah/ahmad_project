<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\table_pengguna;
class Ahmad extends Controller
{
    public function show(){
        $tampil = table_pengguna::all();
        return view('hello', compact('tampil'));
    }
    public function add(Request $request){
        $pengguna = new table_pengguna;
        $pengguna->nama = $request->nama;
        $pengguna->umur = $request->umur;
        $pengguna->save();
        return redirect('/');
    }
    public function form(){
        return view('form');
    }
}

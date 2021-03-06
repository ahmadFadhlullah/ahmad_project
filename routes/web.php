<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return "Hello";
})->name('login');

Route::get('/register' , function(){
    return "World";
})->name('register');

Route::get('/home', function(){
    return "hello";
})->name('home');

Route::get('/database', 'Ahmad@show');
Route::get('/form','Ahmad@form');
Route::post('/add', 'Ahmad@add');
Route::post('/result','FormController@store');

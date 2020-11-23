<?php

use Illuminate\Support\Facades\Route;

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

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



// Route::get('/database', 'Ahmad@show');
// Route::get('/form','Ahmad@form');

// Route::get('/login', function(){
//     return "Hello";
// })->name('login');

// Route::get('/register' , function(){
//     return "World";
// })->name('register');

// Route::get('/home', function(){
//     return "hello";
// })->name('home');





Route::get('/','FormController@index');
Route::post('/result','FormController@store');
Route::get('/result/{id}','FormController@show');
Route::get('/create','FormController@create');
Route::get('/edit/{id}','FormController@edit');
Route::put('/edit/{id}','FormController@update');

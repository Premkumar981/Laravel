<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Add two numbers
//Using associative array
Route::get('/add/{num1}/{num2}', function ($num1,$num2) {
    return view('add',['num1'=>$num1,'num2'=>$num2]);
});

// Multiplication of two numbers
Route::get('/mult/{num1}/{num2}', function ($num1,$num2) {
    return view('mult',['num1'=>$num1,'num2'=>$num2]);
});
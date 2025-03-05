<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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

// Subtraction of two numbers
Route::get('/subt/{num1}/{num2}', function ($num1,$num2) {
    return view('subt',['num1'=>$num1,'num2'=>$num2]);
});

Route::get('/firstcontroller',[MyController::class, 'returnString']);
Route::get('/hello/{name}/{age}', [MyController::class, 'routewithparam']);
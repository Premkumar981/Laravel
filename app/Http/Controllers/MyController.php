<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function returnString(){
        return "This is text from my controller";
    }

    public function routewithparam($name,$age){
        return "Hello $name and my age is $age";
    }
}

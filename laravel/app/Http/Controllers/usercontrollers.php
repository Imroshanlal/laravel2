<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontrollers extends Controller
{
    public function __construct()
    {

$this->middleware('test2');
    
    }
    public function showpath()
    {
    	echo "This is the show path function";
    }

}

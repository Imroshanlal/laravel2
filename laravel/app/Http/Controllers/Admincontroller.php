<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

public function index()
{
echo "hello i am from artisan controller ";
}


public function multipleparameters($number,$second)
{
	echo "i'm $number and $second";
	
}
}
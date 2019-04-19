<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class anurag extends Controller
{
    //

public function index(){
echo "hello i am from artisan controller ";
}

public function parameter($number)
{
	echo "hello i am from admin controller";
	echo "number passed is $number<hr>";
}
}
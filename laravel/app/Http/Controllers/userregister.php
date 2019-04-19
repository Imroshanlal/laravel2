<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\http\Request;
use App\http\Controller\Controller;

class userregister extends Controller
{
    public function postregister(request $request){

    $firstname=$request->input('firstname');
    echo 'firstnamename'.$firstname.'<br>';
     $lastname=$request->input('lastname');
    echo 'lastname'.$lastname.'<br>';
     $phone no=$request->input('firstname');
    echo 'firstname'.$firstname.'<br>';
}
}
?>
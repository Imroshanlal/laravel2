<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gmail extends Controller
{
    public function basic_email()
    {
    	Mail::send(['text' =>'mail'],['name'=>"samir"],function($message)
    	{
    		$message->to('itachis420@gmail.com',' anurag')->subject
    		('laravel basic testing');
    		$message->from('itachis420@gmail.com','anurag');
    	});
    	echo "Basic email sent.check your mail";
    }

    public function attachment_mail()
    {


Mail::send(['text' =>'mail'],['name'=>"samir"],function($message)
	{
    		$message->to('itachis420@gmail.com',' anurag')->subject
    		('laravel  testing mail with attachment');
    		$message->attach('C:\Users\anny\Pictures\Screenshots.png');
    		$message->attach('');
    		$message->attach('');

    	});
    	echo "Email sent with attachment.check your inbox.";
    }

}


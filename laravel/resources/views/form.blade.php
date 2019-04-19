@extends('layout.masterdata')
@section('title')
About us
@section('body')
<h1>This is my form page</h1>
<input type="text" name="">
{{Form::text('price')}}
{{Form::text('price',50$,[
'class'=>"form_control",
'placeholder'=>'Give a price'
])}}
{{form::number('level',10),
'max'=>20,
'min'=>5,

}}
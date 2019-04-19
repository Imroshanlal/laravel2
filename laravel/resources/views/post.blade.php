@extends('layout.master')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md"></div>
		<div class="panel panel-default">
			<div class="panel-heading">
				share
			</div>
			<div class="panel-body">
				<form action="{{url('postnew')}}" method="post">
                 {{csrf_field()}}
                 @foreach(range(0,4) as $x)
                 <div class="form-group{{$errors->has('emails.'.$x)?'has-error':''}}">
                <label for="email-{{$x}}" class="control-label">
                Email #{{$x}}
                </label>
                <input type="text" name="emails[]" id="email-{{$x}}" class="form-control" value="{{old('emails'.$x)}}">
                 </div>
                 @if($errors->has('emails.'.$x))
                 <span class="help-block">
                 	{{$errors->first('email.'.$x)}}
                 </span>
                 @endif
                 @endforeach
                 <div ><input type="submit" class="form-group" value="send" name="" class="btn btn-primary" >

                 </div>
				</form>
			</div>
		</div>
	</div>
</div>

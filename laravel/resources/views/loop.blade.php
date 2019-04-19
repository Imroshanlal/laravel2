{{--this comment will not be in the renderd html--}}
{{--condtional Directives--}}
{{--if statment--}}
@if (count($records)==1)
i have one record!
@elseif(count($records)>1)
i have multiple records
@else
i dont have records
@endif
<br><br>
{{--for loop--}}
@for(@i==0;$i<10;$i++)
the current value is{{$i}}<br>
@endfor
<br>
{{--for each--}}
@foreach ($user as $user)
<p>this is user {{$user}}</p>
@endforeach
{{--forelse}}
@forelse($user as $user)
<li>{{$user}}</li>
@empty
<p>no user</p>
@endforelse
{{--while loop}}
@while($num!=10)
{{$num}}
<?php $num=$num+1?>
@end while
<br><br>
{{--switch}}
<?php $j=1;?>
@switch($j)
@case(1)
<?php echo"switch case 1";?>
@break
@case(2)
<?php echo"switch case 2";?>
@break
@default
<?php echo "switch  case 3";?>
@endswitch
<br>
{{--include}}
@include('child')
{{--isset}}
@isset($name)
{{$name}}<p>is defiend  and not null</p>
@end isset
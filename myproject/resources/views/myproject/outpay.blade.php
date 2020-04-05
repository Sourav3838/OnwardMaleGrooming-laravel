@extends('myproject.account')
@section('content')
<div style="font-size:20px;font-weight:20px;">
<p style="color:white;"><b>your choices</b></p>
<p style="color:white;"><b>{{$total}}</b></p>
<p style="color:white;"><b>{{$count}}</b></p><div>
  <a class="button"href="{{url('/paymentoutorder'.'/'.$name.'/'.$total.'/'.$count)}}" class="btn btn-md btn-danger">click to proceed</a>
@stop

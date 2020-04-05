@extends('myproject.admin')
@section('admincontent')
<style>
input[type=email] ,input[type=text],input[type=number],input[type=time],input[type=date]{
width: 40%;
padding: 12px 20px;

display: inline-block;


}
input[type=password]{
 width: 75%;
 padding: 12px 20px;

 display: inline-block;

}
input[type=submit] {
background-color: red;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 10%;
border-radius: 40px;
}

input[type=submit]:hover {
opacity: 0.8;
}


@media screen and (max-width: 300px) {

input[type=submit] {
   width: 100%;
}
}

</style>
<form action={{url('/searchuser/'.$name.'/'.$count)}} >
<p  style="font-size:20px;font-weight:20px;color:white;">enter user id:-</p>
  <input type="number" name="userid" palceholder="enter order id">
  <input type="submit" name="submitsearch" value="search">
</form>

<table border=2  style="font-size:20px;font-weight:20px;color:white;">
  <tr>
    <th>id<th>
        <th>first<th>
            <th>last<th>
                <th>email<th>
                    <th>address<th>
                      <th>telephone<th>
    </tr>
@foreach($user as $userval)
<?php $count++ ?>
{{-- tried using  {{$count++}} but it always printedthe incremented value on the page--}}
<tr>
  <td>{{$userval->id}}<td>
      <td>{{$userval->first}}<td>
          <td>{{$userval->last}}<td>
              <td>{{$userval->email}}<td>
                  <td>{{$userval->address}}<td>
                    <td>{{$userval->tel}}<td>
  </tr>
@endforeach
</table>
<p  style="font-size:20px;font-weight:20px;color:white;">total appointments :- {{$count}}</p>
@stop

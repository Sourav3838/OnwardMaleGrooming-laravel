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
width: 30%;
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

<center>
<form action={{url('/addartistverify/'.$name)}}><br><br>
<p  style="font-size:20px;font-weight:20px;color:white;">  artist name:-</p><input type='text' name='artistname'><br>
<p  style="font-size:20px;font-weight:20px;color:white;">    artist address:</p><input type='text' name='artistaddress'><br>
  <p  style="font-size:20px;font-weight:20px;color:white;">    artist tel no.:-</p><input type='number' name='artistnumber'><br>
        <input type='submit' name='submit_artist' value='add an artist'><br>
</form></center>
@stop

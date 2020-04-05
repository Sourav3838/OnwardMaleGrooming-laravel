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
<form action={{url('/deleteartistverify/'.$name)}}  >

  <p style="font-size:20px;font-weight:20px;color:white;">enter artist id:-</p><input type='number' name='artistid'>
            <input type='submit' name='submit_artist' value='delete'>
</form>
@stop

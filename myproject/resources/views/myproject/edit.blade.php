@extends('myproject.account')
@section('content')
<center>
<form action="{{url('edit/editdetails',$name)}}" style="font-size:20px;font-weight:20px;">
  @csrf
  <p>first name:
    <input name="first" type="text" >
  </p>
  <p>last name:
    <input name="last" type="text">
        </p>
      <p>address:
        <input name="address" type="text" >
      </p>
      <p>password:
        <input name="password" type="password">
            </p>
            <p>confirm:
              <input name="confirm" type="password">
                  </p>
      <p>enter age:
        <input name="age" type="number">
          </p>
          <p>telephone:
            <input name="tel" type="tel">
              </p>
              <input type="submit" name="submit" value="edit details" class="btn btn-md btn-warning">
</form></center>
@stop

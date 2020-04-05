@extends('myproject.account')
@section('content')


<form action={{url('/searchorder',$name)}}>
  <p style="font-size:20px;font-weight:20px;">enter order id to search</p>
  <input type="number" name="searchid" palceholder="enter order id">
  <input type="submit" name="submitsearch" value="search">
</form>
<table border=2 style="font-size:20px;font-weight:20px;color:white;">
  <tr>
    <th>email<th>
        <th>address<th>
            <th>facilities<th>
                <th>order number<th>
                    <th>amount<th>
                      <th>entry time<th>
                          <th>entry date<th>
                              <th>category<th>
                                  <th>action<th>
    </tr>
@foreach($user4 as $userval)
<tr>
  <td>{{$userval->email}}<td>
      <td>{{$userval->address}}<td>
          <td>{{$userval->facilities}}<td>
              <td>{{$userval->ordernum}}<td>
                  <td>{{$userval->amount}}<td>
                    <td>{{$userval->entrytime}}<td>
                        <td>{{$userval->entrydate}}<td>
                            <td>{{$userval->category}}<td>
                                <td>{{$userval->action}}<td>
  </tr>
@endforeach
</table>
<br><br>
  <a class="button"href="{{url('/backtoaccount',$name)}}" class="btn btn-md btn-warning">click to my account</a>
@stop

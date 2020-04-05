@extends('myproject.account')
@section('content')

<form action="{{url('outbooking/outpay',$name)}}" style="font-size:20px;font-weight:20px;">



  <div class='pretty p-svg p-round p-plain p-jelly'>
      <input type='checkbox' name='facial' value='facial'>
     <div class='state p-danger'>
         <span class='svg' uk-icon='icon: check'></span>
         <label style="color:white;"><b>facial(50)</b></label>
     </div>
  </div>
  <br><br>


  <div class='pretty p-svg p-round p-plain p-jelly'>
      <input type='checkbox' name='style' value='hair style'>
     <div class='state p-danger'>
         <span class='svg' uk-icon='icon: check'></span>
         <label style="color:white;"><b>hair style(100)</b></label>
     </div>
  </div>
  <br><br>

  <div class='pretty p-svg p-round p-plain p-jelly'>
    <input type='checkbox' name='spa' value='spa'>
   <div class='state p-danger'>
       <span class='svg' uk-icon='icon: check'></span>
       <label style="color:white;"><b>spa(90)</b></label>
   </div>
  </div>
  <br><br>

  <div class='pretty p-svg p-round p-plain p-jelly'>
          <input type='checkbox' name='color' value='hair color'>
   <div class='state p-danger'>
       <span class='svg' uk-icon='icon: check'></span>
       <label style="color:white;"><b>hair color(150)</b></label>
   </div>
  </div>
  <br><br>





    <input type='submit' name='submit_out_order' value='place order'>

</form>
@stop

<html><head>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<title>OnWard-Payment</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<link rel='stylesheet' href='https://unpkg.com/aos@next/dist/aos.css' />
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'></script>
<link href='https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i' rel='stylesheet'>


<style>

body{

 background: url('http://localhost/myproject/storage/app/images/pay.jpg');
 background-repeat: no-repeat;
 background-attachment: fixed;
 background-position: center center;
 background-size: cover;
 margin: 0 !important;
 background-size: 100% cover!important;

}
.mydiv{width:40%;
background-color:white;
}
.myform {
width:40%;
background-color:white;}

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
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 50%;
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

</head><body>
<center>
<form action="{{url('payment/inorder')}}" style="font-size:20px;font-weight:20px;>
  @csrf
  email :<input type='email' name='email' value={{$name}}><br>
  facilities:<input type='text' name='facilities' value={{$total}}><br>
    amount:<input type='number' name='amount' value={{$count}}><br>
      address:<input type='text' name='useraddress'><br>
      zipcode:<input type='text' name='zipcode'><br>
        enrtytime:<input type='time' name='usertime'><br>
        entrydate:<input type='date' name='userdate'><br>

      <div class='col-50'>

           Accepted Cards
           <div class='icon-container'>
             <i class='fa fa-cc-amex' style='color:blue;'></i>
             <i class='fa fa-cc-mastercard' style='color:red;'></i>
             <i class='fa fa-cc-discover' style='color:orange;'></i>
           </div>
           <label for='cname'>Name on Card</label>
           <input type='text' id='cname' name='cardname' placeholder='John More Doe'><br>
           <label for='ccnum'>Card number</label>
           <input type='text' id='ccnum' name='cardnumber' placeholder='1111-2222-3333-4444'><br>
           <label for='expmonth'>Expiry Month</label>
           <input type='text' id='expmonth' name='expmonth' placeholder='September'><br>
           <div class='row'>
             <div class='col-50'>
               <label for='expyear'>Expiry Year</label>
               <input type='text' id='expyear' name='expyear' placeholder='2018'>
             </div>
             <div class='col-50'>
               <label for='cvv'>CVV number</label>
               <input type='text' id='cvv' name='cvv' placeholder='352'>
             </div>
           </div>
         </div>
      <input class='button' type='submit' name='final_in_order' value='done'>
      </form>

      <div>
        <ul style='list-style-type:none'>
        @foreach($errors->all() as $e)
        <li>
          {{$e}}
        </li>
          @endforeach
        </ul>
      </div></center>
</body></html>

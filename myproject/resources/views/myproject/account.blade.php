<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>OnWard-Account</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" rel="stylesheet">
 <style>
 h1{
   font-size: 80px;
   font-weight: 60px;
 }
       nav{
         z-index:99;
       }
       input[type=submit],.button{
         background-color: red;
         color: white;
         padding: 14px 20px;
         margin: 8px 0;
         border: none;
         cursor: pointer;
         width: 20%;
         border-radius: 40px;
       }
       .btn {
       background-color: #4CAF50;
       color: white;
       padding: 14px 20px;
       margin: 8px 0;
       border: none;
       cursor: pointer;
       width: 90%;
       border-radius: 40px;
       }
       input[type=text] {
         width: 40%;
         padding: 12px 20px;
         display: inline-block;
         }
       input[type=email],input[type=tel],input[type=number] {
         width: 40%;
         padding: 12px 20px;
         display: inline-block;
       }
      input[type=password]{
        width: 40%;
        padding: 12px 20px;
       display: inline-block;
       }
       input[type=submit]:hover {
       opacity: 0.8;
       }
       ion-icon {
          font-size: 50px;
          color:black;
       }
       .about{
       font-size: 80px;
       font-weight: 30%;
       color:black;
       }
       .small{
       color:black;
       }
     .sticky {
       position: fixed;
       top: 0;
       width: 100%;
     }
     .bottom-left {
       position: absolute;
       top:30%;
       }
     .big{
     font-family: Impact, Charcoal, sans-serif;
     color:grey;
     font-size: 80px;
     font-weight: 30%;
     }
     .sub{
     font-family: Impact, Charcoal, sans-serif;
     color:black;
     font-size: 30px;
     font-weight: 30%;
     }
</style>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container" style="background-color:black;">
          <a class="navbar-brand" href="{{url('/mainhome')}}"style="color:white;"><img src="http://localhost/myproject/storage/app/images/logo.jpg" width=50% height=250% ></a>

          <div class="collapse navbar-collapse" id="ftco-nav" >
            <ul class="nav navbar-nav" style="position:relative;left:30%;color:white;">
     <li class="active"><a href="{{url('/mainhome')}}"><p  style="color:white;">HOME</p></a></li>
     <li><a href="{{url('/aboutus')}}"><p  style="color:white;">ABOUT</p></a></li>
     <li><a href="{{url('/contactus')}}"><p  style="color:white;">CONTACT</p></a></li>

   </ul>

          </div>
        </div>
      </nav>
{{--{{$name}}--}}


      <img src="http://localhost/myproject/storage/app/images/pict1.jpg" alt="Snow" style="width:100%;height:160%;">
      <div class="bottom-left"><div data-aos="fade-right">
        @foreach($user as $user1)
        <h1 style="color:white;"><b>welcome {{$user1->first}}</b></h1>
          <p><span><a href="{{url('/mainhome')}}"><b>Home</b></a></span>><span class="small">Account</span></p></div>


         <p><div class="container"><div class="row">
<div class="col-md-4">
        <a href="{{url('inbooking',$name)}}" class="btn btn-md btn-warning">indoor</a></div>
        <div class="col-md-4">
        <a href="{{url('outbooking',$name)}}" class="btn btn-md btn-warning">outdoor</a></div>
        <div class="col-md-4">
        <a href ="{{url('history', $name)}}" class="btn btn-md btn-warning">order history</a></div>
        <div class="col-md-4">
        <a href ="{{url('edit', $name)}}" class="btn btn-md btn-warning">edit details</a></div>
        <div class="col-md-4">
         <a href ="{{url('offers', $name)}}" class="btn btn-md btn-warning ">offers</a></div>
         <div class="col-md-4">
         <a href ="{{url('/loggingout')}}" class="btn btn-md btn-warning ">logout</a></div>
       </div></div>
      </p>

      @endforeach

          <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
           <script>
             AOS.init();
           </script>

          <script>
          window.onscroll = function() {myFunction()};

          var navbar = document.getElementById("ftco-navbar");
          var sticky = navbar.offsetTop;

          function myFunction() {
          if (window.pageYOffset >= sticky) {
          navbar.classList.add("sticky")
          } else {
          navbar.classList.remove("sticky");
          }
          }
          </script>
      @yield('content')
    </div>

  </div>

<br><br>
</body>
</html>

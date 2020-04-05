<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>OnWard-final step</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style>
nav{



  z-index: 99;


}

ion-icon {
   font-size: 50px;
   color:black;
}
.about{
font-size: 80px;
font-weight: 30%;
color:white;
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
top:55%;
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
      <div class="container-fluid">
<img src="http://localhost/myproject/storage/app/images/pict1.jpg" alt="Snow" style="width:100%;height:80%;">
<div class="bottom-left"><div data-aos="fade-right">
            <h2 class="about">thank you {{$user}}</h2>
            <p  class="about">your order id is {{$num}}</p></div>
</div>

</div>






<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body></html>

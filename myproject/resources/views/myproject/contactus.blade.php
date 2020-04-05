<html>
  <head>
    <title>OnWard-Contact</title>
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
              <h2 class="about">Contact Us</h2>
              <p><span><a href="{{url('/mainhome')}}"><b>Home</b></a></span>><span class="small">Contact</span></p></div>
</div>

</div>

    <br>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-2" >
          <div data-aos="fade-right">
          <ion-icon name="home"></ion-icon>
          <h1>address</h1>
          <p>address.</p></div>
        </div>
        <div class="col-md-2" >
          <div data-aos="fade-down">
          <ion-icon name="call"></ion-icon>
          <h1>Contact</h1>
          <p>000-000-0000</p></div>
        </div>
        <div class="col-md-2" >
            <div data-aos="fade-up">
          <ion-icon name="mail"></ion-icon>
          <h1>Email Address</h1>
          <p>test@test.com</p></div>
        </div>
        <div class="col-md-2">
          <div data-aos="fade-left">
          <ion-icon name="alarm"></ion-icon>
          <h1>Timings</h1>
          <p>10:30 am to 7:30 pm</p></div>
        </div>
        <div class="col-md-2">

        </div>
      </div>
    </div>


		<br>
    <footer style="background-color:black;">
         <div class="container-fluid">
           <div class="row">

             <div class="col-md-4">
                  <div data-aos="zoom-out">
               <div style="color:white;">
                 <h2 style="color:white;">OnWard</h2>
                 Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced.
               </div>
             </div></div>

             <div class="col-md-4" style="padding-left: 150px">
               <div data-aos="zoom-out">
                <div style="color:white;">
                 <h2 >Links</h2>
                 <ul class="list-unstyled">
                   <li><a href="{{url('/mainhome')}}" class="py-2 d-block">Home</a></li>
                   <li><a href="{{url('/aboutus')}}" class="py-2 d-block">About</a></li>
                   <li><a href="{{url('/contactus')}}" class="py-2 d-block">Contact</a></li>
                 </ul>
               </div>
             </div></div>

             <div class="col-md-4">
                <div data-aos="zoom-out">
               <div style="color:white;">
                 <h2 >Have a Questions?</h2>
                 <div>

                   <ul class="list-unstyled">
                     <li><a href="{{url('/contactus')}}"><i class="fa fa-home" style="font-size:60px;color:white;text-shadow:2px 2px 4px #000000;"></i></li>
                     <li><a href="{{url('/contactus')}}"><a href="contact.php"><i class="fa fa-phone" style="font-size:60px;color:white;text-shadow:2px 2px 4px #000000;"></i></a></li>
                     <li><a href="{{url('/contactus')}}"><i class="fa fa-comments" style="font-size:60px;color:white;text-shadow:2px 2px 4px #000000;"></i></a></li>
                   </ul>
                 </div>

               </div>
             </div></div>
           </div>

         </div>
       </footer>


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
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  </body>
</html>

<html>
  <head>
    <title>OnWard-About Us</title>
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
                      <a class="navbar-brand" href="{{url('/mainhome')}}"style="color:white;"><img src="http://localhost/myproject/storage/app/images/logo.jpg" width=50% height=350% ></a>
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
                              <h2 class="about">About Us</h2>
                              <p><span><a href="{{url('/mainhome')}}"><b>Home</b></a></span>><span class="small">About</span></p></div>
                  </div>

            </div>

            <br>
            <section>
        			<div class="container">
        				<div class="row">
        					<div class="col-md-6">
                    <div data-aos="fade-up-right">
        						<div style="background-image: url(http://localhost/myproject/storage/app/images/hair3.jpg);height:100%;position:relative;bottom:3%;">
        						</div>
        					</div>
                </div>
        				<div class="col-md-6">
                  <div data-aos="fade-up-left">
        						    <div>
        	          	        <h1 class="big"><span class="aboutanimate" data-aos="fade-up" data-aos-duration="3000">About</span><sub class="sub" data-aos="fade-up" data-aos-duration="4000">about</sub></h1>
                        </div>
        	               <div>
                							<p data-aos="fade-up" data-aos-duration="5000">Our main focus is on quality and hygiene. Our Parlour is well equipped with advanced technology equipments and provides best quality services. Our staff is well trained and experienced, offering advanced services in Skin, Hair and Body Shaping that will provide you with a luxurious experience that leave you feeling relaxed and stress free. The specialities in the parlour are, apart from regular bleachings and Facials, many types of hairstyles, Bridal and cine make-up and different types of Facials & fashion hair colourings..</p>
        	              </div>
	               </div>
                </div>
        			</div>
        			</div>
        		</section>

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

  </body>
</html>

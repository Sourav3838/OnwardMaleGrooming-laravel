<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>OnWard-Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">



<style>
.bottom-left {
  position: absolute;
  top:17%;
  bottom: 18px;
  left: 16px;
}
.about{
  font-size: 80px;
  font-weight: 30%;
  color:white;
}

.form1{
width:40%;
}

</style>
</head>
<body>  <section class="hero-wrap hero-wrap-2" style="background-image: url('http://localhost/myproject/storage/app/images/admin.jpg');height:110%;" data-stellar-background-ratio="0.5">
<div data-aos="fade-right">
    <h2 class="about">Welcome Admin</h2>
    <p><span><a href="home.php"><b>Home</b></a></span>><span class="small" style="color:white;">admin</span></p></div>

  <br>
  <a href="{{url('total',$name)}}" class="btn btn-md btn-warning">total appointments</a>
  <a href="{{url('pending',$name)}}" class="btn btn-md btn-warning">pending appointments</a>
  <a href="{{url('cancelled',$name)}}" class="btn btn-md btn-warning">cancelled appointments</a>
  <a href="{{url('confirmed',$name)}}" class="btn btn-md btn-warning">confirmed appointments</a>
  <a href="{{url('users',$name)}}" class="btn btn-md btn-warning">all users</a>
  <a href ="{{url('/loggingout')}}" class="btn btn-md btn-primary pull-right">logout</a>
<a href="{{url('artist',$name)}}" class="btn btn-md btn-warning">all artist</a>
<a href="{{url('addartist',$name)}}" class="btn btn-md btn-warning">add artist</a>
<a href="{{url('deleteartist',$name)}}" class="btn btn-md btn-warning">delete artist</a>
<a href="{{url('adoffers',$name)}}" class="btn btn-md btn-warning">preview offers</a>
  @yield('admincontent')</section>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

  <script>
</body></html>

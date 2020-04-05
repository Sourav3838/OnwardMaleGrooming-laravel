<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<head>
  <title>OnWard-Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">


<style>

body{

   background: url('http://localhost/myproject/storage/app/images/pict1.jpg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-position: center center;
   background-size: cover;
   margin: 0 !important;
   background-size: 100% cover!important;

}
form {
width:40%;
margin-top:10%;}

input[type=text] {
  width: 80%;
  padding: 12px 20px;

  display: inline-block;


}

input[type=email],input[type=tel],input[type=number] {
  width: 80%;
  padding: 12px 20px;

  display: inline-block;


}
 input[type=password]{
   width: 80%;
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
  width: 80%;
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
      <center>
  <form action="signup" enctype="multipart/form-data"  style="background-color:maroon;">
    <p><p style="color:white;">first:</p>
      <input name="first" type="text" >
    </p>
    <p><p style="color:white;">last:</p>
      <input name="last" type="text">
          </p>
    <p><p style="color:white;">email:</p>
      <input name="email" type="email">
        </p>
        <p><p style="color:white;">address:</p>
          <input name="address" type="text" >
        </p>
        <p><p style="color:white;">password:</p>
          <input name="password" type="password">
              </p>
              <p><p style="color:white;">confirm:</p>
                <input name="confirm" type="password">
                    </p>
        <p><p style="color:white;">age:</p>
          <input name="age" type="number">
            </p>
            <p><p style="color:white;">telephone:</p>
              <input name="tel" type="tel">
            </p>
            <input type="file" name="file">
                <input type="submit" name="submit" value="create a new account" class="btn btn-md btn-warning">

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
  </body>
</html>

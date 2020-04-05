@extends('myproject.account')
@section('content')

<?php
$files = scandir("C:/xampp/htdocs/myproject/storage/app/upload/uploads");
for($a = 2;$a <count($files);$a++){

?>
<p style="color:white;"> <?php echo $files[$a];?>
  <a href ="uploads/<?php echo $files[$a];?>" download="<?php echo  $files[$a];?>">
    download</a>
  </p>

<?php
}?>
<br><br>
  <a class="button"href="{{url('/backtoaccount',$name)}}" class="btn btn-md btn-danger">click to my account</a>
@stop

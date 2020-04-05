@extends('myproject.admin')
@section('admincontent')
<?php
$files = scandir("C:/xampp/htdocs/myproject/storage/app/upload/uploads");
for($a = 2;$a <count($files);$a++){
  // in windows in every folder there are two hidden files . and .. we dont want to show those files on the web that's why we start the loop from 2
  //in mac loop will start from 3
  //in ubuntu loop will start eiither from 1  or from 2
?>
<p style="color:white;"> <?php echo $files[$a];?>
  <a href ="uploads/<?php echo $files[$a];?>" download="<?php echo  $files[$a];?>">
    download</a>
  </p>

<?php
}?>
@stop

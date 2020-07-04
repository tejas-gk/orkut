<?php
  include '../config.php';


  if(isset($_POST['submitform']))
{
    $dir="../images/";
    $image=$_FILES['pimage']['name'];
    $temp_name=$_FILES['pimage']['tmp_name'];

    if($image!="")
    {
        if(file_exists($dir.$image))
        {
            $image= time().'_'.$image;
        }

        $fdir= $dir.$image;
        move_uploaded_file($temp_name, $fdir);
    }

        $query="insert avatar into `profile_info` (`avatar`) values ('$image')";
        mysqli_query($mysqli,$query) or die(mysqli_error($mysqli));

        echo "File Uploaded Suucessfully ";

}
  $p="SELECT * FROM profile_info";
  $res=mysqli_query($mysqli,$p);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <style media="screen">
    .profile{
      position: absolute;
      left: 40%;
      top: 40%;
     }
  </style>
  <body>
    <div class="profile">
      <input type="file" name="pimage" value="image">
      <button type="submit" name="submitform" class="btn btn-primary">Upload</button>
    </div>

  </body>
</html>

<?php
  include "../config.php";
  $sql="SELECT * FROM profile_dash";
  if (isset($_REQUEST['submitbtn'])) {
    echo "hi";
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
    <input type="text" name="" value="" class="posttext">
    <input type="submit" name="submitbtn" value="submit" class="btn btn-danger">
  </body>
</html>

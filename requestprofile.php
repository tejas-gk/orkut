<?php
include "config.php";
include "navbar.php";

$otpt="SELECT pname,pemail FROM orkut";

 ?>
 <br>
<style media="screen">

</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style/leftlay.css">
  </head>
  <body>
    <div class="container leftrow" style="">
        <div class="row">
          <div class="col-12" >
            <ul class="list-group">
                <li class="list-group-item active"><a href="..\requestprofile.php">feed</a></li>
                <li class="list-group-item"><a href="profile\proflie.php">profile</a></li>
                <li class="list-group-item">collection</li>


            </ul>
          </div>
        </div>
    </div>
  </body>
</html>
<a href="logout.php" class="logout">logout</a>

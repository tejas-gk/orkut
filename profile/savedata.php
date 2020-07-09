<?php

 $stu_name=$_POST['sname'];
 $stu_address=$_POST['saddress'];
 $stu_class=$_POST['class'];
$stu_phone=$_POST['sphone'];

 $mysqli = new mysqli("localhost", "root", "", "orkut");
      $sql="INSERT INTO student(posts) VALUES ('{$stu_name}')";

       $result = mysqli_query($mysqli,$sql);


       header('http://localhost/orkut/profile/postbody.php');
       mysqli_close($conn);
 ?>

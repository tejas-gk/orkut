<?php

 $stu_name=$_POST['pname'];
 $stu_user=$_POST['puser'];
 $stu_pass=$_POST['ppassword'];
$stu_phone=$_POST['pphone'];

 $mysqli = new mysqli("localhost", "root", "", "orkut");
      $sql="INSERT INTO profile_info(pname,puser,ppassword,pphone) VALUES ('{$stu_name}','{$stu_user}','{$stu_pass}','{$stu_phone}')";

       $result = mysqli_query($mysqli,$sql);


       header('Location:http://localhost/orkut/requestprofile.php');
       mysqli_close($conn);
 ?>

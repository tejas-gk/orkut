<?php 

 $stu_name=$_POST['sname'];
 $stu_address=$_POST['saddress'];
 $stu_class=$_POST['class'];
$stu_phone=$_POST['sphone'];

 $mysqli = new mysqli("localhost", "root", "", "crudr");
      $sql="INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

       $result = mysqli_query($mysqli,$sql);


       header('Location:http://localhost/crud/index.php');
       mysqli_close($conn);
 ?>
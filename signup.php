
<?php
include "config.php";
 if (isset($_REQUEST['signup'])) {
    if(($_REQUEST['pname']=="")||($_REQUEST['ppassword']=="")||($_REQUEST['pemail']=="")) {
   $regmsg='<div class="alert alert-warning mt-4" role="alert">all fileds are required</div>';
  }
  else{
$sql="SELECT pemail FROM profile_info WHERE pemail='".$_REQUEST['pemail']."''";
$result=$mysqli->query($sql);
if($result->mysqli_num_rows==1) {
  $regmsg='<div class="alert alert-warning" role="alert">aleady exists</div>';
}else {
  $pname=$_REQUEST['pname'];
  $pemail=$_REQUEST['pemail'];
  $ppassword=$_REQUEST['ppassword'];
  $sql="INSERT INTO profile_info(pname,pemail,ppassword) VALUES('$pname','$pemail','$ppassword')";
if($mysqli->query($sql)==TRUE){
  $regmsg='<div class="alert alert-success" role="alert">success</div>';
}
  $regmsg='<div class="alert alert-danger" role="alert">failed</div>';
}
}
}

 ?>

<!-- <div class="shadow-lg p-6 mb-69 bg-white rounded" style="position:absolute;left:50%; height:40%; width:20%;"> -->


<div id="main-content shadow-lg p-3 mb-5 bg-white rounded" style="position:absolute;left:50%;">
    <h2>Add New Record</h2>
    <form class="post-form" action="" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="pname" />
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="email" name="pemail" />
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="password" name="ppassword" />
        </div>
        <input class="submit btn btn-outline-danger" type="submit" value="Save" name="signup"  />

    </form>
    <?php if(isset($regmsg)){echo $regmsg;} ?>
</div>

<!-- </div> -->

</body>
</html>

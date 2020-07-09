<?php
include "../navbar.php";
echo "<br>";
define('TITLE', 'Requester Profile');
define('PAGE', 'RequesterProfile');

include('../config.php');
 session_start();
 if($_SESSION['is_login']){
  $rEmail = $_SESSION['rEmail'];
 } else {
  echo "<script> location.href='editprofile.php'; </script>";
 }

 $sql = "SELECT * FROM profile_info WHERE pemail='$rEmail'";
 $result = $mysqli->query($sql);
 if($result->num_rows == 1){
 $row = $result->fetch_assoc();
 $rName = $row["pname"];
}

 if(isset($_REQUEST['nameupdate'])){
  if(($_REQUEST['rName'] == "")){
   // msg displayed if required field missing
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
   $rName = $_REQUEST["rName"];
   $sql = "UPDATE profile_info SET pname = '$rName' WHERE pemail = '$rEmail'";
   if($mysqli->query($sql) == TRUE){
   // below msg display on form submit success
   $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
   } else {
   // below msg display on form submit failed
   $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
   }
?>
<center>
<h1><b>edit profile</b></h1><hr></center>


</style>




<div class="col-sm-6 mt-5">
  <form class="mx-5" method="POST" action="../requestprofile.php ">
    <div class="form-group">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" value=" <?php echo $rEmail ?>" readonly>
    </div>
    <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control" id="inputName" name="rName" value=" <?php echo $rName ?>">
    </div>
    <button type="submit" class="btn btn-danger" name="nameupdate">Update</button>
    <?php if(isset($passmsg)) {echo $passmsg; } ?>
  </form>
</div>
</div>
</div>
<?php
  include "changepass.php";
?>
</html>
<a href="postbody.php">profile</a>

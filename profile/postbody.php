<?php include "../config.php";
include "navbar.php";


session_start();


?>

<center><a href="postblog.php" class="btn btn-danger">post</a>
<a href="editprofile.php" class="btn btn-danger">edit</a>
<a href="../logout.php" class="btn btn-danger">logout</a></center>


<td><?php echo $row['posts']; ?></td>
<style media="screen">
  .posttext{
    position: absolute;
    top: 50%;
    left:50%;
    width: 20%;
    height: 10%;
  }
</style>

<?php
include('includes/config.php');
$id=$_GET['del2'];
$del="DELETE FROM posts WHERE id='$id'";
mysqli_query($con,$del);
header('location:admin-userdata2.php');
 ?>

<?php
include "config.php";
 echo $id=$_GET['id'];
 mysqli_query( $con,"DELETE FROM `tbltodo` WHERE ID=$id");
 header("location:index.php");
?>
<?php
include "config.php";
$LIST=$_POST['list'];
$ID=$_POST['id'];
mysqli_query($con,"UPDATE `tbltodo` SET `list`='$LIST' WHERE ID=$ID");
header("location:index.php");

?>

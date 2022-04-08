<?php
include("dbconfig.php");;

     $ID= $_REQUEST['id'];
     $Status= $_REQUEST['Status'];
	$query = "UPDATE `student_info` SET `Status`='$Status' WHERE id='".$ID."'";
	$result = mysqli_query($conn,$query);
	

    header("location:VeiwData.php");
?>
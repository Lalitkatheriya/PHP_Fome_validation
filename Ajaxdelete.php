<?PHP
include("dbconfig.php");
$ID =$_REQUEST["id"];
$Delete= "delete from  student_info where id='".$ID."'";
$query= mysqli_query($conn,$Delete);
echo$ID;
<?php
include("dbconfig.php");
$ID= $_POST['id'];
$Fname= $_POST['Fname'];
$Lname= $_POST['Lname'];
$Father= $_POST['Father'];
$Mother= $_POST['Mother'];
$Email= $_POST['Email'];
$Phone= $_POST['Phone'];
$Gender= $_POST['Gender'];
$Hobbies= $_POST['Hobbies'];
$Address= $_POST['Address'];
$Pass= $_POST['Password'];
$Update="UPDATE `student_info` SET `Fname`='$Fname',`Lname`='$Lname',`Father`='$Father',`Mother`='$Mother',`Phone`='$Phone',`Email`='$Email',`Date`='$DOB',`Gender`='$Gender',`Hobbies`='$Hobbies',`Address`='$Address',`Password`='$Pass' WHERE id='".$ID."'";
$rep = mysqli_query($conn,$Update);
$data=json_encode($rep);
echo $data;
 if($data){
  $_SESSION["msg1"]="Data Updated Sucssesfull";
  header("location:VeiwData.php"); 
 }else{
   echo "Something went wrong";
 }
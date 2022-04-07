<!-- PHP Code -->
<?php

$FnameErr = $LnameErr = $FatherErr = $MotherErr = $PhoneErr= $EmailErr = $AddErr=$FileErr=$DOBErr=$GenErr=$HobbErr=$FileErr=$PassErr="";

$Singing=$Dancing=$Acting= "";

include("dbconfig.php");

if(isset ($_POST["Submit"])){

$Fname = $Lname =$Father=$Mother= $Phone= $Email = $Add=$DOB=$Gen=$File=$Hobb=$Pass="";

// Data inserted into data  Base






// Fname Error
if (empty($_POST["fname"])) {  
    $FnameErr = "Please Fill Your Frist Name";  
    
           
} else {  
    $Fname = $_POST["fname"];
    if (!preg_match("/^[a-zA-Z]*$/",$Fname)) {  
      $FnameErr = "Only alphabets and allowed ";  
  }
  if (preg_match("/(\s)$/",$Fname)) {  
    $FnameErr = "white space are note allowed ";  
}    
}
// Lname Error
if (empty($_POST["lname"])) {  
    $LnameErr = "Please Fill Your Last Name";  
           
} else {  
    $Lname = $_POST["lname"];
    if (!preg_match("/^[a-zA-Z]*$/",$Lname)) {  
      $LnameErr = "Only alphabets and white space are allowed";  
     }    
     if (preg_match("/(\s)$/",$Lname)) {  
      $LnameErr = "white space are note allowed ";  
  } 
}
// Father Error
if (empty($_POST["father"])) {  
    $FatherErr = "Please Fill Your father Name";
    
} else { 
 
    $Father = $_POST["father"]; 
    if (!preg_match("/^[a-zA-Z ]*$/",$Father)) {  
      $FatherErr = "Only alphabets and white space are allowed";  
  } 
  if (preg_match("/(\s)$/",$Father)) {  
    $FatheErr = "white space are note allowed ";  
} 

}
// Mother Error
if (empty($_POST["mother"])) {  
    $MotherErr = "Please Fill Your mother Name";  
           
} else {  
    $Mother = $_POST["mother"];
    if (!preg_match("/^[a-zA-Z ]*$/",$Mother)) {  
      $MotherErr = "Only alphabets and white space are allowed";  
  } 
  if (preg_match("/(\s)$/",$Mother)) {  
    $MotherErr = "white space are note allowed ";  
}  
}



// phone Error
if (empty($_POST["Phone"])) {  
    $PhoneErr = "Please Fill Your Phone  Number";  
           
} else {  
    $Phone= $_POST["Phone"];

    //  check mobile no correct fome 
            if (!preg_match ("/^[789][0-9]{9,}$/", $Phone) ) {  
             $PhoneErr = "Please Fill Valid mobaile no."; 
          
           }
           
}

// Email Error
if (empty($_POST["email"])) {  

    $EmailErr = "Please Fill Your Email Address";  
           
} else {  
    $Email = $_POST["email"];
    if (!preg_match ("/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/", $Email) ) {  
      $EmailErr = "Please Fill Valid Email Address."; 

    }  
}
$FilePath;
// File Uploding Err
if (empty($_FILES["files"])) {  
  $FileErr = "Please Uplodad your  Profile ";  
         
}else{
$File= time()."_". $_FILES["files"]["name"];
print_r($File);
$file_ext = explode(".", $File);
print_r($file_ext);

$file_ext_Cheak=strtolower(end($file_ext));
echo($file_ext_Cheak);
$Filetype=array("png","jpg","jpeg");
if(in_array($file_ext_Cheak,$Filetype)){
$tamp_name=$_FILES["files"]["tmp_name"];
echo $tamp_name;
$FilePath = "img/".$File;
echo $FilePath;
move_uploaded_file($tamp_name,$FilePath);

echo "Uploaded FIle";
}else{
   $FileErr = "Allowe only png jpg jpeg files type";
 }
}


// DOB validation 18 Year old
 if(empty($_POST["dob"])) {  
  $DOBErr = "Please Fill Your Date of Birth Address";          
}else{
  $DOB=$_POST["dob"];
  
  $NewDate = date("Y", strtotime($_POST["dob"]));

  $MaxDate ="2004";
  $OldDate=strtotime($MaxDate);

  if($NewDate > $OldDate){
    $DOBErr = "You are not eligible for registration";
  }
 
  
}


// Gender Validation

if (empty($_POST["gen"])) {  
  $GenErr = "Please Fill Your Gender Address"; 
}else{
  $Gen=$_POST["gen"];
  
}

// Hobbies


if (empty($_POST["Hobbies"])) {  
  $HobbErr = "Please Chooese Your Hobbies Address"; 
}else{
  $Hobb=$_POST["Hobbies"];
 

 foreach($Hobb as $val){
      if($val =="Singing")
      {
        $Singing = "checked";
      }
      if($val=="Dancing")
      {
        $Dancing= "checked";
      }
      if($val=="Acting"){
        $Acting = "checked";
      }
  }
};
if (empty($_POST["Pass"])) {  
  $PassErr = "Please Chooese Your Hobbies Address"; 
}else{
  $Pass=$_POST["Pass"];
}



// Address
if (empty($_POST["Add"])) {  
  $AddErr = "Please Fill Your Permanet Address";  
         
} else {  
  $Add = $_POST["Add"];
  if (preg_match("/^(\s)$/",$Add)) {  
    $AddErr = "White space are note allowed";   
}  
}



if($FnameErr == "" && $LnameErr  == "" && $FatherErr  == "" && $MotherErr  == "" && $PhoneErr == "" && $EmailErr  == "" && $AddErr == "" && $DOBErr == "" && $GenErr == "" && $HobbErr == "" && $FileErr ==""&& $PassErr ==""){
  // Than Inculed Squl Query
//This Is use For Cheak Box Insert Data 

$CheakBoxData= implode(",",$_POST["Hobbies"]);



echo $Save = " INSERT INTO `student_info`( `Fname`, `Lname`, `Father`, `Mother`, `Phone`, `Email`,`Image`, `Date`, `Gender`, `Hobbies`, `Address`,`Password`) 
VALUES ('".$Fname."','".$Lname."','".$Father."','".$Mother."','".$Phone."','".$Email."','".$FilePath."','".$DOB."','".$Gen."','".$CheakBoxData."','".$Add."','".$Pass."')";

 $rep = mysqli_query($conn,$Save);
 if($rep){
  $_SESSION["msg"]="Data Inserted Sucssesfull";
  header("location:VeiwData.php"); 
 }else{
   echo "Something went wrong";
 }

 
}

}//end of submit

?>

<style>
.error {

color: #FF0000;
}
.Red_err {
border: 1px solid red; 
}
.Green_err {
border: 1px solid green; 
}
</style>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
     
    <link rel="stylesheet" href="fome.css" />
    <title>Student Fome</title>
  </head>
<body>
    
  <div class="container-fuide" id="head">
  
  <h2 class="pt-3">Student Registration fome</h2>
</div>
<div class="col-8 main top" >
<form class="row g-3" action="" method="POST" enctype="multipart/form-data">
<h3>Register Now</h3>
<!-- fname -->
  <div class="col-6">
   <input type="text"
     class="form-control" 
     name="fname" value="" 
     placeholder="Frist Name"
     >
    <span class = "error"><?php echo $FnameErr?> </span>
  </div>
  
<!-- Lname  mother father-->
  <div class="col-6">
  <input type="text" 
  class="form-control" 
  name="lname"  
  placeholder="Last Name">
  <span class = "error"><?php echo $LnameErr?> </span>
  </div>
  <div class="col-6">
 <input type="text"
 class="form-control" 
 name="father"  
 value="" 
 placeholder="Father's Name"
 >
 <span class = "error"><?php echo $FatherErr?> </span>
  </div>

  <div class="col-6">
  <input type="text" 
  class="form-control" 
  name="mother" 
  placeholder="Mother's Name">
  <span class = "error"><?php echo $MotherErr?></span>
  </div>
<!-- Phone -->
  <div class="col-6">
  <input type="text"
   class="form-control" 
   name="Phone"  
   placeholder="Phone">
   <span class = "error"><?php echo $PhoneErr?> </span>
  </div>
<!-- Email -->
<div class="col-6">
  <input type="email" 
    class="form-control" 
    name="email" 
    placeholder="Email">
    <span class = "error"><?php echo $EmailErr?> </span>
</div>
  <!-- Uplode File--->
 <div class="col-6">
  <input type="file" 
  class="form-control" 
  name="files" 
   placeholder="Profile">
   <span class = "error"><?php echo $FileErr?> </span>
</div>
 <!-- passworeFile--->
 <div class="col-6">
  <input type="password" 
  class="form-control" 
  name="Pass" 
   placeholder="Password">
   <span class = "error"><?php echo $PassErr?> </span>
</div>  

<!-- Date of Birth -->
  <div class="col-6">
  <input type="date" 
  class="form-control" 
  name="dob" 
   placeholder="Date of Birth">
   <span class = "error"><?php echo $DOBErr?> </span>
  </div>
  <!-- Gender -->
<div class="col-6  d-block justify-content-evenly   pt-2">

        <label for="" class="form-label">Gender</label>
        <div class="col-6d-block justify-content-evenly ">
        <div class="form-check m-1  ">
        <input class="form-check-input " type="radio" name="gen" value=Male
         <?php if(@($_POST["gen"])&&( $_POST["gen"] == "Male")) echo"checked"
          ;?>
          >
        <label class="form-check-label" for="">Male</label>
        </div>
        </div>
        <div class="form-check m-1 ">
        <input class="form-check-input" type="radio" name="gen" value=Female
        <?php if(@($_POST["gen"])&& ( $_POST["gen"] == "Female")) echo"checked";?>>
        <label class="form-check-label" for="">Female</label>
        </div>
        <span class = "error"><?php echo $GenErr?> </span>
  
  </div>




<!-- Hobies -->
<div class="col-6 d-block justify-content-evenly ">
  <label class="form-check-label" for="">Hobbies</label>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Singing"  name="Hobbies[]"
  <?PHP echo $Singing ?>
  >
  <label class="form-check-label" for=""> Singing</label>
   </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value ="Dancing" name="Hobbies[]"
  <?PHP echo $Dancing ?>>

  <label class="form-check-label" for="">Dancing</label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Acting" name="Hobbies[]"
  <?PHP echo $Acting?>
  >
  <label class="form-check-label" for="flexCheckChecked">Acting</label>
  </div>
  <span class = "error"><?php echo $HobbErr?> </span>

</div>

<!-- Add -->
<div class="col-12">
   <label for="" class="form-label">Address</label>
   <textarea class="form-control" 
   name="Add" rows="4"></textarea>
   <span class = "error"><?php echo $AddErr?> </span>
</div>

<!-- Button -->
  <div class="col-12">
    <button type="submit" id="submit" class="btn mb-3" name="Submit">Submit</button>
  </div>
</form>
</div>


</div>
<footer>

  <div class="row link">

    <ul>
      <li><a href=""><i class="fa-brands fa-git-square"></i></a></li>
      <li><a href=""><i class="fa-brands fa-facebook-square"></i></a></li>
      <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
      
    </ul>

 

  </div>

</footer>
</body>

</html>

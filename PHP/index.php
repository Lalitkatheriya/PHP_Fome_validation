<!-- Write a PHP program to merge (by index) the following two arrays. -->
<!--Arry Combaine Methodes-->
<!-- arry_merge(name of aryy1,arry2) use for index or Associated arry -->
<!-- arry_merge_recursive(name of aryy1,arry2) this is used for Multidiamention aryy-->
<!-- arry_combaine(name of aryy1,arry2) index arry-->


<?php
// <!-- program to merge (by index)-->
echo "Merge(by index) Two Arry ";

$Vehicles = ["Lalit","Kuldeep","Yash","Ankit","Ram"];
$Price = ["25","28","27","28","26"];
function Twoarrays($one,$two)
{
return " hello'I'm"." $one ".""."i am"." $two "."Year Old" ;
};
$NewArry=array_map("Twoarrays", $Vehicles,$Price);
echo "<pre>";
print_r($NewArry);
echo "</pre>";


// Indexing Arry
$Student=["Lalit","Kuldeep","Yash","Ankit","Ram"];
$Place=["Ager","Devash","Indore","Ujjain","Ratlam"];
$Data = array_merge($Student,$Place);
echo "Merge Indexing Arry ";
echo "<pre>";

print_r($Student);
print_r($Place);
print_r($Data);
echo "</pre>";
// Assosiative Arry
$Comapney=["a"=>"Mahindra","b"=>"Hounda","c"=>"Deu","d"=>"TATA","E"=>"Force"];
$CarModal=["Swift","Maruti","Volvo","Duster","Ford"];
$CarData = array_merge($Comapney,$CarModal);
echo "Merge Indexing Arry or Assosiative Arry ";
echo "<pre>";
print_r($Comapney);
print_r($CarModal);
print_r($CarData);
echo "</pre>";
// <!-- arry_combaine(name of aryy1,arry2) index arry-->
$Employe=["Lalit","Kuldeep","Yash","Ankit","Ram"];
$Age=["25","28","27","28","26"];
$EmployeData = array_combine($Employe,$Age);
echo "<======Combaine Indexing Arry==========> ";

echo "<pre>";
print_r($EmployeData);
echo "</pre>";


// 


// Write a PHP script that inserts a new item in an array in any position & delete element of array in any position 
// array_pop()	Deletes the last element of an array
// array_push()	Inserts one or more elements to the end of an array

$City=["Ujjain","Indore","Ratlam","Udaypur","Jaypur"];
echo "<===========intial Arry==============>";
echo "<pre>";
print_r($City);
echo "</pre>";
echo"<=======insert value in Last Index of Arry======>";
array_push($City,"Agra","Dehli");
echo "<pre>";
print_r($City);
echo "</pre>";

// Insert value
echo"inserts a new item in an array in any position<br>";
$State=["MP","Maharastr","Gujrat","Kolkata"];
echo "<===========intial Arry==============>";
echo "<pre>";
print_r($State);
echo "</pre>";
$Add =["Agra","Dehli"]; 

array_splice($State,4, 1, $Add);
echo"<========Insert Updated Arry=========>";
echo "<pre>";
print_r($State);
echo "</pre>";

// Delete value
echo "Delete a new item in an array in any position<br>";

$Color=["Green","Blue","Red","Black","Yellow"];
echo "<==========Intial Arry==============>";
echo "<pre>";
print_r($Color);
echo "</pre>";

echo "<======== Delete Update Arry========>";

array_splice($Color, 0 , 1);
echo "<pre>";
print_r($Color);
echo "</pre>";

// foreach ($State as $value)
// array_push($Add,$value);








?>

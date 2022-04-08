
<?php
 include("dbconfig.php");
 $columns = array( 
    // datatable column index  => database column name
        0 => 'ID',
        1=>'Status',
        2 => 'Fname',
        3=> 'Lname',
        4 => 'Father',
        5=> 'Mother',
        6=> 'Phone',
        7=> 'Email',
        8=> 'Gender',
        9=> 'Hobbies',
        10 => 'Address',
        11 => 'Action',
    );
    

    
    $sql = "SELECT * FROM student_info";
    $res = mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
    $num= $res->num_rows;

    while( $row = mysqli_fetch_array($res) ) {
        $dataArray = array();
        $dataArray["ID"] = $row["ID"];
        if($row['Status'] == 0)
        {
            $Status ='<a class="btn btn-success" href="status.php?id='.$row['ID'].'&Status=1" role="button">Active</a>';
        }
        else
        {
            $Status='<a class="btn btn-danger" href="status.php?id='.$row['ID'].'&Status=0" role="button">Inactive</a>';
        }
        $dataArray["Status"] = $Status;
        $dataArray["Fname"] = $row["Fname"];
        $dataArray["Lname"] = $row["Lname"];
        $dataArray["Father"] = $row["Father"];
        $dataArray["Mother"] = $row["Mother"];
        $dataArray["Phone"] = $row["Phone"];
        $dataArray["Email"] = $row["Email"];

    
       
        $dataArray["Gender"] = $row["Gender"];
        $dataArray["Hobbies"] = $row["Hobbies"];
        $dataArray["Address"] = $row["Address"];

        $dataArray["Action"] = '
        <button type="button" onclick="EditDAta('.$row['ID'].')" class="btn btn-primary m-2"  data-bs-toggle="modal" data-bs-target ="#Modal"> Update
        </button>
        <button onclick="Delete('.$row['ID'].')"  class="btn btn-danger m-2"></i>Delete</button>
        ';
       $data[]=$dataArray;

    }
    $arr = array();
    $arr["draw"]=1;
    $arr["recordsTotal"]=$num;
    $arr["recordsDiltered"]=$num;
    $arr["data"]=$data;
    
    echo json_encode($arr);
    
    ?>





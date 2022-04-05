
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"/>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="data.css" />
    <title>StudentData</title>
</head>
<body>
    

<div class="header">
<h1 class="text-center pt-3 p-5">View Student Data</h1>
<h5 class="text-center pt-4">
      <!-- Inserted DAta -->
    <?php 
    include("dbconfig.php");
    if(isset($_SESSION["msg"])){
    ?>
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
   <i class="fa-solid fa-check text-success"></i>
   <strong class="text-success">hello User!</strong> <?php echo $_SESSION["msg"];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> 
  <?php
    unset($_SESSION["msg"]);
    }
    ?>
    </h5>
    <!-- Updataed Data -->
    <?php 

    if(isset($_SESSION["msg1"])){
        ?>
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
   <i class="fa-solid fa-check text-success"></i>
   <strong class="text-success">hello User!</strong> <?php echo $_SESSION["msg1"];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        <?php
        unset($_SESSION["msg1"]);
      }
      ?>
      </h5>

      <!--Deletedata -->
      <?php 
 
    if(isset($_SESSION["msg2"])){
        ?>
   <div class="alert alert-warning alert-dismissible fade show" role="alert">
   <i class="fa-solid fa-check text-success"></i>
   <strong class="text-success">hello User!</strong> <?php echo $_SESSION["msg2"];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        <?php
        unset($_SESSION["msg2"]);
      }
      ?>
     </h5>



</div>


<table id="TABLE">

<thead>
<tr>
             <th>Sr.No</th> 
             <th>Profile</th>
              <th>FristName</th>
              <th>LastName</th>
              <th>Father</th>
              <th>Mother</th>
              <th>Phone</th>
              <th>GEN</th>
              <th>Hobbies</th>
              <th>Address</th>
              <th>Action</th>
              
</tr>
</thead>
        <?php
             $Select = "select * from student_info";
            $query = mysqli_query($conn,$Select);
            $count=0;

            while($resp= mysqli_fetch_array($query)){
            $count++;

           ?>
           <tbody>
           <tr>
                <td><?php echo $count?></td>
                <td><img src="<?php echo $resp['Image']?>"style="height:50px;width:50px;"/></td>
                <td><?php echo $resp['Frist Name']?></td>
                <td><?php echo $resp['Last Name']?></td>
                <td><?php echo $resp['Father Name']?></td>
                <td><?php echo $resp['Mother Name']?></td>
                <td><?php echo $resp['Phone']?></td>
                <td><?php echo $resp['Gender']?></td>
                <td><?php echo $resp['Hobbies']?></td>
                <td><?php echo $resp['Address']?></td>
                <td><a href="Update.php?id=<?php echo $resp['ID']?>" style="color: black" class="fs-3"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="Delete.php?id=<?php echo $resp['ID']?>" onclick="return Confome()" style="color: red" class="fs-3"><i class="fa-solid fa-trash-can"></i></a>
                </td>
               
    </tr>
    
    
        <?php
            }
        ?>


</table>




</body>
<script>
$(document).ready(function() {

    $('#TABLE').DataTable();
});
</script>
<script>
 function Confome(){
     return confirm("Are You Confirm delete data");
 };

</script>

</html>

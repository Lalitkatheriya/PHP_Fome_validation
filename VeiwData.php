
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
    <link rel="stylesheet" href="DATA.css" />
    <title>StudentData</title>
</head>
<body>
    

<div class="header">
<h1 class="text-center pt-3 p-5">View Student Data</h1>
</div>
<div class="col-4">
<h5 class="text-center">
      <!-- Inserted DAta -->
    <?php 
    include("dbconfig.php");
    if(isset($_SESSION["msg"])){
    ?>
   <div class="alert alert-warning alert-dismissible fade show" role="alert" id="one">
   <i class="fa-solid fa-check text-success"></i>
   <strong class="text-success">hello User!</strong> <?php echo $_SESSION["msg"];?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> 
  <?php
    unset($_SESSION["msg"]);
    }
    ?>
    </h5>
    <h5 class="text-center">
    <!-- Updataed Data -->
    <?php 

    if(isset($_SESSION["msg1"])){
        ?>
   <div class="alert alert-warning alert-dismissible fade show" role="alert" id="two">
    <i class="fa-solid fa-check text-success"></i>
    <strong class="text-success">hello User!</strong> <?php echo $_SESSION["msg1"];?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
        unset($_SESSION["msg1"]);
      }
      ?>
      </h5>
      <h5 class="text-center">

      <!--Deletedata -->
    <?php 
 
    if(isset($_SESSION["msg2"])){
    ?>
   <div class="alert alert-warning alert-dismissible fade show" role="alert" id="three">
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


<!-- Modal For validation -->
<div class="modal col-1"  id="Modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Form Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<div class="modal-body">

      
<form class="row g-3" method="POST" enctype="multipart/form-data">
<input type="hidden" id="id" value="">
<!-- fname -->
   <div class="col-6">
     <input type="text"
     class="form-control" 
     name="fname"
     id="Fname" 
     placeholder="Frist Name">
    
    </div>
  
<!-- Lname  mother father-->
  <div class="col-6">
  <input type="text" 
  class="form-control" 
  name="lname" 
  id="Lname"  
  placeholder="Last Name">
  </div>
  <!-- Father Name -->
  <div class="col-6">
  <input type="text"
  class="form-control" 
  name="father" 
  id="Father"   
  placeholder="Father's Name"
  >
</div>
<!-- Mother Name -->
  <div class="col-6">
  <input type="text" 
  class="form-control" 
  name="mother"
  id="Mother"  
  placeholder="Mother's Name">
  </div>
<!-- Phone -->
<div class="col-6">
  <input type="text"
   class="form-control" 
   name="Phone"
   id="Phone"    
   placeholder="Phone">
  
  </div>
<!-- Email -->
<div class="col-6">
  <input type="email" 
    class="form-control" 
    name="email"
    id="Email"  
    placeholder="Email"> 
</div>
<!-- Password -->
<div class="col-6">
  <input type="password" 
  class="form-control" 
  name="Pass" 
   placeholder="Password">
</div>
<!-- Date of Birth -->
<div class="col-6">
  <input type="date" 
   class="form-control" 
   name="dob" 
   placeholder="Date of Birth">
 
  </div>
<div class="col-6  d-block justify-content-evenly   pt-2">
        <label for="" class="form-label">Gender</label>
        <div class="col-6d-block justify-content-evenly ">
        <div class="form-check m-1  ">
        <input class="form-check-input " type="radio" name="gen" id="Male" value=Male>
        <label class="form-check-label" for="">Male</label>
        </div>
        </div>
        <div class="form-check m-1 ">
        <input class="form-check-input" type="radio" name="gen" id="Female"value=Female>
        <label class="form-check-label" for="">Female</label>
        </div>
</div>

  <!-- Hobbies -->
<div class="col-6 d-block justify-content-evenly ">
  <label class="form-check-label" for="">Hobbies</label>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" id="Singing" value="Singing"  name="Hobbies[]"
  >
  <label class="form-check-label" for=""> Singing</label>
   </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" id="Dancing" value ="Dancing" name="Hobbies[]"
  >

  <label class="form-check-label" for="">Dancing</label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="checkbox" id="Acting" value="Acting" name="Hobbies[]"
 
  >
  <label class="form-check-label" for="flexCheckChecked">Acting</label>
  </div>
 

</div>
<div class="col-12">
   <label for="" class="form-label">Address</label>
   <textarea class="form-control" 
   name="Add" rows="4" id="ADD"></textarea>
   
</div>

</form>
<div class="pt-3 modal-footer">
 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
 <button type="submit" id="Submit" class="btn btn-primary " name="Update">Update</button>
</div>
</div>
     </div>
     </div>
  </div>
</div>
<!-- =======Modale END======== -->



<!-- Data Table -->
<table id="Table">
  <thead>
    <tr></tr>
    <th> ID </th>
    <th> Status</th>
    <th> Fname </th>
    <th> Lname</th>
    <th> Father</th>
    <th> Mother</th>
    <th> Phone</th>
    <th> Email</th>
    
    <th> Gender</th>
    <th> Hobbies</th>
    <th> Address</th>
    <!-- <th> Status</th> -->
    <th> Action</th>

  </thead>


</table>



</body>



<!-- Erro Fade Out After Five Second -->
<script>

setTimeout(function() {
    $('#one').fadeOut('slow');
    $('#two').fadeOut('slow');
    $('#three').fadeOut('slow');
}, 5000);



</script>
<!--AXAX FORE DELETE DATA-->

<Script>
Lode();
   function Lode() {
        $('#Table').dataTable({
            "processing": true,
            "serverSide":true,
            "destroy":true,
            "ajax":{
              "url":"table.php",
              "type":"POST",
              "dataType":"json"
            },
            "columns": [
                {"data": "ID"},
                {"data": "Status"},
                {"data": "Fname"},
                {"data": "Lname"},
                {"data": "Father"},
                {"data": "Mother"},
                {"data": "Phone"},
                {"data": "Email"},
                {"data": "Gender"},
                {"data": "Hobbies"},
                {"data": "Address"},
                {"data": "Action"},
            ]
        });
    }



// process the form
 function Delete(i){
  if (confirm("Are You Sure Delete your data ?")==true){
       $.ajax({
        type    : 'POST',
        url     : "Ajaxdelete.php",
        data    : {"id":i},
       success: function(responce){
         Lode();
       var a = "#row_"+i;
        $(a).remove();
       }
     });
    }
    };


// Ajax UPDATE form
 function EditDAta(j){
       $.ajax({
        type    : "POST",
        datatype: 'json',
        url    : "Ajaxupdate.php",
        data   : {"id":j},
       success: function(resData){ 
      var json = JSON.parse(resData);
      $("#id").val(json["ID"]);
      $("input[name='fname']").val(json["Fname"]);
      $("input[name='lname']").val(json["Lname"]);
      $("input[name='father']").val(json["Father"]);
      $("input[name='mother']").val(json["Mother"]);
      $("input[name='email']").val(json["Email"]);
      $("input[name='Phone']").val(json["Phone"]);
      $("input[name='Pass']").val(json["Password"]);
      $("input[name='dob']").val(json["Date"]);
      $("#ADD").val(json["Address"]);
      if (json["Gender"]=="Male"){
       $("#Male").prop('checked',true);
      }
      if (json["Gender"]=="Female"){
      $("#Female").prop('checked',true);
      }
      var Hobbies=json["Hobbies"].split(",");
      console.log(Hobbies);
      $.each(Hobbies,function(key,val){
     $("input[name='Hobbies']").prop('checked',false);
        if (val =="Singing"){
       $("#Singing").prop('checked',true);
       }
      if (val =="Dancing"){
      $("#Dancing").prop('checked',true);
       }
      if (val =="Acting"){
       $("#Acting").prop('checked',true);
       }
      });


      $("#Submit").on("click",function update(){
      var id = $("#id").val();
      var Fname = $("#Fname").val();
      var Lname = $("#Lname").val();
      var Father = $("#Father").val();
      var Mother = $("#Mother").val();
      var Email= $("#Email").val();
      var Phone = $("#Phone").val();
      var Gender = $("input[name='gen']").val();
      var Hobbies = $("input[name='Hobbies[]']").val();
      var Address = $("#ADD").val();
      var Password = $("input[name='Pass']").val();
      console.log(id,Fname,Lname,Father,Mother,Email,Phone,Gender,Hobbies,Address,Password);
      $.ajax({
      type    : "POST",
      datatype: 'json',
      url    : "AjaxEdit.php",
      data   : {"id":id,"Fname":Fname,"Lname":Lname,"Father":Father,"Mother":Mother,"Email":Email,"Phone":Phone,"Gender":Gender,"Hobbies":Hobbies,"Address":Address,"Password":Password},
      success: function(res){ 
      Lode();
      $('#Modal').modal('hide');
      }
          
      });
    
 });
 



      }
     });
    };
    

     
</Script>





</html>
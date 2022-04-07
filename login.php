
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
     
    <link rel="stylesheet" href="home.css" />
    <title>Sinein</title>
  </head>
<body>

<!-- <div class="container">
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
        <li class="nav-item">
       <a class="nav-link" href="login.php"><i class="fa-solid fa-user p-1"></i>Login</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    
</div> -->


<?php 

if(isset($_POST["submit"])){

  echo "<h2>CHeak</h2>";

}
?>

<div class="container-fuide" id="home">

<div class="login" >
<h2 class="pt-5 text-center">Student Login </h2>

<form class="g-3 col-6" method="post">
  <div class="col-auto">
    <label for="inputPassword2" class="">User Name</label>
    <input type="text" class="form-control"  placeholder="User Name" name="name"  autocomplete="off" >
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="">Email</label>
    <input type="email" class="form-control"  placeholder="Email@gmial.com" name="Email" autocomplete="off">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="">Password</label>
    <input type="password" class="form-control"  placeholder="Password" name="Pass" autocomplete="off">
  </div>

     <div class="col-auto pt-3">
    <button type="submit" name="submit" class="btn btn-primary mb-3">Sinein</button>
  </div>
</form>
 
</div>

</div>

    




<footer>


</footer>
</body>

</html>

    
<?php
session_start();  

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
  </head>

  <body background="media/bgimage.png"></body>
  
  
  <?php

include 'server.php';
  
  if (isset($_POST['submit'])) {
  $Roll_No = $_POST['Roll_No'];
  $password = $_POST['password'];


  if (count($errors) == 0) {
  	
  	$query = "SELECT Roll_No,password FROM users WHERE Roll_No='$Roll_No' AND password='$password'";
  	$results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['Roll_No'] = $Roll_No;
      $_SESSION['Full_name'] = $Full_name;
      
     
  	  ?>
      
      echo "<SCRIPT> 
        alert('Login Successful')
        window.location.replace('dash.php');
       </SCRIPT>";
   
    <?php
  	}else {
  		array_push($errors, "Invalid Username/Password Incorrect");
  	}
  }
}






?>

















  <body class="login">

   <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-4">
        <?php
        if(isset($_SESSION['status']))
        {
          
          ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong>Holy </strong> <?php echo $_SESSION['status']; ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          <?php
          unset($_SESSION['status']);
        }
        ?>
          <div class="card bx">
            <div class="card-body">
              <div class="card-title">
                <h4>Log In</h4>
                <p class="card-text small text-muted">Login with your username &amp; password
                <form action="login.php" method="POST">
                <?php include('errors.php'); ?>
                  <div class="mb-3">
                    <input type="text" class="form-control form-control-sm" placeholder="Roll_No" required name="Roll_No">
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control form-control-sm" placeholder="Password" required name="password">
                  </div>
                  <p class="log">Don't have an account? <a href='index.php'>Sign Up Here</a>
                  <div class="mb-3">
                    <input type="submit" name="submit" class="btn btn-sm btn-success btn-block" value="Login">

                  </div>
                </form>
                </p>
              </div>
            </div>

        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  
  </body>
</html>
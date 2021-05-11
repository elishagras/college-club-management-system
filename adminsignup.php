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
    <title>Sign Up</title>
  </head>
  <body background="media/bgimage.png"></body>



<?php
include 'server.php';

  // REGISTER USER
  if (isset($_POST['submit'])) {
  // receive all input values from the form
  $Roll_No = $_POST['Roll_No'];
  $Full_name = mysqli_real_escape_string($conn, $_POST['Full_name']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
  

  if ($password != $confirm_password) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  /* $user_check_query = "SELECT * FROM users WHERE Roll_No='$Roll_No' ";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Roll_No'] === $Roll_No) {
      array_push($errors, "Roll No already exists");

    
  }
 */
  // Finally, register user if there are no errors in the form
   
  	

  	$query = "INSERT INTO admin (Roll_No, Full_name, password, confirm_password) 
  			  VALUES('$Roll_No','$Full_name', '$password', '$confirm_password' )";
  	mysqli_query($conn, $query);










  	$_SESSION['Roll_No'] = $Roll_No;
    $_SESSION['Full_name'] = $Full_name;
  	$_SESSION['success'] = "You are now logged in";
    if(mysqli_query($conn, $query)){
      header('location: adminlogin.php');
  
    }
    
    else{
      ?>
         <script>
            alert("Registration successful");
        </script>
    <?php

      }
    
  	

}
?>
























  <body class="login">
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-4">
          <div class="card bx">
            <div class="card-body">
              <div class="card-title">
                <h4>Sign Up(Admin)</h4>
                <p class="card-text small text-muted">Add your details
                <form action="adminsignup.php" method="POST">
                <?php include('errors.php'); ?>
                  <div class="mb-3">
                    <input type="text" class="form-control form-control-sm" placeholder="Roll_No" required name="Roll_No" >
                  </div>
                  <div class="mb-3">
                    <input type="text" class="form-control form-control-sm" placeholder="Full_name" required name="Full_name" >
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control form-control-sm" placeholder="Password" required name="password" >
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control form-control-sm" placeholder="Confirm_password" required name="confirm_password">
                  </div>
                  
                  <p class="log">Already an admin? <a href="adminlogin.php">Log In</a>
                 
                  
                  <div class="mb-3">
                    <input type="submit" name="submit" class="btn btn-block btn-sm btn-success btn-adjust" value="Sign Up">
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
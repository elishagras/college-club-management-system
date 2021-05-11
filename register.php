<?php
 session_start();
 $Roll_No = $_SESSION['Roll_No'];
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
    <title>Register</title>
  </head>
  <body background="media/bgimage.png"></body>

  <?php
 include('server.php');
 include('errors.php');

  // REGISTER USER
  if (isset($_POST['submit'])) {
  // receive all input values from the form
 
  $Club_name = mysqli_real_escape_string($conn, $_POST['Club_name']);
  
  $Department = mysqli_real_escape_string($conn, $_POST['Department']);
  $Year =  $_POST['Year'];
  $gender = mysqli_real_escape_string($conn, $_POST['gender']);
  
  $Phone_no = $_POST['Phone_no'];
  

  

    // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registered WHERE Roll_No='$Roll_No' ";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  /* if ($user) { // if user exists
    if ($user['Roll_No'] === $Roll_No) {
      array_push($errors, "Member already exists");
    }

    
  }  */


  // Finally, register user if there are no errors in the form
  

  	$query = "INSERT INTO registered (Roll_No ,Club_name, Department, Year, gender, Phone_no) 
  			  VALUES ('$Roll_No',  '$Club_name', '$Department', '$Year', '$gender',  '$Phone_no')";
  	$query_run = mysqli_query($conn, $query);



    if($query_run){
      ?>
    <script>
       alert("Registration Successful");
       window.location.replace('dash.php');
   </script>
<?php
      
  }
  else{
    ?>
    <script>
       alert("Registration Successful");
       window.location.replace('dash.php');
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
                <h4>New Member</h4>
                <p class="card-text small text-muted">Add your details
                <form action="register.php" method="POST">
                <?php include('errors.php'); ?>
                  
                  
                 
                  <div class="mb-3">
                  <label for="Club_name">Club:</label>
                  <select id="Club_name" name="Club_name">
                  <option value="musicclub">MUSIC CLUB</option>
                  <option value="ai/mlclub">AI/ML CLUB</option>
                  <option value="roboticsclub">ROBOTICS CLUB</option>
                  <option value="csiclub">CSI CLUB</option>
                  
                  </select>
                  </div>
                  
                  <div class="mb-3">
                    <input type="Department" class="form-control form-control-sm" placeholder="Department" name="Department" required>
                  </div>
                  <div class="mb-3">
                    <input type="Semester" class="form-control form-control-sm" placeholder="Year" name="Year" required >
                  </div>
                  <div class="mb-3">
                  <label for="gender">Gender</label>
                  <div>
                    <label for = "male" class ="radio-inline"><input type = "radio" name = "gender" value="m" id="male">Male</label>
                    <label for = "female" class ="radio-inline"><input type = "radio" name = "gender" value="f" id="female">Female</label>
                    <label for = "other" class ="radio-inline"><input type = "radio" name = "gender" value="o" id="other">Other</label>
                  </div>
                  </div>
                  
                  <div class="mb-3">
                    <input type="Phone_no" class="form-control form-control-sm" placeholder="Phone No" name="Phone_no" >
                  </div>
                  
                  <div class="mb-3">
                    <input type="submit" name="submit" class="btn btn-block btn-sm btn-success btn-adjust" value="Register">
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
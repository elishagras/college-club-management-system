<?php

session_start(); 
if(!isset($_SESSION['Roll_No'])){
  header('location: adminlogin.php');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <title>DashBoard</title>
  </head>
  <body background="media/bgimage.png"></body>
  <body>

    <!--nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">







      <div class="container-fluid">
        <a class="navbar-brand" href="dash.php">Welcome!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
            
            <li class="nav-item fcrit">
              <a class="fcrit" href="https://fcrit.ac.in/">FCRIT</a>
            </li>
            
            
            
          </ul>
        </div>
          <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <form class="d-flex">
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" placeholder="Search clubs" aria-label="Recipient's username" aria-describedby="button-addon2">
              <button class="btn btn-sm btn-success" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
            </div>
          </form>
        </ul>
<div class="nav-button">
        <a href="logout.php" class="mr-3 btn btn-sm btn-warning">Log Out</a>
      </div>
        
      </div>
  </nav>
    <!--nav -->
    
    <!--dashboard contents -->
    <div class="container-fluid">
      <div class="row mt-2">
        <div>
      <?php
            if(isset($_SESSION['status'])){
              ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php
             
              unset($_SESSION['status']);
            }
            ?>
            </div>
          <div class="col-lg-3 col-md-3 card-size">
            
                  <div class="card border-dark my_card" style="width: 18rem">
                      <img src="media/musicclub.jpg" width="250" height="250" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">MUSIC CLUB</h5>
                        
                        <a href="adminmusic.php" class="btn btn-primary button-size">View</a>
                      </div>
                    </div>
                    
              
          </div>
          <div class="col-lg-3 col-md-3 card-size">
              <div class="card border-dark my_card" style="width: 18rem;">
                  <img src="media/aimlimage.jpg" width="250" height="250" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">AI/ML CLUB</h5>
                    
                    <a href="adminaiml.php" class="btn btn-primary button-size">View</a>
                  </div>
                </div>
                
          
         </div>
         <div class="col-lg-3 col-md-3 card-size">
          <div class="card border-dark my_card" style="width: 18rem;">
              <img src="media/robotic.jpg" width="250" height="220" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ROBOTICS CLUB</h5>
                
                <a href="adminrobotics.php" class="btn btn-primary button-size">View</a>
              </div>
            </div>
            
      
         </div>
         <div class="col-lg-3 col-md-3 card-size">
          <div class="card border-dark my_card" style="width: 18rem;">
              <img src="media/csi.jpg" width="250" height="220" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">CSI CLUB</h5>
                
                <a href="admincsi.php" class="btn btn-primary button-size">View</a>
              </div>
              
            </div>
            
            
      
         </div>
         
      </div>
  </div>
  <!--dashboard contents -->

  <!--footer -->
  <footer class="main-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="copy text-center">
            <p><small>Copyright &copy; 2021. All Rights Reserved</small></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--footer -->

    

    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  
  </body>
</html>
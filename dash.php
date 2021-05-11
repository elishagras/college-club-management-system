<?php

session_start(); 
if(!isset($_SESSION['Roll_No'])){
  header('location: login.php');
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
                        <p class="card-text">
                          It is the mission of the Music Club to provide every member with the opportunity to learn and develop a deeper understanding of music through performances,
                          listenings and activities. This club strives to promote all student participation in the contribution and enjoyment of their musical abilities/talents and to provide an outlet 
                          for all students interested in music. 
                        </p>
                        <a href="musicclub.php" class="btn btn-primary button-size">More details</a>
                      </div>
                    </div>
                    
              
          </div>
          <div class="col-lg-3 col-md-3 card-size">
              <div class="card border-dark my_card" style="width: 18rem;">
                  <img src="media/aimlimage.jpg" width="250" height="250" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">AI/ML CLUB</h5>
                    <p class="card-text">The objective of the club is to equip the students with the ability and skills to analyze, design and develop computer systems and their applications. 
                      The focus will be on developing and strengthening systems thinking, problem-solving, analysis, design, research, 
                      teamwork and readiness for lifelong learning in areas of Artificial Intelligence and Machine Learning</p>
                    <a href="aiml.php" class="btn btn-primary button-size">More details</a>
                  </div>
                </div>
                
          
         </div>
         <div class="col-lg-3 col-md-3 card-size">
          <div class="card border-dark my_card" style="width: 18rem;">
              <img src="media/robotic.jpg" width="250" height="220" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">ROBOTICS CLUB</h5>
                <p class="card-text">Students design and build their robots from the ground up and must program the robots for the autonomous part of the competition as well as user controlled portion. Students learn the fundamentals of engineering design and computer programming. Students work in groups based on age and experience. 
                   It is a great way to get a start in engineering design.</p>
                <a href="robotics.php" class="btn btn-primary button-size">More details</a>
              </div>
            </div>
            
      
         </div>
         <div class="col-lg-3 col-md-3 card-size">
          <div class="card border-dark my_card" style="width: 18rem;">
              <img src="media/csi.jpg" width="250" height="220" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">CSI CLUB</h5>
                <p class="card-text">The Computer Society of India provide students to work on computer science subjects, but beyond the classroom level.
                  The students/members are given the training and requirements to sharpen their roles in the field of technology.
                  Enabling the students to showcase their talent in the field of CSE and opportunities to gain knowledge and expertise in the field.</p>
                <a href="csi.php" class="btn btn-primary button-size">More details</a>
              </div>
              
            </div>
            
            
      
         </div>
         <div>
         <button onclick="location='register.php'" class="btn btn-sm btn-success  butt" type="submit" >Click here to register</button>
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
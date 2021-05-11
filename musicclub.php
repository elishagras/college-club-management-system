<?php

session_start(); 
$Full_name = $_SESSION['Full_name'];
if(!isset($_SESSION['Roll_No'])){
  header('location: login.php');
}

//print_r($users);
?>
 <?php
include('server.php');
$get_users = 'SELECT * FROM registered, users where club_name="musicclub" AND registered.Roll_No=users.Roll_No';

$users_data = mysqli_query($conn, $get_users);
$users = mysqli_fetch_all($users_data, MYSQLI_ASSOC);
mysqli_free_result($users_data);


?> 


<?php

$get_count = 'SELECT member_count FROM club where club_name="musicclub"';
$club_data = mysqli_query($conn, $get_count);
$clubs = mysqli_fetch_assoc($club_data);

mysqli_free_result($club_data);
mysqli_close($conn);

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
    <link rel="stylesheet" href="css/style.css">
    <title>Music Club</title>
  </head>
  
  <body style="background-color:LavenderBlush">
    

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


    <!--banner -->
    <header class="main-header">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-8">
            <div class="header-text-holder">
              <span class="white_bg head-bg">WELCOME TO THE MUSIC CLUB!</span>
              
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--banner -->
    
    <!--section -->
    <section class="body-content">
      <div class="container">
        <div class="row">
        <div class="musicbg">
            <img src="media/musicclub.png" width="50" height="650" class="card-img-top" alt="..." style="float:right">   
        
          <div class="col-lg-8 col-md-3 space">
            <h3 class="text">DESCRIPTION</h3>
            <div>
              <p class="desc">
                It is the mission of the Music Club to provide every member with the opportunity to learn and develop a deeper understanding of music through performances,
                listenings and activities. This club strives to promote all student participation in the contribution and enjoyment of their musical abilities/talents and to provide an outlet 
                for all students interested in music. </p>
            </div>
            
            <h3 class="text">COMMITTEE</h3>
            <div class="container com">
              <div class="row">
                <div class="col-6 col-sm-3">
                  <h5>CLUB HEADS</h5>
                  <ul>
                    <li>Dany Poly</li>
                    <li>Aldric Pinto</li>
                  </ul>

                </div>
                <div class="col-6 col-sm-3 boxes">
                  <h5>CREATIVE DIRECTORS</h5>
                  <ul>
                    <li>Joel Chacko</li>
                   <li>Jennifer James</li>
                </ul>

                </div>

             <!-- Force next columns to break to new line -->
                <div class="w-100"></div>

                  <div class="col-6 col-sm-3">
                    <h5>SECRETARY</h5>
                    <ul>
                      <li>Anushuta Kakuste</li>
              
                    </ul>
              
                  </div>
                 <div class="col-6 col-sm-3 boxes">
                     <h5>EVENT CO-ORDIANTORS</h5>
                     <ul>
                      <li>Elisha Gras</li>
                      <li>Catherine Sunil</li>
                 </div>
               </div>
              </div>
            <div class="para">
            <ul>
            <li>To register for this club, go back to the homepage and click on the register button
            </li>
            </ul>
            </div>
            <div>
            <p class="member">Total number of members in the club: <?php  echo htmlspecialchars($clubs['member_count']);?> </p>
            </div>
            
    <div class="row mem">
        <div class="col">
            <h4>🎶Members in the club🎶:</h4>

            <div class="card card-body">
                <table class="table table-sm">
                    <tr>
                        <th>Roll No</th>
                        <th>Department</th>
                        <th>Year</th>
                        <th>Full Name</th>
                        
                        </tr>
                    <?php foreach ($users as $user) : ?>
                      <tr>
                            <td><?php echo htmlspecialchars($user['Roll_No']); ?></td>
                            
                            <td><?php echo htmlspecialchars($user['Department']); ?></td>
                            <td><?php echo htmlspecialchars($user['Year']); ?></td>
                            <td><?php echo htmlspecialchars($user['Full_name']); ?></td>
                            
                              
                              
                            
                            
                            
                        </tr>
                        <?php endforeach; ?>
                </table>
            </div>
        </div>
              
      </div>
          
          
          </div>
        </div> 
     

            
   
          
    </section>
    <!--section -->

    
  </div>
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
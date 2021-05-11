<?php
include('server.php');
/* if (isset($_POST['delete'])) {

    $id_to_delete = $_POST['id_to_delete'];

    $sql = "DELETE FROM users WHERE roll_no = $id_to_delete";

    if (mysqli_query($conn, $sql)) {
        header('Location: home.php');
    } else {
        echo 'query error: ' . mysqli_error($conn);
    }
}  */
$get_users = 'SELECT * from registered,users WHERE club_name="roboticsclub" AND registered.Roll_No=users.Roll_No';
$users_data = mysqli_query($conn, $get_users);
$users = mysqli_fetch_all($users_data, MYSQLI_ASSOC);

mysqli_free_result($users_data);
mysqli_close($conn);
//print_r($books);
?>




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
        
             <div class="card card-body">
        <table class="table table-sm">
            <tr>
                <th>Roll No</th>
                <th>Full Name</th>
                <th>Department</th>
                <th>Year</th>
                <th>Update</th>
                <th>Delete</th>
                
               
                
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($user['Roll_No']); ?></td>
                    <td><?php echo htmlspecialchars($user['Full_name']); ?></td>
                    <td><?php echo htmlspecialchars($user['Department']); ?></td>
                    <td><?php echo htmlspecialchars($user['Year']); ?></td>
                   

                    <!--<td><a href="update_users.php?id=<?php echo $user['roll_no'] ?>" class="btn btn-sm btn-outline-primary">Update</a></td>
                    <td>
                        <form action="users.php" method="POST">
                            <input type="hidden" name="id_to_delete" value="<?php echo $user['roll_no']; ?>">
                            <input type="submit" name="delete" value="Delete" class="btn btn-sm btn-outline-danger">
                        </form>
                    </td>
                    <!--<td><a href="" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#exampleModal">Delete</a></td> -->
                </tr>
                <?php endforeach; ?>
                </table>
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
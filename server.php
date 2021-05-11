<?php


// initializing variables
$username = "";

$errors = array(); 

// connect to the database
$server = "localhost:3307";
$user = "root";
$password = "";
$db = "registration";

$conn = mysqli_connect($server, $user, $password, $db);

if($conn){
    ?>
         <script>
            alert("Connection Successful");
        </script>
    <?php
}else{
    ?>
         <script>
            alert("Connection Failed");
        </script>
    <?php
}


?>






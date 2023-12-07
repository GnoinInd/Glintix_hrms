<?php
$hostname = "localhost";
$user = "root";
$password = "";
$db = "glintix";

$con = mysqli_connect($hostname, $user, $password, $db);

if ($con) {
      // echo "connection successfull";

} else {
      $success = "not successfull";
}

/*if($con){
         ?>
         <script>alert("Connection Successfull");</script>
         <?php
}
else{
         ?>
         <script>alert("Connection not Successfull");</script>
         <?php
      
}

//$con=mysqli_connect('localhost', 'root', '','registration') or die("DB Not Connected"); 
/*$connection = mysqli_connect('localhost', 'root');

if ($connection) {
      echo "connection successfull ";
}
else{
      echo "connection error";
}

mysqli_select_db($connection, 'registration');*/
?>
<?php 

$con = mysqli_connect("localhost", 'root', '', 'glintix') or die("DB Not connected");


if ($con) {
      echo "<script>alert('Connection successful');</script>";
}

?>
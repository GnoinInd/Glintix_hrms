<?php

session_start();

// session_unset();
session_destroy();


// Check if the user is logged in
if (isset($_SESSION['phone_num'])) {

    // User is not logged in, redirect to the login page
    header('Location: signin.php');

}

// User is logged in, display the success message
$phone_num = $_SESSION['phone_num'];


?>
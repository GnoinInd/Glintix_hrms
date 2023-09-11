<?php
session_start();
// Assuming you have established a connection to your MySQL database
// If not, you can use the following code to establish a connection:
$connection = mysqli_connect("localhost", "root", "", "signupforms");

// Check if the form is submitted


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (isset($_POST['submit'])) {
    // Retrieve the form data


    $_SESSION['user_id'] = $_POST['user_id'];
    $email = $_POST["email"];
    $description = $_POST["description"];


    $pname = $_FILES["file"]["name"];

    $tname = $_FILES["file"]["tmp_name"];

    $uplods_dir = 'images';
    move_uploaded_file($tname, $uplods_dir . '/' . $pname);
    //$
    // I
    // Escape special characters to prevent SQL injection

    $user_id = mysqli_real_escape_string($connection, $_SESSION['user_id']);
    $email = mysqli_real_escape_string($connection, $email);
    $description = mysqli_real_escape_string($connection, $description);
    $pname = mysqli_real_escape_string($connection, $pname);


    // Perform the insertion query
    $query = "INSERT INTO help_data  ( user_id, email, description,image) VALUES ( '$user_id', '$email', '$description','$pname')";
    $result = mysqli_query($connection, $query);




    if ($result) {
        echo "Data inserted successfully.";
        exit();
    } else {
        echo "Error: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
}


?>
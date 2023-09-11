<?php


include 'connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$awesomeness = $_POST['awesomeness'];

// Assuming $con is your database connection
$stmt = $con->prepare("INSERT INTO ajax_data (fname, lname, email, awesomeness) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fname, $lname, $email, $awesomeness);

if ($stmt->execute()) {
    $success = 'New record created successfully!';
} else {
    $error = 'Error: ' . $stmt->error;
}

$stmt->close();
$con->close();

?>
<?php
// Retrieve form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['number'];
$no_of_emp = $_POST['no_of_emp'];
$state = $_POST['state'];
$designation = $_POST['designation'];
$function = $_POST['function'];

// Validate form data (you can add additional validation as per your requirements)
$errors = array();

if (empty($fname)) {
    $errors[] = 'First name is required.';
}

if (empty($lname)) {
    $errors[] = 'Last name is required.';
}

if (empty($email)) {
    $errors[] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    $errors[] = 'Invalid email format.';


}

if (empty($number)) {
    $errors[] = 'Mobile number is required.';
}

// If there are errors, return them as JSON response
if (!empty($errors)) {
    $response = array(
        'status' => 'error',
        'message' => $errors
    );
    echo json_encode($response);
    exit;
}

// Database connection
// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'glintix';

// $con = mysqli_connect("localhost", 'root', '', 'glintix');

// // Check connection
// if ($con->connect_error) {
//     die('Connection failed: ' . $con->connect_error);
// }
include
// Prepare and execute the SQL statement
$stmt = $con->prepare("INSERT INTO demo_table, (fname, lname, email, number, no_of_emp, state, designation, function) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssisss", $fname, $lname, $email, $number, $no_of_emp, $state, $designation, $function);

if ($stmt->execute()) {
    $response = array(
        'status' => 'success',
        'message' => 'Form submitted successfully.'
    );
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Error submitting the form.'
    );
}

$stmt->close();
$con->close();

// Return the response as JSON
echo json_encode($response);
?>
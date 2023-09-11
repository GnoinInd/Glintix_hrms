<?php
include 'connection.php';

if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $no_of_emp = $_POST['no_of_emp'];
  $state = $_POST['state'];
  $designation = $_POST['designation'];
  $function = $_POST['function'];

  // Perform form validation
  $error = '';
  if (empty($fname) || empty($lname) || empty($email) || empty($number) || empty($no_of_emp) || empty($state) || empty($designation) || empty($function)) {
    $error = 'Please fill in all the fields.';
  } else {
    // Validation passed, proceed with database insertion
    $sql = "INSERT INTO demo_table (fname, lname, email, number, no_of_emp, state, designation, function) VALUES ('$fname', '$lname', '$email', '$number', '$no_of_emp', '$state', '$designation', '$function')";

    if (mysqli_query($con, $sql)) {
      $success = 'New record created successfully!';
      // Send success response
      $response = array('success' => $success);
      echo json_encode($response);
    } else {
      $error = 'Error: ' . $sql . ' ' . mysqli_error($con);
    }
  }

  // Send error response
//   $response = array('error' => $error);
//   echo json_encode($response);

//   mysqli_close($con);
}
?>

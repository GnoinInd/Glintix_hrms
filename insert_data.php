<?php
include 'connection.php';
extract($_POST);



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['number'];
$no_of_emp = $_POST['no_of_emp'];
$state = $_POST['state'];
$designation = $_POST['designation'];
$function = $_POST['function'];

if (empty($fname)) {
  $errors[] = "First name is required.";
}

if (empty($lname)) {
  $errors[] = "Last name is required.";
}
if (empty($email)) {
  $errors[] = "First name is required.";
}

if (empty($number)) {
  $errors[] = "number is required.";
}
if (empty($no_of_emp)) {
  $errors[] = "no_of_emp is required.";
}

if (empty($state)) {
  $errors[] = "state is required.";
}
if (empty($designation)) {
  $errors[] = "designation is required.";
}

if (empty($lname)) {
  $errors[] = "function.";
}






/// Prepare the SQL statement
if (empty($errors)) {

  $sql = "INSERT INTO demo_table (fname, lname, email, number, no_of_emp, state, designation, function) VALUES ('$fname', '$lname', '$email', '$number', '$no_of_emp', '$state', '$designation', '$function')";

  if (mysqli_query($con, $sql)) {
    echo 'New record created successfully!';

  } else {
    $error = 'Error: ' . $sql . ' ' . mysqli_error($con);

  }

  mysqli_close($con);

}
?>
<?php
include 'function.php';
session_start();
$success = 0;
$user = 0;
$message = "";  // Define the $message variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connection1.php';
    // $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $phone_num = $_POST['phone_num'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $usertype = $_POST['usertype'];

    // $sql="insert into `registration`(username,phone_num,email,password,cpassword) values('$username','$mobile','$email','$password','$cpassword')";
    // $result=mysqli_query($con,$sql);

    // if($result){
    //     echo "data inserted successfully";

    // }else{
    //     die(mysqli_error($con));
    // }



    $sql = "select * from `registration` where phone_num ='$phone_num'";

    $result = mysqli_query($con, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            // echo "user already exist";
            $user = 1;


        } else {

            $sql = "insert into `registration`(phone_num,username,email,password,cpassword,usertype) values('$phone_num','$username','$email','$password','$cpassword','$usertype')";
            $result = mysqli_query($con, $sql);

            if ($result) {
                $success = 1;
                $message = "Signup successfully";

            } else {
                die(mysqli_error($con));
            }

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>



    <div class="container d-flex align-items-center justify-content-center">
        <form action="index.php" method="POST">
            <div class="card h-75">
                <!-- card header   -->
                <div class="card-header">
                    <h3 class="text-center">Sign Up</h3>

                </div>
                <!-- card body   -->
                <div class="card-body ">
                    <?php if ($success == 1): ?>
                        <div class="alert alert-success text-center" role="alert">
                            <?php echo $message; ?>
                        </div>
                    <?php endif; ?>

                    <form action="">
                        <!-- username -->
                        <div class="input-group mb-3 ">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Enter your username" autocomplete="off"
                                name="username" aria-label="Username" aria-describedby="basic-addon1" required>



                        </div>
                        <!-- mobile number -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"
                                    aria-hidden="true"></i></span>
                            <input type="number" class="form-control" placeholder="Enteryour your Number"
                                autocomplete="off" name="phone_num" aria-label="confirm_password"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <!-- email -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"
                                    aria-hidden="true"></i></span>
                            <input type="email" class="form-control" placeholder="Enteryour your email"
                                autocomplete="off" name="email" aria-label="confirm_password"
                                aria-describedby="basic-addon1" required>
                        </div>
                        <!-- second field -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"
                                    aria-hidden="true"></i></span>
                            <input type="password" class="form-control" placeholder="Enter your password"
                                autocomplete="off" name="password" aria-label="paswords" aria-describedby="basic-addon1"
                                required>
                        </div>
                        <!-- third field -->
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"
                                    aria-hidden="true"></i></span>
                            <input type="password" class="form-control" placeholder="Confirm your password"
                                autocomplete="off" name="cpassword" aria-label="confirm_password"
                                aria-describedby="basic-addon1" required>
                        </div>

                        <select class="form-select" aria-label="Default select example" name="usertype">
                            <option selected>Open this select menu</option>
                            <option value="admin">admin</option>
                            <option value="user">user</option>

                        </select>
                        <!-- signup button -->
                        <div class="form-group ">

                            <input type="submit" name="register_btn" value="Sign Up" class="btn signup_btn">
                        </div>
                        <!-- third field -->
                    </form>

                </div>
                <!-- card footer   -->

                <div class="card-footer text-center text-light singup">
                    Already have an account?<a href="signin.php"> Sign In</a>
                </div>
            </div>
    </div>
    </form>
</body>

</html>
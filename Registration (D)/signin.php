<?php
session_start();
include 'function.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connection1.php';

    $phone_num = $_POST['phone_num'];
    $password = $_POST['password'];
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $account_created = $_POST['account_created'];
    $last_login = $_POST['last_login'];


    $sql = "SELECT * FROM `registration` WHERE phone_num = '$phone_num' AND password = '$password'";
    $result = mysqli_query($con, $sql);


    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['phone_num'] = $row['phone_num'];
            $_SESSION['usertype'] = $row['usertype'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['account_created'] = $row['account_created'];
            $_SESSION['last_login'] = $row['last_login'];

            //uqdating last login 
            $query = "UPDATE registration SET last_login = NOW()";
            $query .= "WHERE user_id = {$_SESSION['user_id']} LIMIT 1";
            $result_set = mysqli_query($con, $query);

            if (!$result_set) {
                die("database query failed");
            }

            if ($_SESSION['usertype'] == 'admin') {
                // Redirect to admin dashboard
                header("Location: http://localhost/Glintix_hrms/admin_panel/index.php");
                exit();
            } elseif ($_SESSION['usertype'] == 'user') {
                // Redirect to user dashboard
                header("Location: home.php");
                echo $username;

                exit();
            }
        } else {
            $error = "Invalid username or password";
        }
    } else {
        die(mysqli_error($con));
    }



}



?>






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
        <div class="card">
            <!-- card header   -->
            <div class="card-header">
                <h3 class="text-center">Sign In</h3>

            </div>
            <!-- card body   -->
            <div class="card-body">

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                    <!-- first field -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"
                                aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Enter your username" required="required"
                            autocomplete="off" name="phone_num" aria-label="phone_num" aria-describedby="basic-addon1">
                    </div>
                    <!-- second field -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"
                                aria-hidden="true"></i></span>
                        <input type="password" class="form-control" placeholder="Enter your password"
                            required="required" autocomplete="off" name="password" aria-label="password"
                            aria-describedby="basic-addon1">
                    </div>
                    <select class="form-select" aria-label="Default select example" name="usertype">
                        <option selected>Open this select menu</option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>

                    </select <!-- signin button -->
                    <div class="form-group ">

                        <input type="submit" name="login_btn" value="Sign In" class="btn signin_btn">
                    </div>
                    <!-- third field -->
                </form>

            </div>
            <!-- card footer   -->
            <div class="card-footer text-center text-light singup">
                don't have an account?<a href="index.php"> Sign Up</a>
            </div>
        </div>
    </div>
</body>

</html>
<?php
session_start();


if (isset($_SESSION['phone_num']) && isset($_SESSION['user_id'])) {
    $phone_num = $_SESSION['phone_num'];
    $user_id = $_SESSION['user_id'];


}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        </link>


        <style>
            body,
            html {
                height: 100vh;
                margin: 0;

            }

            .bg {
                /* The image used */
                background-image: url("https://images.pexels.com/photos/590041/pexels-photo-590041.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2");

                /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                margin: 0;
                padding: 0;

            }
        </style>
    </head>
</head>

<body>
    <div class="bg">
        <?php
        include 'C:\xampp\htdocs\Glintix_hrms\Registration (D)\connection1.php';
        include "./sidebar.php";



        include 'C:\xampp\htdocs\Glintix_hrms\Registration (D)\connection1.php';
        ?>

        <div id="main-content" class="container allContent-section py-4">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                        <h4 style="color:white;">Total Users</h4>
                        <h5 style="color:white;">
                            <?php
                            include 'C:\xampp\htdocs\Glintix_hrms\Registration (D)\connection1.php';
                            $sql = "SELECT * from demo_table";
                            $result = $con->query($sql);
                            $count = 0;
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {

                                    $count = $count + 1;
                                }
                            }
                            echo $count;
                            ?>
                        </h5>
                    </div>
                </div>



                <div id="main-content" class="container allContent-section py-4">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                                <h4 style="color:white;">Total customer</h4>
                                <h5 style="color:white;">
                                    <?php
                                    include 'C:\xampp\htdocs\Glintix_hrms\Registration (D)\connection1.php';
                                    $sql = "SELECT * from registration";
                                    $result = $con->query($sql);
                                    $count = 0;
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {

                                            $count = $count + 1;
                                        }
                                    }
                                    echo $count;
                                    ?>
                                </h5>
                            </div>
                        </div>







                        <div class="col-sm-3">
                            <div class="card">
                                <i class="fa fa-th-large mb-2" style="font-size: 70px;"></i>
                                <h4 style="color:white;">Total Categories</h4>
                                <h5 style="color:white;">
                                    <?php

                                    $sql = "SELECT * from category";
                                    $result = $con->query($sql);
                                    $count = 0;
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {

                                            $count = $count + 1;
                                        }
                                    }
                                    echo $count;
                                    ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <i class="fa fa-th mb-2" style="font-size: 70px;"></i>
                                <h4 style="color:white;">Total Products</h4>
                                <h5 style="color:white;">
                                    <?php

                                    $sql = "SELECT * from product";
                                    $result = $con->query($sql);
                                    $count = 0;
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {

                                            $count = $count + 1;
                                        }
                                    }
                                    echo $count;
                                    ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card">
                                <i class="fa fa-list mb-2" style="font-size: 70px;"></i>
                                <h4 style="color:white;">Total orders</h4>
                                <h5 style="color:white;">
                                    <?php

                                    $sql = "SELECT * from orders";
                                    $result = $con->query($sql);
                                    $count = 0;
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {

                                            $count = $count + 1;
                                        }
                                    }
                                    echo $count;
                                    ?>
                                </h5>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- NOTIFICATION POST -->
                <?php
                // Assuming you have established a connection to your MySQL database
// If not, you can use the following code to establish a connection:
                include 'C:\xampp\htdocs\Glintix_hrms\Registration (D)\connection1.php';

                // Check if the form is submitted
                


                // Retrieve the form data
                
                if (isset($_POST["description"]) && isset($_POST["status"]) && isset($_POST["user_id"])) {
                    $description = $_POST["description"];
                    $status = $_POST["status"];
                    $user_id = $_POST["user_id"];

                    // Escape special characters to prevent SQL injection
                    $description = mysqli_real_escape_string($con, $description);
                    $status = mysqli_real_escape_string($con, $status);
                    $user_id = mysqli_real_escape_string($con, $user_id);

                    $query = "INSERT INTO notification_data ( description, status, user_id) VALUES ( '$description', '$status', '$user_id')";
                    $result = mysqli_query($con, $query);




                    if ($result) {
                        echo "Data inserted successfully.";
                    } else {
                        echo "Error: " . mysqli_error($con);
                    }

                    // Close the database connection
                    mysqli_close($con);
                } else {
                    // Handle the case where one or more of the POST variables are not set.
                    // You can display an error message or take appropriate action here.
                }


                // Perform the insertion query
                



                ?>
                <div class="container">
                    <div class="row ">
                        <div class="col-md-auto">


                            <form method="POST" action="">
                                <div class="card">
                                    <h3 style="color:white">Send Notification</h3>



                                    <div class="form-group" style="color:white">
                                        <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea class="form-control" name="description"
                                            id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>

                                    <div class="form-group" style="color:white">
                                        <label for="exampleFormControlInput1">Status</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Status" name="status">
                                    </div>

                                    <select name="user_id" class="form-control form-control-sm">
                                        <option value="all">All users</option>
                                        <?php
                                        include 'C:\xampp\htdocs\Glintix_hrms\Registration (D)\connection1.php';
                                        // Include the connection file
                                        // $hostname = "localhost";
                                        // $user = "root";
                                        // $password = "";
                                        // $db = "glintix";
                                        
                                        // $con = mysqli_connect($hostname, $user, $password, $db);
                                        
                                        // // Check if the database connection was successful
                                        // if (!$con) {
                                        //     die("Connection failed: " . mysqli_connect_error());
                                        // }
                                        
                                        // Fetch user data from the table
                                        $sql = "SELECT user_id FROM registration";
                                        $result = mysqli_query($con, $sql);

                                        // Check if any users were found
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<option value="' . $row['user_id'] . '">' . $row['user_id'] . '</option>';
                                            }
                                        } else {
                                            echo '<option value="">No users found</option>';
                                        }

                                        // Close the database connection
                                        mysqli_close($con);
                                        ?>
                                    </select>

                                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-auto">


                            <h2>User complaint data</h2>
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.L</th>
                                        <th class="text-center">USER_ID</th>
                                        <th class="text-center">EMAIL</th>
                                        <th class="text-center">DESCRIPTION</th>
                                        <th class="text-center">DOC_IMG</th>
                                        <th class="text-center">CREATED_DATE</th>
                                        <th class="text-center" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <?php
                                include 'C:\xampp\htdocs\Glintix_hrms\Registration (D)\connection1.php';
                                // $servername = "localhost";
                                // $username = "root";
                                // $password = "";
                                // $dbname = "glintix";
                                
                                // // Create connection
                                // $conn = new mysqli($servername, $username, $password, $dbname);
                                // // Check connection
                                // if ($conn->connect_error) {
                                //     die("Connection failed: " . $conn->connect_error);
                                // }
                                

                                $sql = "SELECT * from help_data";
                                $result = $con->query($sql);
                                $count = 1;
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $count ?>
                                            </td>

                                            <td>
                                                <?= $row["user_id"] ?>
                                            </td>
                                            <td>
                                                <?= $row["email"] ?>
                                            </td>
                                            <td>
                                                <?= $row["description"] ?>
                                            </td>
                                            <td><img height='1000px' src='<?= $row["image"] ?>'></td>
                                            <td>
                                                <?= $row["created_date"] ?>
                                            </td>

                                            <td><button class="btn btn-danger" style="height:40px"
                                                    onclick="itemDelete">Delete</button>
                                            </td>
                                        </tr>
                                        <?php
                                        $count = $count + 1;
                                    }
                                }
                                ?>

                        </div>
                    </div>






                    <!-- OPEN -DISPLAY NOTIFICATION OF USER COMPLAINT FORM -->

                    <div>

                    </div>
                </div>
                <!-- CLOSE -DISPLAY NOTIFICATION OF USER COMPLAINT FORM  -->


                <!-- NOTIFICATION POST CLOSE -->


                <!-- footer -->



                <?php
                if (isset($_GET['category']) && $_GET['category'] == "success") {
                    echo '<script> alert("Category Successfully Added")</script>';
                } else if (isset($_GET['category']) && $_GET['category'] == "error") {
                    echo '<script> alert("Adding Unsuccess")</script>';
                }
                if (isset($_GET['size']) && $_GET['size'] == "success") {
                    echo '<script> alert("Size Successfully Added")</script>';
                } else if (isset($_GET['size']) && $_GET['size'] == "error") {
                    echo '<script> alert("Adding Unsuccess")</script>';
                }
                if (isset($_GET['variation']) && $_GET['variation'] == "success") {
                    echo '<script> alert("Variation Successfully Added")</script>';
                } else if (isset($_GET['variation']) && $_GET['variation'] == "error") {
                    echo '<script> alert("Adding Unsuccess")</script>';
                }
                ?>


                <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>
                <script type="text/javascript" src="./assets/js/script.js"></script>
                <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
            </div>





</body>

</html>
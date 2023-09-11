<?php
session_start();


// Check if the user is logged in
if (!isset($_SESSION['phone_num'])) {
    // User is not logged in, redirect to the login page
    header('Location: index.php');
    exit();
}

// User is logged in, display the success message
$phone_num = $_SESSION['phone_num'];

// echo $_SESSION['user_id']
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css />
    <link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .navbar {
            background-color: #0d838d;
        }

        .font {
            font: 2rem "Fira Sans", sans-serif;
            color: #306bb5;
            padding: 5px;
            margin-bottom: 10px;
            /* font-weight: bold; */
        }

        #noti_number {
            color: white;
        }



        .con {
            background-image: url('https://i.postimg.cc/Hssc3f4D/pexels-rostislav-uzunov-5011647.jpg');
            height: 100vh;
            width: 100%;

        }

        .demo {
            font-family: 'Noto Sans', sans-serif;
        }

        .panel {
            background: linear-gradient(to right, #2980b9, #2c3e50);
            padding: 0;
            border-radius: 10px;
            border: none;
            box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.05), 0 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .panel .panel-heading {
            padding: 20px 15px;
            border-radius: 10px 10px 0 0;
            margin: 0;
        }

        .panel .panel-heading .title {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 40px;
            margin: 0;
        }

        .panel .panel-heading .btn {
            color: rgba(255, 255, 255, 0.5);
            background: transparent;
            font-size: 16px;
            text-transform: capitalize;
            border: 2px solid #fff;
            border-radius: 50px;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-heading .btn:hover {
            color: #fff;
            text-shadow: 3px 3px rgba(255, 255, 255, 0.2);
        }

        .panel .panel-heading .form-control {
            color: #fff;
            background-color: transparent;
            width: 35%;
            height: 40px;
            border: 2px solid #fff;
            border-radius: 20px;
            display: inline-block;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-heading .form-control:focus {
            background-color: RGB(13, 131, 141);
            box-shadow: none;
            outline: none;
        }

        .panel .panel-heading .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5);
            font-size: 15px;
            font-weight: 500;
        }

        .panel .panel-body {
            padding: 0;
        }

        .panel .panel-body .table thead tr th {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.2);
            font-size: 16px;
            font-weight: 500;
            text-transform: uppercase;
            padding: 12px;
            border: none;
        }

        .panel .panel-body .table tbody tr td {
            color: #fff;
            font-size: 15px;
            padding: 10px 12px;
            vertical-align: middle;
            border: none;
        }

        .panel .panel-body .table tbody tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .panel .panel-body .table tbody .action-list {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .panel .panel-body .table tbody .action-list li {
            display: inline-block;
            margin: 0 5px;
        }

        .panel .panel-body .table tbody .action-list li a {
            color: #fff;
            font-size: 15px;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-body .table tbody .action-list li a:hover {
            text-shadow: 3px 3px 0 rgba(255, 255, 255, 0.3);
        }

        .panel .panel-body .table tbody .action-list li a:before,
        .panel .panel-body .table tbody .action-list li a:after {
            content: attr(data-tip);
            color: #fff;
            background-color: #111;
            font-size: 12px;
            padding: 5px 7px;
            border-radius: 4px;
            text-transform: capitalize;
            display: none;
            transform: translateX(-50%);
            position: absolute;
            left: 50%;
            top: -32px;
            transition: all 0.3s ease 0s;
        }

        .panel .panel-body .table tbody .action-list li a:after {
            content: '';
            height: 15px;
            width: 15px;
            padding: 0;
            border-radius: 0;
            transform: translateX(-50%) rotate(45deg);
            top: -18px;
            z-index: -1;
        }

        .panel .panel-body .table tbody .action-list li a:hover:before,
        .panel .panel-body .table tbody .action-list li a:hover:after {
            display: block;
        }

        .panel .panel-footer {
            color: #fff;
            background-color: transparent;
            padding: 15px;
            border: none;
        }

        .panel .panel-footer .col {
            line-height: 35px;
        }

        .pagination {
            margin: 0;
        }

        .pagination li a {
            color: #fff;
            background-color: transparent;
            border: 2px solid transparent;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
            line-height: 31px;
            width: 35px;
            height: 35px;
            padding: 0;
            margin: 0 3px;
            border-radius: 50px;
            transition: all 0.3s ease 0s;
        }

        .pagination li a:hover {
            color: #fff;
            background-color: transparent;
            border-color: rgba(255, 255, 255, 0.2);
        }

        .pagination li a:focus,
        .pagination li.active a,
        .pagination li.active a:hover {
            color: #fff;
            background-color: transparent;
            border-color: #fff;
        }

        .pagination li:first-child a,
        .pagination li:last-child a {
            border-radius: 50%;
        }

        @media only screen and (max-width:767px) {
            .panel .panel-heading .title {
                text-align: center;
                margin: 0 0 10px;
            }

            .panel .panel-heading .btn_group {
                text-align: center;
            }
        }

        a {
            text-transform: capitalize;
        }
    </style>




</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg  navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <?= $_SESSION['username'] ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <!-- help close-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span>
                                Help</span>

                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Contact details</a></li>
                            <li><a class="dropdown-item" href="#">Customer care</a></li>



                        </ul>

                        <!-- help open-->


                        <!-- support open-->


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span>
                                Support</span>

                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Technical support</a></li>
                            <li><a class="dropdown-item" href="#">User guide</a></li>
                        </ul>




                        <!-- support close-->




                        <!-- user open-->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span> <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
                                    class="rounded-circle" height="30" alt="" loading="lazy" /> <?php echo $_SESSION['username']; ?></span>

                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="myprofile.php">My profile</a></li>
                            <li><a class="dropdown-item" href="#">My product</a></li>
                            <li><a class="dropdown-item" href="#">My order</a></li>

                            <li><a class="dropdown-item" href="delete.php">Logout</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- user close-->




                <td width="15%">
                    <a href="notificationlist.php"><i class="fa-solid fa-bell fa-lg  " aria-hidden="true"
                            id="noti_number"></i> </a>
                </td>
                <script type="text/javascript">
                    function loadDoc() {
                        setInterval(function () {

                            var xhttp = new XMLHttpRequest();
                            xhttp.onreadystatechange = function () {
                                if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("noti_number").innerHTML = this.responseText;
                                }
                            };
                            xhttp.open("GET", "data.php", true);
                            xhttp.send();

                        }, 1000);


                    }
                    function resetForm() {
                        document.getElementById("noti_number").reset();
                    }

                    document.getElementById("noti_number").addEventListener("click", resetForm);



                    loadDoc();

                </script>




                <?php
                // $servername = "localhost";
                // $username = "root";
                // $password = "";
                // $dbname = "signupforms";
                
                // // Create connection
                // $conn = new mysqli($servername, $username, $password, $dbname);
                // // Check connection
                // if ($conn->connect_error) {
                //     die("Connection failed: " . $conn->connect_error);
                // }
                

                // $user_id = $_SESSION['user_id'];
                
                // $sql = "SELECT $user_id FROM notification_data";
                // $result = $conn->query($sql);
                

                // echo $result->num_rows;
                

                /*
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "id: " . $row["id"]. " - Notification: " . $row["description"];
                    }
                } else {
                    echo "0 results";
                }
                */
                // $conn->close();
                
                ?>



                <!-- 
                <form class="d-flex  mr-2" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>

    <!-- header close -->






    <div>
        <h2 class="font">Notification</h2>
        <!-- <table class="table ">
            <thead>
                <tr>
                    <th class="text-center">sl.no</th>
                    <th class="text-center">description</th>
                    <th class="text-center">status</th>
                    <th class="text-center">user_id </th>
                    <th class="text-center">username</th>
                    <th class="text-center">created_date</th>

                </tr>
            </thead> -->


        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-sm-3 col-xs-12">
                                    <h4 class="title">Data <span>List</span></h4>

                                </div>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>user_id</th>
                                            <th>Username</th>
                                            <th>created_date</th>

                                        </tr>






                                        <?php
                                        include "connection1.php";

                                        // Assuming you have started the session before this point
                                        $user_id = $_SESSION['user_id'];


                                        // Using prepared statement to prevent SQL injection
                                        $sql = "SELECT * FROM notification_data WHERE user_id = ?";
                                        $stmt = $con->prepare($sql);
                                        $stmt->bind_param("s", $user_id);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        $count = 1;
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                ?>

                                                <tr>
                                                    <td>
                                                        <?= $count ?>
                                                    </td>
                                                    <td>
                                                        <?= $row["description"] ?>
                                                    </td>
                                                    <td>
                                                        <?= $row["status"] ?>
                                                    </td>
                                                    <td>
                                                        <?= $row["user_id"] ?>
                                                    </td>
                                                    <td>
                                                        <?= $_SESSION['username'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['created_date'] ?>
                                                    </td>
                                                </tr>


                                                <?php
                                                $count++;
                                            }
                                        } else {
                                            echo '<tr><td colspan="4">No notifications found for this user.</td></tr>';
                                        }





                                        ?>

                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
















    <!-- footer -->

</body>

</html>
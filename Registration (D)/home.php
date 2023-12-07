<?php
include 'function.php';
session_start();
// session_destroy();


// Check if the user is logged in
if (!isset($_SESSION['phone_num'])) {

  // User is not logged in, redirect to the login page
  header('Location: signin.php');
  exit();
}

// User is logged in, display the success message
$phone_num = $_SESSION['phone_num'];


?>










<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
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
    .cartBadge {
      position: absolute;
      right: -1px;
      top: 20px;
      border-radius: 50%;
    }

    .bg-primary-light {
      background-color: #0d838d;

    }

    #noti_number {
      color: white;
    }

    .navbar {
      background-color: #0d838d;
    }

    h2 {
      text-transform: capitalize;
    }

    h3 {
      text-transform: capitalize;
    }

    h4 {
      text-transform: capitalize;
    }

    h5 {
      text-transform: capitalize;
    }

    a {
      text-transform: capitalize;
    }

    .var {
      text-transform: capitalize;
    }


    .con {
      background-image: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80');
      height: 100vh;
      width: 100%;
      background-repeat: no-repeat;
      background-size: cover;


    }



    body {
      background-color: #F0F2F5;
      font-family: "Arial";
    }

    strong {
      font-weight: 600;
    }

    .notification {
      width: 360px;
      padding: 15px;
      background-color: white;
      border-radius: 16px;
      position: fixed;
      bottom: 15px;
      left: 15px;
      transform: translateY(200%);
      animation: noti 10s infinite forwards alternate ease-in;

      &-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 15px;
      }

      &-title {
        font-size: 16px;
        font-weight: 500;
        text-transform: capitalize;
      }

      &-close {
        cursor: pointer;
        width: 30px;
        height: 30px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #F0F2F5;
        font-size: 14px;
      }

      &-container {
        display: flex;
        align-items: flex-start;
      }

      &-media {
        position: relative;
      }

      &-user-avatar {
        width: 60px;
        height: 60px;
        border-radius: 60px;
        object-fit: cover;
      }

      &-reaction {
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 30px;
        color: white;
        background-image: linear-gradient(45deg, #0070E1, #14ABFE);
        font-size: 14px;
        position: absolute;
        bottom: 0;
        right: 0;
      }

      &-content {
        width: calc(100% - 60px);
        padding-left: 20px;
        line-height: 1.2;
      }

      &-text {
        margin-bottom: 5px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        padding-right: 50px;

      }

      &-timer {
        color: #1876F2;
        font-weight: 600;
        font-size: 14px;
      }

      &-status {
        position: absolute;
        right: 15px;
        top: 50%;
        /* transform: translateY(-50%); */
        width: 15px;
        height: 15px;
        background-color: #1876F2;
        border-radius: 50%;
      }
    }

    @keyframes noti {
      50% {
        transform: translateY(0);
      }

      100% {
        transform: translateY(0);
      }
    }

    /* Style for the notification container */
    .notification {
      background-color: #0d838d;
      /* Make the background transparent */
      color: white;
      /* Set text color to white */

      box-shadow: 6px 5px whitesmoke;
      /* Add a white border */
      padding: 20px;
      /* Add some padding for spacing */
      border-radius: 50px;
      /* Add rounded corners */
    }

    /* Style for the notification header */
    .notification-header {
      margin-bottom: 10px;
      /* Add some space between header and content */
    }

    /* Style for the notification title */
    .notification-title {
      font-size: 24px;
      /* Increase the font size for the title */
      margin: 0;
      /* Remove default margin */
    }

    /* Style for the notification content */
    /* .notification-content {
      display: flex;
      align-items: center;
    } */

    /* Style for the notification text */
    /* .notification-text {
      margin: 0;
    } */

    /* Style for the notification media (icon) */
    .notification-media {
      margin-right: 10px;
      /* Add some space between icon and text */
    }
  </style>

</head>

<body>




  <div class="notification">
    <div class="notification-header">
      <h2 class="text-center">Notification</h2>

    </div>
    <div class="notification-container">

      <div class="notification-content">
        <p class="notification-text">
          <strong>
            <?php echo $_SESSION['username']; ?>
          </strong>, <strong>
            Welcome
          </strong>


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
                  <?= $count ?><br>
                </td>
                <td>
                  <?= $row["user_id"] ?>
                </td>
                <td>
                  <?= $row["description"] ?>
                </td>

                <td>
                  <?= $row["status"] ?>
                </td>


              </tr>
              <?php
              $count = $count + 1;

            }
          }
          ?>
          </table>


        </p>
        <span class="notification-timer"></span>
      </div>
      <span class="notification-status"></span>
    </div>
  </div>













  <!-- header -->
  <nav class="navbar navbar-expand-lg  navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <?php echo $_SESSION['username']; ?>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <!-- help close-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span>
                Help</span>

            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Contact details</a></li>
              <li><a class="dropdown-item" href="http://localhost/Glintix_hrms/Registration%20(D)/help.php">Help</a>
              </li>



            </ul>

            <!-- help open-->


            <!-- support open-->


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span> <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle"
                  height="30" alt="" loading="lazy" />
                <?php echo $_SESSION['username']; ?>
              </span>

            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="myprofile.php">My profile</a></li>
              <li><a class="dropdown-item" href="product.php">My product</a></li>
              <li><a class="dropdown-item" href="#">My order</a></li>

              <li><a class="dropdown-item" href="delete.php">Logout</a></li>
            </ul>
          </li>

        </ul>
        <!-- user close-->





        <td width="15%">
          <a href="notificationlist.php"><i class="fa-solid fa-bell fa-lg " aria-hidden="true" id="noti_number"></i>
          </a>
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
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "glintix";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }




        // Using prepared statement to prevent SQL injection
        $sql = "SELECT * FROM notification_data WHERE user_id = ?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        echo $result->num_rows;

        $conn->close();
        ?>
        <a href="cartProduct.php"><i class="fa-solid fa-cart-shopping mx-1 " style="color: #f0f2f4;"></i>
        </a><span class="badge cartBadge bg-danger">
          <?php

          $hostname = "localhost";
          $user = "root";
          $password = "";
          $db = "glintix";

          $con = mysqli_connect($hostname, $user, $password, $db);

          if ($con) {
            // echo "connection successfull";
          
          } else {
            $success = "not successfull";
          }

          // Assuming you have started the session before this point
          if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];



            // Using prepared statement to prevent SQL injection
            $sql = "SELECT * FROM wishlistdata WHERE user_id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("s", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            echo $result->num_rows;

            $con->close();
          }
          ?>
        </span>


      </div>
    </div>
  </nav>

  <!-- header close -->










  <div class="con container-fluid">
    <h2 class="text-white">Welcome,
      <?php echo $_SESSION['username'] ?>!<br>

    </h2>
    <p class="text-white">You have successfully logged in.</p>
    <h1 class="auto-type text-light text-center"></h1>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script>
      var typed = new Typed('.auto-type', {
        strings: ["<?php echo $_SESSION['username'] ?>", "you are successfully", "logedin",],
        typeSpeed: 150,
        backspeed: 150, // typing speed
        loop: true
      });

    </script>

  </div>



















  <!-- footer -->
  <footer class="bg-primary-light text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i
            class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
            class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
            class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
            class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i
            class="fab fa-linkedin-in"></i></a>
        <!-- Github -->
        <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i
            class="fab fa-github"></i></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>

</body>

</html>
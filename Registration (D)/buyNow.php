<?php
include 'function.php';
session_start();



// Check if the user is logged in
if (!isset($_SESSION['phone_num'])) {
    // User is not logged in, redirect to the login page
    header('Location: index.php');
    exit();
}

// User is logged in, display the success message
$phone_num = $_SESSION['phone_num'];

?>
<?php
if (!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to the login page
    $_SESSION['user_id'] = $row['user_id'];


}

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            box-shadow: 0 2px 15px rgba(64, 64, 64, 0.7);

            margin-bottom: 50px;
        }

        body {
            overflow-x: hidden;
        }

        td,
        th {
            padding: 10px 16px;
            text-align: center;
        }

        th {
            background-color: #0d838d;
            color: #fafafa;
            font-family: "Open Sans", Sans-serif;
            font-weight: bold;
        }

        tr {
            width: 100%;
            background-color: #fafafa;
            font-family: "Montserrat", sans-serif;
        }

        tr:nth-child(even) {
            background-color: #eeeeee;
        }

        /* product card css */
        body {
            background: #eee
        }

        .ratings i {
            font-size: 16px;
            color: red
        }

        .strike-text {
            color: red;
            text-decoration: line-through
        }

        .product-image {
            width: 100%
        }

        .dot {
            height: 7px;
            width: 7px;
            margin-left: 6px;
            margin-right: 6px;
            margin-top: 3px;
            background-color: blue;
            border-radius: 50%;
            display: inline-block
        }

        .spec-1 {
            color: #938787;
            font-size: 15px
        }

        h5 {
            font-weight: 400
        }

        .para {
            font-size: 16px
        }

        .cartBadge {
            position: absolute;
            right: -1px;
            top: 20px;
            border-radius: 50%;
        }






        /* product card css close */

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

        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%;
            /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%;
            /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        .icon-container {
            margin-bottom: 20px;
            padding: 7px 0;
            font-size: 24px;
        }

        .btn {
            background-color: #04AA6D;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }

            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg  navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <h2 class="text-white">
                    <?php echo $_SESSION['username']; ?>
                </h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    <!-- user open-->

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span> <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
                                    class="rounded-circle" height="30" alt="" loading="lazy" /> <?php echo $_SESSION['username']; ?></span>

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

                <a href="notificationlist.php"><i class="fa-solid fa-bell fa-lg  " aria-hidden="true"
                        id="noti_number"></i>
                </a>

                <a href="cartProduct.php"><i class="fa-solid fa-cart-shopping mx-1" style="color: #f0f2f4;"></i>
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










    <div class="row">
        <div class="col-50">
            <div class="container">
                <form action="/action_page.php">

                    <div class="row">
                        <div class="col-50">
                            <h3>Billing Address</h3>
                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                            <input type="text" id="email" name="email" placeholder="john@example.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                            <label for="city"><i class="fa fa-institution"></i> City</label>
                            <input type="text" id="city" name="city" placeholder="New York">

                            <div class="row">
                                <div class="col-50">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" placeholder="NY">
                                </div>
                                <div class="col-50">
                                    <label for="zip">Zip</label>
                                    <input type="text" id="zip" name="zip" placeholder="10001">
                                </div>
                            </div>
                        </div>

                        <div class="col-50">
                            <h3>Payment</h3>
                            <label for="fname">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy;"></i>
                                <i class="fa fa-cc-amex" style="color:blue;"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September">

                            <div class="row">
                                <div class="col-50">
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                                </div>
                                <div class="col-50">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                </div>
                            </div>
                        </div>

                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                    </label>
                    <input type="submit" value="Continue to checkout" class="btn">
                </form>
            </div>
        </div>

        <div class="col-50">
            <div class="container">
                <h4>Cart
                    <span class="price" style="color:black">
                        <i class="fa fa-shopping-cart"></i>
                        <b>
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
                        </b>
                    </span>
                </h4>
                <div>
                    <h2>My Cart</h2>
                    <table class="table" style="margin: 3px; padding: 3px;">
                        <thead>
                            <tr>

                                <th class="text-center ">S.N.</th>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Unit Price</th>
                                <th class="text-center">Discount Price</th>




                            </tr>
                        </thead>

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

                            $count = 1;
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $count ?>
                                        </td>

                                        <td>
                                            <?= $row["product_name"] ?>
                                        </td>


                                        <td>
                                            <?= $row["price"] ?>
                                        </td>
                                        <td style="color:red">
                                            <?= $row["dis_price"] ?>
                                        </td>
                                        <td>
                                        </td>


                                        <?php
                                        $count = $count + 1;
                                }
                            }
                        }
                        ?>
                            <hr>
                            <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
                </div>
            </div>
        </div>
</body>

</html>
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            box-shadow: 0 2px 15px rgba(64, 64, 64, 0.7);
            border-radius: 12px 12px 0 0;
            margin-bottom: 50px;
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

    <!-- header close -->


    <!-- producl list  -->

    <div>
        <h2>Product</h2>
        <table class="table" style="margin: 3px; padding: 3px;">
            <thead>
                <tr>
                    <th class="text-center ">S.N.</th>
                    <th class="text-center">Product Image</th>
                    <th class="text-center">Product Name</th>
                    <th class="text-center">Product Description</th>
                    <th class="text-center">Category Name</th>
                    <th class="text-center">Unit Price</th>
                    <th class="text-center">Discount Price</th>
                    <th class="text-center" colspan="2">Action</th>
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



            $sql = "SELECT * from product, category WHERE product.category_id=category.category_id";
            $result = $con->query($sql);
            $count = 1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Store product_name in a session variable
                    $_SESSION['product_id'] = $row["product_id"];

                    $_SESSION['product_image'] = $row["product_image"];
                    $_SESSION['product_name'] = $row["product_name"];
                    $_SESSION['product_desc'] = $row["product_desc"];
                    $_SESSION['category_name'] = $row["category_name"];

                    $_SESSION['price'] = $row["price"];
                    $_SESSION['dis_price'] = $row["dis_price"];
                    ?>
                    <tr>
                        <td>
                            <?= $count ?>
                        </td>
                        <td><img height='100px' src='http://localhost/Glintix_hrms/admin_panel/<?= $row["product_image"] ?>'>
                        </td>
                        <td>
                            <?= $row["product_name"] ?>
                        </td>
                        <td>
                            <?= $row["product_desc"] ?>
                        </td>
                        <td>
                            <?= $row["category_name"] ?>
                        </td>
                        <td>
                            <?= $row["price"] ?>
                        </td>
                        <td style="color:red">
                            <?= $row["dis_price"] ?>
                        </td>
                        <td>
                            <div class="d-flex flex-column mt-4">
                                <a href="http://localhost/Glintix_hrms/menu/attendance-management-system.php"
                                    class="btn btn-primary btn-sm" type="button">Details</a>

                                <form action="addCart.php" method="post">
                                    <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                                    <input type="hidden" name="product_id" value="<?= $row["product_id"] ?>">
                                    <input type="hidden" name="product_name" value="<?= $row["product_name"] ?>">
                                    <input type="hidden" name="category_name" value="<?= $row["category_name"] ?>">
                                    <input type="hidden" name="product_image" value="<?= $row["product_image"] ?>">
                                    <input type="hidden" name="product_desc" value="<?= $row["product_desc"] ?>">
                                    <input type="hidden" name="price" value="<?= $row["price"] ?>">
                                    <input type="hidden" name="dis_price" value="<?= $row["dis_price"] ?>">
                                    <button class="btn btn-outline-primary btn-sm mt-2" value="<?= $row["product_id"] ?>"
                                        type="submit" name="add_to_wishlist">Add to wishlist</button>


                                </form>
                            </div>
                        </td>


                        <?php
                        $count = $count + 1;
                }
            }

            ?>
        </table>


    </div>
    </div>


    </div>



    <!-- producl list  -->






</body>

</html>
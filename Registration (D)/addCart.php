<?php
session_start();
if (!isset($_SESSION['phone_num'])) {
    // User is not logged in, redirect to the login page
    header('Location: index.php');
    exit();
}

if (!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to the login page
    $_SESSION['user_id'] = $row['user_id'];


}


include 'connection1.php';

if (isset($_POST['add_to_wishlist'])) {
    // Get product data from the form
    $_SESSION['user_id'] = $_POST['user_id'];
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $category_name = $_POST['category_name'];
    $product_image = $_POST['product_image'];
    $price = $_POST['price'];
    $dis_price = $_POST['dis_price'];

    // Create a database connection (replace with your database details)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "glintix";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the product with the same ID already exists in the wishlist
    $check_query = "SELECT * FROM wishlistdata WHERE product_id = ? and user_id = ?";
    $stmt_check = $conn->prepare($check_query);
    $stmt_check->bind_param("ss", $product_id, $_SESSION['user_id']);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows > 0) {
        header('Location: product.php');
        // Product with the same ID already in the wishlist
        echo "This item is already in your wishlist.";
    } else {
        // Prepare and execute an SQL query to insert product values into the database
        $insert_query = "INSERT INTO wishlistdata (user_id, product_id, product_name, product_desc,category_name, product_image, price, dis_price) VALUES (?,?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
        $stmt->bind_param("ssssssdd", $_SESSION['user_id'], $product_id, $product_name, $product_desc, $category_name, $product_image, $price, $dis_price);

        if ($stmt->execute()) {
            header('Location: product.php');
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $stmt_check->close();
    $conn->close();
}
?>
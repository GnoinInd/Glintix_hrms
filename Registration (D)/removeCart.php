<?php
session_start();


if (!isset($_SESSION['phone_num'])) {
    // User is not logged in, redirect to the login page
    header('Location: index.php');
    exit();
}

if (!isset($_SESSION['user_id'])) {
    // You should set the user_id from your authentication logic.
    // For example, if you store it in a database, fetch it here.
    // $_SESSION['user_id'] = $row['user_id'];
}

include 'connection1.php'; // Include your database connection script

if (isset($_POST['remove_form_wishlist'])) {
    // Get product data from the form
    $user_id = $_SESSION['user_id'];
    $product_id = $_POST['product_id'];

    // Create a database connection (replace with your database details)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "glintix";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the product with the same ID exists in the wishlist
    $check_query = "SELECT * FROM wishlistdata WHERE product_id = ? AND user_id = ?";
    $stmt_check = $conn->prepare($check_query);
    $stmt_check->bind_param("ss", $product_id, $user_id);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows > 0) {
        // Product with the same ID exists in the wishlist, so delete it
        $delete_query = "DELETE FROM wishlistdata WHERE product_id = ? AND user_id = ?";
        $stmt_delete = $conn->prepare($delete_query);
        $stmt_delete->bind_param("ss", $product_id, $user_id);

        if ($stmt_delete->execute()) {
            header('Location: cartProduct.php');
        } else {
            echo "Error deleting product: " . $stmt_delete->error;
        }

        $stmt_delete->close();
    } else {
        echo "This item is not in your wishlist."; // Item not found in the wishlist
    }

    $stmt_check->close();
    $conn->close();
}
?>
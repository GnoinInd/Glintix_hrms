<?php
include_once "../config/dbconnect.php";


if (isset($_POST['upload'])) {

    $ProductName = $_POST['p_name'];
    $desc = $_POST['p_desc'];
    $price = $_POST['p_price'];
    $dis_price = $_POST['dis_price'];
    $category = $_POST['category'];


    $name = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];

    $dis_price = ($price * ($dis_price / 100));


    $dis_price = ((100 / $price) * $dis_price);

    $location = "./uploads/";
    $image = $location . $name;

    $target_dir = "../uploads/";
    $finalImage = $target_dir . $name;

    move_uploaded_file($temp, $finalImage);

    $insert = mysqli_query($conn, "INSERT INTO product 
         (product_name,  product_desc, product_image, price, dis_price, category_id) 
         VALUES ('$ProductName','$desc', '$image',  '$price', '$dis_price', '$category')");

    if (!$insert) {
        echo mysqli_error($conn);
    } else {
        echo "Records added successfully.";
    }


}

?>
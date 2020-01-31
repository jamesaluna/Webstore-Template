<?php

include_once 'dbh.inc.php';

$product_name = $_POST['product_name'];
$product_type = $_POST['product_type'];
$product_price = $_POST['product_price'];
$product_author = $_POST['product_author'];
$product_category = $_POST['product_category'];
$product_description = $_POST['product_description'];
$product_image = $_POST['product_image'];

$sql = "INSERT INTO `Products`(`product_name`, `product_type`, `product_price`, `product_category`, `product_description`, `product_image`, `author_name`) VALUES ('$product_name','$product_type','$product_price','$product_category','$product_description','$product_image','$product_author');";

$conn = OpenCon();
echo 'connection successful';
if(mysqli_query($conn, $sql)) {
    echo 'Connection successful';
} else {
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}

header("Loaction: ../index.php?posted=success");

?>
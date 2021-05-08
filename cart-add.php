<?php
require "common.php";
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $email=$_SESSION['email'];
    $query = "INSERT INTO user_items(user_id, items_id, status,email) VALUES('$user_id', '$item_id', 'Added to cart','$email')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>   
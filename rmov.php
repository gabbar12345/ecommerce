<?php

require 'common.php';
?>
<html>
    <head>
        <title>index</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
include 'header.php';
?>
        <?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET["id"]; 
    $user_id = $_SESSION['user_id'];
    
    // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $quer = "DELETE FROM user_items WHERE items_id='$item_id' AND user_id=$user_id";
    $res = mysqli_query($con, $quer) or die(mysqli_error($con));
    header("location:cart.php");
    
}
?>
</body>
</html>
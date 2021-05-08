<?php
require 'common.php';
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
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
<div style="background-image: url('images/20.jpg');text-align: center;color: #f8f8f8;background-size: cover;height:80%;">
<div class="container">
<div style="margin-top:400px;">
<a href="products.php" class="btn btn-danger btn-lg active" >Shop Now</a>
</div>
</div>
</div>
  
<?php
include 'footerpage.php';
?>
</body>
</html>
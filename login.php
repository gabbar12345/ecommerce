<?php
require 'common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
?>
<html>
<head>
<title>Log in</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.column{
margin-top:70px;
}

</style>
</head>
<body>
<?php
include 'header.php';
?>
<div class=" column"style="width:600px;margin-left:500px;margin-bottom:230px; ">
<div class="panel panel-primary" >
<div class="panel-heading">
<h3>LOGIN</h3>
</div>
<div class="panel-body">
Login to make a purchase
<form method="post" action="login_submit.php">
<div class="form-group">
<input type="email" name="email" placeholder="Email" class="form-control">
</div>
<div class="form-group">
<input type="password" name="password" placeholder="Password" class="form-control">
</div>
<button class="btn btn-primary">Login</button>
</form>
</div>
<div class="panel-footer">
Don't have an account?<a href="signup.php">Register</a>
</div>
</div>
</div><br>
<?php
include 'footerpage.php';
?>
</body>
</html>



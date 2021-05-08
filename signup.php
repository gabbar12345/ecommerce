<?php
include 'common.php';
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
<div class="container" style="width:600px;margin-bottom:185px;">
<h2>SIGN UP</h2>
<form method="post" action="signup_script.php">
<div class="form-group">
<input type="text" placeholder="Name" class="form-control" name="name">
</div>
<div class="form-group">
<input type="email" placeholder="Email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
</div>
<div class="form-group">
<input type="password" placeholder="Password" class="form-control" name="password" pattern="{.6,}">
</div>
<div class="form-group">
<input type="number" placeholder="Contact" class="form-control" name="comtact">
</div>
<div class="form-group">
<input type="text" placeholder="City" class="form-control" name="city">
</div>
<div class="form-group">
<textarea class="form-control">Address</textarea>
</div>
<button class="btn btn-primary">Submit</button>
</form>
</div>
<?php
include 'footerpage.php';
?>
</body
</html>


<?php
include 'common.php';
$email=$_POST['email'];
$password=$_POST['password'];
$select="SELECT email_id,id FROM users WHERE email_id='$email' AND password='$password'";
$result=mysqli_query($con,$select);
$total_row=mysqli_num_rows($result);
$id="SELECT id FROM users";
if($total_row===0){
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error);
}else{
$total=mysqli_fetch_array($result);
$_SESSION['email']=$total['email_id'];
$_SESSION['user_id']= $total['id'];
header('location: products.php');
}
?>


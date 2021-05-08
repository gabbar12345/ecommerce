<?php
include 'common.php';
$email=$_POST['old'];
$new=$_POST['new'];
$r=$_POST['rnew'];
$user_id=$_SESSION['user_id'];
$row="SELECT password FROM users WHERE id='$user_id'";
$tr= mysqli_query($con, $row);
$pass=mysqli_fetch_array($tr);
if($new===$r && $email===$pass['password']){
$update="UPDATE users SET password='$new' WHERE id='$user_id'";
$chang=mysqli_query($con,$update);
header('location: products.php');
echo "<script>";
echo "alert('successfully change password')";
echo "</script>";
}
 else {
     $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
    header('location: settings.php');
}
        ?>


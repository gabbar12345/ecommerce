<?php
include 'common.php';
$email=$_POST['email'];
$name=$_POST['name'];
$password=$_POST['password'];
$city=$_POST['city'];
$select="SELECT * FROM users WHERE email_id='$email'";
$ubmit=mysqli_query($con,$select);
$rows=mysqli_num_rows($ubmit);
if($rows!=0){
    
    header('location:signup.php');
    echo "already registered";
}else{
$data="INSERT INTO users(email_id,name,password,city) VALUES('$email','$name','$password','$city')";
$final=mysqli_query($con,$data);
$arr=mysqli_fetch_array($final);
$_SESSION['user_id']=mysqli_insert_id($con);
$_SESSION['email']=$email;
header('location:products.php');
}
?>
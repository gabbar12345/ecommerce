<?php

function check_if_added($items_id){
    $user_id=$_SESSION['user_id'];
    $con=mysqli_connect("localhost","root","","store");
    $elect="SELECT * FROM user_items WHERE items_id='$items_id' AND user_id='$user_id'";
    $query=mysqli_query($con,$elect);
    
if((mysqli_num_rows($query))>=1){
    return 1;
}else{
    return 0;
}
}
?>

<?php

function check_if_added($items_id){
    $user_id=$_SESSION['user_id'];
    include 'common.php';
    $elect="SELECT * FROM user_items WHERE items_id='$items_id' AND user_id='$user_id'";
    $query=mysqli_query($con,$elect);
    
if((mysqli_num_rows($query))>=1){
    return 1;
}else{
    return 0;
}
}
?>
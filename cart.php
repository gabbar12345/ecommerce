<?php
include 'common.php';
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
        
            
        <?php
        include 'header.php';
        echo '<br><br><br>';
        $user_id=$_SESSION['user_id'];
        $sum=0;
        $select="SELECT id,name,price FROM items INNER JOIN user_items ON items.id=user_items.items_id WHERE user_items.user_id='$user_id' AND user_items.status='Added to cart'";
        $selct_result=mysqli_query($con,$select) or die(mysqli_error($con));
        $row=mysqli_num_rows($selct_result);
        ?>
            <table class="table table-stripped">
                
        <?php if($row>=1){?>
                <thead>
                    <tr><th>Serial Number</th><th>Item</th><th>Price</th></tr>
                    </thead>
                    <tbody>
            <?php while($array=mysqli_fetch_array($selct_result)){    
                    $sum+=$array['price'];
 echo "<tr><td>" . $array["id"] . "</td><td>" . $array["name"] . "</td><td>Rs " . $array["price"] . "</td><td><a href='rmov.php?id={$array['id']}' class='remove_item_link'> Remove</a></td></tr>";
            }
    echo "<tr><td></td><td><b>Total</b></td><td>Rs " . $sum . "</td><td><a href='confirm.php?id={$array['id']}' class='btn btn-primary'>Confirm Order</a></td></tr>";
                
            ?>
                        </tbody>
        <?php
        }?>
</table>
            </div>
        <?php include 'footerpage.php'; ?>
    </body>
</html>
<?php

include_once("config.php");

//fetching data in descending order (lastest entry first)

$sql = "SELECT p.product_id, p.user_id, p.price, p.quantity, p.order_date
		FROM product p";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Added Product Information</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

    </style>
</head>

<body>

    <h1 align="center">Added Product Information</h1>
    <hr>

    <table align="center">
       
        <tr>
            <th>Product ID</th>
            <th>User ID</th>
            <th>Price</th>
            <th>Quantity</th> 
            <th>Order Date</th>
        </tr>

        <?php   
	   while($res = mysqli_fetch_array($result)) { 
	   ?>
        <tr>   
            <td><?php echo $res['product_id'];?></td>
            <td><?php echo $res['user_id'];?></td>  
            <td><?php echo $res['price'];?></td>
            <td><?php echo $res['quantity'];?></td>
            <td><?php echo $res['order_date'];?></td>
        </tr>

        <?php	
		}
		?>

    </table>



</body>

</html>

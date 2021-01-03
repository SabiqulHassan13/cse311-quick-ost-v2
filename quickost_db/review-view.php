<?php

include_once("config.php");

//fetching data in descending order (lastest entry first)

$sql = "SELECT r.review_id, r.user_id, r.product_id, r.review, r.review_date
		FROM review r
		";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Review Information</title>
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

    <h1 align="center">Product Review Information</h1>
    <hr>

    <table align="center">
       
        <tr>
            <th>Review ID</th>
            <th>User ID</th>
            <th>Product ID</th>
            <th>Review</th> 
            <th>Registration Date</th>

        </tr>

        <?php   
	       while($res = mysqli_fetch_array($result)) { 
	   ?>
        <tr>
            <td><?php echo $res['review_id'];?></td>
            <td><?php echo $res['user_id'];?></td>  
            <td><?php echo $res['product_id'];?></td>
            <td><?php echo $res['review'];?></td>
            <td><?php echo $res['review_date'];?></td>
        </tr>

        <?php	
		}
		?>

    </table>



</body>

</html>

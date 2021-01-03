<!DOCTYPE html>
<html>

<head>
    <title>Add Product Form</title>
</head>

<body>

    <h1>Add Product Form</h1>
    <hr>

    <form action="" method="post" name="">

        <h3>Product ID:
            <input type="text" name="product_id" placeholder="Enter your Product ID">
        </h3>

        <h3>User ID:
            <input type="text" name="user_id" placeholder="Enter your User ID">
        </h3>

        <h3>Product price:
            <input type="text" name="price" placeholder="Enter your Product Price">
        </h3>
       
        <h3>Product quantity:
            <input type="text" name="quantity" placeholder="Enter your Product Quantity">
        </h3>
      
        <h3>Order Date:
            <input type="date" name="order_date" placeholder="Enter your Order Date">
        </h3>


        <input type="submit" name="Submit" value="Submit">

    </form>


<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	
    $productId = $_POST['product_id'];
    $userId = $_POST['user_id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];  
	$orderDate = $_POST['order_date'];
	
	
    
	$sql = "INSERT INTO product(product_id, user_id, price, quantity, order_date) 
			                     VALUES('$productId', '$userId', '$price', '$quantity', '$orderDate')";

	
	$result = mysqli_query($conn, $sql);

	//header("Location: index.php");
	echo "<h1 align = 'center'>A new Product sucessfully added</h1>";
		
	}

?>

    <p align="center"><a href="add-product-view.php">VIEW Product list page</a></p>

</body>

</html>

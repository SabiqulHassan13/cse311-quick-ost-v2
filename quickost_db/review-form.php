<!DOCTYPE html>
<html>

<head>
    <title>Product Review Form</title>
</head>

<body>

    <h1>Product Review Form</h1>
    <hr>

    <form action="" method="post" name="">

        <h3>Review ID:
            <input type="text" name="review_id" placeholder="Enter your Review ID">
        </h3>

        <h3>User ID:
            <input type="text" name="user_id" placeholder="Enter your User ID">
        </h3>

        <h3>Product ID:
            <input type="text" name="product_id" placeholder="Enter your Product ID">
        </h3>
       
        <h3>Product Review: <br>
            <textarea rows="4" cols="50" name="review" placeholder="Give your review..."></textarea>
        </h3>
      
        <h3>Review Date:
            <input type="date" name="review_date" placeholder="Enter your Review Date">
        </h3>


        <input type="submit" name="Submit" value="Submit">

    </form>


<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	
    $reviewId = $_POST['review_id'];
    $userId = $_POST['user_id'];
    $productId = $_POST['product_id'];
    $reviewTxt = $_POST['review'];  
	$reviewDate = $_POST['review_date'];
	
	
				
	$sql = "INSERT  INTO review(review_id, user_id, product_id, review, review_date) 
			VALUES('$reviewId', '$userId', '$productId', '$reviewTxt', '$reviewDate')";
	
	$result = mysqli_query($conn, $sql);

	//header("Location: index.php");
	echo "<h1 align = 'center'>Product review sucessfully added</h1>";
		
	}

?>

    <p align="center"><a href="review-view.php">VIEW Product review page</a></p>

</body>

</html>

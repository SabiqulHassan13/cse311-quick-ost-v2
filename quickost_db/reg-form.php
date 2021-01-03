<!DOCTYPE html>
<html>

<head>
    <title>User Registration Form</title>
</head>

<body>

    <h1>User Registration Form</h1>
    <hr>

    <form action="" method="post" name="">

        <h3>User ID:
            <input type="text" name="user_id" placeholder="Enter your User ID">
        </h3>

        <h3>Password:
            <input type="password" name="password" placeholder="Enter your password">
        </h3>

        <h3>First Name:
            <input type="text" name="first_name" placeholder="Enter your first name">
        </h3>

        <h3>Last Name:
            <input type="text" name="last_name" placeholder="Enter your last name">
        </h3>

        <h3>Email ID:
            <input type="email" name="email_id" placeholder="Enter your Email ID">
        </h3>

       <h3>Contact No:
            <input type="text" name="contact_no" placeholder="Enter your Contact No">
        </h3>
        
        <h3>Registration Date:
            <input type="date" name="reg_date" placeholder="Enter your Registration Date">
        </h3>


        <input type="submit" name="Submit" value="Submit">

    </form>


<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	
    $uId = $_POST['user_id'];
    $pass = $_POST['password'];  
	$fName = $_POST['first_name'];
	$lName = $_POST['last_name'];
	$emailId = $_POST['email_id'];
	$contactNo = $_POST['contact_no'];
	$regDate = $_POST['reg_date'];

	
				
	$sql = "INSERT  INTO registered_user(user_id, password, first_name, last_name, email_id, contact_no, reg_date) 
								VALUES('$uId', '$pass', '$fName', '$lName', '$emailId', '$contactNo', '$regDate')";
	
	$result = mysqli_query($conn, $sql);

	//header("Location: index.php");
	echo "<h1 align = 'center'>Information Added</h1>";
		
	}

?>

    <p align="center"><a href="reg-view.php">VIEW</a></p>

</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <title>Contact Us Form</title>
</head>

<body>

    <h1>Contact Us Form</h1>
    <hr>

    <form action="" method="post" name="">

        <h3>Email ID:
            <input type="email" name="email_id" placeholder="Enter your Email ID">
        </h3>        
        <h3>Subject:
            <input type="text" name="subject" placeholder="Enter your Subject">
        </h3>        
        <h3>Message:
            <input type="text" name="message" placeholder="Enter your Message">
        </h3>
     
        <input type="submit" name="Submit" value="Submit">

    </form>


<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	
    $emailId = $_POST['email_id'];
    $subject = $_POST['subject'];  
	$message = $_POST['message'];
	
				
	$sql = "INSERT  INTO contact_us(email_id, subject, message) 
								VALUES('$emailId', '$subject', '$message')";
	
	$result = mysqli_query($conn, $sql);

	//header("Location: index.php");
	echo "<h1 align = 'center'>Contact message record added</h1>";
		
	}

?>

    <p align="center"><a href="contact-view.php">VIEW</a></p>

</body>

</html>

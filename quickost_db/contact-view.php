<?php

include_once("config.php");

//fetching data in descending order (lastest entry first)

$sql = "SELECT c.email_id, c.subject, c.message 
		FROM contact_us c
        ";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Contact Us Form Information</title>
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

    <h1 align="center">Contact Us Message Information</h1>
    <hr>

    <table align="center">
       
        <tr>
            <th>Email ID</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>

        <?php 
	while($res = mysqli_fetch_array($result)) { 
	?>
        <tr>
            <td><?php echo $res['email_id'];?></td>
            <td><?php echo $res['subject'];?></td>  
            <td><?php echo $res['message'];?></td>
        </tr>

        <?php	
		}
		?>

    </table>



</body>

</html>

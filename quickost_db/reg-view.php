<?php

include_once("config.php");

//fetching data in descending order (lastest entry first)

$sql = "SELECT r.user_id, r.password, r.first_name, r.last_name, r.email_id, r.contact_no, r.reg_date
		FROM registered_user r
		";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>View Registered Users' Information</title>
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

    <h1 align="center">Registered Users' Information</h1>
    <hr>

    <table align="center">
       
        <tr>
            <th>User ID</th>
        <!--     <th>Password</th> --> 
            <th>Password</th> 
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email ID</th>
            <th>Contact No</th>
            <th>Registration Date</th>

        </tr>

        <?php 
	while($res = mysqli_fetch_array($result)) { 
	?>
        <tr>
            <td><?php echo $res['user_id'];?></td>
           <!--  <td><?php echo $res['password'];?></td>  -->
            <td><?php echo $res['password'];?></td>  
            <td><?php echo $res['first_name'];?></td>
            <td><?php echo $res['last_name'];?></td>
            <td><?php echo $res['email_id'];?></td>
            <td><?php echo $res['contact_no'];?></td>
            <td><?php echo $res['reg_date'];?></td>
        </tr>

        <?php	
		}
		?>

    </table>



</body>

</html>

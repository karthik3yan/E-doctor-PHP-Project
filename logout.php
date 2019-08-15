<?php
	session_start();



 $a=$_SESSION['username'];

	

	$host = 'localhost';
	$username = 'root';
	$password = '1234';
	$dbname = 'e-doctor';
	$con = mysqli_connect($host, $username, $password, $dbname);


$update = mysqli_query($con, "UPDATE online
SET status= 'off'
WHERE name = '".$a."' AND `type` = 'pat'");
        if ($update) {
		header("Location: dashboard.php");
	}
        else {
    
				echo"error";
	}



	session_destroy();
	header("Location: index.php");
?>
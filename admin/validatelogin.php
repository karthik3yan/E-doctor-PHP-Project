<?php
	session_start();
	
	$host = 'localhost';
	$username = 'root';
	$password = '1234';
	$dbname = 'e-doctor';
	$con = mysqli_connect($host, $username, $password, $dbname);
	
	$id = $_POST['username'];
	$password = $_POST['password'];
	
	$result = mysqli_query($con, "SELECT `username`, `password` FROM `admin` WHERE `username` = '".$id."' AND `password` = '".$password."'");
	
	if (mysqli_num_rows($result) != 0) {

        $_SESSION['adminname'] = $id;
		header("Location: dashboard.php");
    
	} 
else {
				echo"invalid username or password";
         echo"<a href='login.html'> Try again</a>";
	}
?>
<?php

	$host = 'localhost';
	$username = 'root';
	$password = '1234';
	$dbname = 'e-doctor';
	$con = mysqli_connect($host, $username, $password, $dbname);
	
    $newuser = $_POST['name'];
	$newpwd = $_POST['password'];
    $newavail=$_POST['availabilty'];
    $newphone=$_POST['phone'];
    $newdept=$_POST['dept'];




	$insert = mysqli_query($con, "INSERT INTO `doctor` ( `dr_name`, `dr_password`, `dr_availabilty`, `dr_phone`,`dept`) VALUES ( '$newuser', '$newpwd', '$newavail', '$newphone','$newdept');");
        if ($insert) {
		header("Location: login.html");
	}
   
	
	

?>
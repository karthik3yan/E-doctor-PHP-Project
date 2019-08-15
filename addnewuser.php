<?php

	$host = 'localhost';
	$username = 'root';
	$password = '1234';
	$dbname = 'e-doctor';
	$con = mysqli_connect($host, $username, $password, $dbname);
	
    $newuser = $_POST['name'];
	$newpwd = $_POST['password'];
    $newdob=$_POST['date'];
    $newphone=$_POST['phone'];



$result = mysqli_query($con, "SELECT `username` FROM `user` WHERE `username` = '".$newuser."'");
	
	if (mysqli_num_rows($result) != 0) {
		  echo "Username taken ";
        echo"<a href='register.html'> Try again</a>";
	}
    else {
	$insert = mysqli_query($con, "INSERT INTO `user` (`userid`, `username`, `userpassword`, `userdob`, `userphone`) VALUES (NULL, '$newuser', '$newpwd', '$newdob', '$newphone');");
        if ($insert) {
		header("Location: login.html");
	}
    }
	
	

?>
<?php
	session_start();
	
	$host = 'localhost';
	$username = 'root';
	$password = '1234';
	$dbname = 'e-doctor';
	$con = mysqli_connect($host, $username, $password, $dbname);
	
	$username = $_POST['name'];
	$password = $_POST['password'];
	
	$result = mysqli_query($con, "SELECT `username`, `userpassword` FROM `user` WHERE `username` = '".$username."' AND `userpassword` = '".$password."'");
	
	if (mysqli_num_rows($result) != 0) {
		$_SESSION['username'] = $username;
        
        
        
        
         $result1 = mysqli_query($con, "SELECT `name`, `type` FROM `online` WHERE `name` = '".$username."' AND `type` = 'pat'");
	
	if (mysqli_num_rows($result1) != 0) {
        
	$update = mysqli_query($con, "UPDATE online
SET status= 'on'
WHERE name = '".$username."' AND `type` = 'pat'");
        if ($update) {
		header("Location: dashboard.php");
	}
        else {
    
				echo"error";
	}
   
     
       
        
        
    
	} 
          else
       {
           $insert1 = mysqli_query($con, "INSERT INTO `online` (`oid`, `type`, `status`, `name`) VALUES (NULL, 'pat', 'on', '".$username."');");
        if ($insert1) {
		header("Location: dashboard.php");
	}
              else {
    
				echo"error";
	}
           
       }
        
        
        
		header("Location: index.php");
	} else {
				echo"invalid username or password";
         echo"<a href='login.html'> Try again</a>";
	}
?>
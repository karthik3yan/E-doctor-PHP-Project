<?php
	session_start();
	
	$host = 'localhost';
	$username = 'root';
	$password = '1234';
	$dbname = 'e-doctor';
	$con = mysqli_connect($host, $username, $password, $dbname);
	
	$id = $_POST['id'];
	$password = $_POST['password'];

	
	$result = mysqli_query($con, "SELECT `dr_id`,`dr_name`, `dr_password` FROM `doctor` WHERE `dr_id` = '".$id."' AND `dr_password` = '".$password."'");
	
	if (mysqli_num_rows($result) != 0) {
        	while ($row = mysqli_fetch_assoc($result)) {
        $name=$row['dr_name'];
        $_SESSION['drid'] = $id;
		 $_SESSION['dname'] = $name;
        
        
        
        $result1 = mysqli_query($con, "SELECT `name`, `type` FROM `online` WHERE `name` = '".$name."' AND `type` = 'doctor'");
	
	if (mysqli_num_rows($result1) != 0) {
        
	$update = mysqli_query($con, "UPDATE online
SET status= 'on'
WHERE name = '".$name."' AND `type` = 'doctor'");
        if ($update) {
		header("Location: dashboard.php");
	}
        else {
    
				echo"error";
	}
   
     
       
        
        
    
	} 
          else
       {
           $insert1 = mysqli_query($con, "INSERT INTO `online` (`oid`, `type`, `status`, `name`) VALUES (NULL, 'doctor', 'on', '".$name."');");
        if ($insert1) {
		header("Location: dashboard.php");
	}
              else {
    
				echo"error";
	}
           
       }
        header("Location: dashboard.php");
            }
    }
else {
    
				echo"invalid username or password";
         echo"<a href='login.html'> Try again</a>";
	}
?>
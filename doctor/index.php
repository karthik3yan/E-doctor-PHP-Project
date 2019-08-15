


<?php

session_start();
if (isset($_SESSION['drid'])) {
  
		 header("Location: dashboard.php");
}
    
    
    else
    {
        
        header("Location: login.html");
    }


?>
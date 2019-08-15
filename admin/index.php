


<?php

session_start();
if (isset($_SESSION['adminname'])) {
  
		 header("Location: dashboard.php");
}
    
    
    else
    {
        
        header("Location: login.html");
    }


?>
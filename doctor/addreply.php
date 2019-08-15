<?php
	session_start();
	
	include ('dbconn.php');
	
	$comment = nl2br(addslashes($_POST['reply']));
	
	$tid = $_GET['tid'];
	$x= $_SESSION['drid'];

	$select = mysqli_query($con, "SELECT * from doctor where dr_id = $x");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
            

	   $insert = mysqli_query($con, "INSERT INTO replies (`topic_id`, `author`, `comment`, `date_posted`)
								  VALUES ( '".$tid."', '".$row['dr_name']."', '".$comment."', NOW());");
								  
	   if ($insert) {
		header("Location: viewtopic.php?tid=".$tid."");
	   }
                else
                {
    
                    echo "error";
    
                }   
                 
                }
    
        }
?>
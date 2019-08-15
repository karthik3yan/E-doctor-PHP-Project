



<?php
include ('dbconn.php');


echo"<h1>Online Status</h1>";
		$select = mysqli_query($con, "SELECT * FROM online where status = 'on' and type = 'pat'");
		
		while ($row = mysqli_fetch_assoc($select)) {
             echo"<br>";
            echo"Users online:";
             echo"<br>";
            echo $row['name'];
          
            
        }
     		$select = mysqli_query($con, "SELECT * FROM online where status = 'on' and type = 'doctor'");
		
		while ($row = mysqli_fetch_assoc($select)) {
             echo"<br>";
            echo"Doctors online:";
             echo"<br>";
            echo $row['name'];
          
            
        }
     
     
     ?>
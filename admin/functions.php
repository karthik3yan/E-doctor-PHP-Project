<?php
function menu() {
session_start();
				if (isset($_SESSION['adminname'])) {
  
		echo"<div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                         <li><a href=\"dashboard.php\" class=\"smoothScroll\">Dashboard</a></li>
                         <li><a href=\"adddoctor.php\" class=\"smoothScroll\">Add Doctor</a></li>
                         
                         <li class=\"appointment-btn\"><a href=\"logout.php\">Logout</a></li>
                    </ul>
               </div>		";				}
    
    
    else
    {
        
        header("Location: index.php");
    }


}



function doctorslist() {
		 include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM doctor");
		
		while ($row = mysqli_fetch_assoc($select)) {
            
            
            
            		echo"<tr class=\"row100 body\">
									<td class=\"cell100 column1\">".$row['dr_id']."</td>
									<td class=\"cell100 column2\">".$row['dr_name']."</td>
									<td class=\"cell100 column3\">".$row['dr_availabilty']."</td>
									<td class=\"cell100 column4\">".$row['dept']."</td>
									<td class=\"cell100 column5\"> ".$row['dr_phone']."</td>
								</tr>";
            
        
            
        }
	}


function userslist() {
		 include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM user");
		
		while ($row = mysqli_fetch_assoc($select)) {
            
            
            
            		echo"<tr class=\"row100 body\">
									<td class=\"cell100 column1\">".$row['userid']."</td>
									<td class=\"cell100 column2\">".$row['username']."</td>
									<td class=\"cell100 column3\">".$row['userdob']."</td>
									<td class=\"cell100 column4\"> ".$row['userphone']."</td>
								</tr>";
            
        
            
        }
	}



function doctorhistory($a)  {
		 include ('dbconn.php');
		
            	$select = mysqli_query($con, "SELECT * FROM consult where doctor_id=$a");
		
		while ($row1 = mysqli_fetch_assoc($select)) {
            		echo"<tr class=\"row100 body\">
									<td class=\"cell100 column1\">".$row1['user_name']."</td>
									<td class=\"cell100 column2\">".$row1['consult_id']."</td>
									<td class=\"cell100 column3\">".$row1['dateandtime']."</td>
								
								</tr></a>";
            
        }
            
        
	}


function patienthistory($a)  {
		 include ('dbconn.php');
		
    
    	$select = mysqli_query($con, "SELECT * from user where userid = $a");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
            $x= $row['username'];
                 
                }
    
    
}
    
   
   
    
            	$select = mysqli_query($con, "SELECT * FROM consult where user_name like '$x'");
		
		while ($row1 = mysqli_fetch_assoc($select)) {
            		echo"<tr class=\"row100 body\">";
									 drr($row1['doctor_id']);
									echo"<td class=\"cell100 column2\">".$row1['consult_id']."</td>
									<td class=\"cell100 column3\">".$row1['dateandtime']."</td>
								
								</tr></a>";
            
        }
            
        
	}




function drr($a)  {
		 include ('dbconn.php');
		
    
    
    
    
    	$select = mysqli_query($con, "SELECT * from doctor where dr_id = $a");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
        echo" <td class=\"cell100 column1\">".$row['dr_name']."</td>";
                 
                }
    
    
}

}


function listalldoctors()
{
    
    	 include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM doctor");
		
		while ($row = mysqli_fetch_assoc($select)) {
            
            
            
            		echo"<h3><a href='doctorpatienthistory.php?drid=".$row['dr_id']."'>".$row['dr_name']."</a></h3>";
            
        
            
        }
    
}



function listallusers()
{
    
    	 include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM user");
		
		while ($row = mysqli_fetch_assoc($select)) {
            
            
            
            		echo"<h3><a href='patientdoctorhistory.php?userid=".$row['userid']."'>".$row['username']."</a></h3>";
            
        
            
        }
    
}

function listallusersforum()
{
    
    	 include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM user");
		
		while ($row = mysqli_fetch_assoc($select)) {
            
            
            
            		echo"<h3><a href='patientforumlist.php?userid=".$row['userid']."'>".$row['username']."</a></h3>";
            
        
            
        }
    
}

 function listusersforums($x)
 {
     
     

    
    	include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT * from user where userid = $x");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
          
                $y=$row['username'];
                 
            }
     
     
     
       $select = mysqli_query($con, "SELECT * FROM topics WHERE author = '$y'");
		$row = mysqli_fetch_assoc($select);
		echo nl2br("<div ><h2 class='title'>".$row['title']."</h2><p>".$row['author']."\n".$row['date_posted']."</p></div>");
		echo "<div '><h4>".$row['content']."</h4><br></div>";
}
     
 }



?>

<?php







function menu() {
session_start();
				if (isset($_SESSION['drid'])) {
  
		echo"<div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                         <li><a href=\"dashboard.php\" class=\"smoothScroll\">Dashboard</a></li>
                         <li><a href=\"Notifications.php\" class=\"smoothScroll\">Notifications</a></li>
                         <li><a href=\"forum.php\" class=\"smoothScroll\">Forum</a></li>
                         <li class=\"appointment-btn\"><a href=\"logout.php\">Logout</a></li>
                    </ul>
               </div>		";				}
    
    
    else
    {
        
        header("Location: index.php");
    }


}





function profileconsulthistory($x)
{
    echo"<h2>List of Patients:</h2>";
    	include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT * from consult where doctor_id = $x");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
               echo " <a href=\"chat.php?user=".$row['user_name']."\"><h3>".$row['user_name']."</h3></a>   ";
                
                                                        }


                }

}



	function countReplies($tid) {
		include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM replies WHERE ".$tid." = topic_id");
		return mysqli_num_rows($select);
	}

	function dispreplies($tid) {
		include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM 
									  topics, replies WHERE ($tid = replies.topic_id) AND  ($tid = topics.topic_id) ");
		if (mysqli_num_rows($select) != 0) {
			echo "<div ><table >";
			while ($row = mysqli_fetch_assoc($select)) {
				echo nl2br("<tr><th><i class=\"fa fa-user\"></i> ".$row['author']."</th></tr><tr><td ><i class=\"fa fa-calendar\"></i> ".$row['date_posted']."\n<i class=\"fa fa-reply\"></i> ".$row['comment']."\n\n</td></tr>");
			}
			echo "</table></div>";
		}
	}


function viewtopic($tid)
{
    
    	include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM topics WHERE $tid = topic_id");
		$row = mysqli_fetch_assoc($select);
		echo nl2br("<div ><h2 class='title'>".$row['title']."</h2><p>".$row['author']."\n".$row['date_posted']."</p></div>");
		echo "<div '><h4>".$row['content']."</h4><br></div>";
}




 function chat($b) {
        	$a=$_SESSION['drid'];
     	
          include ('dbconn.php');  
      echo "
             <section id=\"appointment\" data-stellar-background-ratio=\"3\">
          <div class=\"container\">
               <div class=\"row\">

                    <div class=\"col-md-6 col-sm-6\">
                         <img src=\"/e-doctor/images/dr".$a.".jpg\" class=\"img-responsive\" >
                    </div>

                    <div class=\"col-md-6 col-sm-6\">
                      <div class=\"section-title wow fadeInUp\" data-wow-delay=\"0.4s\">
                                   <h2>Messages</h2>
                              </div>
                    
                    ";
        $select = mysqli_query($con, "SELECT * FROM `user` WHERE `username` LIKE '$b';");
		
		while ($row = mysqli_fetch_assoc($select)) {
            $uid=$row['userid'];
        }
        
       	
            $select = mysqli_query($con, "SELECT * FROM messages WHERE ($a = dr_id) AND ($uid = user_id)");
		if (mysqli_num_rows($select) != 0) {
               
			echo "<div ><table>";
			while ($row = mysqli_fetch_assoc($select)) {
				echo nl2br("<tr><th width='15%'>".$row['sender'].":</th><td>".$row['message']."\n\n</td><td>".$row['date']."</td></tr>");
                      
                
			}
			echo "</table></div>";
		}
            
            
            echo "  <form id=\"register\" role=\"form\" method=\"post\" action=\"\">
                         
                              
                            

                              <div class=\"wow fadeInUp\" data-wow-delay=\"0.8s\">
                                        <div class=\"col-md-12 col-sm-12\">
                                        
                                        <label for=\"Message\"><br></label>
                                        <textarea class=\"form-control\" rows=\"5\" id=\"content\" name=\"message\" placeholder=\"Your Message\"></textarea>
                                        <button type=\"submit\" class=\"form-control\" id=\"cf-submit\" name=\"submit\">Send</button>
                                   </div>
                              </div>
                        </form>
                          </div>

               </div>
          </div>
     </section>

                        
                        

";
            
         
            
            if(!empty($_POST['message'])) {
            
                $select = mysqli_query($con, "SELECT * FROM `doctor` WHERE `dr_id` = $a;");
		
		while ($row = mysqli_fetch_assoc($select)) {
            $dr_name=$row['dr_name'];
        }
                
                	$insert = mysqli_query($con, "INSERT INTO messages (`dr_id`, `user_id`, `sender`, `message`,`date`) 
								  VALUES ('".$a."', '".$uid."', '".$dr_name."', '".$_POST['message']."',NOW());");
								  
	if ($insert) {
		
        echo "<script type='text/javascript'>window.top.location='chat.php?user=".$b."';</script>"; exit;
	}
              else{echo "error";}  
   
}
      
 }







function profiledetails($x) {
		include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT * from doctor where dr_id = $x");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
                 echo"Name:<br>";
               echo $row['dr_name'];
                echo"<br><br>";
                  echo"Availability:<br>";
               echo $row['dr_availabilty'];
                echo"<br><br>";
                echo"Phone:<br>";
               echo $row['dr_phone'];
                echo"<br><br>";
                  echo"Department:<br>";
               echo $row['dept'];
                echo"<br><br>";
                
              
			}
			
		} 
	}




function notifications($x) {
		include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT * from chatstart where doctor_id = $x and startby like 'patient' ORDER BY chatstartid DESC");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
                
                
                        echo "<a href=\"chat.php?user=".$row['user_name']."\"><p>New message from ".$row['user_name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      ".$row['dateandtime']."</p><br></a>   ";

              
			}
			
		} 
	}






function dispcategories() {
		include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT * FROM categories");
		
		while ($row = mysqli_fetch_assoc($select)) {
			echo "<table >";
			echo "<tr><td ><h3>".$row['category_title']."</h3></td></tr>";
			dispsubcategories($row['cat_id']);
			echo "</table>";
		}
	}


	function dispsubcategories($parent_id) {
		include ('dbconn.php');
		$select = mysqli_query($con, "SELECT cat_id, subcat_id, subcategory_title FROM categories, subcategories 
									  WHERE ($parent_id = categories.cat_id) AND ($parent_id = subcategories.parent_id)");
		echo "<tr><th width='90%'></th><th width='10%'><p>Topics</p></th></tr>";
		while ($row = mysqli_fetch_assoc($select)) {
			echo "<tr><td class='category_title'><a href='topics.php?cid=".$row['cat_id']."&scid=".$row['subcat_id']."'>
				  ".$row['subcategory_title']."<br />";
			
			echo "<td >".getnumtopics($parent_id, $row['subcat_id'])."</td></tr>";
		}
	}




function getnumtopics($cat_id, $subcat_id) {
		include ('dbconn.php');
		$select = mysqli_query($con, "SELECT category_id, subcategory_id FROM topics WHERE ".$cat_id." = category_id 
									  AND ".$subcat_id." = subcategory_id");
		return mysqli_num_rows($select);
	}


function forumsidebar()
{
    
    
    include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * from topics limit 10");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
                echo" <div class=\"media\">
                                             <div class=\"media-object pull-left\">
                                                  <a href=\"viewtopic.php?tid=".$row['topic_id']."\"><img src=\"/e-doctor/images/news-image.jpg\" class=\"img-responsive\" alt=\"\"></a>
                                             </div>
                                             <div class=\"media-body\">
                                                  <h4 class=\"media-heading\"><a href=\"viewtopic.php?tid=".$row['topic_id']."\">".$row['title']."</a></h4>
                                             </div>
                                        </div>";
                
              
			}
			
		} 
}




function disptopics($cid,$scid)
{
    
    
    include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM topics WHERE ".$cid." = category_id 
									  AND ".$scid." = subcategory_id");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
                echo" <div class=\"\">
                         <!-- NEWS THUMB -->
                         <div class=\"news-thumb wow fadeInUp\" data-wow-delay=\"0.4s\">
                              <a href=\"viewtopic.php?tid=".$row['topic_id']."\">
                                 
                              </a>
                              <div class=\"news-info\">
                                   <span>".$row['date_posted']."</span>
                                   <h3><a href=\"viewtopic.php?tid=".$row['topic_id']."\">".$row['title']."</a></h3>
                                   <p>".$row['content']."</p>
                                   <div class=\"author\">
                                       
                                        <div class=\"author-info\">
                                             <h5>".$row['author']."</h5>
                                             <p></p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>";
                
              
			}
			
		} 
}


function replytopost($tid) {
		echo "     

                   
                    <div class=\"col-md-8 col-sm-7\">
              <form id=\"register\" role=\"form\" method=\"post\" action='addreply.php?tid=$tid'\">
                                   <div class=\"col-md-12 col-sm-12\">
                                        <label for=\"Message\">Reply to the topic:</label>
                                        <textarea class=\"form-control\" rows=\"5\" id=\"reply\" name=\"reply\" placeholder=\"You Reply...\"></textarea>
                                        <button type=\"submit\" class=\"form-control\" id=\"cf-submit\" name=\"submit\">Submit Button</button>
                                   </div>
                               
                        </form>
                        
                        
                        
                        
                         </div>
               
                        ";
   
        
	}





?>
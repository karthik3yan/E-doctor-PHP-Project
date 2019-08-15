<?php
 



function homedoct() {
		 include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM doctor
									 limit 3");
		
		while ($row = mysqli_fetch_assoc($select)) {
            
            
            
            
            
             echo "<a href=\"chat.php?drid=".$row['dr_id']."\" ><div class=\"col-md-4 col-sm-6\">
                         <div class=\"team-thumb wow fadeInUp\" data-wow-delay=\"0.2s\">
                            <img src=\"images/".$row['image']."\" class=\"img-responsive\" >

                                   <div class=\"team-info\">
                                        <h3>".$row['dr_name']."</h3>
                                        <p>".$row['dept']."</p>
                                        <div class=\"team-contact-info\">
                                             <p><i class=\"fa fa-phone\"></i>Phone: ".$row['dr_phone']."</p>
                                             <p><i class=\"fa fa-heartbeat\"></i> Availability: ".$row['dr_availabilty']." </a></p>

                                        </div>
                                   </div>

                         </div>
                    </div></a>";
            
        }
	}



function doct() {
		 include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM doctor");
		
		while ($row = mysqli_fetch_assoc($select)) {
            
            
            
            
            
             echo "<a href=\"chat.php?drid=".$row['dr_id']."\" ><div class=\"col-md-4 col-sm-6\">
                         <div class=\"team-thumb wow fadeInUp\" data-wow-delay=\"0.2s\">
                            <img src=\"images/".$row['image']."\" class=\"img-responsive\" >

                                   <div class=\"team-info\">
                                        <h3>".$row['dr_name']."</h3>
                                        <p>".$row['dept']."</p>
                                        <div class=\"team-contact-info\">
                                             <p><i class=\"fa fa-phone\"></i>Phone: ".$row['dr_phone']."</p>
                                             <p><i class=\"fa fa-heartbeat\"></i> Availability: ".$row['dr_availabilty']." </a></p>
                                              <div align='center'><br>
                    <a href=\"chat.php?drid=".$row['dr_id']."\"  class=\"section-btn btn btn-default smoothScroll\"><h4>Chat</h4></a><br><br></div>

                                        </div>
                                   </div>

                         </div>
                    </div></a>";
            
        }
	}





function doctdept($a) {
		 include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM doctor where dept = '$a'");
		
		while ($row = mysqli_fetch_assoc($select)) {
            
            
            
            
            
             echo "<a href=\"chat.php?drid=".$row['dr_id']."\" ><div class=\"col-md-4 col-sm-6\">
                         <div class=\"team-thumb wow fadeInUp\" data-wow-delay=\"0.2s\">
                            <img src=\"images/".$row['image']."\" class=\"img-responsive\" >

                                   <div class=\"team-info\">
                                        <h3>".$row['dr_name']."</h3>
                                        <p>".$row['dept']."</p>
                                        <div class=\"team-contact-info\">
                                             <p><i class=\"fa fa-phone\"></i>Phone: ".$row['dr_phone']."</p>
                                             <p><i class=\"fa fa-heartbeat\"></i> Availability: ".$row['dr_availabilty']." </a></p>
                                              <div align='center'><br>
                    <a href=\"chat.php?drid=".$row['dr_id']."\"  class=\"section-btn btn btn-default smoothScroll\"><h4>Chat</h4></a><br><br></div>

                                        </div>
                                   </div>

                         </div>
                    </div></a>";
            
        }
	}




function menuhome() {

				if (isset($_SESSION['username'])) {
  
		echo"<div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                         <li><a href=\"#top\" class=\"smoothScroll\">Home</a></li>
                         <li><a href=\"#about\" class=\"smoothScroll\">About Us</a></li>
                         <li><a href=\"#team\" class=\"smoothScroll\">Doctors</a></li>
                         <li><a href=\"#news\" class=\"smoothScroll\">Forum</a></li>
                         <li><a href=\"profile.php\" class=\"smoothScroll\">Profile</a></li>
                         <li class=\"appointment-btn\"><a href=\"logout.php\">Logout</a></li>
                    </ul>
               </div>		";				}
    
    
    else
    {
        
        	echo"<div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                         <li><a href=\"#top\" class=\"smoothScroll\">Home</a></li>
                         <li><a href=\"#about\" class=\"smoothScroll\">About Us</a></li>
                         <li><a href=\"#team\" class=\"smoothScroll\">Doctors</a></li>
                         <li><a href=\"#news\" class=\"smoothScroll\">Forum</a></li>
                         <li><a href=\"register.html\" class=\"smoothScroll\">Register</a></li>
                         <li class=\"appointment-btn\"><a href=\"login.html\">Login</a></li>
                    </ul>
               </div>		";	
    }


}





function menunormal() {

				if (isset($_SESSION['username'])) {
  
		echo"<div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                         <li><a href=\"index.php\" class=\"smoothScroll\">Home</a></li>
                         <li><a href=\"doctors.php\" class=\"smoothScroll\">Doctors</a></li>
                         <li><a href=\"forum.php\" class=\"smoothScroll\">Forum</a></li>
                         <li><a href=\"profile.php\" class=\"smoothScroll\">Profile</a></li>
                         <li class=\"appointment-btn\"><a href=\"logout.php\">Logout</a></li>
                    </ul>
               </div>		";				}
    
    
    else
    {
        
        	echo"<div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right\">
                          <li><a href=\"index.php\" class=\"smoothScroll\">Home</a></li>
                         <li><a href=\"doctors.php\" class=\"smoothScroll\">Doctors</a></li>
                         <li><a href=\"forum.php\" class=\"smoothScroll\">Forum</a></li>
                         <li><a href=\"register.html\" class=\"smoothScroll\">Register</a></li>
                         <li class=\"appointment-btn\"><a href=\"login.html\">Login</a></li>
                    </ul>
               </div>		";	
    }


}








function forumhome()
{
    
    
    include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * from topics limit 3");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
                echo" <div class=\"col-md-4 col-sm-6\">
                         <!-- NEWS THUMB -->
                         <div class=\"news-thumb wow fadeInUp\" data-wow-delay=\"0.4s\">
                              <a href=\"topic.php?tid=".$row['topic_id']."\">
                                 
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


function forumsidebar()
{
    
    
    include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * from topics limit 10");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
                echo" <div class=\"media\">
                                             <div class=\"media-object pull-left\">
                                                  <a href=\"viewtopic.php?tid=".$row['topic_id']."\"><img src=\"images/news-image.jpg\" class=\"img-responsive\" alt=\"\"></a>
                                             </div>
                                             <div class=\"media-body\">
                                                  <h4 class=\"media-heading\"><a href=\"viewtopic.php?tid=".$row['topic_id']."\">".$row['title']."</a></h4>
                                             </div>
                                        </div>";
                
              
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


function viewtopic($tid)
{
    
    	include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM topics WHERE $tid = topic_id");
		$row = mysqli_fetch_assoc($select);
		echo nl2br("<div ><h2 class='title'>".$row['title']."</h2><p>".$row['author']."\n".$row['date_posted']."</p></div>");
		echo "<div '><h4>".$row['content']."</h4><br></div>";
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
	
	function countReplies($tid) {
		include ('dbconn.php');
		$select = mysqli_query($con, "SELECT * FROM replies WHERE ".$tid." = topic_id");
		return mysqli_num_rows($select);
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















 function chat($parent_id) {
        	$a=$_SESSION['username'];
     	
          include ('dbconn.php');  
      echo "
             <section id=\"appointment\" data-stellar-background-ratio=\"3\">
          <div class=\"container\">
               <div class=\"row\">

                    <div class=\"col-md-6 col-sm-6\">
                         <img src=\"images/dr".$parent_id.".jpg\" class=\"img-responsive\" >
                    </div>

                    <div class=\"col-md-6 col-sm-6\">
                      <div class=\"section-title wow fadeInUp\" data-wow-delay=\"0.4s\">
                                   <h2>Messages</h2>
                              </div>
                    
                    ";
        $select = mysqli_query($con, "SELECT * FROM `user` WHERE `username` LIKE '$a';");
		
		while ($row = mysqli_fetch_assoc($select)) {
            $uid=$row['userid'];
        }
        
       	
            $select = mysqli_query($con, "SELECT * FROM messages WHERE ($parent_id = dr_id) AND ($uid = user_id)");
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
            
              
                
                	$insert = mysqli_query($con, "INSERT INTO messages (`dr_id`, `user_id`, `sender`, `message`,`date`) 
								  VALUES ('".$parent_id."', '".$uid."', '".$_SESSION['username']."', '".$_POST['message']."',NOW());");
								  
	if ($insert) {
		
        echo "<script type='text/javascript'>window.top.location='chat.php?drid=".$parent_id."';</script>"; exit;
	}
              else{echo "error";}  
   
}
         
            
        
     
     
     
     
     

 }

function consultinsert($x,$y)
{
    include ('dbconn.php');
            $select = mysqli_query($con, "SELECT * FROM `consult` WHERE `doctor_id` = $y AND `user_name` LIKE '$x'");
 
		if (mysqli_num_rows($select) != 0) {
               
    
        }
    else
    {
        
        	$insert = mysqli_query($con, "INSERT INTO consult (`user_name`, `doctor_id`,`dateandtime`) 
								  VALUES ('".$x."', '".$y."',NOW());");	
    
    
    }


}









function profiledetails($x) {
		include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT * from user where username LIKE '$x'");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
                 echo"Name:<br>";
               echo $row['username'];
                echo"<br><br>";
                  echo"Date Of Birth:<br>";
               echo $row['userdob'];
                echo"<br><br>";
                echo"Phone:<br>";
               echo $row['userphone'];
                echo"<br><br>";
                
                
              
			}
			
		} 
	}





function profilesidebar($x) {
		include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT * from topics where author LIKE '$x'");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
                echo" <div class=\"media\">
                                             <div class=\"media-object pull-left\">
                                                  <a href=\"topic.php?tid=".$row['topic_id']."\"><img src=\"images/news-image.jpg\" class=\"img-responsive\" alt=\"\"></a>
                                             </div>
                                             <div class=\"media-body\">
                                                  <h4 class=\"media-heading\"><a href=\"topic.php?tid=".$row['topic_id']."\">".$row['title']."</a></h4>
                                             </div>
                                        </div>";
                
              
			}
			
		} 
	}










function profileconsulthistory($x)
{
    echo"<h2>List of Doctors Consulted:</h2>";
    	include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT * from consult where user_name LIKE '$x'");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
                printdoctorname($row['doctor_id']);
                
                                                        }


                }

}

function printdoctorname($x)
{
    
    	include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT * from doctor where dr_id = $x");
		if (mysqli_num_rows($select) != 0) {
			
			while ($row = mysqli_fetch_assoc($select)) {
              echo " <a href=\"chat.php?drid=".$row['dr_id']."\"><h3>".$row['dr_name']."</h3></a>   ";
                 
                }
    
    
}


}


?>


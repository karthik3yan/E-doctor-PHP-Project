

<?php

	include ('functions.php');

?>
<head>

     <title>E-Doctor - Online Healthcare Portal</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     
   


     
        <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                        <?php
                        session_start();
				if (isset($_SESSION['username'])) {
                         echo"<p>Hey ".$_SESSION['username'].",Welcome to a Professional Health Care</p>";
                }
                        else
                        {
                            echo"<p>Hey Stranger,Welcome to a Professional Health Care</p>";
                        }
                        ?>
                    </div>
                         
                   <div class="col-md-8 col-sm-9 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> +91 9895688746</span>
                       
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> imca-71@scmsgroup.org</span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    
                    <a href="index.php" class="navbar-brand"><i class="fa fa-etsy"></i> - Doctor </a>
               </div>

               <!-- MENU  -->
             <?php
              menunormal();
              ?>

          </div>
     </section>



 
     
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s"> Our Doctors</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                   
                   
                   
                   <?php
                   
                   
                     echo"<form id=\"search\" role=\"form\" method=\"post\" action=\"doctors.php\">


                              <div class=\"wow fadeInUp\" data-wow-delay=\"0.8s\">
                                   <div class=\"col-md-12 col-sm-12\">
                                        <label for=\"dept\">Search By Department</label>
                                        <input type=\"text\" class=\"form-control\" id=\"dept\" name=\"dept\" placeholder=\"Enter a department\"><br><br>
                                   </div>

                                   <div class=\"col-md-12 col-sm-12\">
                                        <button type=\"submit\" class=\"form-control\" id=\"cf-submit\" name=\"submit\">Search</button><br><br>
                                   </div>
                              </div>
                        </form>";
                   
                   
                   if (isset($_POST['dept'])) {
                        doctdept($_POST['dept']);
                   }
                   
                   else
                   {
                   doct();
                    
                   }
                 ?> 
                   
                   
                   
                   
               </div>
          </div>
     </section>





     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
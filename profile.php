

<?php

	include ('functions.php');

?>
<html>
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




              
               <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <?php
                        profileconsulthistory($_SESSION['username']);
                        
                             ?>
                    </div>

                    <div class="col-md-4 col-sm-5">
                         <div class="news-sidebar">
                              <div class="news-author">
                                   <h4>About</h4>
                              <?php
                                        profiledetails($_SESSION['username']);

                                        ?>
                              </div>

                              <div class="recent-post">
                                   <h4>Your Queries</h4>
<?php
                                        profilesidebar($_SESSION['username'])

                                        ?>
                              </div>

                             

                            
                         </div>
                    </div>
                    
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
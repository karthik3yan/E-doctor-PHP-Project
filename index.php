

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
              menuhome();
              ?>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Consult our Doctors Online</h3>
                                             <h1>With Live Chat</h1>
                                             <a href="doctors.php" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                                        </div>
                                   </div>
                              </div>

                              

                              <div class="item item-third">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Find Solution to</h3>
                                             <h1>Your Health Queries</h1>
                                             <a href="forum.php" class="section-btn btn btn-default btn-blue smoothScroll">Check Forum</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to  <i class="fa fa-etsy"></i> Doctor</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>E-Doctor is an Online HealthCare portal providing 24*7 Healthcare service.
                                       The Healthcare Enterprise and the role health IT can play in lowering costs 
                                       and improving quality and access to the healthcare.A patient can gain knowledge
                                       or consult doctors at any time.So,main aim of E-Doctor is to provide the patient
                                       the knowledge and a proper support.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Aby Sabu</h3>
                                        <p>General Principal</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Consult Our Doctors</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                   
                   
                   
                   <?php
                   
                   homedoct();
                    
                  
                 ?> 
                   
                   
                   
                   
               </div>
              <div align='center'><br><br>
                    <a href="doctors.php" class="section-btn btn btn-default smoothScroll">View All Doctors</a></div>
          </div>
     </section>


  
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Latest Forum Topics</h2>
                         </div>
                    </div>

                   
                   <?php
                   
                         
                    forumhome();
                 ?> 

               </div>
              
              <div align='center'><br><br>
                    <a href="forum.php" class="section-btn btn btn-default smoothScroll">View All Forums</a></div>
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


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

     <link rel="stylesheet" href="/e-doctor/css/bootstrap.min.css">
     <link rel="stylesheet" href="/e-doctor/css/font-awesome.min.css">
     <link rel="stylesheet" href="/e-doctor/css/animate.css">
     <link rel="stylesheet" href="/e-doctor/css/owl.carousel.css">
     <link rel="stylesheet" href="/e-doctor/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="/e-doctor/css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     
   


     
        <!-- HEADER -->



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
             menu();
              ?>

          </div>
     </section>



 
     
  
    
            
              
               <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">
                    <div class="col-md-8 col-sm-7">
                        <h2>Select a User</h2>
                  <?php
                        
                        listallusers();
                        
                        ?>
                           
                    </div>

                  
                    
               </div>
          </div>
     </section>





     <!-- SCRIPTS -->
     <script src="/e-doctor/js/jquery.js"></script>
     <script src="/e-doctor/js/bootstrap.min.js"></script>
     <script src="/e-doctor/js/jquery.sticky.js"></script>
     <script src="/e-doctor/js/jquery.stellar.min.js"></script>
     <script src="/e-doctor/js/wow.min.js"></script>
     <script src="/e-doctor/js/smoothscroll.js"></script>
     <script src="/e-doctor/js/owl.carousel.min.js"></script>
     <script src="/e-doctor/js/custom.js"></script>

</body>
</html>
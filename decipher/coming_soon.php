<?php
session_start();

 if($_SESSION['flag'] != 'com'){
    header("Location: 404.html");
 }

 ?>


<!DOCTYPE html>

<html lang="en">

    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Coming Soon</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">



        <script src='https://www.google.com/recaptcha/api.js'></script>

        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
           <script type="text/javascript" src="custom.js"></script>

       <!--  <script src="validation.js"></script> -->

       
       


       

    </head>

    <body>
         <div class="row">
            <div class="col-md-4 left"><a href="http://www.daiict.ac.in" target="_blank"><img src="assets/img/da.png" alt="DAIICT Logo" width="20%" style="padding: 10px 0px 0px 0px"></a></div>

        <div class="col-md-4 center"></div>
                     


            <div class="col-md-4 right"><a href="http://ieee.daiict.ac.in/ifest18/index.html" target="_blank"><img src="assets/img/logo.png" alt="ifest Logo" width="20%" style="padding: 10px 0px 0px 0px"></a></div>
         </div>


         <div style="color:white" class="col-md-offset-3 col-md-6">
                        <h1 style="color:white" ><strong>i.Decipher '18</strong></h1>
                            <div class="description">
                                
                            </div>
                            <div class="row">
                            <div class="col-md-4 left"></div>

                            <div class="col-md-4">
                             <form action="logout.php">
                             <input type="submit" name="logout" value="Logout" class="btn btn-success"></form>
                            <div class="col-md-4 right"></div>

                            </div>
                            </div>

                    </div>


        <!-- Top content -->
      
            
            
                <div class="container">
                    
                       
                    
                    <div class="row">
                        <!-- <div class="col-sm-6 col-sm-offset-3 form-box"> -->
                            
                            <!-- <div class="form-bottom"> -->
                                <div class="col-md-12">
                                    <h3 style="color:white">Event Time  : September 18,<sup>th</sup> 7:00 PM</h3>
                                     <div id="countdown" style="color:white"></div>

                                </div>
                            <!-- </div> -->
                        <!-- </div> -->
                    </div>
                    
                </div>
                           
                                <div class="btn azm-social azm-size-48 azm-r-square azm-android">
                                    
                                    
                                        <a class="tn btn-primary btn-lg" href="https://www.facebook.com/ifestdaiict/">
                                            <i class="fa fa-facebook"></i>
                                    
                                        </a>
                                
                                </div>
                           
          


        <div class="footer">
            <div class="row"  style="color: #FFFFFF";>
                <br>
                    <p><strong><u>Coordinators:</strong></u><br>
                    <p>Deepesh Ludhyani : 9109515599<br>
                    Smit Jasani : 9106648962<br>
               <br>
                 
                      </p>
                      
                      
                    <p style="color: rgba(255,255,255,1);padding: 20px;"><strong>For tea and other refreshments, contact Jaydeep Sangada: 9998000972</strong><br>
                        
                  
                    </p>

                
            </div>
        </div>

</div>
        <!-- Javascript -->
        
        <footer>
        	<img src="BeFunky-collage.jpg" alt="sponsors" style="display: block; height: 120px; width:2000px; opacity: 0.85;">
        </footer>
       
       
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
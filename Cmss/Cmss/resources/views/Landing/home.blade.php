<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>memorial books</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout home_page">
      <!-- loader  -->
      {{-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div> --}}
      <!-- end loader -->
      <!-- header -->
      @include('Landing/header')
      <!-- end header -->
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/senate.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <span class="maintext">Makerere university<br>Complaint Environment<br></span>
                        <span  class="anothertext">MUELE (Makerere University E-complaint Environment) is run by E-Learning Department<br>under CEES (College of Education and External Studies), Makerere University.<br> This platform has been set up and update by the Directorate for ICT Support (DICTS) </span>
                        <div class="button_section"> <a class="main_bt" href="#" style="background:rgb(21, 31, 61)">Login</a> <a class="main_bt" href="#" style="background:rgb(61, 158, 48)">Register</a>  </div>

                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <span class="maintext">The Best Libraries That<br> Every Book Lover Must<br> Visit!</span>
                        <span class="anothertext">adipiscing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua. Ut enim ad minim<br> veniam, quis nostrud exercitation </span>
                        <div class="button_section"> <a class="main_bt" href="#" style="background:rgb(21, 31, 61)">Login</a> <a class="main_bt" href="#" style="background:rgb(61, 158, 48)">Register</a>  </div>
                        
                        
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/compound.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <span class="maintext">An environment <br> designed<br></span>
                        <span class="anothertext"> to handle and manage complaints in makerere university electronically <br>.This will  improve the response time of the school’s management in addressing the complaints of the students, parents, staff,<br> and other stakeholders. </span>
                        <div class="button_section"> <a class="main_bt" href="#" style="background:rgb(21, 31, 61)">Login</a> <a class="main_bt" href="#" style="background:rgb(61, 158, 48)">Register</a>  
                        </div>
                       
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" style="color:black">
            <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" style="color:rgb(170, 225, 31)">
            <span class="carousel-control-next-icon" aria-hidden="true" style="color:rgb(135, 233, 24)"></span>
            <span class="sr-only" style="color:rgb(81, 108, 44)">Next</span>
            </a>
         </div>
      </section>
      <!-- about -->
     
      
      <!-- end about -->
      <!-- Library -->
     
      <!-- end Library -->
      <!--Books -->
      
      <!-- end Books -->
      <!-- Contact -->
      
      <!-- end Contact -->
      <!-- footer -->
    @include('Landing/footer');
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
<!doctype html>
<?php 
 session_start();
 //$buyone = $_POST['bayone'];
 if(isset($_POST['buyused1'])|| isset($_POST['buyused2'])|| isset($_POST['buyused3'])|| isset($_POST['buyused4']))
 {
     if(!isset($_SESSION['user']))
     {
         header('Location: login.php');
     }
     else
     {
      header('Location: signedin.php');
     }
 }
 else{}
    ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logos/icon.png">
    <title>ALPHA | Home</title>
    <link rel="stylesheet" href="css/css.css">

 <!-- NAVBAR -->
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
    <body>


<!-- .For mobiles -->
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
              <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
              </div>
            </div>
            <div class="site-mobile-menu-body"></div>
          </div> 
          
      
       <!-- .For mobiles -->
       <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div> 
      
  
   <!-- For Computers -->
   <header class="site-navbar mt-3">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="site-logo col-6"><a href="index.php"><img src="imgs/logos/icon.png" class="logo"> ALPHA CARS</a></div>
        <nav class="mx-auto site-navigation">
          <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
            <li><a href="index.php" >Home</a></li>
            <li class="has-children">
                        <a >Car Services</a>
                        <ul class="dropdown">
                        <li><a href="CarServices.php">Maintainances</a></li>
                        <li><a href="CarServices.php" >Car Parts</a></li>
                        <li><a href="CarServices.php">Olis</a></li>
                        <li><a href="CarServices.php" >Cleaning Cars</a></li>
                      </ul>
                    </li>
            <li class="has-children">
              <a class="nav-link active">Car Purchasing</a>
              <ul class="dropdown">
                <li><a href="NewCar.php">New Cars</a></li>
                <li><a href="UsedCar.php">Used Cars</a></li>
              </ul>
            </li>
            

            <li><a href="About.html" >About</a></li>
            
            <li class="d-lg-none"><a href="SignUp.php">Sign Up</a></li>
            <li class="d-lg-none"><a href="SignIn.php">Sign In</a></li>
          </ul>
        </nav>
        
        <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
          <div class="ml-auto">

            <a href="SignUp.php" class="btn2 btn2-primary border-width-2 d-none d-lg-inline-block"><span class=" icon-user-plus"></span> Sign Up</a>
            <a href="SignIn.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Sign In</a>
          </div>
          <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
        </div>
      </div>
    </div>
  </header>




      <button id="scrollToTopBtn" class="icon-arrow-up"></button>
 
 <footer>
 <div class="efooter">
 
 <div class="f1">
   <h3>Services</h3>
   <ol>Maintainances</ol>
   <ol>Car Parts</ol>
   <ol>Olis</ol>
   <ol>Cleaning Cars</ol>
 </div>
 <div class="f2">
 <h3>About</h3>
   <ol>Company</ol>
   <ol>Team</ol>
   <ol>Careers</ol>
 </div>
 <div class="f3">
 <h3>ALPHA CARS</h3>
 <h6>A car is a vehicle that has wheels, carries a small number of passengers,
    and is moved by an engine or a motor. Cars are also called automobiles or 
    motor vehicles. Trucks and buses are motor vehicles as well. However, 
    trucks and buses are larger than cars, and they carry heavier loads.</h6>
 </div>
 
 </div>
 
 <div class="ficon">
   <img class="icons" src="imgs/icons/facebook.png">
   <img class="icons" src="imgs/icons/instagram.png">
   <img class="icons" src="imgs/icons/whatsapp.png">
   <img class="icons" src="imgs/icons/linkedin.png">
 </div>
 <div class="fyear">
 ALPHA CARS &#169; 2022</div>
 </footer>
      
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/main.js"></script>
        <script src="js/totopbutton.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
    <script src="js/script.js"></script>
    
    
    
</html>
<?php

session_start();
if(isset($_POST['maintainance'])|| isset($_POST['cleaning']) || isset($_POST['oil']) || isset($_POST['carparts']))
{
  if(!isset($_SESSION['user']))
  {
      header('Location: login.php');
  }
  else
  {
    {
     header('Location: signedin.php');
    }}}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logos/icon.png">
    <title>ALPHA | Car Services</title>


       <!--footer-->
       <link rel="stylesheet" href="css/footer.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
     <!-- NAVBAR -->
     <link rel="stylesheet" href="fonts/icomoon/style.css">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style.css">
     
    <link rel="stylesheet" href="css/css.css">



 

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
          
      
          <!-- For Computers -->
          <header class="site-navbar mt-3">
            <div class="container-fluid">
              <div class="row align-items-center">
                <div class="site-logo col-6"><a href="index.php"><img src="imgs/logos/icon.png" class="logo"> ALPHA CARS</a></div>
                <nav class="mx-auto site-navigation">
                  <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                    <li><a href="index.php">Home</a></li>
                    <li class="has-children">
                        <a class="nav-link active">Car Services</a>
                        <ul class="dropdown">
                        <li><a href="#">Maintainances</a></li>
                        <li><a href="#carParts" >Car Parts</a></li>
                        <li><a href="#oils">Olis</a></li>
                        <li><a href="#cleaning" >Cleaning Cars</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a>Car Purchasing</a>
                      <ul class="dropdown">
                        <li><a href="NewCar.php">New Cars</a></li>
                        <li><a href="UsedCar.php">Used Cars</a></li>
                      </ul>
                    </li>
                    <li><a href="About.php">About</a></li>
                    <?php
if(isset($_SESSION['user']))
{
 $_username = $_SESSION['user'];
 echo '<li class="d-lg-none"><a href="#">' . $_username.'</a></li>';
 echo '<li class="d-lg-none"><a href="logout.php">Log Out</a></li>';
}
else
{
  echo '<li class="d-lg-none"><a href="SignUp.php">Sign Up</a></li>';
  echo '<li class="d-lg-none"><a href="login.php">Sign In</a></li>';
}
                    ?>
                  </ul>
                </nav>
                
                <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                  <div class="ml-auto">
                    <?php
if(isset($_SESSION['user']))
{
 $_username = $_SESSION['user'];
 echo '<a href="#" class="btn2 btn2-primary border-width-2 d-none d-lg-inline-block"><span class=" icon-user"></span> ' . $_username.'</a>';
 echo ' ';
 echo '<a href="logout.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-sign-out"></span>Log Out</a>';
}
else
{
  echo '<a href="signup.php" class="btn2 btn2-primary border-width-2 d-none d-lg-inline-block"><span class=" icon-user-plus"></span> Sign Up</a>';
  echo ' ';
  echo '<a href="login.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Sign In</a>';
}

                    ?>
                    
                  </div>
                  <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
                </div>
              </div>
            </div>
          </header>

  
      <div class="rowFour" >
        <div class="columnOne">
          
          <h2>Maintainances</h2>
          <p class="speachborder">
            ALFA includes tools and instruments for diagnostics, engine, oil and filters, electric system, transmission,
             suspension, brakes, wheels and bodywork. we are in motor competitions alongside the most prestigious teams 
             allow us to present a tool programme that is indispensable in the equipment of every small or large garage. 
            These are tools for daily use. They have been created for specific use but they can be applied on most cars.</p>      
            <form method="post">
            <button name="maintainance" type="submit" class="buttonOne">Order</button>   
            </form>
        </div>
        <div class="columnTwo">
        <img src="imgs/Auto mechanics flat vector characters concepts.png"  width="80%" alt="">
        
        </div>
      </div>

      <div class="rowFive">
        <div class="columnFive">
          <img class="partsimage"  src="imgs/parts.png">
         
        </div>
        <div class="columnSix" >
        <a name="carParts"></a>
        <h2>Car parts</h2>
        <div></div>
        <p  class="speachborder">ALFA Car Parts is the number 1 supplier of Car 
          Parts! We offer service parts at very competitive prices with Free Delivery across the whole 
          of Yemen. We specialise in all the major car parts - brake pads, blades, batteries, bulbs and all the essential car 
          maintenance essentials - engine oil, car fluids - all available to order online today! And don't forget, we have a
           massive range of interior accessories such as Sat Navs, stereos and speakers. If you need any further information
            before ordering your car parts online then our dedicated team are on hand with expert advice and assistance.</p>
            <form method="post">
            <button name="carparts" type="submit" class="buttonOne">Order</button>   
            </form>
        </div>
      </div>


      <div class="rowFive">
        <div class="columnFive">
          <a name="oils"></a>
          <h2>Oils</h2>
          <div></div>
          <p  class="speachborder">ALFA Oil can supply you with all your oil needs.
             we have gained a wealth of knowledge and experience in the oil sector, which has made us one of 
             the largest independent oil & fuel suppliers Yemen.
             We are so confident in our experience, service and products that we’ve provided.
            choosing ALFA Oil as your fuel and oil delivery supplier is the best decision you can make.
          </p>
            <form method="post">
            <button name="oil" type="submit" class="buttonOne">Order</button>   
            </form>
        </div>
        <div class="columnSix">
        <img src="imgs/oil.png"  class="oilimage">
        
        </div>
      </div>

      <div class="rowFive">

        <div class="columnFive">
        <img class="cleanimage" src="imgs/clean.png" alt="">
        </div>

        <div class="columnSix">
          <a name="cleaning"></a>
          <h2>Cleaning Cars</h2>
          <p  class="speachborder" id="marginbottomlastpar">ALFA offering a full line of Professional Automotive Reconditioning Products,
             Professional Car Wash Tunnel Chemicals and Retail packaged car care products that 
             include famous Body Gloss, Wash N' Glow, Original Carnauba Paste and Cream Waxes, 
             Liquid Metal Polishes, and world renowned, #1 Rated Leather Cleaner and Conditioner.</p>
            <form method="post">
            <button name="cleaning" type="submit" class="buttonOne">Order</button>   
            </form>
        </div>
      </div>
 
 
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
 </html>
 
 
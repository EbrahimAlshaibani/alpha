<?php
session_start();
if(isset($_POST['lambo']))
{
  if(!isset($_SESSION['user']) || !isset($_COOKIE['user']))
  {
      header('Location: login.php');
  }
  else
  {
    header('Location: signedin.php');
  }
}
if(isset($_POST['send']))
{
  if(!isset($_SESSION['user']) || !isset($_COOKIE['user']))
  {
      header('Location: login.php');
  }
  else
  {
    $_sender = $_SESSION['user'];
    $mess = $_POST['mess'];
    $con = mysqli_connect('localhost','root','','alpha_db') or die("can't connect to mysql server");
    $query= "INSERT into messages values ('$mess', '$_sender' ) ";
    $result = mysqli_query($con,$query) or die('there is an error in the query');
    mysqli_close($con);
  }
    
}

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="imgs/logos/icon.png">
    <title>ALPHA | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
                    <?php if(isset($_SESSION['type']) && $_SESSION['type']=='admin'){echo '<li><a class="Dashicon" href="admindashboard.php">Dashboard</a></li>';}?>
                    <li><a href="index.php" class="nav-link active">Home</a></li>
                    <li class="has-children">
                        <a>Car Services</a>
                        <ul class="dropdown">
                        <li><a href="CarServices.php">Maintainances</a></li>
                        <li><a href="CarServices.php" >Car Parts</a></li>
                        <li><a href="CarServices.php">Olis</a></li>
                        <li><a href="CarServices.php" >Cleaning Cars</a></li>
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
 $_username2 = $_COOKIE['user'];
 echo '<li class="d-lg-none"><a href="profile.php">' . $_username.'</a></li>';
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
 echo '<a href="profile.php" class="btn2 btn2-primary border-width-2 d-none d-lg-inline-block"><span class=" icon-user"></span> ' . $_username.'</a>';
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

          <div class="rowOne">
            <div class="columnOne">
              
              <h2>You Can Find Anything You<span1></span1> Here.</h2>
              <p class="speachborder">A car is a vehicle that has wheels, carries a small number of passengers, and is moved by an engine or a motor. Cars are also called automobiles or motor vehicles. Trucks and buses are motor vehicles as well. However, trucks and buses are larger than cars, and they carry heavier loads.</p>
             <form method="POST">
               <button type="submit" class="buttonOne" name="lambo">Buy Now</button>
              </form> 
            </div>
            <div class="columnTwo">
              <form method="post">
                Enter Message to admin<input type="text" name="mess">
                <button type="submit" name="send">Send</button>
              </form>
            <img class="mainCar" src="imgs/maincar.png" alt="">
            
            </div>
          </div>




          <div class="rowTwo" >
            <div class="columnThree">
            <h3> Pick your car </h3>
            <p class="ditails">We’ll help you buy the right and best car for you </p>
             
            </div>
            <div class="columnThree">
              <h3>Take care of you car</h3>
              <p class="ditails">We'll help you keep you car in the best form and work as much as possiable</p>
            
            </div>
            <div class="columnThree">
              <h3>We'll return your money </h3>
              <p class="ditails">In ALPHA comoany we provide the option to return your money if you are not happy with us</p>
             
            </div>
          </div>


          <div class="rowThree" >
            <div class="columnFour">
              <h4> Why Should You Buy From Us!</h4>
              <p class="ditails" style="color: gray; width: 90%; font-size: 35px;">Named as one of the Top 100 cars companies of 2022 and rated as the best Marketing Automation company for cars! </p>
               
            </div>
            <div class="columnFour">
              <img class="mainCar" src="imgs/why.png" alt="">
            
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


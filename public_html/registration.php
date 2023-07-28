<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>NRU PHONEBOOK</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" type="image/x-icon" href="images/fav.png">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="js/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
            <link rel="stylesheet" href="js/main.css">
      <!-- fevicon -->

      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
             <!-- header section start -->
      <div class="header_section">
         <div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.php"><img src="images/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="phonebook.php">Phonebook</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="contacts.php">Contacts</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="login1.php">Login</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="index.php">Home</a></li>
                     <li><a href="">About</a></li>
                     <li><a href="">Phonebook</a></li>
                     <li><a href="">Contacts</a></li>
                     <li><a href="login1.php">Login</a></li>
                  </ul>
               </div>
            </div>
         </div>
 <!--- REGISTER FORM -->
 
<?php
require('db.php');

// When form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $create_datetime = date("Y-m-d H:i:s");

    $query    = "INSERT into `users` (username, password, email, create_datetime)
                 VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
    $result   = mysqli_query($con, $query);
    if ($result) {
        echo "<div class='form3'>
              <h3>You are registered successfully.</h3><br/>
              <p class='link'>Click here to <a href='login.php'>Login</a></p>
              </div>";
    } else {
        echo "<div class='form'>
              <h3>Required fields are missing.</h3><br/>
              <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
              </div>";
    }
} else {
?>
<form class="forms" action="" method="post">
   <h1 class="login-title">Registration</h1>
   <input type="text" class="login-input" name="username" placeholder="Username" required />
   <input type="email" class="login-input" name="email" placeholder="Email Address" required />
   <input type="password" class="login-input" name="password" placeholder="Password" required />
   <br>
   <input type="submit" name="submit" value="Register" class="buttons">
   <p class="link"><a href="login.php">Click to Login</a></p>
</form>
<?php
}
?>
 <style>
     
     
.form3 {
    width: 394px;
    background: #f5f5f524;
    margin: 0 auto;
    margin-top: 153px;
    margin-bottom: 100px;
    padding: 11px 36px;
    border-radius: 15px;
}
 </style>
 
 
 
 
 
 
 
 
 
 


  
      <!-- choose section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">

            <div class="location_main">

               <div class="call_text"><a href="#">Email us for concerns!</a></div>

               <div class="call_text"><a href="#">nruphonebook@gmail.ph</a></div>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="images/fb-icon.png"></a></li>
                  <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                  <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                  <li><a href="#"><img src="images/instagram-icon.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">NRU PHONEBOOK 2023 All Rights Reserved</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>
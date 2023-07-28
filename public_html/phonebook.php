<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Phonebook</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<style>
  /* Custom CSS */
.contact-card {
    border: 1px solid #0000;
    border-radius: 3.25rem;
    padding: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
}

  .contact-card .card-body {
    padding: 0;
  }

  .contact-card .card-title {
    padding: 10px;
    margin-bottom: 0;
    background-color: #0d4076;
    color: #fff;
  }

  .contact-card p {
    margin: 0;
    padding: 10px;
  }

  .contact-card .btn {
    margin: 10px;
  }

  /* Custom CSS for layout */
  .container {
    text-align: center;
    margin-top: 30px;
background-color: #0817187d;
    color: #fff;
    padding: 20px;
    border-radius: 10px;
  }

  .form-group {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 15px;
  }

  .form-group label {
    flex: 0 0 30%;
    margin-right: 10px;
    text-align: right;
  }

  .row {
    justify-content: center;
  }

  .col-md-6 {
    max-width: 500px;
  }

  h1 {
    margin-bottom: 30px;
  }

  h2 {
    margin-top: 30px;
  }

  #searchInput {
    margin-bottom: 10px;
  }

  #contactList {
    list-style-type: none;
    padding: 0;
    margin-top: 20px;
  }

  #contactList .contact-card:last-child {
    margin-bottom: 0;
  }

  #noContactsFound {
    color: #fff;
  }

  @media (min-width: 768px) {
    .offset-md-2 {
      margin-left: auto;
      margin-right: auto;
    }
  }

  /* Night Mode */
  body {
    background-color: #000;
    color: #fff;
  }

  .container {
background-color: #0817187d;
  }

  .form-group label {
    color: #fff;
  }

.contact-card {
    background-color: #ffffff17;
}

  .contact-card .card-title {
    background-color: #0d4076;
  }
  
</style>
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
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="js/cos.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
            <link rel="icon" type="image/x-icon" href="images/fav.png">
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
                           <a class="nav-link " href="logout.php">Logout</a>
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
                     <li><a href="logout.php">Logout</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- banner section start -->
  <div class="container">
    <h1>Phonebook</h1>
    <div class="row">
      <div class="col-md-6">
        <form id="contactForm">
          <input type="hidden" id="contactId">
          <div class="form-group">
            <label for="firstName">First Name:</label>
            <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
          </div>
          <div class="form-group">
            <label for="middleName">Middle Name:</label>
            <input type="text" class="form-control" id="middleName" placeholder="Enter middle name">
          </div>
          <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address">
          </div>
          <div class="form-group">
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" class="form-control" id="phoneNumber" placeholder="Enter phone number">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="notes">Notes:</label>
            <textarea class="form-control" id="notes" placeholder="Enter notes"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <h2>Contact List</h2>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <input type="text" class="form-control" id="searchInput" placeholder="Search">
        <ul id="contactList"></ul>
        <p id="noContactsFound" style="display: none; color: #fff;">No contacts found.</p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>






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
<body>
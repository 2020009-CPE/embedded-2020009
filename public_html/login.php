<?php
session_start();

if(isset($_SESSION['username'])){
    header("Location: index.php");
    exit();
}

    // Ensure that no output is sent before session_start()
    ob_start();
    require('db.php');

    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        // Check if user exists in the database
        $query = "SELECT * FROM `users` WHERE username='$username' AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: index.php");
            exit();
        } else {
            $errorMessage = "Incorrect Username/Password.";
        }
    }
    ob_end_flush(); // Flush output buffer
?>

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
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="login/style.css">
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
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                         <h1 class="banner_taital">Effortless Retrieval</h1>
                        <p class="banner_text">With NRU Phonebook, finding the right contact is quick and hassle-free. Our powerful search functionality allows you to locate any contact with ease. Simply type in a name, number, or any relevant information, and let our intelligent search algorithm deliver accurate results in an instant</p>
                        <div class="read_bt"><a href="phonebook.php">Create Now</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Seamless Accessibility</h1>
                        <p class="banner_text">Experience seamless accessibility with NRU Phonebook. Whether you're using a smartphone, tablet, or computer, our phonebook is fully optimized for any device. Stay connected no matter where you are, ensuring that important contacts are always within reach.</p>
                        <div class="read_bt"><a href="phonebook.php">Create Now</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Simplicity at its Finest</h1>
                        <p class="banner_text">NRU Phonebook takes pride in its simplicity. Our user-friendly interface makes navigating and managing your phonebook a breeze. With a clean and intuitive design, you can easily add, edit, or delete contacts with just a few taps and embrace a phonebook that prioritizes ease of use and straightforward functionality.</p>
                        <div class="read_bt"><a href="phonebook.php">Create Now</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Contacts</h1>
            <p class="services_text">Welcome to our exceptional array of features, If you have encouter any error you can contact me!.</p>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
        <!--              <div><img src="images/img-1.png" class="services_img"></div>-->
                     <div class="btn_main"><a href="#">09197721710</a></div>
                  </div>
                  <div class="col-md-4">
        <!--              <div><img src="images/img-2.png" class="services_img"></div> -->
                     <div class="btn_main active"><a href="#">oribaniru04@gmail.com</a></div>
                  </div>
                  <div class="col-md-4">
        <!--              <div><img src="images/img-3.png" class="services_img"></div>  -->
                     <div class="btn_main"><a href="#">63+ 7858 525</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">About Me</h1>
                     <p class="about_text">Greetings! I'm Neale Oliva, a 21-year-old aspiring software engineer with a passion for all things technology. Currently pursuing my studies in computer engineering, I'm based in the beautiful province of Batangas.

Ever since I was young, I've been captivated by the world of computers and how they can shape our lives. The ability to create software that can solve real-world problems and enhance people's experiences is what drives my enthusiasm for this field.

I am thrilled to embark on this journey as a software engineer and contribute my skills to the ever-evolving world of technology. If you have any inquiries or would like to discuss potential collaborations, feel free to get in touch. Let's create something remarkable together!</p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-md-6 padding_right_0">
                  <div><img src="images/about-img.png" class="about_img"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- blog section start -->
<!--    <div class="blog_section layout_padding">
         <div class="container">
            <h1 class="blog_taital">See Our  Video</h1>
            <p class="blog_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which</p>
            <div class="play_icon_main">
               <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
            </div>
         </div>
      </div>
-->   
      <!-- blog section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <h1 class="client_taital">The Developer</h1>
            <div class="client_section_2">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text"> NEALE OLIVA's Brainchild Evolves into NRU! Witness the transformative journey as NEALE OLIVA's pioneering idea of a revolutionary phonebook becomes NRU, a name synonymous with efficient connections. Experience the legacy of NEALE's innovation and join us in embracing the power of NRU Phonebook!</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="images/client-img.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Neale Oliva</h4>
                                 <p class="customer_text">Software Engineering</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Inspired by NEALE OLIVA's relentless pursuit of enhanced connectivity, NRU Phonebook emerges as a testament to NEALE's ingenuity. Discover the culmination of NEALE's passion and expertise, as NRU empowers you to simplify your contact management and unlock seamless communication.</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="images/client-img.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Neale Oliva</h4>
                                 <p class="customer_text">Software Engineering</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text"> NEALE OLIVA's expertise and forward-thinking have paved the way for NRU, revolutionizing how we connect. With a keen focus on simplicity and efficiency, NEALE's brainchild, NRU, empowers users with a personalized phonebook experience. Embrace NEALE's ingenuity and embark on a new level of contact management with NRU!</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="images/client-img.png"></div>
                                 <div class="quick_icon"><img src="images/quick-icon.png"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Neale Oliva</h4>
                                 <p class="customer_text">Software Engineering</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section start -->
      <!-- choose section start -->
      <div class="choose_section layout_padding">
         <div class="container">
            <h1 class="choose_taital">Why Choose This</h1>
            <p class="choose_text">At NRU Phonebook, I prioritize delivering a comprehensive and personalized phonebook experience tailored to your unique needs. My platform allows you to create and manage your own list of contacts, ensuring that you have full control and customization over your phonebook. Say goodbye to generic directories and embrace a phonebook that reflects your individual preferences and requirements.</p>
            <div class="read_bt_1"><a href="#">Read More</a></div>
            <div class="newsletter_box">
               <h1 class="let_text">Start Creating Phonebook</h1>
               <div class="getquote_bt"><a href="#">Create</a></div>
            </div>
         </div>
      </div>
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
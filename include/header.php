<?php 
include('include/controller.php');
$ob = new controller();
$cat_sql=$ob->view_categories();
$url=$_SERVER['PHP_SELF'];
$u=explode("/", $url);
 ?>
<!doctype html>
<html lang="zxx">
   <!-- Mirrored from templates.hibootstrap.com/dobby/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Mar 2021 07:39:38 GMT -->
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/fonts/flaticon.css">
      <link rel="stylesheet" href="assets/css/nice-select.min.css">
      <link rel="stylesheet" href="assets/css/fontawesome.css">
      <link rel="stylesheet" href="assets/css/meanmenu.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
      <title>Lion Group of Sports</title>
      <link rel="icon" type="image/png" href="assets/img/icon.png">
  
   </head>
   <body>
      <header class="header-area top-header">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-9">
                  <div class="header-left">
                     <ul>
                        <li>
                           <i class="fas fa-clock"></i>
                           Monday to Saturday (10:00 AM to 19:00 PM)
                        </li>
                        <li>
                           <i class="fas fa-map-marker-alt"></i>
                           127,Nathubhai Tower, udhna, surat-394210.
                        </li>
                        <li>
                           <a href="tel:+1123456789">
                           <i class="fas fa-phone-alt"></i>
                           +91 95 74 8569 40
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="social-icon">
                     <ul>
                        <li>
                           <a href="https://www.facebook.com/wiwebmasters" target="_blank">
                           <i class="fab fa-facebook-f"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://twitter.com/wiwebmasters" target="_blank">
                           <i class="fab fa-twitter"></i>
                           </a>
                        </li>
                        <li>
                           <a href="https://www.instagram.com/wiwebmasters/" target="_blank">
                           <i class="fab fa-instagram"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="navbar-area">
         <div class="mobile-nav">
            <a href="index.php" class="logo">
            <img src="assets/img/icon.png" alt="Logo">
            </a>
         </div>
         <div class="main-nav">
            <div class="container">
               <nav class="navbar navbar-expand-md navbar-light ">
                  <a class="navbar-brand" href="index.php">
                  <img style="width: 100px; height: 60px" src="assets/img/icon.png" alt="Logo">
                  </a>
                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                     <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                           <a href="index.php" <?php if($u[4]=='index.php'){?>
                                 style="color:#fd7e14"
                                 <?php 
                                    } ?>>
                           Home
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="about.php" <?php if($u[4]=='about.php'){?>
                                 style="color:#fd7e14"
                                 <?php 
                                    } ?>>
                           About Us
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="service.php" <?php if($u[4]=='service.php'){?>
                                 style="color:#fd7e14"
                                 <?php 
                                    } ?>>
                           Services
                           <i class="fas fa-chevron-right"></i>
                           </a>
                           <ul class="dropdown-menu">
                              <?php while($cat=mysqli_fetch_array($cat_sql)){ ?>
                              <li class="nav-item">
                                 <a href="detial.php?c_id=<?php echo $cat['c_id']; ?>" class="nav-link">
                                 <?php echo $cat['c_name'];?>
                                 </a>
                              </li>
                              <?php } ?>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="gallery.php" <?php if($u[4]=='gallery.php'){?>
                                 style="color:#fd7e14"
                                 <?php 
                                    } ?>>
                           Gallery
                           </a>
                        </li>
                         <li class="nav-item">
                           <a href="feedback.php" <?php if($u[4]=='feedback.php'){?>
                                 style="color:#fd7e14"
                                 <?php 
                                    } ?>>
                           Feedback
                           <i class="fas fa-chevron-right"></i>
                           </a>
                           <ul class="dropdown-menu">
                               <li class="navbar-lightem">
                                 <a href="feedback.php" class="nav-link">
                                 View All Reviews
                                 </a>
                              </li>
                              <li class="navbar-lightem">
                                 <a href="feedback_manage.php" class="nav-link">
                                 Give Your Review
                                 </a>
                              </li>
                           </ul>
                        </li>
                         <li class="nav-item">
                           <a href="contact.php" <?php if($u[4]=='contact.php'){?>
                                 style="color:#fd7e14"
                                 <?php 
                                    } ?>>
                           Contact Us 
                           <i class="fas fa-chevron-right"></i>
                           </a>
                           <ul class="dropdown-menu">
                              <li class="navbar-lightem">
                                 <a href="contact.php" class="nav-link">
                                 Contact Us
                                 </a>
                              </li>
                              <li class="navbar-lightem">
                                 <a href="enquery.php" class="nav-link">
                                 Sent Enquery
                                 </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                     <div class="other-side">
                        <div class="search-area">
                           <div class="other-option">
                              <div class="search-item">
                                 <a href="#" class="search-btn">
                                 <i class="flaticon-magnifying-glass"></i>
                                 </a>
                                 <i class="close-btn fas fa-times"></i>
                                 <div class="search-overlay search-popup">
                                    <div class="search-box">
                                       <form class="search-form" method="post" action="search.php">
                                          <input class="search-input" name="search" placeholder="Search" type="text">
                                          <button class="search-button" type="submit" name="btnsearch">
                                          <i class="flaticon-magnifying-glass"></i>
                                          </button>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="search-text">
                           Search
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
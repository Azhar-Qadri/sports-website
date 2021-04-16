<?php
$page='index';
include('include/header.php');
$ob = new controller();
$banner_sql=$ob->banner_view();
$cat=$ob->view_categories();
$gallery_sql=$ob->gallery_index();
$trainer_sql=$ob->trainer_view();
$news_sql=$ob->news_view();

 function shorten($string,$length)
   {
     if(strlen($string)<=$length)
     {
       echo $string;
     }
     else
     {
       $qwerty=substr($string,0,$length). '...';
       echo $qwerty;
     }
   }
?>
      <!-- header ends --> 
 <div class="home-slider">
       <div class="slider-area owl-carousel owl-theme">
            <?php 
              $i=1;
              while($banner=mysqli_fetch_array($banner_sql)){ 
             ?>
            <div class="slider-item slider-bg<?php echo $i;?>">
            <style>.slider-bg<?php echo $i ?>
               {
                 background-image: url(admin/media/banner/<?php echo $banner['image']?>);
               }
           </style>     
               <div class="d-table">
                  <div class="d-table-cell">
                     <div class="container">
                        <div class="slider-text">
                           <h1><?php echo $banner['title']; ?></h1>
                           <p>
                              <?php echo $banner['description']; ?>
                           </p>
                           <div class="slider-btn">
                              <a href="service.php" class="default-btn1">Explore More</a>
                              <a href="contact.php" class="default-btn2 ml-20">Contact Us</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      <?php $i++; } ?>

         </div>
 </div> 
   
    <!-- End Intro Section -->
     <div class="about-area pt-100 pb-70">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="about-text">
                     <div class="section-title">
                        <span>About Us</span>
                        <h2>Our Vision Is " One Person One Sports"."KHELO INDIA"</h2>
                        <p>
                           India's much priorized and focused now a days Project also emphasizing on the same.Our vision is to develope opportunities to set standard of sports by proving proffessional instructions and skill.
                        </p>
                     </div>
                     <div class="about-btn">
                        <a href="about.php" class="default-btn2">Know More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="about-right">
                     <div class="play-area">
                        <a href="https://www.youtube.com/watch?v=duSPHGiPhwk" class="play-btn">
                        <i class="flaticon-play-button"></i>
                        Play a Video
                        </a>
                     </div>
                     <div class="icon-shape-1">
                        <i class="flaticon-waves"></i>
                     </div>
                     <div class="icon-shape-2">
                        <i class="flaticon-waves"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="service-area pt-100 pb-70">
         <div class="container">
            <div class="section-title text-center mb-50">
               <span>Our Services</span>
               <h2>Lion Group Provides Services</h2>
            </div>
            <div class="service-item-area owl-carousel owl-theme">
     <?php while($cat_run=mysqli_fetch_array($cat)){ ?>
               <div class="service-item">
                  <a href="detial.php?c_id=<?php echo $cat_run['c_id']; ?>" class="service-item-icon">
                  <!-- <i class="flaticon-swimming"></i> -->
                  <img height="280px" width="280px" src="admin/media/categories/<?php echo $cat_run['image']; ?>">
                  </a>
                  <br>
                  <a href="detial.php?c_id=<?php echo $cat_run['c_id']; ?>" class="service-head">
                     <h3><?php echo $cat_run['c_name']; ?></h3>
                  </a>
                  <p>
                     <?php echo shorten($cat_run['description'], 40); ?>
                  </p>
                  <br>
                  <a  class="default-btn2" href="detial.php?c_id=<?php echo $cat_run['c_id']; ?>">Read More</a>
               </div>
            <?php } ?>
            </div>
         </div>
      </section>
      
      <section class="gallery-area pt-100 pb-70">
         <div class="container">
            <div class="section-title text-center mb-50">
               <span><b>Our Gallery</b></span>
               <h2>Amazing Photos at Our Lion Groups</h2>
               <p>
                  The introduced now, the they expect, animals the desk, and catch
                  temple. More seven my couldn't it the character using recommended.
               </p>
               <a href="gallery.php"><b>View More</b></a>
            </div>
            <div class="gallery-view">
               <div class="row">
                  <?php while($gallery=mysqli_fetch_array($gallery_sql)){ ?>
                  <div class="col-lg-4 col-sm-6">
                     <div class="gallery-item">
                        <a href="admin/<?php echo $gallery['file']; ?>">
                        <img height="400px" width="380px" src="admin/<?php echo $gallery['file']; ?>" alt="Gallery Images">
                        </a>
                     </div>
                  </div>
               <?php } ?>
               </div>
            </div>
         </div>
      </section>
      <section class="trainers-area pb-70">
         <div class="container">
            <div class="section-title text-center mb-50">
               <span>Our Trainers</span>
               <h2>Our Professional Trainers</h2>
               <p>
                  The introduced now, the they expect, animals the desk, and catch temple.
                  More seven my couldn't it the character using recommended.
               </p>
            </div>
            <div class="row">
               <?php while($trainer=mysqli_fetch_array($trainer_sql)){ ?>
               <div class="col-lg-3 col-sm-6">
                  <div class="trainer-card">
                     <a href="instructor.html">
                     <img height="300px" width="300px" src="admin/media/trainer/<?php echo $trainer['image']; ?>" alt="Trainers Images">
                     </a>
                     <div class="trainer-content">
                        <a href="instructor.html">
                           <h3><?php echo $trainer['name']; ?></h3>
                        </a>
                        <span><?php echo $trainer['c_name']; ?></span>
                        <div class="social-icon">
                           <ul>
                              <li>
                                 <a href="#" target="_blank">
                                 <i class="fab fa-linkedin-in"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" target="_blank">
                                 <i class="fab fa-facebook-f"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" target="_blank">
                                 <i class="fab fa-twitter"></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" target="_blank">
                                 <i class="fas fa-envelope"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            <?php } ?>
            </div>
         </div>
      </section>
      <section class="news-area pb-70">
         <div class="container">
            <div class="section-title text-center mb-50">
               <span>Our News</span>
               <h2>Daily Updates of Our Lion Group</h2>
               <p>
                  The introduced now, the they expect, animals the desk, and catch temple.
                  More seven my couldn't it the character using recommended.
               </p>
            </div>
            <div class="row">
               <?php while($news=mysqli_fetch_array($news_sql)){ ?>
               <div class="col-lg-4 col-md-6">
                  <div class="news-card">
                     <div class="news-img">
                        <a href="#">
                        <img height="300px" width="400px" src="admin/media/news/<?php echo $news['image']; ?>" alt="News Images">
                        </a>
                     </div>
                     <ul>
                        <li>
                           <a href="#"><?php echo $news['location']; ?></a>
                        </li>
                        <li><?php echo $news['event_date']; ?></li>
                     </ul>
                     <div class="news-content">
                        <a href="#">
                           <h3><?php echo $news['name']; ?></h3>
                        </a>
                        <p>
                     <?php echo $news['description']; ?>
                          
                        </p>
                       <!--   <a href="news.php" class="news-icon">
                        Read More
                        </a>  -->
                     </div>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </section>
      <!-- index Ends -->
     

      <!-- footer starts -->
      <?php include('include/footer.php'); ?>
      <!-- Footer Ends -->
     


      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.slim.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/jquery.nice-select.min.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/jquery.ajaxchimp.min.js"></script>
      <script src="assets/js/form-validator.min.js"></script>
      <script src="assets/js/contact-form-script.js"></script>
      <script src="assets/js/custom.js"></script>
   </body>
   <!-- Mirrored from templates.hibootstrap.com/dobby/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Mar 2021 07:40:04 GMT -->
</html>
<?php
   include('include/header.php'); 
   $ob = new controller();
   $news_sql=$ob->news_view();

   ?>
<!-- body starts -->
<div class="inner-banner bg-shape2 bg-color2">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="conatiner">
            <div class="inner-title text-center">
               <h3>News</h3>
               <ul>
                  <li>
                     <a href="index.php">Home</a>
                  </li>
                  <li>
                     <i class="fas fa-chevron-right"></i>
                  </li>
                  <li>
                     News
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="news-area pt-94 pb-70">
   <div class="container">
      <div class="section-title text-center mb-30">
         <h2>Our Regular Latest News & Updates</h2>
      </div>
	<div class="row">
   <?php while($news=mysqli_fetch_array($news_sql)){ ?>
   <div class="col-lg-4 col-md-6">
      <div class="news-card">
         <div class="news-img">
            <a href="news.php?id=<?php echo $news['id']; ?>">
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
         </div>
      </div>
   </div>
   <?php } ?>
</div>      
   </div>
</section>
<!-- body Ends -->
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

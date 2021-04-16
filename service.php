<?php  $page='service';
   include('include/header.php'); 
   $ob = new controller();
   $cat=$ob->view_categories();
   

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
<!-- body starts -->
<div class="inner-banner bg-shape3 bg-color4">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="conatiner">
            <div class="inner-title text-center">
               <h3>Services</h3>
               <ul>
                  <li>
                     <a href="index.php">Home</a>
                  </li>
                  <li>
                     <i class="fas fa-chevron-right"></i>
                  </li>
                  <li>
                     Services
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="service-area text-center pt-100 pb-70">
   <div class="container">
      <div class="section-title mb-50">
         <h2>Lion Group Provides All Those Services</h2>
      </div>
      <div class="row">
         <?php while($cat_res=mysqli_fetch_array($cat)) { ?>
         <div class="col-lg-4 col-md-6">
            <div class="service-item box-shadow border-radius-10">
               <a href="detial.php?c_id=<?php echo $cat_res['c_id']; ?>" class="service-item-icon">
               <!-- <i class="flaticon-dive"></i> -->
               <img height="280px" width="350px" src="admin/media/categories/<?php echo $cat_res['image']; ?>">
               </a>
               <a href="detial.php?c_id=<?php echo $cat_res['c_id']; ?>" class="service-head">
                  <br>
                  <h3><?php echo $cat_res['c_name']; ?></h3>
               </a>
               <p>
                     <?php echo shorten($cat_res['description'], 70); ?>
               </p>
                     <a href="detial.php?c_id=<?php echo $cat_res['c_id']; ?>">Read More</a>

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
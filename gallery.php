<?php $page='gallery';
   include('include/header.php'); 
   $ob = new controller();
   $gallery=$ob->gallery_view();
   ?>
<!-- header ends -->
<!-- body starts -->
<div class="inner-banner bg-shape3 bg-color4">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="conatiner">
            <div class="inner-title text-center">
               <h3>Gallery</h3>
               <ul>
                  <li>
                     <a href="index.php">Home</a>
                  </li>
                  <li>
                     <i class="fas fa-chevron-right"></i>
                  </li>
                  <li>
                     Gallery
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="gallery-inner pt-100 pb-70">
   <div class="container">
      <div class="section-title text-center mb-50">
         <span>Our Gallery</span>
         <h2>Amazing Photos at Our Gallery</h2>
      </div>
      <div class="gallery-view">
         <div class="row">
            <?php while($view_img=mysqli_fetch_array($gallery)) { ?>
            <div class="col-lg-4 col-sm-6">
               <div class="single-gallery">
                  <img height="300px" width="300px" src="admin/<?php echo $view_img['file']; ?>" alt="Gallery Images">
                  <a href="admin/<?php echo $view_img['file']; ?>" class="single-icon">
                  <i class="fas fa-image"></i>
                  </a>
               </div>
            </div>
        <?php } ?>
         </div>
      </div>
   </div>
</div>
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
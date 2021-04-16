<?php
include('include/header.php'); 

$ob = new controller();
$cat_sql=$ob->view_categories();
$detial_title=$ob->detial_view();
$detials=$ob->detial_view();
$check=mysqli_num_rows($detials);
?>
<!-- header ends -->
<!-- body starts -->
<div class="inner-banner bg-shape2 bg-color1">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="conatiner">
            <div class="inner-title text-center">
               <h3></h3>
               <ul>
                  <li>
                     <a href="index.php">Home</a>
                  </li>
                  <li>
                     <i class="fas fa-chevron-right"></i>
                  </li>
         <?php while($title=mysqli_fetch_array($detial_title)) { ?>
                  <li>
                     <?php echo $title['c_name'] ?>
                  </li>
               <?php } ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="service-detl pt-100 pb-70">
   <div class="container">
      
      <div class="row">
         <div class="col-lg-8">
         <?php if($check>0){?>
         <?php while($detial=mysqli_fetch_array($detials)) { ?>
            <div class="common-dtel-img">
               <img src="admin/media/categories/<?php echo $detial['image'];?>" alt="Images">
            </div>
            <div class="common-dtel-text">
               <h2><?php echo $detial['c_name']; ?></h2>
               <p>
                  <?php echo $detial['description']; ?>.
               </p>
            </div>
      <?php } ?>
      <?php }else{
  ?>  
  <br>
  <h1 style="color: #D11313; margin-left: 180px"> Data Not Available!</h1>
  <a href="index.php"><h2 style="color: #76C2C2; margin-left: 180px"><i class="fa fa-arrow-left"></i> Click here to Return</h2></a>

  <br>
  <?php  
 } ?>
 
         </div>
         <div class="col-lg-4">
            <div class="widget-area">
            
               <div class="widget-categories">
                  <h2>More Services</h2>
                 <?php while($cat=mysqli_fetch_array($cat_sql)) { ?>
                  <ul>
                     <li>
                        <a href="?c_id=<?php echo $cat['c_id']; ?>">
                        <?php echo $cat['c_name']; ?>
                        <i class="fas fa-chevron-right"></i>
                        </a>
                     </li>
                  </ul>
               <?php } ?>
               </div>
               <div class="common-offer">
                  <div class="drive-img">
                     <img src="assets/img/run.jfif" alt="Images">
                  </div>
                  <div class="common-offer-text">
                     <h3>Are You Want to Play Sports</h3>
                     <a href="contact.php" class="call-btn">Contact Us</a>
                  </div>
               </div>
            </div>
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
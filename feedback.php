<?php $page='feedback';
include('include/header.php'); 

          $per_page=4;
            $start=0;
            $current_page=1;
            if(isset($_GET['start']))
            {
              $start=$_GET['start'];
              if($start<=0)
              {
                $startp_id=0;
                $current_page=1;
              }else
              {
                $current_page=$start;
                $start--;
                $start=$start*$per_page;
              }
            }
            $con=mysqli_connect('localhost','root','','office_sports');
            $record=mysqli_num_rows(mysqli_query($con,"SELECT * FROM feedback  where status=1 order by id"));
            $pagi=ceil($record/$per_page);

            $sql="select * from feedback where status=1 limit $start,$per_page";
            $res=mysqli_query($con,$sql);



?>
<!-- body starts -->
<div class="inner-banner bg-shape1 bg-color1">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="conatiner">
            <div class="inner-title text-center">
               <h3>Testimonials</h3>
               <ul>
                  <li>
                     <a href="index.php">Home</a>
                  </li>
                  <li>
                     <i class="fas fa-chevron-right"></i>
                  </li>
                  <li>
                     Testimonials
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="testimonials-inner pt-100 pb-70">
   <div class="container">
      <div class="section-title text-center mb-50">
         <!-- <span>Testimonials</span><br> -->
         <a class="btn btn-danger" href="feedback_manage.php">Give Your Feedback</a>
         <h2>What Our Client's Say About Us</h2>
      </div>
      <div class="row">
         <?php while($feed=mysqli_fetch_array($res)) { ?>
         <div class="col-lg-6">
            <div class="single-testominal">
               <img width="200px" height="150px" src="admin/media/feedback/<?php echo $feed['image']; ?>" alt="Images">
               <h3><?php echo $feed['name']; ?></h3>
               <p>
                  “<?php echo $feed['review']; ?>.”
               </p>
            </div>
         </div>
     <?php } ?>

  <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                 <?php 
                 for($i=1;$i<=$pagi;$i++){
                 $class='';
                 if($current_page==$i){
                   ?><li class="page-item active"><a class="page-link" href="javascript:void(0)"><?php echo $i?></a></li><?php
                 }else{
                 ?>
                   <li class="page-item"><a class="page-link" href="?start=<?php echo $i?>"><?php echo $i?></a></li>
                 <?php
                 }
                 ?>
                   
                 <?php } ?>
              </ul>
            </nav>
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
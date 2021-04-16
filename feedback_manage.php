<?php
include('include/header.php'); 
$ob = new controller();
$ob->feedback_insert();
?>
<style>
            body label.error
            {
                  color:red;
            }
            body input.error
            {
                  color: red;
                  border-color: red;
            }
            body textarea.error
            {
                  color: red;
                  border-color: red;
            }
            body textarea.valid
            {
                  color: green;
                  border-color: green;
            }
            body input.valid
            {
                  color:green;
                  border-color: green;
         }
</style>

<!-- header ends -->
<!-- body starts -->
<div class="inner-banner bg-shape2 bg-color2">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="conatiner">
            <div class="inner-title text-center">
               <h3>Feedback</h3>
               <ul>
                  <li>
                     <a href="index.php">Home</a>
                  </li>
                  <li>
                     <i class="fas fa-chevron-right"></i>
                  </li>
                  <li>
                     Give your Feedback
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
   <div class="booking-area ptb-100">
   <div class="container">
      <div class="section-title text-center mb-50">
         <a href="feedback.php" class="btn btn-danger">View Feedback</a>
         <h2>Feedback Form</h2>
      </div>
      <div class="book-form">
         <div class="form">
            <form method="post" id="frm" enctype="multipart/form-data">
               <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                     
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <input type="file" name="image" class="form-control" placeholder="Upload your Image">
                        <label>*Upload your Image</label>

                     </div>
                  </div>
               
                  <div class="col-lg-12 col-md-12">
                     <div class="form-group">
                        <br>
                        <textarea name="review" class="form-control textarea-hight" cols="30" rows="5" placeholder="Your Feedback"></textarea>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 text-center">
                     <br>
                     <button type="submit" name="submit" class="default-btn1 btn-two">
                     <i class="fas fa-paper-plane"></i>
                     Sent Your Feedback
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!-- body Ends -->
<!-- footer starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
<script src="assets/js/jq.js"></script>
<script src="assets/js/jqv.js"></script>
      <script>
            $(document).ready(function(){
            jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters"); 

                  $("#frm").validate({ 
                        rules:
                        {
                              name:
                              {
                                    required:true,
                                    lettersonly: true,
                              },
                             image:
                              {
                                    required:true,
                              },
                              review:
                              {
                                    required:true,
                              },



                        },

                        messages:
                        {
                              name:
                              {
                                    required:"Please Enter Your Name",
                                    lettersonly:"Only Letters Allowed",
                              },
                              image:
                              {
                                    required:"Please Upload your Image",
                              },
                              review:
                              {
                                    required:"Write Your Review",
                              },


                        },



                  });
            });
      </script>
<?php 
if(isset($_SESSION['STATUS']) && $_SESSION['STATUS'] !='') { ?>

<script type="text/javascript">
  
  swal({
    title: "Your Feedback is Sent Successfully!",
    icon:  "success",
    button: "Okay!"
}).then(function() {
    window.location = "index.php";
});
</script> 
<!-- <p><?php echo $_SESSION['STATUS']; ?></p> -->
<?php 
unset($_SESSION['STATUS']);
}
 ?>


</body>
<!-- Mirrored from templates.hibootstrap.com/dobby/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Mar 2021 07:40:04 GMT -->
</html>
<?php $page='contact';
include('include/header.php'); 
$ob = new controller();
$ob->contact_insert();
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
               <h3>Contact Us</h3>
               <ul>
                  <li>
                     <a href="index.php">Home</a>
                  </li>
                  <li>
                     <i class="fas fa-chevron-right"></i>
                  </li>
                  <li>
                     Contact Us
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="contact-area pt-100 pb-70">
   <div class="container">
      <div class="contact-title text-center mb-50">
         <h2>
            Our office is Available From 10:00 AM to 19:00 PM (Monday - Saturday)
            and Contact is Available 24/7
         </h2>
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6">
            <div class="contact-item">
               <div class="icon-contact text-center"><i class="far fa-clock"></i></div>
               <h3>Open Monday to Saturday From 10:00 AM to 19:00 PM</h3>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="contact-item">
               <div class="icon-contact text-center"><i class="fas fa-map-marker-alt"></i></div>
               <h3>127,Nathubhai Tower, Above Motiwala Optical, udhna, surat-394210.</h3>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
            <div class="contact-item text-center">
               <div class="icon-contact"><i class="flaticon-telephone"></i></div>
               <h3>
                  <a href="tel:+1123456789">
                  +91 70 69 7070 67 <br>
                  +91 95 74 8569 40
                  </a>
               </h3>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="contact-form pb-70">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-lg-6 p-0">
            <div class="contact-img">
               <img src="assets/img/contact.png" alt="Contact Images">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-area">
               <div class="form-section">
                  <h2>What Do You Want to Know?</h2>
                  <form  method="post" id="frm">
                     <div class="row">
                        <div class="col-lg-4 col-sm-3">
                           <div class="form-group">
                              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-3">
                           <div class="form-group">
                              <input type="email" name="email" class="form-control " placeholder="Your Email">
                           </div>
                        </div>
                        <div class="col-lg-4 col-sm-3">
                           <div class="form-group">
                              <input type="text" name="mobile"  class="form-control" placeholder="Your Phone">
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                           <div class="form-group">
                              <textarea name="msg" class="form-message textarea-hight" id="message" cols="30" rows="5" placeholder="Your Message"></textarea>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                           <button type="submit" name="submit" class="default-btn1 btn-two">
                           Submit
                           </button>
                        </div>
                     </div>
                  </form>
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
                              email:
                              {
                                    required:true,
                                    email:true,
                              },
                              mobile:
                              {
                                    required:true,
                                    number:true,
                                    minlength:10,
                                    maxlength:10,
                              },
                              msg:
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
                              email:
                              {
                                    required:"Please Enter Your Email",
                                    email:"Please Enter Valid Email Address",
                              },

                              mobile:
                              {
                                    required:"Please Enter Your Mobile",
                                    number:"Please Enter Only Digits",
                                    minlength:"Please Enter 10 Digits Mobile No",
                                    maxlength:"Please Enter Valid Mobile",
                              },
                              msg:
                              {
                                    required:"Write Message",
                              },


                        },



                  });
            });
      </script>
<?php 
if(isset($_SESSION['STATUS']) && $_SESSION['STATUS'] !='') { ?>

<script type="text/javascript">
  
  swal({
    title: "Your Message is Sent Successfully!",
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
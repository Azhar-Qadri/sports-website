<?php 
include('include/header.php'); 
$ob = new controller();
$ob->enquery_insert();
$error_msg='';
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
            body select.error
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
            body select.valid
            {
                  color:green;
                  border-color: green;
            }
        
 
</style>
 
      <div class="inner-banner bg-shape1 bg-color2">
         <div class="d-table">
            <div class="d-table-cell">
               <div class="conatiner">
                  <div class="inner-title text-center">
                     <h3>Enquery</h3>
                     <ul>
                        <li>
                           <a href="index.php">Home</a>
                        </li>
                        <li>
                           <i class="fas fa-chevron-right"></i>
                        </li>
                        <li>
                           Enquery
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="cart-area ptb-70">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <form method="post" id="frm">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="cart-calc">
                              <div class="shops-form">
                                 <h3>Enquery Form</h3>
                                 <div class="row">
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <select name="c_id" class="form-control">
                                          	<option value="">Select Service</option>
				                               <?php 
				                                $con=mysqli_connect('localhost','root','','office_sports');
				                             $sql=mysqli_query($con,"SELECT * FROM categories order by c_name desc");
				                               while($row=mysqli_fetch_array($sql))
				                                {
				                                echo "<option value=".$row['c_id'].">".$row['c_name']."</option>";
				                                }
				                                ?>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group">
                              <input type="text" name="name" class="form-control" placeholder="Your Name" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group">
                              <input type="email" name="email" class="form-control " placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group">
                              <input type="text" name="mobile"  class="form-control" placeholder="Your Phone">
                                          
                                         </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group">
                              <textarea name="msg" class="form-control textarea-hight" id="message" cols="30" rows="5" placeholder="Your Message"></textarea>
                                          
                                         </div>
                                    </div>
                                 </div>
                        <div class="">
                           
                         
                 <button type="submit" name="submit" class="default-btn1 btn-two">
                           Submit
                           </button>
                  
                        </div>

                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <?php include('include/footer.php'); ?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.slim.min.js"></script>
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <!-- <script src="assets/js/jquery.nice-select.min.js"></script> -->
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

                              c_id:
                              {
                                    required:true,
                              },
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
                           c_id:
                              {
                                    required:"Please Select Service!",
                              },
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
    title: "Your Enquery is Sent Successfully!",
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
   <!-- Mirrored from templates.hibootstrap.com/dobby/default/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Mar 2021 07:40:38 GMT -->
</html>
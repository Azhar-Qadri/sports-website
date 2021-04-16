<?php  
$ob = new controller();
$cat_footer=$ob->view_categories(); 
?>
<footer class="footer-area">
         <div class="footer-top pt-40 pb-70">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-sm-6">
                     <div class="footer-content">
                        <div class="footer-conten-title">
                           <a href="index.php">
                              <img style="width: 100px; height: 100px; margin-right: 150px" src="assets/img/icon.png" alt="Logo">
                           </a>
                           <p>
                            Our vision is to develop opportunities fot the Youth.
                           </p>
                        </div>
                        <div style="margin-right: 150px" class="footer-social">
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
                  <div class="col-lg-2 col-sm-6">
                     <div class="footer-list">
                        <h3>Our Service</h3>
                        <ul>
                           <?php while($cat_display=mysqli_fetch_array($cat_footer)) { ?>
                           <li>
                              <a href="detial.php?c_id=<?php echo $cat_display['c_id']; ?>"><?php echo $cat_display['c_name']; ?></a>
                           </li>
                          <?php } ?>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="footer-list ml-50">
                        <h3>Quick Links</h3>
                        <ul>
                           <li>
                              <a href="about.php">About Us</a>
                           </li>
                           <li>
                              <a href="gallery.php">Gallery</a>
                           </li>
                           <li>
                              <a href="services.php">Services</a>
                           </li>
                           <li>
                              <a href="enquery.php">Enquery</a>
                           </li>
                           <li>
                              <a href="feedback.php">Client Reviews</a>
                           </li>
                           <li>
                              <a href="contact.php">Contact Us</a>
                           </li>
                           
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="footer-list">
                        <h3>Contacts</h3>
                        <ul>
                           <li>
                              <a href="#">
                              <!-- <i class="fas fa-mobile-alt"></i> -->
                                 +91 95 74 8569 40
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <!-- <i class="fas fa-mobile-alt"></i> -->
                             +91 70 69 7070 67
                              </a>
                           </li>
                           <li>
                              <!-- <i class="fas fa-map-marker-alt" style="margin-left: 50px"></i> -->
                              127,Nathubhai Tower, Above Motiwala Optical, udhna, surat-394210.
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <div class="row align-items-center">
                
                  <div class="col-lg-12">
                     <div class="bottom-text">
                        <p style="margin-right: 300px ">
                           Copyright ©2021 All rights reserved by Lions Group of Sports  and Develop by
                           <a href="https://webmastersinfotech.com/" target="_blank"><b>WebMasters Infotech</b></a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
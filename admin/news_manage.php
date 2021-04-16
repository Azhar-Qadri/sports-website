<?php 
   include('include/controller.php');
   $ob = new controller();
   $ob->news_insert();
   if(isset($_REQUEST['id']))
{
  $data=$ob->news_edit();
   @$edit=mysqli_fetch_array($data);
 }
   $ob->news_update();
   
   ?>
<!doctype html>
<html class="no-js " lang="en">
   <head>
      <meta charset="utf-8">
      <title>:: Web Master - News Form ::</title>
      <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- vendor css files -->
      <link rel="stylesheet" href="assets/js/vendor/bootstrap/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/vendor/animsition.min.css">
      <link rel="stylesheet" href="assets/js/vendor/morris/morris.css">
      <!-- project main css files -->
      <link rel="stylesheet" href="assets/css/main.css">
   </head>
   <body id="falcon" class="main_Wrapper">
      <div id="wrap" class="animsition">
         <!-- HEADER START -->
         <?php include('include/header.php'); ?>
         <!-- HEADER ENDS -->
         <!-- SIDE BAR START -->
         <?php include('include/sidebar.php'); ?>
         <!-- SIDE BAR ENDS -->
         <!--  CONTENT  -->
         <section id="content">
            <div class="page page-tables-footable">
               <!-- bradcome -->
               <div class="b-b mb-10">
                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <h1 class="h3 m-0">News Form</h1>
                     </div>
                  </div>
               </div>
               <!-- row -->
               <div class="row">
                  <div class="col-md-12">
                     <section class="boxs">
                        <div style="margin-left: 85%">
                           <h3 class="custom-font hb-cyan" >
                              <a  class="btn btn-raised btn-primary" href="news.php">View News</a>
                           </h3>
                        </div>
                        <div class="boxs-body">
                           <form method="post" enctype="multipart/form-data"  id="frm">
                              <div class="form-group is-empty">
                                 <label for="exampleInputEmail1">Title</label>
                                 <input type="text" class="form-control"  name="name" placeholder="Enter Title" value="<?php echo @$edit['name']; ?>" required>
                                 <span class="material-input"></span>
                              </div>
                              <div class="form-group is-empty">
                                 <label for="exampleInputEmail1">Description</label>
                                 <textarea name="description"  placeholder="Enter Detial information about Job" class="form-control" required><?php echo @$edit['description']; ?></textarea>
                                 <span class="material-input"></span>
                              </div>
                              <div class="form-group is-empty">
                                 <label for="exampleInputEmail1">Location</label>
                                 <textarea name="location"  placeholder="Enter Location" class="form-control" required><?php echo @$edit['location']; ?></textarea>
                                 <span class="material-input"></span>
                              </div>
                              <div class="form-group is-empty">
                                 <label for="exampleInputEmail1">Event Date</label> <br>
                                 <input type="date" name="event_date"  placeholder="Enter Event Date" value="<?php echo @$edit['event_date']; ?>" required>  
                                 <span class="material-input"></span>
                              </div>
                              <div>
                                <br>
                                 <label for="exampleInputEmail1">News Image</label>
                                 <input type="file"  name="image"  width="100px" height="100px" style="margin-top: 10px">
                                 <?php if(isset($_REQUEST['edit'])) { ?> <img style="margin-top: 10px" src="media/news/<?php echo @$edit['image']; ?>" height="100" width="100">    <?php } ?>
                              </div>
                              <span class="material-input"></span>
                        </div>
                        <?php 
                           if(isset($_REQUEST['id']))
                           {
                           ?>
                        <button type="submit" name="update" class="btn btn-raised btn-primary">Update</button>
                        <?php 
                           }
                           else
                           {
                           ?>
                        <button type="submit" name="submit" class="btn btn-raised btn-primary">Add</button>
                        <?php 
                           }
                             ?>
                        </form>
                  </div>
                  </section>
               </div>
            </div>
      </div>
      </section>
      <!--/ CONTENT -->
      </div>
      <!-- Vendor JavaScripts -->
      <script src="assets/bundles/libscripts.bundle.js"></script>
      <script src="assets/bundles/vendorscripts.bundle.js"></script>
      <!--/ vendor javascripts -->
      <script src="assets/bundles/flotscripts.bundle.js"></script>    
      <script src="assets/bundles/d3cripts.bundle.js"></script>
      <script src="assets/bundles/sparkline.bundle.js"></script>
      <script src="assets/bundles/raphael.bundle.js"></script>
      <script src="assets/bundles/morris.bundle.js"></script>
      <script src="assets/bundles/loadercripts.bundle.js"></script>
      <!-- page Js -->
      <script src="assets/bundles/mainscripts.bundle.js"></script>
      <script src="assets/js/page/index.js"></script>   
      <!--  Custom JavaScripts  -->
      <script src="assets/bundles/mainscripts.bundle.js"></script>    <!-- Custom Js -->
      <!--  Page Specific Scripts  -->
      <script >
         $(window).load(function () {
             $('.footable').footable();
         });
      </script>  
   </body>
</html>
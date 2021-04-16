<?php 	
include('include/controller.php');

if(($_SESSION['ADMIN_LOGIN']!='yes')){

  header('location:login.php?id='.$_SESSION['ADMIN_LOGIN']);
  die();
}

$ob = new controller();
$ob->admin_login();

//Categories
$cat=$ob->view_categories();
$display_cat=mysqli_num_rows($cat);


//Feedback
$feed=$ob->feedback_view();
$display_feedback=mysqli_num_rows($feed);

//Enquery
$enquery=$ob->enquery_view();
$display_enquery=mysqli_num_rows($enquery);

//Job listing
// $applied=$ob->career_view();
// $display_jobs=mysqli_num_rows($applied);

//Contact Us
$contact=$ob->contact_view();
$display_contact=mysqli_num_rows($contact);


?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">

<title>:: WebMasters Infotech - Admin Dashboard ::</title>
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
        <!-- CONTENT -->
        <section id="content">
            <div class="page dashboard-page">
                <!-- bradcome -->
                <div class="b-b mb-20">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0">Dashboard</h1>
                            <small class="text-muted">Welcome to Admin Panel</small>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-blue">
                            <div class="boxs-body">
                                <h3 class="mt-0"><?php echo $display_cat ?></h3>
                                <a href="categories.php"><p style="color: white">Categories</p></a>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                                <h3 class="mt-0"><?php echo $display_feedback ?></h3>
                                <a href="client_review.php"><p style="color: white">Feedback</p></a>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-seagreen">
                            <div class="boxs-body">
                                <h3 class="mt-0"><?php echo $display_enquery ?></h3>
                                <a href="enquery.php" style="color: white"><p>Enquery</p></a>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"></div>
                        </div>
                    </div>
                <!--     <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-amber">
                            <div class="boxs-body">
                                <h3 class="mt-0"><?php echo $display_jobs ?></h3>
                                <a href="career.php"><p style="color: white">Job Listing</p></a>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"> </div>
                        </div>
                    </div> -->
                        <div class="col-lg-3 col-sm-6 col-md-6 col-xs-12">
                        <div class="boxs top_report_chart l-parpl">
                            <div class="boxs-body">
                                <h3 class="mt-0"><?php echo $display_contact ?></h3>
                                <a href="contact.php"><p style="color: white">Contact Us</p></a>
                            </div>
                            <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                            data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(0, 150, 136)" data-spot-Color="rgb(0, 188, 212)"
                            data-offset="90" data-width="100%" data-height="60px" data-line-Width="2" data-line-Color="rgba(255, 255, 255, 0.2)"
                            data-fill-Color="rgba(255, 255, 255, 0.3)"></div>
                        </div>
                    </div> 
                </div>
                
            </div>
        </section>
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
</body>

</html>
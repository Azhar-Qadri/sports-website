<?php 
include('include/controller.php');
$ob = new controller();
$run=$ob->gallery_view();
$ob->gallery_delete();
$ob->gallery_status();


?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">

<title>:: WebMaster - Gallery Table ::</title>
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
       
        <!-- CONTENT  -->
    <section id="content">
      <div class="page page-gallery">
        <!-- bradcome -->
        <div class="b-b mb-10">
          <div class="row">
            <div class="col-sm-6 col-xs-12">
              <h1 class="h3 m-0">Gallery Table</h1>
            </div>
            
                    <a style="float:right;" href="gallery_manage.php" class="btn btn-raised btn-primary"> Add Images</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
                
              
              
            <section class="boxs">
            
           <?php 
            while($file2=mysqli_fetch_array($run)) {?>
      
         <div style="height: 200px; width: 200px; float: left; margin: 25px;">

                <img src="<?php echo $file2['file']; ?>" height="200" width="200">
                <br>

                <a style="color: red" href="gallery.php?delete&id=<?php echo $file2['id']?>" onclick="return confirm('Are You Sure To Delete <?php echo $file2['file'];?>');" ><i class="fa fa-trash" style="font-size: 25px"></i></a>
                 <td>
                        <?php 
                        if($file2['status']==1){
                            echo "<a style='color: green; margin-left:100px'  href='?type=status&operation=deactive&id=".$file2['id']."'><b>Active</b></a>";
                         }else{
                            echo "<a style='color: red; margin-left:100px' href='?type=status&operation=active&id=".$file2['id']."'><b>Deactive</b></a>";
                         }  
                         ?>                        
                 </td> 
              </div>
            <?php } ?>
       
            
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
    
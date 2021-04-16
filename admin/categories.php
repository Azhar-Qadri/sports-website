 <?php 
include('include/controller.php');
$ob = new controller();
$show=$ob->view_categories();
$ob->delete_categories();
$ob->status_categories();

?>
<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">

<title>:: Web Masters - Service Table ::</title>
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
        <?php  include('include/sidebar.php'); ?>
       <!-- SIDE BAR ENDS -->
       
        <!--  CONTENT  -->
        <section id="content">
            <div class="page page-tables-footable">
                <!-- bradcome -->
                <div class="b-b mb-10">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0">Services Table</h1>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <section class="boxs ">
                            <div style="margin-left: 85%">
                                <h3 class="custom-font hb-cyan" >
                                <a  class="btn btn-raised btn-primary" href="categories_add.php">Add Services</a>
                              </h3>
                            </div>
                            <div class="boxs-body">
                               
                                <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Status</th>
                                            <th colspan="2">Action</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Images</th>

                                        </tr>
                                    </thead>
                                      <tbody>
                              <?php
                                 $i=1;
                                  while($row=mysqli_fetch_array($show)){ ?>
                              <tr>
                                 <td><?php echo $i; ?></td>
                           <td>
                        <?php 
                        if($row['status']==1){
                        
                             echo "<a style='color: green;' href='?type=status&operation=deactive&c_id=".$row['c_id']."'><b>Active</b></a>"; 

                         }else{
                            echo "<a style='color: red;' href='?type=status&operation=active&c_id=".$row['c_id']."'><b>Deactive</b></a>";
                         }  
                         ?>
                        
                      </td>

                                  <td>
                                    <a href="?delete&c_id=<?php echo $row['c_id'];?>" onclick="return confirm('Are You Sure To Delete <?php echo $row['c_name'];?>');"><i class="fa fa-trash" style="color:red;font-size: 20px"></i></a>
                                  </td>
                                 <td>
                                    <?php 
                                       echo "<a href='categories_add.php?edit&c_id=".$row['c_id']."'><i class='fa fa-edit' style='color:blue;font-size: 20px'></i></a>";
                                       
                                        ?>
                                 </td>
                                 <td><?php echo $row['c_name']; ?></td>
                                 <td><?php echo $row['description']; ?></td>

                                 <td><img src="./media/categories/<?php echo $row['image']; ?>" width="100px" height="100px"></td>

                              </tr>
                              <?php $i++; } ?>
                           </tbody>
                                    <tfoot class="hide-if-no-paging">
                                        <tr>
                                            <td colspan="5" class="text-right">
                                                <ul class="pagination">
                                                </ul>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
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
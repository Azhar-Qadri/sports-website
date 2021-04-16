<?php 
include('include/controller.php');

$ob = new controller();
if(isset($_REQUEST['c_id']))
{
@$data1=$ob->edit_categories();
  $edit=mysqli_fetch_array(@$data1);
}
$ob->update_categories();




            $c_name='';
            $description='';
            $image='';
            $status='';
            $msg='';
        
            if(isset($_POST['submit']))
            {
                $con=mysqli_connect('localhost','root','','office_sports');

                $c_name=$_POST['c_name'];
                $description=$_POST['description'];
                $image=$_FILES['image'];
                
                $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],'./media/categories/'.$image);

                 $res=mysqli_query($con,"select * from categories where c_name='$c_name'");

                 $check1=mysqli_num_rows($res);

                 if($check1>0)
                 {
                    $msg="categories is Alreay Present";
                 }
                 else
                 {
                  $insert_cat=mysqli_query($con,"INSERT INTO `categories`(c_name,description,image,status) VALUES ('$c_name','$description','$image','1')");
                   ?>
                <script>alert('Categories Added Successfully'); window.location.href='categories.php';</script>
                <?php   
                 }
               
            }
        

?>

<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">

<title>:: WebMasters - Service Form ::</title>
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
                            <h1 class="h3 m-0">Services Form</h1>
                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <section class="boxs">
                            <div style="margin-left: 85%">
                                <h3 class="custom-font hb-cyan" >
                                <a  class="btn btn-raised btn-primary" href="categories.php">View Services</a>
                              </h3>
                            </div>
                            <div class="boxs-body">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Category</label>
                                        <input type="text" class="form-control"  name="c_name" placeholder="Enter Name of Category" value="<?php echo @$edit['c_name']; ?>" required>
                                    <span class="material-input"></span>
                                  </div>
                                  <div class="form-group is-empty">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea class="form-control" name="description" placeholder="Write description" required><?php echo @$edit['description']; ?> </textarea>
                                    <span class="material-input"></span>
                                  </div>
                                  <div>
                                        <label for="exampleInputEmail1">Cover Image</label>
                                        <input type="file"  name="image" width="100px" height="100px" style="margin-top: 10px">
                                       <?php if(isset($_REQUEST['edit'])) { ?> <img style="margin-top: 10px" src="./media/categories/<?php echo $edit['image']; ?>" height="100" width="100">    <?php } ?>
                                </div> 
                                <div class="msg" style="color: red;">
                                        <?php echo $msg; ?>
                                       </div>

               
                                     <?php 
                if(isset($_REQUEST['edit']))
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
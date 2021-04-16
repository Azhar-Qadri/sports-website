<?php
include('include/controller.php');
$ob = new controller;
$ob->admin_login();
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>:: WebMasters Infotech- Login Page ::</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/js/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Files -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body id="falcon" class="authentication">
  <div class="wrapper">
    <div class="header header-filter" style="background-image: url('assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
              <form class="form" method="post">
                <div class="header header-primary text-center">
                  <h4>Sign in</h4>
                  <div class="social-line">
                    <a href="https://www.facebook.com/wiwebmasters" class="btn btn-just-icon">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a  href="https://www.instagram.com/wiwebmasters/" class="btn btn-just-icon">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </div>
                </div>
                <h3 class="mt-0">WebMasters Infotech</h3>
                <div class="content">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control underline-input" placeholder="Enter Your Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" placeholder="Password..." class="form-control underline-input">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="optionsCheckboxes"> Remember me</label>
                  </div>
                </div>
                <div class="footer text-center">
        <input type="submit" name="login" class="btn btn-info btn-raised" value="Login">
        <br>
         <div class="msg" style="color: red">
              <?php
              $msg='';
               echo $msg; ?> 
              </div>
                  </div>
                <a href="#" class="btn btn-wd">Forgot Password?</a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer mt-20">
        <div class="container">
          <div class="col-lg-12 text-center">
            <a href="signup.html" class="text-uppercase text-white">Create an account</a>
            <div class="copyright text-white mt-20"> &copy; 2021, made with
              <i class="fa fa-heart heart"></i> by
              <a href="https://webmastersinfotech.com/" target="_blank">WebMasters Infotech</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--  Vendor JavaScripts -->
  <script src="assets/bundles/libscripts.bundle.js"></script>
  <script src="assets/bundles/mainscripts.bundle.js"></script>
  <!-- Custom Js -->
</body>

</html>
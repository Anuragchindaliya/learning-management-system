<?php 
session_start();
if (isset($_SESSION['is_admin_login'])){
  if($_SESSION['is_admin_login'] == true) {

    header('Location: ../pages/dashboard/admin-dashboard.php');
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico">


<!-- Libs CSS -->

<!-- <link href="../assets/fonts/feather/feather.css" rel="stylesheet" />
<link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
<link href="../assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
<link href="../assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<link href="../assets/libs/prismjs/themes/prism.css" rel="stylesheet" />
<link href="../assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
<link href="../assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
<link href="../assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="../assets/libs/%40yaireo/tagify/dist/tagify.css" rel="stylesheet">
<link href="../assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
<link href="../assets/libs/tippy.js/dist/tippy.css" rel="stylesheet"> -->




<!-- Theme CSS -->
<link rel="stylesheet" href="../assets/css/theme.min.css">
  <title>Sign in | Geeks - Academy Admin Template </title>
</head>

<body>
  <!-- Page content -->
  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center no-gutters min-vh-100">
      <div class="col-lg-5 col-md-8 py-8 py-xl-0">
        <!-- Card -->
        <div class="card shadow ">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
              <a href="../index.html"><img src="../assets/images/brand/logo/logo-icon.svg" class="mb-4" alt=""></a>
              <h1 class="mb-1 font-weight-bold">Sign in</h1>
              <span>Don’t have an account? <a href="sign-up.html" class="ml-1">Sign up</a></span>
            </div>
            <!-- Form -->
            <form id="adminForm">
              	<!-- Username -->
              <div class="form-group">
                <label for="email" class="form-label">Username or email</label>
                <input type="email" id="adminemail" class="form-control" name="email" placeholder="Email address here"
                  required>
              </div>
              	<!-- Password -->
              <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="adminpassword" class="form-control" name="password" placeholder="**************"
                  required>
              </div>
              	<!-- Checkbox -->
              <div class="d-lg-flex justify-content-between align-items-center mb-4">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="rememberme">
                  <label class="custom-control-label " for="rememberme">Remember me</label>
                </div>
                <div>
                  <a href="forget-password.html">Forgot your password?</a>
                </div>
              </div>
              <div>
                	<!-- Button -->
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                <div id="adminLog" class="text-center"></div>
              </div>
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <!-- Libs JS -->
<<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<!--<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/odometer/odometer.min.js"></script>
<script src="../assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="../assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="../assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
<script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../assets/libs/quill/dist/quill.min.js"></script>
<script src="../assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js"></script>
<script src="../assets/libs/dragula/dist/dragula.min.js"></script>
<script src="../assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script src="../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="../assets/libs/jQuery.print/jQuery.print.js"></script>
<script src="../assets/libs/prismjs/prism.js"></script>
<script src="../assets/libs/prismjs/components/prism-scss.min.js"></script>
<script src="../assets/libs/%40yaireo/tagify/dist/tagify.min.js"></script>
<script src="../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
<script src="../assets/libs/typed.js/lib/typed.min.js"></script>
<script src="../assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
<script src="../assets/libs/jsvectormap/dist/maps/world.js"></script> -->



<!-- clipboard -->
<!-- <script src="../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script> -->


<!-- Theme JS -->
<!-- <script src="../assets/js/theme.min.js"></script> -->

<!-- ajax reqest for admin sign in -->
<script src="adminajax.js"></script>
</body>


<!-- Mirrored from codescandy.com/geeks/pages/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:14:26 GMT -->
</html>
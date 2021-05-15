<?php
if (!isset($_SESSION)) {
    session_start();
}

if ($_SESSION['is_admin_login'] != true) {

    header('Location: ../../index.php');
    exit;
}
$activePage = basename($_SERVER['PHP_SELF'], ".php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon/favicon.ico">



    <!-- <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css"> -->


    <!-- Libs CSS -->

    <link href="../../assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="../../assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="../../assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
    <!-- MaterialDesign web font, icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css" integrity="sha512-vIgFb4o1CL8iMGoIF7cYiEVFrel13k/BkTGvs0hGfVnlbV6XjAA0M0oEHdWqGdAVRTDID3vIZPOHmKdrMAUChA==" crossorigin="anonymous" />
    <link href="../../assets/libs/prismjs/themes/prism.css" rel="stylesheet" />
    <link href="../../assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
    <link href="../../assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
    <link href="../../assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../../assets/libs/%40yaireo/tagify/dist/tagify.css" rel="stylesheet">
    <link href="../../assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
    <link href="../../assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">


    <!-- databale css -->



    <!-- Theme CSS -->
    <link rel="stylesheet" href="../../assets/css/theme.min.css">

    <title>Dashboard | MDU - Academy Admin </title>
</head>

<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="./admin-dashboard.php"><img src="../../assets/images/brand/logo/logo-inverse.svg" alt="" /></a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="#!" data-toggle="collapse" data-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
                            <i class="nav-icon fe fe-home mr-2"></i>Dashboard
                        </a>
                        <div id="navDashboard" class="collapse <?= ($activePage==='admin-dashboard' || $activePage==='dashboard-analytics')?'show':'';?>" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($activePage==='admin-dashboard')?'active':'';?> " href="admin-dashboard.php">
                                        Overview
                                    </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item ">
                                    <a class="nav-link <?= ($activePage==='dashboard-analytics')?'active':'';?>" href="dashboard-analytics.php">
                                        Analytics <span class="badge badge-warning ml-2">New</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="#!" data-toggle="collapse" data-target="#navCourses" aria-expanded="false" aria-controls="navCourses">
                            <i class="nav-icon fe fe-book mr-2"></i>Courses
                        </a>
                        <div id="navCourses" class="collapse <?= ($activePage==='admin-course-overview' || $activePage==='admin-course-category' || $activePage==='admin-course-category-single')?'show':'';?>" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link  <?= ($activePage==='admin-course-overview')?'active':'';?>" href="admin-course-overview.php">All Courses
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($activePage==='admin-course-category')?'active':'';?>" href="admin-course-category.php">Courses Category
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($activePage==='admin-course-category-single')?'active':'';?>" href="admin-course-category-single.php"> Category
                                        Single</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="#!" data-toggle="collapse" data-target="#navProfile" aria-expanded="false" aria-controls="navProfile">
                            <i class="nav-icon fe fe-user mr-2"></i>User
                        </a>
                        <div id="navProfile" class="collapse  <?= ($activePage==='admin-instructor' || $activePage==='admin-students')?'show':'';?>" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($activePage==='admin-instructor')?'active':'';?>" href="admin-instructor.php">Instructor
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($activePage==='admin-students')?'active':'';?>" href="admin-students.php">Students</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="#!" data-toggle="collapse" data-target="#navCMS" aria-expanded="false" aria-controls="navCMS">
                            <i class="nav-icon fe fe-book-open mr-2"></i>CMS
                        </a>
                        <div id="navCMS" class="collapse <?= ($activePage==='admin-cms-overview' || $activePage==='admin-cms-post' || $activePage==='admin-cms-post-new'|| $activePage==='admin-cms-post-category')?'show':'';?>" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($activePage==='admin-cms-overview')?'active':'';?>" href="admin-cms-overview.php">Overview
                                    </a>
                                </li>
                                <li class="nav-item">
                                
                                    <a class="nav-link <?= ($activePage==='admin-cms-post')?'active':'';?>" href="admin-cms-post.php">All Post
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($activePage==='admin-cms-post-new')?'active':'';?>" href="admin-cms-post-new.php">New Post
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($activePage==='admin-cms-post-category')?'active':'';?>" href="admin-cms-post-category.php"> Category</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="#!" data-toggle="collapse" data-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                            <i class="nav-icon fe fe-lock mr-2"></i>Authentication
                        </a>
                        <div id="navAuthentication" class="collapse " data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="../sign-in.php">Sign In
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="../sign-up.php">Sign Up</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="../forget-password.php"> Forget Password</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="notification-history.php"> Notifications</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="../404-error.php"> 404 Error </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="nav-divider">
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Apps </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="chat-app.php">
                            <i class="nav-icon fe fe-message-square mr-2"></i>Chat <span class="badge badge-warning ml-2">New</span>
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item ">
                        <div class="nav-divider">
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item ">
                        <div class="navbar-heading">Features </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="#!">
                            <i class="nav-icon fe fe-help-circle mr-2"></i>Help Center <span class="badge badge-success ml-2">Pro</span>
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="#!" data-toggle="collapse" data-target="#navSiteSetting" aria-expanded="false" aria-controls="navSiteSetting">
                            <i class="nav-icon fe fe-settings mr-2"></i>Site Setting
                        </a>
                        <div id="navSiteSetting" class="collapse" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="setting-general.php">General
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="setting-google.php">Google
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="setting-social.php">Social
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="setting-social-login.php"> Social Login
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="setting-payment.php"> Payment
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="setting-smpt.php"> SMPT
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="#!" data-toggle="collapse" data-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                            <i class="nav-icon fe fe-corner-left-down mr-2"></i>Menu Level
                        </a>
                        <div id="navMenuLevel" class="collapse" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="#!" data-toggle="collapse" data-target="#navMenuLevelSecond" aria-expanded="false" aria-controls="navMenuLevelSecond">
                                        Two Level
                                    </a>
                                    <div id="navMenuLevelSecond" class="collapse" data-parent="#navMenuLevel">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link " href="#!">NavItem 1
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="#!">NavItem 2
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#!" data-toggle="collapse" data-target="#navMenuLevelThree" aria-expanded="false" aria-controls="navMenuLevelThree">
                                        Three Level
                                    </a>
                                    <div id="navMenuLevelThree" class="collapse" data-parent="#navMenuLevel">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link " href="#!" data-toggle="collapse" data-target="#navMenuLevelThreeOne" aria-expanded="false" aria-controls="navMenuLevelThreeOne">NavItem 1
                                                </a>
                                                <div id="navMenuLevelThreeOne" class="collapse" data-parent="#navMenuLevelThree">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link " href="#!">NavChild Item 1
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="#!">Nav Item 2
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item ">
                        <div class="nav-divider">
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item ">
                        <div class="navbar-heading">Documentation </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item ">
                        <a class="nav-link " href="../../docs/index.php">
                            <i class="nav-icon fe fe-clipboard mr-2"></i>Documentation
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item ">
                        <a class="nav-link " href="../../docs/changelog.php">
                            <i class="nav-icon fe fe-git-pull-request mr-2"></i>Changelog <span class="badge badge-primary ml-2">1.0.2</span>
                        </a>
                    </li>
                </ul>
                <!-- Card -->
                <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
                    <div class="card-body py-6">
                        <img src="../../assets/images/background/giftbox.png" alt="">
                        <div class="mt-4">
                            <h5 class="text-white">Unlimited Access</h5>
                            <p class="text-white-50 font-size-xs">Upgrade your plan from a Free trial, to select ‘Business Plan’. Start Now </p>
                            <a href="#!" class="btn btn-white btn-sm mt-2">Upgrade Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- sidebar -->




        <!-- Page Content -->
        <div id="page-content">
            <div class="header">

                <!-- navbar -->
                <nav class="navbar-default navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#!"><i class="fe fe-menu"></i></a>
                    <div class="ml-lg-3 d-none d-md-none d-lg-block">
                        <form class="d-flex align-items-center">
                            <span class="position-absolute pl-3 search-icon">
                                <i class="fe fe-search"></i>
                            </span>
                            <input type="search" class="form-control form-control-sm  pl-6" placeholder="Search Entire Dashboard" />
                        </form>
                    </div>
                    <ul class="navbar-nav navbar-right-wrap ml-auto  d-flex nav-top-wrap ">
                        <li class="dropdown stopevent">
                            <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted" href="#!" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-bell"> </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg  " aria-labelledby="dropdownNotification">
                                <div class="border-bottom px-3 pb-3 align-items-center">
                                    <span class="h4 mb-0">Notifications</span>
                                    <a href="# " class="text-muted"><span class="align-middle"><i class="fe fe-settings mr-1"></i></span></a>
                                </div>
                                <!-- List group -->
                                <ul class="list-group list-group-flush notification-list-scroll">
                                    <!-- List group item -->
                                    <li class="list-group-item bg-light">
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex">
                                                    <img src="../../assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
                                                    <div class="ml-3">
                                                        <h5 class="font-weight-bold mb-1">Kristin Watson:</h5>
                                                        <p class="mb-3">Krisitn Watsan like your comment on course Javascript Introduction!
                                                        </p>
                                                        <span class=" font-size-xs text-muted">
                                                            <span><span class="fe fe-thumbs-up text-success mr-1"></span>2 hours ago,</span>
                                                            <span class="ml-1">2:19 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a class="stretched-link" href="#!"></a>
                                            </div>
                                            <div class="col-auto text-center">
                                                <a href="#!" class="badge-dot badge-info " data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as read">
                                                </a>
                                                <div>
                                                    <a href="#!" class=" bg-transparent" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
                                                        <i class="fe fe-x text-muted"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- list group item -->
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex">
                                                    <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle">
                                                    <div class="ml-3">
                                                        <h5 class="font-weight-bold mb-1">Brooklyn Simmons</h5>
                                                        <p class="mb-3">Just launched a new Courses React for Beginner.</p>
                                                        <span class=" font-size-xs text-muted">
                                                            <span><span class="fe fe-thumbs-up text-success mr-1"></span>Oct 9,</span>
                                                            <span class="ml-1">1:20 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a class="stretched-link" href="#!"></a>
                                            </div>
                                            <div class="col-auto text-center">
                                                <a href="#!" class="badge-dot badge-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as unread">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- list group item -->
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex">
                                                    <img src="../../assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle">
                                                    <div class="ml-3">
                                                        <h5 class="font-weight-bold mb-1">Jenny Wilson</h5>
                                                        <p class="mb-3">Krisitn Watsan like your comment on course Javascript Introduction!</p>
                                                        <span class=" font-size-xs text-muted">
                                                            <span><span class="fe fe-thumbs-up text-info mr-1"></span>Oct 9,</span>
                                                            <span class="ml-1">1:56 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a class="stretched-link" href="#!"></a>
                                            </div>
                                            <div class="col-auto text-center">
                                                <a href="#!" class="badge-dot badge-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as unread">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- list group item -->
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex">
                                                    <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle">
                                                    <div class="ml-3">
                                                        <h5 class="font-weight-bold mb-1">Sina Ray</h5>
                                                        <p class="mb-3">You earn new certificate for complete the Javascript Beginner course.</p>
                                                        <span class=" font-size-xs text-muted">
                                                            <span><span class="fe fe-award text-warning mr-1"></span>Oct 9,</span>
                                                            <span class="ml-1">1:56 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a class="stretched-link" href="#!"></a>
                                            </div>
                                            <div class="col-auto text-center">
                                                <a href="#!" class="badge-dot badge-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as unread">
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="border-top px-3 pt-3 pb-0">
                                    <a href="notification-history.php" class="text-link font-weight-semi-bold">See all
                                        Notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown ml-2">
                            <a class="rounded-circle " href="#!" role="button" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownUser">
                                <div class="dropdown-item">
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle">
                                        </div>
                                        <div class="ml-3 lh-1">
                                            <h5 class="mb-1" id="adminName">
                                                <?php
                                                if (isset($_SESSION)) {
                                                    echo $_SESSION['admin_name'];
                                                }
                                                ?>
                                            </h5>
                                            <p class="mb-0 text-muted">
                                                <?php
                                                if (isset($_SESSION)) {
                                                    echo $_SESSION['admin_email'];
                                                };
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li class="dropdown-submenu dropleft-lg">
                                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#!">
                                            <i class="fe fe-circle mr-2"></i>Status
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="badge-dot bg-success mr-2"></span>Online
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="badge-dot bg-secondary mr-2"></span>Offline
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="badge-dot bg-warning mr-2"></span>Away
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="badge-dot bg-danger mr-2"></span>Busy
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="./admin-profile-edit.php">
                                            <i class="fe fe-user mr-2"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../student-subscriptions.php">
                                            <i class="fe fe-star mr-2"></i>Subscription
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <i class="fe fe-settings mr-2"></i>Settings
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="../../logout.php">
                                            <i class="fe fe-power mr-2"></i>Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">


    <!-- Libs CSS -->
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Simply beautiful open source icons -->
    <link href="assets/fonts/feather/feather.css" rel="stylesheet" />
    <!-- Official open source SVG icon library for Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.1/font/bootstrap-icons.min.css" integrity="sha512-YBSrHBAMjFhWHodf0RF58XB/x9lmuwBtyJv1LWDHQa1nOaWNXfG3Etc/lEXfW+qBx8ne79JnzccDs59je/ccVA==" crossorigin="anonymous" />
    <!-- dragula will allow the user to drag an element in any of the containers and drop it in any other container in the list -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.6.6/dragula.min.css" integrity="sha512-49xW99xceMN8dDoWaoCaXvuVMjnUctHv/jOlZxzFSMJYhqDZmSF/UnM6pLJjQu0YEBLSdO1DP0er6rUdm8/VqA==" crossorigin="anonymous" />

    <!-- <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" /> -->
    <!-- MaterialDesign web font, icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css" integrity="sha512-vIgFb4o1CL8iMGoIF7cYiEVFrel13k/BkTGvs0hGfVnlbV6XjAA0M0oEHdWqGdAVRTDID3vIZPOHmKdrMAUChA==" crossorigin="anonymous" />

    <!-- Lightweight, robust, elegant syntax highlighting. A spin-off project from Dabblet. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.23.0/themes/prism.min.css" integrity="sha512-tN7Ec6zAFaVSG3TpNAKtk4DOHNpSwKHxxrsiw4GHKESGPs5njn/0sMCUMl2svV4wo4BK/rCP7juYz+zx+l6oeQ==" crossorigin="anonymous" />

    <!-- Handles drag and drop of files for you. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" />

    <!-- Lightbox and modal dialog plugin. Can display inline HTML, iframes (YouTube video, Vimeo, Google Maps), or an image gallery. Animation effects are added with CSS3 transitions. For jQuery or Zepto. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" integrity="sha512-nIm/JGUwrzblLex/meoxJSPdAKQOe2bLhnrZ81g5Jbh519z8GFJIWu87WAhBH+RAyGbM4+U3S2h+kL5JoV6/wA==" crossorigin="anonymous" />

    <!-- Bootstrap-select is a jQuery plugin that overhauls select elements to improve their appearance and expand their functionality. -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/magnific-popup.min.css" integrity="sha512-nIm/JGUwrzblLex/meoxJSPdAKQOe2bLhnrZ81g5Jbh519z8GFJIWu87WAhBH+RAyGbM4+U3S2h+kL5JoV6/wA==" crossorigin="anonymous" />

    <!-- lightweight, efficient Tags input component in Vanilla JS / React / Angular [super customizable, tiny size & top performance -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.1.1/tagify.min.css" integrity="sha512-PmDlF8+NwANjpP2Kc1EqXOUCtV0bSz1mr5HC9zii3CxtHPDKGHsioVf+JFBqLItNJol0S9A+TXIjnG626ZxUHQ==" crossorigin="anonymous" />

    <!-- Vanilla javascript slider for all purposes, inspired by Owl Carousel. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.min.css" integrity="sha512-06CZo7raVnbbD3BlY8/hGUoUCuhk8sTdVGV3m3nuh9i2R+UmkLbLRTE/My8TuJ3ALbDulhBObJQWtOUt0mXzNQ==" crossorigin="anonymous" />


    <!-- Vanilla JS Tooltip Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/2.5.4/tippy.css" integrity="sha512-wYhtIFU+mDV48662uSmS8BA6uIuSRXB15B014+WdZgtU1Umfn/v8+Yq3hidRunKqTBmhBijyyuqSzCxmj6KlTg==" crossorigin="anonymous" />





    <title>Geeks Academy by Anurag</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-default">
        <div class="container-fluid px-0">
            <a class="navbar-brand" href="./"><img src="assets/images/brand/logo/logo.svg" alt="" /></a>


            <?php if (isset($_SESSION['is_login'])) { ?>
                <!-- Mobile view nav wrap -->
                <ul class="navbar-nav navbar-right-wrap ml-auto d-lg-none d-flex nav-top-wrap">
                    <li class="dropdown stopevent">
                        <a class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary" href="#!" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-bell"> </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow" aria-labelledby="dropdownNotification">
                            <div>
                                <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                    <span class="h5 mb-0">Notifications</span>
                                    <a href="# " class="text-muted"><span class="align-middle"><i class="fe fe-settings mr-1"></i></span></a>
                                </div>
                                <ul class="list-group list-group-flush notification-list-scroll">
                                    <li class="list-group-item bg-light">
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex">
                                                    <img src="assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
                                                    <div class="ml-3">
                                                        <h5 class="font-weight-bold mb-1">Kristin Watson:</h5>
                                                        <p class="mb-3">
                                                            Krisitn Watsan like your comment on course Javascript
                                                            Introduction!
                                                        </p>
                                                        <span class="font-size-xs text-muted">
                                                            <span><span class="fe fe-thumbs-up text-success mr-1"></span>2
                                                                hours ago,</span>
                                                            <span class="ml-1">2:19 PM</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <a class="stretched-link" href="#!"></a>
                                            </div>
                                            <div class="col-auto text-center">
                                                <a href="#!" class="badge-dot badge-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as read">
                                                </a>
                                                <div>
                                                    <a href="#!" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
                                                        <i class="fe fe-x text-muted"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex">
                                                    <img src="assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle" />
                                                    <div class="ml-3">
                                                        <h5 class="font-weight-bold mb-1">Brooklyn Simmons</h5>
                                                        <p class="mb-3">
                                                            Just launched a new Courses React for Beginner.
                                                        </p>
                                                        <span class="font-size-xs text-muted">
                                                            <span><span class="fe fe-thumbs-up text-success mr-1"></span>Oct
                                                                9,</span>
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
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex">
                                                    <img src="assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle" />
                                                    <div class="ml-3">
                                                        <h5 class="font-weight-bold mb-1">Jenny Wilson</h5>
                                                        <p class="mb-3">
                                                            Krisitn Watsan like your comment on course Javascript
                                                            Introduction!
                                                        </p>
                                                        <span class="font-size-xs text-muted">
                                                            <span><span class="fe fe-thumbs-up text-info mr-1"></span>Oct
                                                                9,</span>
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
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">
                                                <div class="d-flex">
                                                    <img src="assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle" />
                                                    <div class="ml-3">
                                                        <h5 class="font-weight-bold mb-1">Sina Ray</h5>
                                                        <p class="mb-3">
                                                            You earn new certificate for complete the Javascript
                                                            Beginner course.
                                                        </p>
                                                        <span class="font-size-xs text-muted">
                                                            <span><span class="fe fe-award text-warning mr-1"></span>Oct
                                                                9,</span>
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
                                    <a href="pages/dashboard/notification-history.php" class="text-link font-weight-semi-bold">See all Notifications</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown ml-2">
                        <a class="rounded-circle" href="#!" role="button" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow" aria-labelledby="dropdownUser">
                            <div class="dropdown-item">
                                <div class="d-flex">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                    </div>
                                    <div class="ml-3 lh-1">
                                        <h5 class="mb-1">
                                            <?php
                                            if (isset($_SESSION)) {
                                                echo $_SESSION['stuName'];
                                            };
                                            ?>
                                        </h5>
                                        <p class="mb-0 text-muted">
                                            <?php
                                            if (isset($_SESSION)) {
                                                echo $_SESSION['stuSignEmail'];
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
                                    <a class="dropdown-item" href="pages/profile-edit.php">
                                        <i class="fe fe-user mr-2"></i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages/student-subscriptions.php">
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
                                    <a class="dropdown-item" href="./logout.php">
                                        <i class="fe fe-power mr-2"></i>Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            <?php } ?>
            <!-- Button -->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar mt-0"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="navbarBrowse" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            Browse
                        </a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarBrowse">
                            <li class="dropdown-submenu dropright">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#!">
                                    Web Development
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Bootstrap</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            React
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            GraphQl</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Gatsby</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Grunt</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Svelte</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Meteor</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            php5</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Angular</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropright">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#!">
                                    Design
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Graphic Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Illustrator
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            UX / UI Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Figma Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Adobe XD</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Sketch</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Icon Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/course/course-category.php">
                                            Photoshop</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="pages/course/course-category.php" class="dropdown-item">
                                    Mobile App
                                </a>
                            </li>
                            <li>
                                <a href="pages/course/course-category.php" class="dropdown-item">
                                    IT Software
                                </a>
                            </li>
                            <li>
                                <a href="pages/course/course-category.php" class="dropdown-item">
                                    Marketing
                                </a>
                            </li>
                            <li>
                                <a href="pages/course/course-category.php" class="dropdown-item">
                                    Music
                                </a>
                            </li>
                            <li>
                                <a href="pages/course/course-category.php" class="dropdown-item">
                                    Life Style
                                </a>
                            </li>
                            <li>
                                <a href="pages/course/course-category.php" class="dropdown-item">
                                    Business
                                </a>
                            </li>
                            <li>
                                <a href="pages/course/course-category.php" class="dropdown-item">
                                    Photography
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="navbarLanding" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Landings
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarLanding">
                            <li>
                                <h4 class="dropdown-header">Landings</h4>
                            </li>
                            <li>
                                <a href="pages/landings/landing-courses.php" class="dropdown-item">
                                    Courses
                                </a>
                            </li>
                            <li>
                                <a href="pages/landings/course-lead.php" class="dropdown-item">
                                    Lead Course
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="navbarPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarPages">
                            <li>
                                <a class="dropdown-item" href="pages/course-single.php">
                                    Course Single
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/course-single-v2.php">
                                    Course Single v2
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/course-resume.php">
                                    Course Resume
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/course/course-category.php">
                                    Course Category
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/course-checkout.php">
                                    Course Checkout
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/course-filter-list.php">
                                    Course List/Grid
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/add-course.php">
                                    Add New Course
                                </a>
                            </li>
                            <li class="dropdown-submenu dropright">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#!">
                                    Paths
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="pages/course-path.php" class="dropdown-item">
                                            Browse Path
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pages/course-path-single.php" class="dropdown-item">
                                            Path Single
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <hr class="mx-3" />
                            </li>

                            <li class="dropdown-submenu dropright">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#!">
                                    Blog
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="pages/blog.php">
                                            Listing</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/blog-single.php">
                                            Article
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/blog-category.php">
                                            Category</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/blog-sidebar.php">
                                            Sidebar</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/about.php">
                                    About
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#!">
                                    Help Center <span class="badge badge-success ml-1">Pro</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/pricing.php">
                                    Pricing
                                </a>
                            </li>
                            <li class="dropdown-submenu dropright">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#!">
                                    Specialty
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="pages/coming-soon.php">
                                            Coming Soon
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/404-error.php">
                                            Error 404
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/maintenance-mode.php">
                                            Maintenance Mode
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/terms-condition-page.php">
                                            Terms & Conditions
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="navbarAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Accounts
                        </a>
                        <ul class="dropdown-menu dropdown-menu-arrow" aria-labelledby="navbarAccount">
                            <li>
                                <h4 class="dropdown-header">Accounts</h4>
                            </li>
                            <li class="dropdown-submenu dropright">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#!">
                                    Instructor
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="text-wrap">
                                        <h5 class="dropdown-header text-dark">Instructor</h5>
                                        <p class="dropdown-text mb-0">
                                            Instructor dashboard for manage courses and earning.
                                        </p>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/dashboard-instructor.php">
                                            Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/instructor-profile.php">
                                            Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/instructor-courses.php">
                                            My Courses
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/instructor-order.php">
                                            Orders</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/instructor-reviews.php">
                                            Reviews</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/instructor-students.php">
                                            Students</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/instructor-payouts.php">
                                            Payouts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/instructor-earning.php">
                                            Earning</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropright">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#!">
                                    Students
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="text-wrap">
                                        <h5 class="dropdown-header text-dark">Students</h5>
                                        <p class="dropdown-text mb-0">
                                            Students dashboard to manage your courses and subscriptions.
                                        </p>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/dashboard-student.php">
                                            Dashboard</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/student-subscriptions.php">
                                            Subscriptions
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/payment-method.php">
                                            Payments</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/billing-info.php">
                                            Billing Info</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/invoice.php">
                                            Invoice</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/invoice-details.php">
                                            Invoice Details</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/dashboard-student.php">
                                            Bookmarked</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/dashboard-student.php">
                                            My Path</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu dropright">
                                <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#!">
                                    Admin
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="text-wrap">
                                        <h5 class="dropdown-header text-dark">Master Admin</h5>
                                        <p class="dropdown-text mb-0">
                                            Master admin dashboard to manage courses, user, site setting
                                            , and work with amazing apps.
                                        </p>
                                    </li>
                                    <li>
                                        <hr class="mx-3" />
                                    </li>
                                    <li class="px-3">
                                        <a href="pages/dashboard/admin-dashboard.php" class="btn btn-sm btn-primary btn-block">Go to Dashboard</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <hr class="mx-3" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/sign-in.php">
                                    Sign In
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/sign-up.php">
                                    Sign Up
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/forget-password.php">
                                    Forgot Password
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/profile-edit.php">
                                    Edit Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/security.php">
                                    Security
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/social-profile.php">
                                    Social Profiles
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/notifications.php">
                                    Notifications
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/profile-privacy.php">
                                    Privacy Settings
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/delete-profile.php">
                                    Delete Profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="pages/linked-accounts.php">
                                    Linked Accounts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe fe-more-horizontal font-size-lg"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                            <div class="list-group">
                                <a class="list-group-item list-group-item-action border-0" href="docs/index.php">
                                    <div class="d-flex align-items-center">
                                        <i class="fe fe-file-text font-size-lg text-primary"></i>
                                        <div class="ml-3">
                                            <h5 class="mb-0">Documentations</h5>
                                            <p class="mb-0 font-size-xs">
                                                Browse the all documentation
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <a class="list-group-item list-group-item-action border-0" href="docs/changelog.php">
                                    <div class="d-flex align-items-center">
                                        <i class="fe fe-layers font-size-lg text-primary"></i>
                                        <div class="ml-3">
                                            <h5 class="mb-0">
                                                Changelog <span class="text-primary ml-1">v1.0.2</span>
                                            </h5>
                                            <p class="mb-0 font-size-xs">See what's new</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>

                <form class="mt-3 mt-lg-0 ml-lg-3 d-flex align-items-center" action="./search.php">
                    <span class="position-absolute pl-3 search-icon">
                        <i class="fe fe-search"></i>
                    </span>
                    <input type="search" class="form-control pl-6" name="q" placeholder="Search Courses" value="<?php if (isset($_GET['q'])) {
                                                                                                                    echo $_GET['q'];
                                                                                                                } ?>" />
                </form>
                <!-- signin modal start from here -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelOne" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="">
                                    <h1 class="mb-1 font-weight-bold">Sign in</h1>
                                    <span>Don’t have an account? <a href="sign-up.php" class="ml-1">Sign up</a></span>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id=signInForm>
                                    <!-- Username -->
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" id="signInEmail" class="form-control" name="email" placeholder="Email address here" required="">
                                    </div>
                                    <!-- Password -->
                                    <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" id="signInPassword" class="form-control" name="password" placeholder="**************" required="">
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="d-lg-flex justify-content-between align-items-center mb-2">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="rememberme">
                                            <label class="custom-control-label " for="rememberme">Remember me</label>
                                        </div>
                                        <div>
                                            <a href="forget-password.php">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Button -->

                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        <div id="signStatus" class="text-center"></div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- signin modal end from here -->


                <!-- signup modal start from here -->
                <div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelOne" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelOne">
                                    <div class="">
                                        <h1 class="mb-1 font-weight-bold">Sign up</h1>
                                        <span>Already have an account?
                                            <a href="sign-in.php" class="ml-1">Sign in</a></span>
                                    </div>

                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST" id="addstuform">
                                    <!-- Username -->
                                    <div class="form-group">
                                        <label for="username" class="form-label">User Name</label>
                                        <input type="text" id="username" class="form-control" name="username" placeholder="User Name">
                                        <strong id="namestatus" class="text-danger"></strong>
                                    </div>
                                    <!-- Email -->
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" id="stuemail" class="form-control" name="email" placeholder="Email address here">
                                        <strong id="emailstatus" class="text-danger"></strong>
                                    </div>
                                    <!-- Password -->
                                    <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" id="password" class="form-control" name="password" placeholder="**************">
                                        <strong id="passwordstatus" class="text-danger"></strong>

                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="agreeCheck" required="">
                                            <label class="custom-control-label" for="agreeCheck"><span>I agree to the <a href="terms-condition-page.php">Terms of
                                                        Service </a>and
                                                    <a href="terms-condition-page.php">Privacy
                                                        Policy.</a></span></label>
                                        </div>
                                    </div>
                                    <div>

                                        <!-- Button -->
                                        <button type="submit" class="btn btn-primary btn-block" id="signupbtn">
                                            Create Free Account
                                        </button>
                                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Send message</button> -->
                                    </div>
                                    <span class="addstatus"></span>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- signup modal end from here -->
                <?php

                if (isset($_SESSION['is_login'])) {

                ?>
                    <ul class="navbar-nav navbar-right-wrap ml-auto d-none d-lg-block">
                        <li class="dropdown d-inline-block stopevent">
                            <a class="btn btn-light btn-icon rounded-circle text-muted indicator indicator-primary" href="#!" role="button" id="dropdownNotificationSecond" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-bell"> </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right" aria-labelledby="dropdownNotificationSecond">
                                <div>
                                    <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                        <span class="h5 mb-0">Notifications</span>
                                        <a href="# " class="text-muted"><span class="align-middle"><i class="fe fe-settings mr-1"></i></span></a>
                                    </div>
                                    <ul class="list-group list-group-flush notification-list-scroll">
                                        <li class="list-group-item bg-light">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="d-flex">
                                                        <img src="assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
                                                        <div class="ml-3">
                                                            <h5 class="font-weight-bold mb-1">Kristin Watson:</h5>
                                                            <p class="mb-3">
                                                                Krisitn Watsan like your comment on course
                                                                Javascript Introduction!
                                                            </p>
                                                            <span class="font-size-xs text-muted">
                                                                <span><span class="fe fe-thumbs-up text-success mr-1"></span>2
                                                                    hours ago,</span>
                                                                <span class="ml-1">2:19 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a class="stretched-link" href="#!"></a>
                                                </div>
                                                <div class="col-auto text-center">
                                                    <a href="#!" class="badge-dot badge-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as read">
                                                    </a>
                                                    <div>
                                                        <a href="#!" class="bg-transparent" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove">
                                                            <i class="fe fe-x text-muted"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="d-flex">
                                                        <img src="assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle" />
                                                        <div class="ml-3">
                                                            <h5 class="font-weight-bold mb-1">
                                                                Brooklyn Simmons
                                                            </h5>
                                                            <p class="mb-3">
                                                                Just launched a new Courses React for Beginner.
                                                            </p>
                                                            <span class="font-size-xs text-muted">
                                                                <span><span class="fe fe-thumbs-up text-success mr-1"></span>Oct
                                                                    9,</span>
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
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="d-flex">
                                                        <img src="assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle" />
                                                        <div class="ml-3">
                                                            <h5 class="font-weight-bold mb-1">Jenny Wilson</h5>
                                                            <p class="mb-3">
                                                                Krisitn Watsan like your comment on course
                                                                Javascript Introduction!
                                                            </p>
                                                            <span class="font-size-xs text-muted">
                                                                <span><span class="fe fe-thumbs-up text-info mr-1"></span>Oct
                                                                    9,</span>
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
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="d-flex">
                                                        <img src="assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle" />
                                                        <div class="ml-3">
                                                            <h5 class="font-weight-bold mb-1">Sina Ray</h5>
                                                            <p class="mb-3">
                                                                You earn new certificate for complete the Javascript
                                                                Beginner course.
                                                            </p>
                                                            <span class="font-size-xs text-muted">
                                                                <span><span class="fe fe-award text-warning mr-1"></span>Oct
                                                                    9,</span>
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
                                        <a href="pages/dashboard/notification-history.php" class="text-link font-weight-semi-bold">See all Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown ml-2 d-inline-block">
                            <a class="rounded-circle" href="#!" role="button" id="dropdownUserProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownUserProfile">
                                <div class="dropdown-item">
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar" src="assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                        </div>
                                        <div class="ml-3 lh-1">
                                            <h5 class="mb-1">
                                                <?php
                                                if (isset($_SESSION)) {
                                                    echo $_SESSION['stuName'];
                                                };
                                                ?>
                                            </h5>
                                            <p class="mb-0 text-muted">
                                                <?php
                                                if (isset($_SESSION)) {
                                                    echo $_SESSION['stuSignEmail'];
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
                                        <a class="dropdown-item" href="pages/profile-edit.php">
                                            <i class="fe fe-user mr-2"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages/student-subscriptions.php">
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
                                        <a class="dropdown-item" href="./logout.php">
                                            <i class="fe fe-power mr-2"></i>Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                <?php  } else { ?>
                    <div class="ml-auto mt-3 mt-lg-0">
                        <!-- <a href="#" class="btn btn-white shadow-sm mr-1">Sign In</a> -->
                        <button type="button" class="btn btn-white shadow-sm mr-1" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Sign In</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModa2" data-whatever="@getbootstrap">Sign Up</button>
                        <!-- <a href="#" class="btn btn-primary">Sign Up</a> -->
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </nav>
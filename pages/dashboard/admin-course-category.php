<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codescandy.com/geeks/pages/dashboard/admin-course-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:33:05 GMT -->
<head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../../assets/images/favicon/favicon.ico">


<!-- Libs CSS -->

<link href="../../assets/fonts/feather/feather.css" rel="stylesheet" />
<link href="../../assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
<link href="../../assets/libs/dragula/dist/dragula.min.css" rel="stylesheet" />
<link href="../../assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
<link href="../../assets/libs/prismjs/themes/prism.css" rel="stylesheet" />
<link href="../../assets/libs/dropzone/dist/dropzone.css" rel="stylesheet" />
<link href="../../assets/libs/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
<link href="../../assets/libs/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="../../assets/libs/%40yaireo/tagify/dist/tagify.css" rel="stylesheet">
<link href="../../assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
<link href="../../assets/libs/tippy.js/dist/tippy.css" rel="stylesheet">




<!-- Theme CSS -->
<link rel="stylesheet" href="../../assets/css/theme.min.css">
    <title>Course Category | Geeks - Academy Admin Template</title>
</head>

<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="../../index.html"><img src="../../assets/images/brand/logo/logo-inverse.svg" alt="" /></a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link " href="#!" data-toggle="collapse" data-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
                            <i class="nav-icon fe fe-home mr-2"></i>Dashboard
                        </a>
                        <div id="navDashboard" class="collapse" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-dashboard.html">
        Overview
      </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard-analytics.html">
        Analytics <span class="badge badge-warning ml-2">New</span>
      </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#!" data-toggle="collapse" data-target="#navCourses" aria-expanded="true" aria-controls="navCourses">
                            <i class="nav-icon fe fe-book mr-2"></i>Courses
                        </a>
                        <div id="navCourses" class="collapse show" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-course-overview.html">All Courses
                  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="admin-course-category.html">Courses Category
                  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-course-category-single.html">
                    Category Single</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navProfile" aria-expanded="false" aria-controls="navProfile">
                            <i class="nav-icon fe fe-user mr-2"></i>User
                        </a>
                        <div id="navProfile" class="collapse" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-instructor.html">Instructor
                  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-students.html">Students</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navCMS" aria-expanded="false" aria-controls="navCMS">
                            <i class="nav-icon fe fe-book-open mr-2"></i>CMS
                        </a>
                        <div id="navCMS" class="collapse" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-cms-overview.html">Overview
                  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-cms-post.html">All Post </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-cms-post-new.html">New Post
                  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-cms-post-category.html">
                    Category</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                            <i class="nav-icon fe fe-lock mr-2"></i>Authentication
                        </a>
                        <div id="navAuthentication" class="collapse" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="../sign-in.html">Sign In </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../sign-up.html">Sign Up</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../forget-password.html">
                    Forget Password</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="notification-history.html">
                    Notifications</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../404-error.html"> 404 Error </a>
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
                        <a class="nav-link " href="chat-app.html">
                            <i class="nav-icon fe fe-message-square mr-2"></i>Chat <span class="badge badge-warning ml-2">New</span>
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="nav-divider"></div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Features</div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="#!">
                            <i class="nav-icon fe fe-help-circle mr-2"></i>Help Center
                            <span class="badge badge-success ml-2">Pro</span>
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navSiteSetting" aria-expanded="false" aria-controls="navSiteSetting">
                            <i class="nav-icon fe fe-settings mr-2"></i>Site Setting
                        </a>
                        <div id="navSiteSetting" class="collapse" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="setting-general.html">General </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="setting-google.html">Google </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="setting-social.html">Social </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="setting-social-login.html">
                    Social Login
                  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="setting-payment.html">
                    Payment
                  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="setting-smpt.html"> SMPT </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                            <i class="nav-icon fe fe-corner-left-down mr-2"></i>Menu Level
                        </a>
                        <div id="navMenuLevel" class="collapse" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navMenuLevelSecond" aria-expanded="false" aria-controls="navMenuLevelSecond">
                    Two Level
                  </a>
                                    <div id="navMenuLevelSecond" class="collapse" data-parent="#navMenuLevel">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#!">NavItem 1 </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#!">NavItem 2 </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navMenuLevelThree" aria-expanded="false" aria-controls="navMenuLevelThree">
                    Three Level
                  </a>
                                    <div id="navMenuLevelThree" class="collapse" data-parent="#navMenuLevel">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navMenuLevelThreeOne" aria-expanded="false" aria-controls="navMenuLevelThreeOne">NavItem 1
                        </a>
                                                <div id="navMenuLevelThreeOne" class="collapse" data-parent="#navMenuLevelThree">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!">NavChild Item 1
                              </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#!">Nav Item 2 </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="nav-divider"></div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Documentation</div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item ">
                        <a class="nav-link " href="../../docs/index.html">
                            <i class="nav-icon fe fe-clipboard mr-2"></i>Documentation
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item ">
                        <a class="nav-link " href="../../docs/changelog.html">
                            <i class="nav-icon fe fe-git-pull-request mr-2"></i>Changelog <span class="badge badge-primary ml-2">1.0.2</span>
                        </a>
                    </li>
                </ul>
                <!-- Card -->
                <div class="card bg-dark-primary shadow-none text-center mx-4 my-8">
                    <div class="card-body py-6">
                        <img src="../../assets/images/background/giftbox.png" alt="" />
                        <div class="mt-4">
                            <h5 class="text-white">Unlimited Access</h5>
                            <p class="text-white-50 font-size-xs">
                                Upgrade your plan from a Free trial, to select ‘Business Plan’. Start Now
                            </p>
                            <a href="#!" class="btn btn-white btn-sm mt-2">Upgrade Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Page Content -->
        <div id="page-content">
            <div class="header">
                <!-- Navbar -->
                <nav class="navbar-default navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#!"><i class="fe fe-menu"></i></a>
                    <div class="ml-lg-3 d-none d-md-none d-lg-block">
                        <!-- Form -->
                        <form class="d-flex align-items-center">
                            <span class="position-absolute pl-3 search-icon">
                <i class="fe fe-search"></i>
              </span>
                            <input type="search" class="form-control form-control-sm  pl-6" placeholder="Search Entire Dashboard" />
                        </form>

                    </div>
                    <!-- Navbar nav -->
                    <ul class="navbar-nav navbar-right-wrap ml-auto d-flex nav-top-wrap">
                        <li class="dropdown stopevent">
                            <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted" href="#!" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-bell"> </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg" aria-labelledby="dropdownNotification">
                                <div>
                                    <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                        <span class="h4 mb-0">Notifications</span>
                                        <a href="# " class="text-muted"><span class="align-middle"><i
                          class="fe fe-settings mr-1"></i></span></a>
                                    </div>
                                    <!-- List group -->
                                    <ul class="list-group list-group-flush notification-list-scroll">
                                        <!-- List group item -->
                                        <li class="list-group-item bg-light">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="d-flex">
                                                        <img src="../../assets/images/avatar/avatar-1.jpg" alt="" class="avatar-md rounded-circle" />
                                                        <div class="ml-3">
                                                            <h5 class="font-weight-bold mb-1">
                                                                Kristin Watson:
                                                            </h5>
                                                            <p class="mb-3">
                                                                Krisitn Watsan like your comment on course Javascript Introduction!
                                                            </p>
                                                            <span class="font-size-xs text-muted">
                                <span><span class="fe fe-thumbs-up text-success mr-1"></span>2 hours ago,
                                                            </span>
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
                                        <!-- List group item -->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="d-flex">
                                                        <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="avatar-md rounded-circle" />
                                                        <div class="ml-3">
                                                            <h5 class="font-weight-bold mb-1">
                                                                Brooklyn Simmons
                                                            </h5>
                                                            <p class="mb-3">
                                                                Just launched a new Courses React for Beginner.
                                                            </p>
                                                            <span class="font-size-xs text-muted">
                                <span><span class="fe fe-thumbs-up text-success mr-1"></span>Oct 9,
                                                            </span>
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
                                        <!-- List group item -->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="d-flex">
                                                        <img src="../../assets/images/avatar/avatar-3.jpg" alt="" class="avatar-md rounded-circle" />
                                                        <div class="ml-3">
                                                            <h5 class="font-weight-bold mb-1">
                                                                Jenny Wilson
                                                            </h5>
                                                            <p class="mb-3">
                                                                Krisitn Watsan like your comment on course Javascript Introduction!
                                                            </p>
                                                            <span class="font-size-xs text-muted">
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
                                        <!-- List group item -->
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="d-flex">
                                                        <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="avatar-md rounded-circle" />
                                                        <div class="ml-3">
                                                            <h5 class="font-weight-bold mb-1">Sina Ray</h5>
                                                            <p class="mb-3">
                                                                You earn new certificate for complete the Javascript Beginner course.
                                                            </p>
                                                            <span class="font-size-xs text-muted">
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
                                        <a href="notification-history.html" class="text-link font-weight-semi-bold">See all
                      Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- List -->
                        <li class="dropdown ml-2">
                            <a class="rounded-circle" href="#!" role="button" id="dropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownUser">
                                <div class="dropdown-item">
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar" src="../../assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                                        </div>
                                        <div class="ml-3 lh-1">
                                            <h5 class="mb-1">Annette Black</h5>
                                            <p class="mb-0 text-muted">annette@geeksui.com</p>
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
                                        <a class="dropdown-item" href="../profile-edit.html">
                                            <i class="fe fe-user mr-2"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../student-subscriptions.html">
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
                                        <a class="dropdown-item" href="../../index.html">
                                            <i class="fe fe-power mr-2"></i>Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Container fluid -->
            <div class="container-fluid p-4">
                <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="border-bottom pb-4 mb-4 d-lg-flex align-items-center justify-content-between">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-1 h2 font-weight-bold">Courses Category</h1>
                                <!-- Breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="admin-dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#!">Courses</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Courses Category
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div>
                                <a href="#!" class="btn btn-primary" data-toggle="modal" data-target="#newCatgory">Add New
                    Category</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card header -->
                            <div class="card-header border-bottom-0">
                                <!-- Form -->
                                <form class="d-flex align-items-center">
                                    <span class="position-absolute pl-3 search-icon">
                      <i class="fe fe-search"></i>
                    </span>
                                    <input type="search" class="form-control pl-6" placeholder="Search Course Category" />
                                </form>
                            </div>
                            <!-- Table -->
                            <div class="table-responsive border-0 overflow-y-hidden">
                                <table class="table mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="checkAll" />
                                                    <label class="custom-control-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th class="border-0">CATEGORY</th>
                                            <th class="border-0">SLUG</th>
                                            <th class="border-0">Course</th>
                                            <th class="border-0">DATE CREATED</th>
                                            <th class="border-0">DATE UPDATED</th>
                                            <th class="border-0">STATUS</th>
                                            <th class="border-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="accordion-toggle collapsed" id="accordion1" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseOne">
                                            <td class="align-middle border-top-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck1" />
                                                    <label class="custom-control-label" for="categoryCheck1"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#!" class="text-inherit position-relative">
                                                    <h5 class="mb-0 text-primary-hover">
                                                        <i class="fe fe-chevron-down font-size-md mr-2 text-muted position-absolute ml-n4 mt-1"></i> Courses
                                                    </h5>
                                                </a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                desgincourse
                                            </td>
                                            <td class="align-middle border-top-0">1</td>
                                            <td class="align-middle border-top-0">
                                                16 Oct, 2020
                                            </td>
                                            <td class="align-middle border-top-0">
                                                16 Nov, 2020
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle border-top-0">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown1"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr id="collapseOne">
                                            <td class="align-middle">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck2" />
                                                    <label class="custom-control-label" for="categoryCheck2"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover ml-3">
                                                        Child Category
                                                    </h5>
                                                </a>
                                            </td>
                                            <td class="align-middle">childcategory</td>
                                            <td class="align-middle">4</td>
                                            <td class="align-middle">16 Oct, 2020</td>
                                            <td class="align-middle">16 Nov, 2020</td>
                                            <td class="align-middle">
                                                <span class="badge-dot badge-warning"></span>
                                            </td>
                                            <td class="text-muted align-middle">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown2"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck3" />
                                                    <label class="custom-control-label" for="categoryCheck3"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Workshop</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle">Workshop</td>
                                            <td class="align-middle">6</td>
                                            <td class="align-middle">16 Oct, 2020</td>
                                            <td class="align-middle">16 Nov, 2020</td>
                                            <td class="align-middle">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown3"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck4" />
                                                    <label class="custom-control-label" for="categoryCheck4"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Tutorial</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle">tutorial</td>
                                            <td class="align-middle">3</td>
                                            <td class="align-middle">16 Oct, 2020</td>
                                            <td class="align-middle">16 Nov, 2020</td>
                                            <td class="align-middle">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown4"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck5" />
                                                    <label class="custom-control-label" for="categoryCheck5"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Company</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle">company</td>
                                            <td class="align-middle">4</td>
                                            <td class="align-middle">16 Oct, 2020</td>
                                            <td class="align-middle">16 Nov, 2020</td>
                                            <td class="align-middle">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown5"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck6" />
                                                    <label class="custom-control-label" for="categoryCheck6"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">
                                                        Technology
                                                    </h5>
                                                </a>
                                            </td>
                                            <td class="align-middle">technology</td>
                                            <td class="align-middle">6</td>
                                            <td class="align-middle">16 Oct, 2020</td>
                                            <td class="align-middle">16 Nov, 2020</td>
                                            <td class="align-middle">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown6"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck7" />
                                                    <label class="custom-control-label" for="categoryCheck7"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Business</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle">business</td>
                                            <td class="align-middle">2</td>
                                            <td class="align-middle">16 Oct, 2020</td>
                                            <td class="align-middle">16 Nov, 2020</td>
                                            <td class="align-middle">
                                                <span class="badge-dot badge-warning"></span>
                                            </td>
                                            <td class="text-muted align-middle">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown7"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck8" />
                                                    <label class="custom-control-label" for="categoryCheck8"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">
                                                        Technology
                                                    </h5>
                                                </a>
                                            </td>
                                            <td class="align-middle">technology</td>
                                            <td class="align-middle">1</td>
                                            <td class="align-middle">16 Oct, 2020</td>
                                            <td class="align-middle">16 Nov, 2020</td>
                                            <td class="align-middle">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown8"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck9" />
                                                    <label class="custom-control-label" for="categoryCheck9"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Business</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle">business</td>
                                            <td class="align-middle">1</td>
                                            <td class="align-middle">16 Oct, 2020</td>
                                            <td class="align-middle">16 Nov, 2020</td>
                                            <td class="align-middle">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown9"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown9">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck10" />
                                                    <label class="custom-control-label" for="categoryCheck10"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Tutorial</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle">tutorial</td>
                                            <td class="align-middle">4</td>
                                            <td class="align-middle">16 Oct, 2020</td>
                                            <td class="align-middle">16 Nov, 2020</td>
                                            <td class="align-middle">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown10"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown10">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="categoryCheck11" />
                                                    <label class="custom-control-label" for="categoryCheck11"></label>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">
                                                    <h5 class="mb-0 text-primary-hover">Workshop</h5>
                                                </a>
                                            </td>
                                            <td class="align-middle">workshop</td>
                                            <td class="align-middle">4</td>
                                            <td class="align-middle">16 Oct, 2020</td>
                                            <td class="align-middle">16 Nov, 2020</td>
                                            <td class="align-middle">
                                                <span class="badge-dot badge-success"></span>
                                            </td>
                                            <td class="text-muted align-middle">
                                                <span class="dropdown dropleft">
                            <a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown11"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown11">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                                <a class="dropdown-item" href="#!"><i class="fe fe-inbox dropdown-item-icon"></i>Moved
                                Draft</a>
                                                <a class="dropdown-item" href="#!"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center d-flex">
                <h4 class="modal-title" id="paymentModalLabel">
                    Add New Payment Method
                </h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
					</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div>
                    <!-- Form -->
                    <form class="form-row mb-4">
                        <div class="form-group col-12 col-md-12 mb-4">
                            <h5 class="mb-3">Credit / Debit card</h5>
                            <!-- Radio button -->
                            <div class="custom-control custom-radio custom-control-inline mr-1">
                                <input type="radio" id="paymentRadioOne" name="paymentRadioOne" class="custom-control-input" />
                                <label class="custom-control-label" for="paymentRadioOne"><img
											src="../../assets/images/creditcard/americanexpress.svg" alt="" /></label>
                            </div>
                            <!-- Radio button -->
                            <div class="custom-control custom-radio custom-control-inline mr-1">
                                <input type="radio" id="paymentRadioTwo" name="paymentRadioOne" class="custom-control-input" />
                                <label class="custom-control-label" for="paymentRadioTwo"><img
											src="../../assets/images/creditcard/mastercard.svg" alt="" /></label>
                            </div>

                            <!-- Radio button -->
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="paymentRadioFour" name="paymentRadioOne" class="custom-control-input" />
                                <label class="custom-control-label" for="paymentRadioFour"><img src="../../assets/images/creditcard/visa.svg"
											alt="" /></label>
                            </div>
                        </div>
                        <!-- Name on card -->
                        <div class="form-group col-12 col-md-4">
                            <label for="nameoncard" class="form-label">Name on card</label>
                            <input id="nameoncard" type="text" class="form-control" name="nameoncard" placeholder="Name" required />
                        </div>
                        <!-- Month -->
                        <div class="form-group col-12 col-md-4">
                            <label class="form-label">Month</label>
                            <select class="selectpicker" data-width="100%">
									<option value="">Month</option>
									<option value="Jan">Jan</option>
									<option value="Feb">Feb</option>
									<option value="Mar">Mar</option>
									<option value="Apr">Apr</option>
									<option value="May">May</option>
									<option value="June">June</option>
									<option value="July">July</option>
									<option value="Aug">Aug</option>
									<option value="Sep">Sep</option>
									<option value="Oct">Oct</option>
									<option value="Nov">Nov</option>
									<option value="Dec">Dec</option>
								</select>
                        </div>
                        <!-- Year -->
                        <div class="form-group col-12 col-md-4">
                            <label class="form-label">Year</label>
                            <select class="selectpicker" data-width="100%">
									<option value="">Year</option>
									<option value="June">2018</option>
									<option value="July">2019</option>
									<option value="August">2020</option>
									<option value="Sep">2021</option>
									<option value="Oct">2022</option>
								</select>
                        </div>
                        <!-- Card number -->
                        <div class="form-group col-md-8 col-12">
                            <label for="cc-mask" class="form-label">Card Number</label>
                            <input type="text" class="form-control" id="cc-mask" data-inputmask="'mask': '9999 9999 9999 9999'" inputmode="numeric" placeholder="xxxx-xxxx-xxxx-xxxx" required />
                        </div>
                        <!-- CVV -->
                        <div class="form-group col-md-4 col-12">
                            <div class="form-group">
                                <label for="cvv" class="form-label">CVV Code
										<i class="fas fa-question-circle ml-1" data-toggle="tooltip" data-placement="top" title=""
											data-original-title="A 3 - digit number, typically printed on the back of a card."></i></label>
                                <input type="password" class="form-control" name="cvv" id="cvv" placeholder="xxx" maxlength="3" inputmode="numeric" required />
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="col-md-6 col-12">
                            <button class="btn btn-primary" type="submit">
									Add New Card
								</button>
                            <button class="btn btn-outline-white" type="button" data-dismiss="modal">
									Close
								</button>
                        </div>
                    </form>
                    <span><strong>Note:</strong> that you can later remove your card at
							the account setting page.</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addSectionModal" tabindex="-1" role="dialog" aria-labelledby="addSectionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addSectionModalLabel">
                    Add New Section
                </h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
        </button>
            </div>
            <div class="modal-body">
                <input class="form-control mb-3" type="text" placeholder="Add new section" />
                <button class="btn btn-primary" type="Button">
            Add New Section
          </button>
                <button class="btn btn-outline-white" data-dismiss="modal" aria-label="Close">
            Close
          </button>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addLectureModal" tabindex="-1" role="dialog" aria-labelledby="addLectureModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="addLectureModalLabel">
                    Add New Lecture
                </h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
        </button>
            </div>
            <div class="modal-body">
                <input class="form-control mb-3" type="text" placeholder="Add new lecture" />
                <button class="btn btn-primary" type="Button">
            Add New Lecture
          </button>
                <button class="btn btn-outline-white" data-dismiss="modal" aria-label="Close">
            Close
          </button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="newCatgory" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="newCatgoryLabel">
                    Create New Category
                </h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fe fe-x-circle"></i></span>
        </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group mb-2">
                        <label class="form-label" for="title">Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Write a Category" id="title" required>
                        <small>Field must contain a unique value</small>
                    </div>
                    <div class="form-group mb-2">
                        <label class="form-label">Slug</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="slug">https://example.com</span>
                            </div>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="slug" placeholder="designcourses" required>
                        </div>
                        <small>Field must contain a unique value</small>
                    </div>
                    <div class="form-group mb-2">
                        <label class="form-label">Parent</label>
                        <select class="selectpicker" data-width="100%">
                <option value="">Select</option>
                <option value="Course">Course</option>
                <option value="Tutorial">Tutorial</option>
                <option value="Workshop">Workshop</option>
                <option value="Company">Company</option>
              </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Description</label>
                        <div id="editor">
                            <br>
                            <h4>One Ring to Rule Them All</h4>
                            <br>
                            <p>
                                Three Rings for the
                                <i> Elven-kingsunder</i> the sky,
                                <br> Seven for the
                                <u>Dwarf-lords</u> in halls of stone, Nine for Mortal Men,
                                <br> doomed to die, One for the Dark Lord on his dark throne.
                                <br> In the Land of Mordor where the Shadows lie.
                                <br>
                                <br>
                            </p>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Enabled</label>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1"></label>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Add New Category</button>
                        <button type="button" class="btn btn-outline-white" data-dismiss="modal">
                Close
              </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->


<!-- Course Modal -->
<div class="modal fade" id="courseModal" tabindex="-1" aria-labelledby="courseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header py-4 align-items-lg-center">
                <div class="d-lg-flex">
                    <div class="mb-3 mb-lg-0">
                        <img src="../../assets/images/svg/feature-icon-1.svg" alt="" class=" bg-primary icon-shape icon-xxl rounded-circle">
                    </div>
                    <div class="ml-lg-4">
                        <h2 class="font-weight-bold mb-md-1 mb-3">Introduction to JavaScript <span class="badge badge-warning ml-2">Free</span></h2>
                        <p class="text-uppercase font-size-xs font-weight-semi-bold mb-0"><span class="text-dark">Courses -
                  1</span> <span class="ml-3">6 Lessons</span> <span class="ml-3">1 Hour 12 Min</span></p>
                    </div>
                </div>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
           <i class="fe fe-x-circle "></i>
          </button>
            </div>
            <div class="modal-body">
                <h3>In this course you’ll learn:</h3>
                <p class="font-size-md">Vanilla JS is a fast, lightweight, cross-platform framework for building incredible, powerful JavaScript applications.</p>
                <ul class="list-group list-group-flush">
                    <!-- List group item -->
                    <li class="list-group-item pl-0">
                        <a href="#!" class="d-flex justify-content-between align-items-center text-inherit text-decoration-none">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i
                      class="mdi mdi-play font-size-md"></i></span>
                                <span>Introduction</span>
                            </div>
                            <div class="text-truncate">
                                <span>1m 7s</span>
                            </div>
                        </a>
                    </li>
                    <!-- List group item -->
                    <li class="list-group-item pl-0">
                        <a href="#!" class="d-flex justify-content-between align-items-center text-inherit text-decoration-none">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i
                      class="mdi mdi-play font-size-md"></i></span>
                                <span>Installing Development Software</span>
                            </div>
                            <div class="text-truncate">
                                <span>3m 11s</span>
                            </div>
                        </a>
                    </li>
                    <!-- List group item -->
                    <li class="list-group-item pl-0">
                        <a href="#!" class="d-flex justify-content-between align-items-center text-inherit text-decoration-none">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i
                      class="mdi mdi-play font-size-md"></i></span>
                                <span>Hello World Project from GitHub</span>
                            </div>
                            <div class="text-truncate">
                                <span>2m 33s</span>
                            </div>
                        </a>
                    </li>
                    <!-- List group item -->
                    <li class="list-group-item pl-0">
                        <a href="#!" class="d-flex justify-content-between align-items-center text-inherit text-decoration-none">
                            <div class="text-truncate">
                                <span class="icon-shape bg-light text-primary icon-sm rounded-circle mr-2"><i
                      class="mdi mdi-play font-size-md"></i></span>
                                <span>Our Sample Javascript Files</span>
                            </div>
                            <div class="text-truncate">
                                <span>22m 30s</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- new chat modal-->


<!-- Modal -->
<div class="modal fade" id="newchatModal" tabindex="-1" role="dialog" aria-labelledby="newchatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered " role="document">
        <div class="modal-content ">
            <div class="modal-header align-items-center">
                <h4 class="mb-0" id="newchatModalLabel">Create New Chat</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                  <i class="fe fe-x-circle "></i>
                 </button>
            </div>
            <div class="modal-body px-0">
                <!-- contact list -->
                <ul class="list-unstyled contacts-list mb-0">
                    <!-- chat item -->
                    <li class="py-3 px-4 chat-item contacts-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-link contacts-link">
                                <!-- media -->
                                <div class="media">
                                    <div class="avatar avatar-md avatar-indicators avatar-away">
                                        <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <!-- media body -->
                                    <div class="media-body ml-2">
                                        <h5 class="mb-0">Pete Martin</h5>
                                        <p class="mb-0 text-muted">On going description of group...
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <small class="text-muted">2/10/2021</small>
                            </div>
                        </div>


                    </li>
                    <!-- chat item -->
                    <li class="py-3 px-4 chat-item contacts-item">

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-link contacts-link">
                                <!-- media -->
                                <div class="media">
                                    <div class="avatar avatar-md avatar-indicators avatar-offline">
                                        <img src="../../assets/images/avatar/avatar-9.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <!-- media body -->
                                    <div class="media-body ml-2">
                                        <h5 class="mb-0">Olivia Cooper</h5>
                                        <p class="mb-0 text-muted">On going description of group...
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <small class="text-muted">2/3/2021</small>
                            </div>
                        </div>


                    </li>
                    <!-- chat item -->
                    <li class="py-3 px-4 chat-item contacts-item">

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-link contacts-link">
                                <!-- media -->
                                <div class="media">
                                    <div class="avatar avatar-md avatar-indicators avatar-busy">
                                        <img src="../../assets/images/avatar/avatar-19.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <!-- media body -->
                                    <div class="media-body ml-2">
                                        <h5 class="mb-0">Jamarcus Streich</h5>
                                        <p class="mb-0 text-muted">Start design system for UI.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <small class="text-muted">1/24/2021</small>
                            </div>
                        </div>


                    </li>
                    <!-- chat item -->
                    <li class="py-3 px-4 chat-item contacts-item">

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-link contacts-link">
                                <!-- media -->
                                <div class="media">
                                    <div class="avatar avatar-md avatar-indicators avatar-busy">
                                        <img src="../../assets/images/avatar/avatar-12.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <!-- media body -->
                                    <div class="media-body ml-2">
                                        <h5 class="mb-0">Lauren Wilson</h5>
                                        <p class="mb-0 text-muted">Start design system for UI...
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <small class="text-muted">3/3/2021</small>
                            </div>
                        </div>


                    </li>
                    <!-- chat item -->
                    <li class="py-3 px-4 chat-item contacts-item">

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-link contacts-link">
                                <!-- media -->
                                <div class="media">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img src="../../assets/images/avatar/avatar-14.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <!-- media body -->
                                    <div class="media-body ml-2">
                                        <h5 class="mb-0">User Name</h5>
                                        <p class="mb-0 text-muted">On going description of group..
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <small class="text-muted">1/5/2021</small>
                            </div>
                        </div>


                    </li>
                    <!-- chat item -->
                    <li class="py-3 px-4 chat-item contacts-item">

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="#" class="text-link contacts-link">
                                <!-- media -->
                                <div class="media">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img src="../../assets/images/avatar/avatar-15.jpg" alt="" class="rounded-circle">
                                    </div>
                                    <!-- media body -->
                                    <div class="media-body ml-2">
                                        <h5 class="mb-0">Rosalee Roberts</h5>
                                        <p class="mb-0 text-muted">On going description of group..
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <div>
                                <small class="text-muted">1/14/2021</small>
                            </div>
                        </div>


                    </li>



                </ul>
            </div>

        </div>
    </div>
</div>
    <!-- Scripts -->
    <!-- Libs JS -->
<script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/libs/odometer/odometer.min.js"></script>
<script src="../../assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../../assets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="../../assets/libs/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="../../assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="../../assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
<script src="../../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../../assets/libs/quill/dist/quill.min.js"></script>
<script src="../../assets/libs/file-upload-with-preview/dist/file-upload-with-preview.min.js"></script>
<script src="../../assets/libs/dragula/dist/dragula.min.js"></script>
<script src="../../assets/libs/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script src="../../assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="../../assets/libs/jQuery.print/jQuery.print.js"></script>
<script src="../../assets/libs/prismjs/prism.js"></script>
<script src="../../assets/libs/prismjs/components/prism-scss.min.js"></script>
<script src="../../assets/libs/%40yaireo/tagify/dist/tagify.min.js"></script>
<script src="../../assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="../../assets/libs/%40popperjs/core/dist/umd/popper.min.js"></script>
<script src="../../assets/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
<script src="../../assets/libs/typed.js/lib/typed.min.js"></script>
<script src="../../assets/libs/jsvectormap/dist/js/jsvectormap.min.js"></script>
<script src="../../assets/libs/jsvectormap/dist/maps/world.js"></script>



<!-- clipboard -->
<script src="../../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


<!-- Theme JS -->
<script src="../../assets/js/theme.min.js"></script>
</body>


<!-- Mirrored from codescandy.com/geeks/pages/dashboard/admin-course-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:33:05 GMT -->
</html>
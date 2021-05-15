<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from codescandy.com/geeks/pages/dashboard/admin-cms-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:33:10 GMT -->
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
    <title>CMS | Geeks - Academy Admin Template</title>
</head>

<body>
    <!-- Wrapper -->
    <div id="db-wrapper">
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="../../index.html">
                    <img src="../../assets/images/brand/logo/logo-inverse.svg" alt="" />
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navDashboard" aria-expanded="false" aria-controls="navDashboard">
                            <i class="nav-icon fe fe-home mr-2"></i> Dashboard
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
											Analytics
											<span class="badge badge-warning ml-2">New</span>
										</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navCourses" aria-expanded="false" aria-controls="navCourses">
                            <i class="nav-icon fe fe-book mr-2"></i> Courses
                        </a>
                        <div id="navCourses" class="collapse" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-course-overview.html">
											All Courses
										</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-course-category.html">
											Courses Category
										</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-course-category-single.html">
											Category Single
										</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navProfile" aria-expanded="false" aria-controls="navProfile">
                            <i class="nav-icon fe fe-user mr-2"></i> User
                        </a>
                        <div id="navProfile" class="collapse" data-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-instructor.html">
											Instructor
										</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-students.html">Students</a
										>
									</li>
								</ul>
							</div>
						</li>
						<!-- Nav item -->
						<li class="nav-item">
							<a
								class="nav-link active"
								href="#!"
								data-toggle="collapse"
								data-target="#navCMS"
								aria-expanded="true"
								aria-controls="navCMS"
							>
								<i class="nav-icon fe fe-book-open mr-2"></i> CMS
							</a>
                                    <div id="navCMS" class="collapse show" data-parent="#sideNavbar">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="admin-cms-overview.html">
											Overview
										</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="admin-cms-post.html">
											All Post
										</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="admin-cms-post-new.html">
											New Post
										</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="admin-cms-post-category.html">
											Category
										</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                                        <i class="nav-icon fe fe-lock mr-2"></i> Authentication
                                    </a>
                                    <div id="navAuthentication" class="collapse" data-parent="#sideNavbar">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="../sign-in.html">Sign In</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../sign-up.html">Sign Up</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../forget-password.html">
											Forget Password
										</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="notification-history.html">
											Notifications
										</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../404-error.html"> 404 Error</a>
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
                                    <div class="navbar-heading">Apps</div>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="chat-app.html">
                                        <i class="nav-icon fe fe-message-square mr-2"></i> Chat
                                        <span class="badge badge-warning ml-2">New</span>
                                    </a>
                                </li>
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
                                        <i class="nav-icon fe fe-help-circle mr-2"></i> Help Center
                                        <span class="badge badge-success ml-2">Pro</span>
                                    </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navSiteSetting" aria-expanded="false" aria-controls="navSiteSetting">
                                        <i class="nav-icon fe fe-settings mr-2"></i> Site Setting
                                    </a>
                                    <div id="navSiteSetting" class="collapse" data-parent="#sideNavbar">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="setting-general.html">
											General
										</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="setting-google.html">
											Google
										</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="setting-social.html">
											Social
										</a>
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
                                                <a class="nav-link" href="setting-smpt.html">
											SMPT
										</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navMenuLevel" aria-expanded="false" aria-controls="navMenuLevel">
                                        <i class="nav-icon fe fe-corner-left-down mr-2"></i> Menu Level
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
                                                            <a class="nav-link" href="#!">NavItem 1</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!">NavItem 2</a>
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
                                                            <a class="nav-link" href="#!" data-toggle="collapse" data-target="#navMenuLevelThreeOne" aria-expanded="false" aria-controls="navMenuLevelThreeOne">
														NavItem 1
													</a>
                                                            <div id="navMenuLevelThreeOne" class="collapse" data-parent="#navMenuLevelThree">
                                                                <ul class="nav flex-column">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" href="#!">
																	NavChild Item 1
																</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#!">Nav Item 2</a>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="../../docs/index.html">
                                        <i class="nav-icon fe fe-clipboard mr-2"></i> Documentation
                                    </a>
                                </li>
                                <!-- Nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="../../docs/changelog.html">
                                        <i class="nav-icon fe fe-git-pull-request mr-2"></i> Changelog
                                        <span class="badge badge-primary ml-2">1.0.2</span>
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
                <!-- navbar -->
                <nav class="navbar-default navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#!">
                        <i class="fe fe-menu"></i>
                    </a>
                    <div class="ml-lg-3 d-none d-md-none d-lg-block">
                        <!-- Form -->
                        <form class="d-flex align-items-center">
                            <span class="position-absolute pl-3 search-icon">
									<i class="fe fe-search"></i>
								</span>
                            <input type="search" class="form-control form-control-sm pl-6" placeholder="Search Entire Dashboard" />
                        </form>
                    </div>
                    <!--Navbar nav -->
                    <ul class="navbar-nav navbar-right-wrap ml-auto d-flex nav-top-wrap">
                        <li class="dropdown stopevent">
                            <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted" href="#!" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fe fe-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg" aria-labelledby="dropdownNotification">
                                <div class=" ">
                                    <div class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                        <span class="h4 mb-0">Notifications</span>
                                        <a href="# " class="text-muted">
                                            <span class="align-middle">
													<i class="fe fe-settings mr-1"></i>
												</span>
                                        </a>
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
																	<span>
																		<span
																			class="fe fe-thumbs-up text-success mr-1"
																		></span
																		>2 hours ago,</span
																	>
																	<span class="ml-1">2:19 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a class="stretched-link" href="#!"></a>
                                                </div>
                                                <div class="col-auto text-center">
                                                    <a href="#!" class="badge-dot badge-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as read"></a>
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
																	<span>
																		<span
																			class="fe fe-thumbs-up text-success mr-1"
																		></span> Oct 9,
                                                            </span>
                                                            <span class="ml-1">1:20 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a class="stretched-link" href="#!"></a>
                                                </div>
                                                <div class="col-auto text-center">
                                                    <a href="#!" class="badge-dot badge-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as unread"></a>
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
																	<span>
																		<span
																			class="fe fe-thumbs-up text-info mr-1"
																		></span> Oct 9,
                                                            </span>
                                                            <span class="ml-1">1:56 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a class="stretched-link" href="#!"></a>
                                                </div>
                                                <div class="col-auto text-center">
                                                    <a href="#!" class="badge-dot badge-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as unread"></a>
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
																	<span>
																		<span
																			class="fe fe-award text-warning mr-1"
																		></span> Oct 9,
                                                            </span>
                                                            <span class="ml-1">1:56 PM</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <a class="stretched-link" href="#!"></a>
                                                </div>
                                                <div class="col-auto text-center">
                                                    <a href="#!" class="badge-dot badge-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as unread"></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="border-top px-3 pt-3 pb-0">
                                        <a href="notification-history.html" class="text-link font-weight-semi-bold">
												See all Notifications
											</a>
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
                                            <i class="fe fe-circle mr-2"></i> Status
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="badge-dot bg-success mr-2"></span> Online
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="badge-dot bg-secondary mr-2"></span> Offline
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="badge-dot bg-warning mr-2"></span> Away
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#!">
                                                    <span class="badge-dot bg-danger mr-2"></span> Busy
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../profile-edit.html">
                                            <i class="fe fe-user mr-2"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../student-subscriptions.html">
                                            <i class="fe fe-star mr-2"></i> Subscription
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <i class="fe fe-settings mr-2"></i> Settings
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="../../index.html">
                                            <i class="fe fe-power mr-2"></i> Sign Out
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
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div class="border-bottom pb-4 mb-4 d-lg-flex align-items-center justify-content-between">
                            <div class="mb-2 mb-lg-0">
                                <h1 class="mb-1 h2 font-weight-bold">CMS Dashboard</h1>
                                <!-- Breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="admin-dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#!">CMS</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Overview
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div>
                                <a href="admin-cms-post-new.html" class="btn btn-primary">New Post</a
									>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-3 col-lg-6 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<!-- Card body -->
								<div class="card-body">
									<span
										class="font-size-xs text-uppercase font-weight-semi-bold"
										>Total Posts</span
									>
									<div
										class="mt-2 d-flex justify-content-between align-items-center"
									>
										<div class="lh-1">
											<h2 class="h1 font-weight-bold mb-1">2,000</h2>
											<span>100Last 30Days</span>
										</div>
										<div>
											<span
												class="bg-light-primary icon-shape icon-xl rounded-lg text-dark-primary"
											>
												<i class="mdi mdi-text-box-multiple mdi-24px"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<!-- Card Body -->
								<div class="card-body">
									<span
										class="font-size-xs text-uppercase font-weight-semi-bold"
										>Assets</span
									>
									<div
										class="mt-2 d-flex justify-content-between align-items-center"
									>
										<div class="lh-1">
											<h2 class="h1 font-weight-bold mb-1">367</h2>
											<span>300+ Media Object</span>
										</div>
										<div>
											<span
												class="bg-light-warning icon-shape icon-xl rounded-lg text-dark-warning"
											>
												<i class="mdi mdi-folder-multiple-image mdi-24px"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<!-- Card Body -->
								<div class="card-body">
									<span
										class="font-size-xs text-uppercase font-weight-semi-bold"
										>USers</span
									>
									<div
										class="mt-2 d-flex justify-content-between align-items-center"
									>
										<div class="lh-1">
											<h2 class="h1 font-weight-bold mb-1">13,234</h2>
											<span>1.5k in 30Days</span>
										</div>
										<div>
											<span
												class="bg-light-success icon-shape icon-xl rounded-lg text-dark-success"
											>
												<i class="mdi mdi-account-multiple mdi-24px"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-6 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<!-- Card Body -->
								<div class="card-body">
									<span
										class="font-size-xs text-uppercase font-weight-semi-bold"
										>Comments</span
									>
									<div
										class="mt-2 d-flex justify-content-between align-items-center"
									>
										<div class="lh-1">
											<h2 class="h1 font-weight-bold mb-1">120</h2>
											<span>20+ Comments</span>
										</div>
										<div>
											<span
												class="bg-light-info icon-shape icon-xl rounded-lg text-dark-info"
											>
												<i class="mdi mdi-comment-text mdi-24px"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<!-- Card -->
							<div class="card mb-4">
								<!-- Card header -->
								<div
									class="card-header d-flex justify-content-between align-items-center border-bottom-0 card-header-height"
								>
									<h4 class="mb-0">Recent Posts</h4>
									<span class="dropdown dropleft">
										<a
											class="text-muted text-decoration-none"
											href="#!"
											role="button"
											id="courseDropdown1"
											data-toggle="dropdown"
											aria-haspopup="true"
											aria-expanded="false"
										>
											<i class="fe fe-more-vertical"></i>
										</a>
                                <span class="dropdown-menu" aria-labelledby="courseDropdown1">
											<span class="dropdown-header">Settings</span>
                                <a class="dropdown-item" href="#!">
                                    <i class="fe fe-edit dropdown-item-icon"></i>Edit
                                </a>
                                <a class="dropdown-item" href="#!">
                                    <i class="fe fe-trash dropdown-item-icon"></i>Remove
                                </a>
                                </span>
                                </span>
                            </div>
                            <!-- Table -->
                            <div class="table-responsive border-0 overflow-y-hidden">
                                <table class="table mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0">POST</th>
                                            <th scope="col" class="border-0">TYPE</th>
                                            <th scope="col" class="border-0">CATEGORY</th>
                                            <th scope="col" class="border-0">DATE</th>
                                            <th scope="col" class="border-0">Author</th>
                                            <th scope="col" class="border-0">STATUS</th>
                                            <th scope="col" class="border-0"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle border-top-0">
                                                <h5 class="mb-0">
                                                    <a href="#!" class="text-inherit">
															Revolutionize how you build the web...
														</a>
                                                </h5>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <i class="fe fe-image text-primary font-size-md"></i>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <a href="#!" class="text-inherit">Courses</a>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                7 July, 2021 1:42pm
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Reva Yokk</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle border-top-0">
                                                <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span> Draft
                                            </td>
                                            <td class="text-muted align-middle border-top-0 text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown2"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown2"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															Guide to Static Sites with Gatsby.js
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-video font-size-md text-primary"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Marketing</a>
                                            </td>
                                            <td class="align-middle">6 July, 2021 2:42pm</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">March Menon</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-warning mr-1 d-inline-block align-middle"></span> Draft
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown3"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown3"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															The Modern JavaScript Courses
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-link font-size-md text-primary"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Workshop</a>
                                            </td>
                                            <td class="align-middle">5 July, 2021 5:42pm</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Lisa Menon</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span> Published
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown4"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown4"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															Online WordPress Courses Become ..
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-image text-primary font-size-md"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Company</a>
                                            </td>
                                            <td class="align-middle">3 July, 2021 10:42am</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-8.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Maria Pinto</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span> Published
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown5"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown5"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															How to become Java Developer
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-image text-primary font-size-md"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Company</a>
                                            </td>
                                            <td class="align-middle">4 July, 2021 12:42pm</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">John Deo</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span> Published
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown6"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown6"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															The Javascript Learning
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-video font-size-md text-primary"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Marketing</a>
                                            </td>
                                            <td class="align-middle">3 July, 2021 12:42pm</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-15.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Misty Smaln</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-info mr-1 d-inline-block align-middle"></span> Schedule
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown7"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown7"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															How to become modern Stack Developer
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-image font-size-md text-primary"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Company</a>
                                            </td>
                                            <td class="align-middle">3 July, 2021 12:42pm</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-12.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">March Liso</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-success mr-1 d-inline-block align-middle"></span> Published
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown8"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown8"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
														</span>
													</span>
												</td>
											</tr>
											<tr>
												<td>
													<h5 class="mb-0">
														<a href="#!" class="text-inherit">
															How to become Full Stack Developer
														</a>
													</h5>
												</td>
												<td class="align-middle">
													<i class="fe fe-link font-size-md text-primary"></i>
                                            </td>
                                            <td class="align-middle">
                                                <a href="#!" class="text-inherit">Workshop</a>
                                            </td>
                                            <td class="align-middle">2 July, 2021 12:42pm</td>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle avatar-xs mr-2" />
                                                    <h5 class="mb-0">Sina Ray</h5>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <span class="badge-dot bg-danger mr-1 d-inline-block align-middle"></span> Deleted
                                            </td>
                                            <td class="text-muted align-middle text-right">
                                                <span class="dropdown dropleft">
														<a
															class="text-muted text-decoration-none"
															href="#!"
															role="button"
															id="courseDropdown9"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<span
															class="dropdown-menu"
															aria-labelledby="courseDropdown9"
														>
															<span class="dropdown-header">Settings</span>
                                                <a class="dropdown-item" href="#!">
                                                    <i class="fe fe-edit dropdown-item-icon"></i
																>Edit
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-move dropdown-item-icon"></i
																>Move
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-copy dropdown-item-icon"></i
																>Copy
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-left dropdown-item-icon"
																></i
																>Publish
															</a>
															<a class="dropdown-item" href="#!">
																<i
																	class="fe fe-toggle-right dropdown-item-icon"
																></i
																>Unpublish
															</a>
															<a class="dropdown-item" href="#!">
																<i class="fe fe-trash dropdown-item-icon"></i
																>Delete
															</a>
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

<!-- Mirrored from codescandy.com/geeks/pages/dashboard/admin-cms-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:33:10 GMT -->
</html>
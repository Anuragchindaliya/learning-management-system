<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from codescandy.com/geeks/pages/dashboard/chat-app.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:33:12 GMT -->
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
		<title>Chat Application | Geeks - Academy Admin Template</title>
	</head>

	<body>
		<!-- Wrapper -->
		<div class="chat-layout" id="db-wrapper">
			<!-- Sidebar -->
			<nav class="navbar-vertical navbar">
				<div class="nav-scroller">
					<!-- Brand logo -->
					<a class="navbar-brand" href="../../index.html"
						><img src="../../assets/images/brand/logo/logo-inverse.svg" alt=""
					/></a>
					<!-- Navbar nav -->
					<ul class="navbar-nav flex-column" id="sideNavbar">
						<!-- Nav item -->
						<li class="nav-item">
							<a
								class="nav-link"
								href="#!"
								data-toggle="collapse"
								data-target="#navDashboard"
								aria-expanded="false"
								aria-controls="navDashboard"
							>
								<i class="nav-icon fe fe-home mr-2"></i>Dashboard
							</a>
							<div id="navDashboard" class="collapse" data-parent="#sideNavbar">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a
											class="nav-link"
											href="admin-dashboard.html"
										>
											Overview
										</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a
											class="nav-link"
											href="dashboard-analytics.html"
										>
											Analytics
											<span class="badge badge-warning ml-2">New</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!-- Nav item -->
						<li class="nav-item">
							<a
								class="nav-link"
								href="#!"
								data-toggle="collapse"
								data-target="#navCourses"
								aria-expanded="false"
								aria-controls="navCourses"
							>
								<i class="nav-icon fe fe-book mr-2"></i>Courses
							</a>
							<div id="navCourses" class="collapse" data-parent="#sideNavbar">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a
											class="nav-link"
											href="chat-app.html"
											>All Courses
										</a>
									</li>
									<li class="nav-item">
										<a
											class="nav-link"
											href="chat-app.html"
											>Courses Category
										</a>
									</li>
									<li class="nav-item">
										<a
											class="nav-link"
											href="chat-app.html"
										>
											Category Single</a
										>
									</li>
								</ul>
							</div>
						</li>
						<!-- Nav item -->
						<li class="nav-item">
							<a
								class="nav-link"
								href="#!"
								data-toggle="collapse"
								data-target="#navProfile"
								aria-expanded="false"
								aria-controls="navProfile"
							>
								<i class="nav-icon fe fe-user mr-2"></i>User
							</a>
							<div id="navProfile" class="collapse" data-parent="#sideNavbar">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a
											class="nav-link"
											href="admin-instructor.html"
											>Instructor
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="admin-students.html"
											>Students</a
										>
									</li>
								</ul>
							</div>
						</li>
						<!-- Nav item -->
						<li class="nav-item">
							<a
								class="nav-link"
								href="#!"
								data-toggle="collapse"
								data-target="#navCMS"
								aria-expanded="false"
								aria-controls="navCMS"
							>
								<i class="nav-icon fe fe-book-open mr-2"></i>CMS
							</a>
							<div id="navCMS" class="collapse" data-parent="#sideNavbar">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a
											class="nav-link"
											href="admin-cms-overview.html"
											>Overview
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="admin-cms-post.html"
											>All Post
										</a>
									</li>
									<li class="nav-item">
										<a
											class="nav-link"
											href="admin-cms-post-new.html"
											>New Post
										</a>
									</li>
									<li class="nav-item">
										<a
											class="nav-link"
											href="admin-cms-post-category.html"
										>
											Category</a
										>
									</li>
								</ul>
							</div>
						</li>
						<!-- Nav item -->
						<li class="nav-item">
							<a
								class="nav-link"
								href="#!"
								data-toggle="collapse"
								data-target="#navAuthentication"
								aria-expanded="false"
								aria-controls="navAuthentication"
							>
								<i class="nav-icon fe fe-lock mr-2"></i>Authentication
							</a>
							<div
								id="navAuthentication"
								class="collapse"
								data-parent="#sideNavbar"
							>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="../sign-in.html">Sign In </a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="../sign-up.html">Sign Up</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="../forget-password.html">
											Forget Password</a
										>
									</li>
									<li class="nav-item">
										<a
											class="nav-link"
											href="notification-history.html"
										>
											Notifications</a
										>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="../404-error.html"> 404 Error </a>
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
							<a class="nav-link active" href="chat-app.html">
								<i class="nav-icon fe fe-message-square mr-2"></i>Chat
								<span class="badge badge-warning ml-2">New</span>
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
							<a
								class="nav-link"
								href="#!"
								data-toggle="collapse"
								data-target="#navSiteSetting"
								aria-expanded="false"
								aria-controls="navSiteSetting"
							>
								<i class="nav-icon fe fe-settings mr-2"></i>Site Setting
							</a>
							<div
								id="navSiteSetting"
								class="collapse"
								data-parent="#sideNavbar"
							>
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="setting-general.html"
											>General
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="setting-google.html"
											>Google
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="setting-social.html"
											>Social
										</a>
									</li>
									<li class="nav-item">
										<a
											class="nav-link"
											href="setting-social-login.html"
										>
											Social Login
										</a>
									</li>
									<li class="nav-item">
										<a
											class="nav-link"
											href="setting-payment.html"
										>
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
							<a
								class="nav-link"
								href="#!"
								data-toggle="collapse"
								data-target="#navMenuLevel"
								aria-expanded="false"
								aria-controls="navMenuLevel"
							>
								<i class="nav-icon fe fe-corner-left-down mr-2"></i>Menu Level
							</a>
							<div id="navMenuLevel" class="collapse" data-parent="#sideNavbar">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a
											class="nav-link"
											href="#!"
											data-toggle="collapse"
											data-target="#navMenuLevelSecond"
											aria-expanded="false"
											aria-controls="navMenuLevelSecond"
										>
											Two Level
										</a>
										<div
											id="navMenuLevelSecond"
											class="collapse"
											data-parent="#navMenuLevel"
										>
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
										<a
											class="nav-link"
											href="#!"
											data-toggle="collapse"
											data-target="#navMenuLevelThree"
											aria-expanded="false"
											aria-controls="navMenuLevelThree"
										>
											Three Level
										</a>
										<div
											id="navMenuLevelThree"
											class="collapse"
											data-parent="#navMenuLevel"
										>
											<ul class="nav flex-column">
												<li class="nav-item">
													<a
														class="nav-link"
														href="#!"
														data-toggle="collapse"
														data-target="#navMenuLevelThreeOne"
														aria-expanded="false"
														aria-controls="navMenuLevelThreeOne"
														>NavItem 1
													</a>
													<div
														id="navMenuLevelThreeOne"
														class="collapse"
														data-parent="#navMenuLevelThree"
													>
														<ul class="nav flex-column">
															<li class="nav-item">
																<a class="nav-link" href="#!"
																	>NavChild Item 1
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
						<li class="nav-item">
							<a class="nav-link" href="../../docs/index.html">
								<i class="nav-icon fe fe-clipboard mr-2"></i>Documentation
							</a>
						</li>
						<!-- Nav item -->
						<li class="nav-item">
							<a class="nav-link" href="../../docs/changelog.html">
								<i class="nav-icon fe fe-git-pull-request mr-2"></i>Changelog
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
									Upgrade your plan from a Free trial, to select ‘Business
									Plan’. Start Now
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
						<a id="nav-toggle" href="#!"><i class="fe fe-menu"></i></a>
						<div class="ml-lg-3 d-none d-md-none d-lg-block">
							<!-- Form -->
							<form class="d-flex align-items-center">
								<span class="position-absolute pl-3 search-icon">
									<i class="fe fe-search"></i>
								</span>
								<input
									type="search"
									class="form-control form-control-sm pl-6"
									placeholder="Search Entire Dashboard"
								/>
							</form>
						</div>
						<!--Navbar nav -->
						<ul
							class="navbar-nav navbar-right-wrap ml-auto d-flex nav-top-wrap"
						>
							<li class="dropdown stopevent">
								<a
									class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted"
									href="#!"
									role="button"
									id="dropdownNotification"
									data-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
								>
									<i class="fe fe-bell"> </i>
								</a>
								<div
									class="dropdown-menu dropdown-menu-right dropdown-menu-lg"
									aria-labelledby="dropdownNotification"
								>
									<div class=" ">
										<div
											class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center"
										>
											<span class="h5 mb-0">Notifications</span>
											<a href="# " class="text-muted"
												><span class="align-middle"
													><i class="fe fe-settings mr-1"></i></span
											></a>
										</div>
										<!-- List group -->
										<ul
											class="list-group list-group-flush notification-list-scroll"
										>
											<!-- List group item -->
											<li class="list-group-item bg-light">
												<div class="row">
													<div class="col">
														<div class="d-flex">
															<img
																src="../../assets/images/avatar/avatar-1.jpg"
																alt=""
																class="avatar-md rounded-circle"
															/>
															<div class="ml-3">
																<h5 class="font-weight-bold mb-1">
																	Kristin Watson:
																</h5>
																<p class="mb-3">
																	Krisitn Watsan like your comment on chat
																	Javascript Introduction!
																</p>
																<span class="font-size-xs text-muted">
																	<span
																		><span
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
														<a
															href="#!"
															class="badge-dot badge-info"
															data-toggle="tooltip"
															data-placement="top"
															title=""
															data-original-title="Mark as read"
														>
														</a>
														<div>
															<a
																href="#!"
																class="bg-transparent"
																data-toggle="tooltip"
																data-placement="top"
																title=""
																data-original-title="Remove"
															>
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
															<img
																src="../../assets/images/avatar/avatar-2.jpg"
																alt=""
																class="avatar-md rounded-circle"
															/>
															<div class="ml-3">
																<h5 class="font-weight-bold mb-1">
																	Brooklyn Simmons
																</h5>
																<p class="mb-3">
																	Just launched a new Courses React for
																	Beginner.
																</p>
																<span class="font-size-xs text-muted">
																	<span
																		><span
																			class="fe fe-thumbs-up text-success mr-1"
																		></span
																		>Oct 9,
																	</span>
																	<span class="ml-1">1:20 PM</span>
																</span>
															</div>
														</div>
														<a class="stretched-link" href="#!"></a>
													</div>
													<div class="col-auto text-center">
														<a
															href="#!"
															class="badge-dot badge-secondary"
															data-toggle="tooltip"
															data-placement="top"
															title=""
															data-original-title="Mark as unread"
														>
														</a>
													</div>
												</div>
											</li>
											<!-- List group item -->
											<li class="list-group-item">
												<div class="row">
													<div class="col">
														<div class="d-flex">
															<img
																src="../../assets/images/avatar/avatar-3.jpg"
																alt=""
																class="avatar-md rounded-circle"
															/>
															<div class="ml-3">
																<h5 class="font-weight-bold mb-1">
																	Jenny Wilson
																</h5>
																<p class="mb-3">
																	Krisitn Watsan like your comment on chat
																	Javascript Introduction!
																</p>
																<span class="font-size-xs text-muted">
																	<span
																		><span
																			class="fe fe-thumbs-up text-info mr-1"
																		></span
																		>Oct 9,
																	</span>
																	<span class="ml-1">1:56 PM</span>
																</span>
															</div>
														</div>
														<a class="stretched-link" href="#!"></a>
													</div>
													<div class="col-auto text-center">
														<a
															href="#!"
															class="badge-dot badge-secondary"
															data-toggle="tooltip"
															data-placement="top"
															title=""
															data-original-title="Mark as unread"
														>
														</a>
													</div>
												</div>
											</li>
											<!-- List group item -->
											<li class="list-group-item">
												<div class="row">
													<div class="col">
														<div class="d-flex">
															<img
																src="../../assets/images/avatar/avatar-4.jpg"
																alt=""
																class="avatar-md rounded-circle"
															/>
															<div class="ml-3">
																<h5 class="font-weight-bold mb-1">Sina Ray</h5>
																<p class="mb-3">
																	You earn new certificate for complete the
																	Javascript Beginner chat.
																</p>
																<span class="font-size-xs text-muted">
																	<span
																		><span
																			class="fe fe-award text-warning mr-1"
																		></span
																		>Oct 9,
																	</span>
																	<span class="ml-1">1:56 PM</span>
																</span>
															</div>
														</div>
														<a class="stretched-link" href="#!"></a>
													</div>
													<div class="col-auto text-center">
														<a
															href="#!"
															class="badge-dot badge-secondary"
															data-toggle="tooltip"
															data-placement="top"
															title=""
															data-original-title="Mark as unread"
														>
														</a>
													</div>
												</div>
											</li>
										</ul>
										<div class="border-top px-3 pt-3 pb-0">
											<a
												href="notification-history.html"
												class="text-link font-weight-semi-bold"
												>See all Notifications</a
											>
										</div>
									</div>
								</div>
							</li>
							<!-- List -->
							<li class="dropdown ml-2">
								<a
									class="rounded-circle"
									href="#!"
									role="button"
									id="dropdownUser"
									data-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
								>
									<div class="avatar avatar-md avatar-indicators avatar-online">
										<img
											alt="avatar"
											src="../../assets/images/avatar/avatar-1.jpg"
											class="rounded-circle"
										/>
									</div>
								</a>
								<div
									class="dropdown-menu dropdown-menu-right"
									aria-labelledby="dropdownUser"
								>
									<div class="dropdown-item">
										<div class="d-flex">
											<div
												class="avatar avatar-md avatar-indicators avatar-online"
											>
												<img
													alt="avatar"
													src="../../assets/images/avatar/avatar-1.jpg"
													class="rounded-circle"
												/>
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
											<a
												class="dropdown-item dropdown-list-group-item dropdown-toggle"
												href="#!"
											>
												<i class="fe fe-circle mr-2"></i>Status
											</a>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="#!">
														<span class="badge-dot bg-success mr-2"></span
														>Online
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#!">
														<span class="badge-dot bg-secondary mr-2"></span
														>Offline
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
											<a
												class="dropdown-item"
												href="../profile-edit.html"
											>
												<i class="fe fe-user mr-2"></i>Profile
											</a>
										</li>
										<li>
											<a
												class="dropdown-item"
												href="../student-subscriptions.html"
											>
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
				<div class="container-fluid px-0">
					<!-- row -->
					<div class="row no-gutters">
						<div class="col-xl-3 col-lg-12 col-md-12 col-12">
							<div class="bg-white border-right border-top vh-100">
								<!-- chat list -->
								<div class="scrollbar chat-window">
									<div class="chat-sticky-header sticky-top bg-white">
										<div class="px-4 pt-3 pb-4">
											<!-- heading -->
											<div
												class="d-flex justify-content-between align-items-center"
											>
												<div>
													<h1 class="mb-0 font-weight-bold h2">Chat</h1>
												</div>
												<!-- new chat dropdown -->
												<div>
													<a
														href="#"
														class="btn-primary rounded-circle icon-shape icon-md texttooltip"
														data-template="newchat"
														data-toggle="modal"
														data-target="#newchatModal"
													>
														<i class="fe fe-edit"></i>
														<div id="newchat" class="d-none">
															<span>New Chat</span>
														</div>
													</a>
													<span class="dropdown dropleft">
														<a
															href="#"
															class="btn-light rounded-circle icon-shape icon-md"
															id="settingLink"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-settings"></i
														></a>
														<span
															class="dropdown-menu"
															aria-labelledby="settingLink"
														>
															<a class="dropdown-item" href="#">Setting</a>
															<a class="dropdown-item" href="#"
																>Help and Feedback</a
															>
														</span>
													</span>
												</div>
											</div>
											<!-- search -->
											<div class="mt-4 mb-4">
												<input
													type="search"
													class="form-control form-control-sm"
													placeholder="Search people, group and messages"
												/>
											</div>
											<!-- User chat -->

											<div
												class="d-flex justify-content-between align-items-center"
											>
												<!-- media -->
												<a href="#" class="text-link">
													<div class="media">
														<div
															class="avatar avatar-md avatar-indicators avatar-online"
														>
															<img
																src="../../assets/images/avatar/avatar-1.jpg"
																alt=""
																class="rounded-circle"
															/>
														</div>
														<!-- media body -->
														<div class="media-body ml-2">
															<h5 class="mb-0">Jitu Chauhan</h5>
															<p class="mb-0 text-muted">Online</p>
														</div>
													</div>
												</a>
												<!-- dropdown -->
												<div class="dropdown dropleft">
													<a
														href="#"
														class="text-link"
														id="userSetting"
														data-toggle="dropdown"
														aria-haspopup="true"
														aria-expanded="false"
														><i class="fe fe-more-horizontal font-size-lg"></i
													></a>
													<ul
														class="dropdown-menu"
														aria-labelledby="userSetting"
													>
														<li class="dropdown-submenu dropdown-animation dropdown-toggle-none">
															<a
																class="dropdown-item dropdown-toggle"
																href="#!"
																aria-haspopup="true"
																aria-expanded="false"
																data-toggle="dropdown"
															>
																<i class="fe fe-circle dropdown-item-icon"></i
																>Status
															</a>
															<ul class="dropdown-menu dropdown-menu-xs">
																<li>
																	<a class="dropdown-item" href="#!">
																		<span
																			class="badge-dot bg-success mr-2"
																		></span
																		>Online
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#!">
																		<span
																			class="badge-dot bg-secondary mr-2"
																		></span
																		>Offline
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#!">
																		<span
																			class="badge-dot bg-warning mr-2"
																		></span
																		>Away
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#!">
																		<span
																			class="badge-dot bg-danger mr-2"
																		></span
																		>Busy
																	</a>
																</li>
															</ul>
														</li>
														<li>
															<a class="dropdown-item" href="#"
																><i
																	class="fe fe-settings dropdown-item-icon"
																></i
																>Setting</a
															>
														</li>
														<li>
															<a class="dropdown-item" href="#"
																><i class="fe fe-user dropdown-item-icon"></i
																>Profile</a
															>
														</li>
														<li>
															<a class="dropdown-item" href="#"
																><i class="fe fe-power dropdown-item-icon"></i
																>Sign Out</a
															>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!-- nav tabs-->
										<ul class="nav nav-line-bottom" id="tab" role="tablist">
											<!-- nav item -->
											<li class="nav-item">
												<a
													class="nav-link active py-2"
													id="recent-tab"
													data-toggle="pill"
													href="#recent"
													role="tab"
													aria-controls="recent"
													aria-selected="true"
													>Recent</a
												>
											</li>
											<!-- nav item -->
											<li class="nav-item">
												<a
													class="nav-link py-2"
													id="contact-tab"
													data-toggle="pill"
													href="#contact"
													role="tab"
													aria-controls="contact"
													aria-selected="true"
													>Contact</a
												>
											</li>
										</ul>
									</div>
									<div class="h-100">
										<!-- tab content -->
										<div class="tab-content" id="tabContent">
											<!-- tab pane -->
											<div
												class="tab-pane fade show active"
												id="recent"
												role="tabpanel"
												aria-labelledby="recent-tab"
											>
												<!-- contact list -->
												<ul class="list-unstyled contacts-list">
													<!-- contact item -->
													<li class="py-3 px-4 chat-item contacts-item">
														<!-- contact link -->

														<div
															class="d-flex justify-content-between align-items-center"
														>
															<!-- media -->
															<a href="#" class="text-link contacts-link">
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-2.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0 font-weight-bold">
																			Olivia Cooper
																		</h5>
																		<p class="mb-0 text-muted text-truncate">
																			I m for unread message components...
																		</p>
																	</div>
																</div>
															</a>
															<div>
																<!-- icon -->
																<small class="text-muted">8:48AM</small>
																<div class="text-right">
																	<span
																		class="icon-shape icon-xs text-white bg-danger rounded-circle font-weight-bold font-size-xs"
																		>1</span
																	>
																</div>
															</div>
														</div>
														<!-- chat action -->
														<div class="chat-actions">
															<!-- dropdown -->
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton2"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton2"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
													<!-- chat item -->
													<li
														class="bg-light py-3 px-4 chat-item contacts-item"
													>
														<div
															class="d-flex justify-content-between align-items-center"
														>
															<a href="#" class="text-link contacts-link">
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-4.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Sharad Mishra</h5>
																		<p class="mb-0 text-muted">
																			Currently chat with user components...
																		</p>
																	</div>
																</div>
															</a>
															<div>
																<small class="text-muted">8:48AM</small>
															</div>
														</div>
														<!-- chat actions -->
														<div class="chat-actions">
															<!-- dropdown -->
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton3"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<!-- dropdown menu -->
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton3"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
													<!-- chat item -->
													<li class="py-3 px-4 chat-item contacts-item">
														<div
															class="d-flex justify-content-between align-items-center"
														>
															<a href="#" class="text-link contacts-link">
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-3.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Tanya Davies</h5>
																		<img
																			src="../../assets/images/png/dot-move.png"
																			alt=""
																			class="ml-1"
																		/>
																	</div>
																</div>
															</a>
															<div>
																<small class="text-muted">8:48AM</small>
															</div>
														</div>
														<!-- chat actions -->
														<div class="chat-actions">
															<!-- dropdown  -->
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton4"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton4"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
													<!-- chat item -->
													<li class="py-3 px-4 chat-item contacts-item">
														<div
															class="d-flex justify-content-between align-items-center"
														>
															<a href="#" class="text-link contacts-link">
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-6.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<div
																		class="avatar avatar-sm avatar-primary position-absolute mt-3 ml-n2"
																	>
																		<span
																			class="avatar-initials rounded-circle font-size-xs"
																			>GK</span
																		>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Figma Design Group</h5>
																		<p class="mb-0 text-muted">
																			Designer keep foucs on design...
																		</p>
																	</div>
																</div>
															</a>
															<div>
																<small class="text-muted">3/11/2021</small>
															</div>
														</div>
														<!-- chat actions -->
														<div class="chat-actions">
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton5"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<!-- dropdown menu -->
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton5"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
													<!-- chat item -->
													<li class="py-3 px-4 chat-item contacts-item">
														<div
															class="d-flex justify-content-between align-items-center"
														>
															<a href="#" class="text-link contacts-link">
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-away"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-5.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Pete Martin</h5>
																		<p class="mb-0 text-muted">
																			On going description of group...
																		</p>
																	</div>
																</div>
															</a>
															<div>
																<small class="text-muted">2/10/2021</small>
															</div>
														</div>
														<!-- chat actions -->
														<div class="chat-actions">
															<!-- dropdown -->
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton6"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<!-- dropdown menu -->
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton6"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
													<!-- chat item -->
													<li class="py-3 px-4 chat-item contacts-item">
														<div
															class="d-flex justify-content-between align-items-center"
														>
															<a href="#" class="text-link contacts-link">
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-offline"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-9.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Olivia Cooper</h5>
																		<p class="mb-0 text-muted">
																			On going description of group...
																		</p>
																	</div>
																</div>
															</a>
															<div>
																<small class="text-muted">2/3/2021</small>
															</div>
														</div>
														<!-- chat actions -->
														<div class="chat-actions">
															<!-- dropdown  -->
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton7"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton7"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
													<!-- chat item -->
													<li class="py-3 px-4 chat-item contacts-item">
														<div
															class="d-flex justify-content-between align-items-center"
														>
															<a href="#" class="text-link contacts-link">
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-busy"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-19.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Jamarcus Streich</h5>
																		<p class="mb-0 text-muted">
																			Start design system for UI.
																		</p>
																	</div>
																</div>
															</a>
															<div>
																<small class="text-muted">1/24/2021</small>
															</div>
														</div>
														<!-- chat actions -->
														<div class="chat-actions">
															<!-- dropdown -->
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton8"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton8"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
													<!-- chat item -->
													<li class="py-3 px-4 chat-item contacts-item">
														<div
															class="d-flex justify-content-between align-items-center"
														>
															<a href="#" class="text-link contacts-link">
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-busy"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-12.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Lauren Wilson</h5>
																		<p class="mb-0 text-muted">
																			Start design system for UI...
																		</p>
																	</div>
																</div>
															</a>
															<div>
																<small class="text-muted">3/3/2021</small>
															</div>
														</div>
														<!-- chat actions -->
														<div class="chat-actions">
															<!-- dropdown -->
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton9"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton9"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
													<!-- chat item -->
													<li class="py-3 px-4 chat-item contacts-item">
														<div
															class="d-flex justify-content-between align-items-center"
														>
															<a href="#" class="text-link contacts-link">
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-14.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">User Name</h5>
																		<p class="mb-0 text-muted">
																			On going description of group..
																		</p>
																	</div>
																</div>
															</a>
															<div>
																<small class="text-muted">1/5/2021</small>
															</div>
														</div>
														<!-- chat actions -->
														<div class="chat-actions">
															<!-- dropdown -->
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton10"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton10"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
													<!-- chat item -->
													<li class="py-3 px-4 chat-item contacts-item">
														<div
															class="d-flex justify-content-between align-items-center"
														>
															<a href="#" class="text-link contacts-link">
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-15.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Rosalee Roberts</h5>
																		<p class="mb-0 text-muted">
																			On going description of group..
																		</p>
																	</div>
																</div>
															</a>
															<div>
																<small class="text-muted">1/14/2021</small>
															</div>
														</div>
														<!-- chat actions -->
														<div class="chat-actions">
															<!--  dropdown -->
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton11"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton11"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
													<!-- chat item -->
													<li class="py-3 px-4 chat-item contacts-item">
														<div
															class="d-flex justify-content-between align-items-center"
														>
															<a href="#" class="text-link contacts-link">
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-busy"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-12.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Lauren Wilson</h5>
																		<p class="mb-0 text-muted">
																			Start design system for UI...
																		</p>
																	</div>
																</div>
															</a>
															<div>
																<small class="text-muted">2/12/2021</small>
															</div>
														</div>
														<!-- chat actions -->
														<div class="chat-actions">
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton12"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton12"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
													<!-- chat item -->
													<li class="py-3 px-4 chat-item contacts-item">
														<div
															class="d-flex justify-content-between align-items-center"
														>
															<a href="#" class="text-link contacts-link">
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-14.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">User Name</h5>
																		<p class="mb-0 text-muted">
																			On going description of group..
																		</p>
																	</div>
																</div>
															</a>
															<div>
																<small class="text-muted">3/5/2021</small>
															</div>
														</div>
														<!-- chat actions -->
														<div class="chat-actions">
															<!-- dropdown -->
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton13"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton13"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
													<!-- chat item -->
													<li class="py-3 px-4 chat-item contacts-item">
														<div
															class="d-flex justify-content-between align-items-center"
														>
															<a href="#" class="text-link contacts-link">
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-15.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Rosalee Roberts</h5>
																		<p class="mb-0 text-muted">
																			On going description of group..
																		</p>
																	</div>
																</div>
															</a>
															<div>
																<small class="text-muted">2/7/2021</small>
															</div>
														</div>
														<!-- chat actions -->
														<div class="chat-actions">
															<!-- dropdown -->
															<div class="dropdown dropleft">
																<a
																	href="#"
																	class="btn btn-white btn-icon btn-sm rounded-circle primary-hover"
																	id="dropdownMenuButton14"
																	data-toggle="dropdown"
																	aria-haspopup="true"
																	aria-expanded="false"
																>
																	<i
																		class="fe fe-more-horizontal font-size-lg"
																	></i>
																</a>
																<div
																	class="dropdown-menu"
																	aria-labelledby="dropdownMenuButton14"
																>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-pin-angle dropdown-item-icon"
																		></i
																		>Pin</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-x dropdown-item-icon"
																		></i
																		>Mute</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-eye-slash dropdown-item-icon"
																		></i
																		>Hide</a
																	>
																	<a class="dropdown-item" href="#"
																		><i
																			class="bi-person-plus dropdown-item-icon"
																		></i
																		>Add to Favorite</a
																	>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<!-- tab pane -->
											<div
												class="tab-pane"
												id="contact"
												role="tabpanel"
												aria-labelledby="contact-tab"
											>
												<ul class="list-unstyled">
													<!-- list -->
													<li>
														<div
															class="bg-light py-1 px-4 border-bottom font-weight-semi-bold"
														>
															F
														</div>
														<a href="#" class="text-link">
															<div
																class="d-flex justify-content-between align-items-center py-3 px-4 border-bottom"
															>
																<!-- media -->
																<div class="media position-relative">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-2.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>

																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Fatima Darbar</h5>
																		<p class="mb-0 text-muted text-truncate">
																			Online
																		</p>
																	</div>
																</div>
															</div>
															<div
																class="d-flex justify-content-between align-items-center py-3 px-4"
															>
																<!-- media -->
																<div class="media position-relative">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-offline"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-6.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<div
																		class="avatar avatar-sm avatar-primary position-absolute mt-3 ml-n2"
																	>
																		<span
																			class="avatar-initials rounded-circle font-size-xs"
																			>GK</span
																		>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Figma Design Group</h5>
																		<p class="mb-0 text-muted text-truncate">
																			Offline
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</li>
													<!-- list -->
													<li>
														<div
															class="bg-light py-1 px-4 border-bottom border-top font-weight-semi-bold text-dark"
														>
															J
														</div>
														<a href="#" class="text-link">
															<div
																class="d-flex justify-content-between align-items-center py-3 px-4 border-bottom"
															>
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-away"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-19.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Jamarcus Streich</h5>
																		<p class="mb-0 text-muted text-truncate">
																			Away
																		</p>
																	</div>
																</div>
															</div>
															<div
																class="d-flex justify-content-between align-items-center py-3 px-4"
															>
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-away"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-21.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Jasmin Poicha</h5>
																		<p class="mb-0 text-muted text-truncate">
																			Away
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</li>
													<!-- list -->
													<li>
														<div
															class="bg-light py-1 px-4 border-bottom border-top font-weight-semi-bold text-dark"
														>
															O
														</div>
														<a href="#" class="text-link">
															<div
																class="d-flex justify-content-between align-items-center py-3 px-4 border-bottom"
															>
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-2.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Olivia Cooper</h5>
																		<p class="mb-0 text-muted text-truncate">
																			Feeling Happy
																		</p>
																	</div>
																</div>
															</div>
															<div
																class="d-flex justify-content-between align-items-center py-3 px-4"
															>
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-busy"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-12.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Oswal Baug</h5>
																		<p class="mb-0 text-muted text-truncate">
																			Busy
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</li>
													<!-- list -->
													<li>
														<div
															class="bg-light py-1 px-4 border-bottom border-top font-weight-semi-bold text-dark"
														>
															P
														</div>
														<a href="#" class="text-link">
															<div
																class="d-flex justify-content-between align-items-center py-3 px-4"
															>
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-5.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Pete Martin</h5>
																		<p class="mb-0 text-muted text-truncate">
																			Online
																		</p>
																	</div>
																</div>
															</div>
														</a>
														<a href="#" class="text-link">
															<div
																class="d-flex justify-content-between align-items-center py-3 px-4"
															>
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-11.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Kancha China</h5>
																		<p class="mb-0 text-muted text-truncate">
																			Offline
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</li>
													<!-- list -->
													<li>
														<div
															class="bg-light py-1 px-4 border-bottom border-top font-weight-semi-bold text-dark"
														>
															S
														</div>
														<a href="#" class="text-link">
															<div
																class="d-flex justify-content-between align-items-center py-3 px-4"
															>
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-4.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h4 class="mb-0">Sharad Mishra</h4>
																		<p class="mb-0 text-muted text-truncate">
																			Busy
																		</p>
																	</div>
																</div>
															</div>
														</a>
														<a href="#" class="text-link">
															<div
																class="d-flex justify-content-between align-items-center py-3 px-4"
															>
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-8.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Sarita Nigam</h5>
																		<p class="mb-0 text-muted text-truncate">
																			Busy
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</li>
													<!-- list -->
													<li>
														<div
															class="bg-light py-1 px-4 border-bottom border-top font-weight-semi-bold text-dark"
														>
															T
														</div>
														<a href="#" class="text-link">
															<div
																class="d-flex justify-content-between align-items-center py-3 px-4"
															>
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-3.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Tanya Davias</h5>
																		<p class="mb-0 text-muted text-truncate">
																			Offline
																		</p>
																	</div>
																</div>
															</div>
														</a>
														<a href="#" class="text-link">
															<div
																class="d-flex justify-content-between align-items-center py-3 px-4"
															>
																<!-- media -->
																<div class="media">
																	<div
																		class="avatar avatar-md avatar-indicators avatar-online"
																	>
																		<img
																			src="../../assets/images/avatar/avatar-5.jpg"
																			alt=""
																			class="rounded-circle"
																		/>
																	</div>
																	<!-- media body -->
																	<div class="media-body ml-2">
																		<h5 class="mb-0">Tushar Mishra</h5>
																		<p class="mb-0 text-muted text-truncate">
																			Offline
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-12 col-md-12 col-12">
							<!-- chat list -->
							<div class="scrollbar chat-body w-100 vh-100">
								<div
									class="bg-white border-top border-bottom px-4 py-3 sticky-top"
								>
									<div
										class="d-flex justify-content-between align-items-center"
									>
										<!-- media -->
										<div class="media align-items-center">
											<a href="#" class="mr-2 d-xl-none d-block" data-close
												><i class="fe fe-arrow-left"></i
											></a>
											<div
												class="avatar avatar-md avatar-indicators avatar-online"
											>
												<img
													src="../../assets/images/avatar/avatar-4.jpg"
													alt=""
													class="rounded-circle"
												/>
											</div>
											<!-- media body -->
											<div class="media-body ml-2">
												<h4 class="mb-0">Sharad Mishra</h4>
												<p class="mb-0 text-muted">Online</p>
											</div>
										</div>
										<div>
											<a
												href="#"
												class="mr-3 text-link texttooltip"
												data-template="phone"
											>
												<i class="fe fe-phone-call font-size-lg"></i>
												<!-- text -->
												<div id="phone" class="d-none">
													<span>Voice Call </span>
												</div>
											</a>
											<a
												href="#"
												class="mr-3 text-link texttooltip"
												data-template="video"
											>
												<i class="fe fe-video font-size-lg"></i>
												<!-- text -->
												<div id="video" class="d-none">
													<span>Video Call </span>
												</div>
											</a>
											<a
												href="#"
												class="text-link texttooltip"
												data-template="adduser"
											>
												<i class="fe fe-user-plus font-size-lg"></i>
												<!-- text -->
												<div id="adduser" class="d-none">
													<span>Add User </span>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="px-4 py-4 h-100 overflow-hidden">
									<!-- media -->
									<div class="media w-lg-40 mb-4">
										<img
											src="../../assets/images/avatar/avatar-4.jpg"
											alt=""
											class="rounded-circle avatar-md"
										/>
										<!-- media body -->
										<div class="media-body ml-3">
											<small>sharad mishra , 09:35</small>
											<div class="d-flex">
												<div class="card mt-2 rounded-top-left-0">
													<div class="card-body p-3">
														<p class="mb-0 text-dark">
															I just start Bootstrap, SCSS and Gulp development
															& setup github repository. simple example content
														</p>
													</div>
												</div>
												<div class="ml-2 mt-2">
													<!-- dropdown -->
													<div class="dropdown dropright">
														<a
															class="text-link"
															href="#"
															role="button"
															id="dropdownMenuLink"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<div
															class="dropdown-menu"
															aria-labelledby="dropdownMenuLink"
														>
															<a class="dropdown-item" href="#"
																><i class="fe fe-copy dropdown-item-icon"></i
																>Copy</a
															>
															<a class="dropdown-item" href="#"
																><i
																	class="fe fe-corner-up-right dropdown-item-icon"
																></i
																>Reply</a
															>
															<a class="dropdown-item" href="#"
																><i
																	class="fe fe-corner-up-left dropdown-item-icon"
																></i
																>Forward</a
															>
															<a class="dropdown-item" href="#"
																><i class="fe fe-star dropdown-item-icon"></i
																>Favourite</a
															>
															<a class="dropdown-item" href="#"
																><i class="fe fe-trash dropdown-item-icon"></i
																>Delete</a
															>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-end mb-4">
										<!-- media -->
										<div class="media w-lg-40">
											<!-- media body -->
											<div class="media-body mr-3 text-right">
												<small> 09:39</small>
												<div class="d-flex">
													<div class="mr-2 mt-2">
														<!-- dropdown -->
														<div class="dropdown dropleft">
															<a
																class="text-link"
																href="#"
																role="button"
																id="dropdownMenuLinkTwo"
																data-toggle="dropdown"
																aria-haspopup="true"
																aria-expanded="false"
															>
																<i class="fe fe-more-vertical"></i>
															</a>
															<!-- dropdown menu -->
															<div
																class="dropdown-menu"
																aria-labelledby="dropdownMenuLinkTwo"
															>
																<a class="dropdown-item" href="#"
																	><i class="fe fe-copy dropdown-item-icon"></i
																	>Copy</a
																>
																<a class="dropdown-item" href="#"
																	><i class="fe fe-edit dropdown-item-icon"></i
																	>Edit</a
																>
																<a class="dropdown-item" href="#"
																	><i
																		class="fe fe-corner-up-right dropdown-item-icon"
																	></i
																	>Reply</a
																>
																<a class="dropdown-item" href="#"
																	><i
																		class="fe fe-corner-up-left dropdown-item-icon"
																	></i
																	>Forward</a
																>
																<a class="dropdown-item" href="#"
																	><i class="fe fe-star dropdown-item-icon"></i
																	>Favourite</a
																>
																<a class="dropdown-item" href="#"
																	><i class="fe fe-trash dropdown-item-icon"></i
																	>Delete</a
																>
															</div>
														</div>
													</div>
													<!-- card -->
													<div
														class="card mt-2 rounded-top-right-0 bg-primary text-white"
													>
														<!-- card body -->
														<div class="card-body text-left p-3">
															<p class="mb-0">
																I just start Bootstrap, SCSS and Gulp
																development & setup github repository.
															</p>
														</div>
													</div>
												</div>
											</div>
											<!-- img -->
											<img
												src="../../assets/images/avatar/avatar-1.jpg"
												alt=""
												class="rounded-circle avatar-md"
											/>
										</div>
									</div>
									<!-- media -->
									<div class="media w-lg-40 mb-4">
										<img
											src="../../assets/images/avatar/avatar-4.jpg"
											alt=""
											class="rounded-circle avatar-md"
										/>
										<!-- media body -->
										<div class="media-body ml-3">
											<small>sharad mishra , 09:42</small>
											<div class="d-flex">
												<div class="card mt-2 rounded-top-left-0">
													<div class="card-body p-3">
														<p class="mb-0 text-dark">Thank you</p>
													</div>
												</div>
												<div class="ml-2 mt-2">
													<!-- dropdown -->
													<div class="dropdown dropright">
														<a
															class="text-link"
															href="#"
															role="button"
															id="dropdownMenuLinkThree"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<div
															class="dropdown-menu"
															aria-labelledby="dropdownMenuLinkThree"
														>
															<a class="dropdown-item" href="#"
																><i class="fe fe-copy dropdown-item-icon"></i
																>Copy</a
															>
															<a class="dropdown-item" href="#"
																><i
																	class="fe fe-corner-up-right dropdown-item-icon"
																></i
																>Reply</a
															>
															<a class="dropdown-item" href="#"
																><i
																	class="fe fe-corner-up-left dropdown-item-icon"
																></i
																>Forward</a
															>
															<a class="dropdown-item" href="#"
																><i class="fe fe-star dropdown-item-icon"></i
																>Favourite</a
															>
															<a class="dropdown-item" href="#"
																><i class="fe fe-trash dropdown-item-icon"></i
																>Delete</a
															>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-end mb-4">
										<!-- media -->
										<div class="media w-lg-40">
											<!-- media body -->
											<div class="media-body mr-3 text-right">
												<small> 09:48</small>
												<div class="d-flex justify-content-end">
													<div class="mr-2 mt-2">
														<!-- dropdown -->
														<div class="dropdown dropleft">
															<a
																class="text-link"
																href="#"
																role="button"
																id="dropdownMenuLinkOne"
																data-toggle="dropdown"
																aria-haspopup="true"
																aria-expanded="false"
															>
																<i class="fe fe-more-vertical"></i>
															</a>
															<!-- dropdown menu -->
															<div
																class="dropdown-menu"
																aria-labelledby="dropdownMenuLinkOne"
															>
																<a class="dropdown-item" href="#"
																	><i class="fe fe-copy dropdown-item-icon"></i
																	>Copy</a
																>
																<a class="dropdown-item" href="#"
																	><i class="fe fe-edit dropdown-item-icon"></i
																	>Edit</a
																>
																<a class="dropdown-item" href="#"
																	><i
																		class="fe fe-corner-up-right dropdown-item-icon"
																	></i
																	>Reply</a
																>
																<a class="dropdown-item" href="#"
																	><i
																		class="fe fe-corner-up-left dropdown-item-icon"
																	></i
																	>Forward</a
																>
																<a class="dropdown-item" href="#"
																	><i class="fe fe-star dropdown-item-icon"></i
																	>Favourite</a
																>
																<a class="dropdown-item" href="#"
																	><i class="fe fe-trash dropdown-item-icon"></i
																	>Delete</a
																>
															</div>
														</div>
													</div>
													<!-- card -->
													<div
														class="card mt-2 rounded-top-right-0 bg-primary text-white"
													>
														<!-- card body -->
														<div class="card-body text-left p-3">
															<p class="mb-0">You are most welcome.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- img -->
											<img
												src="../../assets/images/avatar/avatar-1.jpg"
												alt=""
												class="rounded-circle avatar-md"
											/>
										</div>
									</div>
									<!-- media -->
									<div class="media w-lg-40 mb-4">
										<!-- img -->
										<img
											src="../../assets/images/avatar/avatar-4.jpg"
											alt=""
											class="rounded-circle avatar-md"
										/>
										<!-- media body -->
										<div class="media-body ml-3">
											<small>sharad mishra , 09:50</small>
											<div class="d-flex">
												<!-- card -->
												<div class="card mt-2 rounded-top-left-0">
													<div class="card-body p-3">
														<p class="mb-0 text-dark">
															I just start Bootstrap, SCSS and Gulp development
															& setup github repository. simple example content
														</p>
													</div>
												</div>
												<div class="ml-2 mt-2">
													<!-- dropdown -->
													<div class="dropdown dropright">
														<a
															class="text-link"
															href="#"
															role="button"
															id="dropdownMenuLinkFour"
															data-toggle="dropdown"
															aria-haspopup="true"
															aria-expanded="false"
														>
															<i class="fe fe-more-vertical"></i>
														</a>
														<div
															class="dropdown-menu"
															aria-labelledby="dropdownMenuLinkFour"
														>
															<a class="dropdown-item" href="#"
																><i class="fe fe-copy dropdown-item-icon"></i
																>Copy</a
															>
															<a class="dropdown-item" href="#"
																><i
																	class="fe fe-corner-up-right dropdown-item-icon"
																></i
																>Reply</a
															>
															<a class="dropdown-item" href="#"
																><i
																	class="fe fe-corner-up-left dropdown-item-icon"
																></i
																>Forward</a
															>
															<a class="dropdown-item" href="#"
																><i class="fe fe-star dropdown-item-icon"></i
																>Favourite</a
															>
															<a class="dropdown-item" href="#"
																><i class="fe fe-trash dropdown-item-icon"></i
																>Delete</a
															>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-end mb-4">
										<!-- media -->
										<div class="media w-lg-40">
											<!-- media body -->
											<div class="media-body mr-3 text-right">
												<small>09:52</small>
												<div class="d-flex justify-content-end">
													<div class="mr-2 mt-2">
														<!-- dropdown -->
														<div class="dropdown dropleft">
															<a
																class="text-link"
																href="#"
																role="button"
																id="dropdownMenuLinkSix"
																data-toggle="dropdown"
																aria-haspopup="true"
																aria-expanded="false"
															>
																<i class="fe fe-more-vertical"></i>
															</a>
															<div
																class="dropdown-menu"
																aria-labelledby="dropdownMenuLinkSix"
															>
																<a class="dropdown-item" href="#"
																	><i class="fe fe-copy dropdown-item-icon"></i
																	>Copy</a
																>
																<a class="dropdown-item" href="#"
																	><i class="fe fe-edit dropdown-item-icon"></i
																	>Edit</a
																>
																<a class="dropdown-item" href="#"
																	><i
																		class="fe fe-corner-up-right dropdown-item-icon"
																	></i
																	>Reply</a
																>
																<a class="dropdown-item" href="#"
																	><i
																		class="fe fe-corner-up-left dropdown-item-icon"
																	></i
																	>Forward</a
																>
																<a class="dropdown-item" href="#"
																	><i class="fe fe-star dropdown-item-icon"></i
																	>Favourite</a
																>
																<a class="dropdown-item" href="#"
																	><i class="fe fe-trash dropdown-item-icon"></i
																	>Delete</a
																>
															</div>
														</div>
													</div>
													<!-- card -->
													<div
														class="card mt-2 rounded-top-right-0 bg-primary text-white"
													>
														<!-- card body -->
														<div class="card-body text-left p-3">
															<p class="mb-0">Ok I will complete.</p>
														</div>
													</div>
												</div>
											</div>
											<!-- img -->
											<img
												src="../../assets/images/avatar/avatar-1.jpg"
												alt=""
												class="rounded-circle avatar-md"
											/>
										</div>
									</div>
								</div>
								<!-- chart footer -->
								<div class="bg-light px-4 py-3 chat-footer">
									<div class="bg-white p-2 rounded-lg shadow-sm">
										<form>
											<div class="position-relative">
												<textarea
													class="form-control border-0 form-control-simple no-resize"
													placeholder="Type a New Message"
													rows="1"
												></textarea>
											</div>
											<div class="position-absolute right-0 mt-n7 mr-4">
												<button
													type="submit"
													class="font-size-lg btn text-primary btn-focus-none"
												>
													<i class="fe fe-send"></i>
												</button>
											</div>
										</form>
									</div>
									<div class="mt-3 d-flex">
										<div>
											<a href="#" class="text-link mr-2 font-size-md"
												><i class="bi-emoji-smile"></i
											></a>
											<a href="#" class="text-link mr-2 font-size-md"
												><i class="bi-paperclip"></i
											></a>
											<a href="#" class="text-link mr-3 font-size-md"
												><i class="bi-mic"></i
											></a>
										</div>
										<div class="dropdown">
											<a
												href="#"
												class="text-link font-size-md"
												id="moreAction"
												data-toggle="dropdown"
												aria-haspopup="true"
												aria-expanded="false"
											>
												<i class="fe fe-more-horizontal"></i>
											</a>
											<div class="dropdown-menu" aria-labelledby="moreAction">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#"
													>Something else here</a
												>
											</div>
										</div>
									</div>
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

<!-- Mirrored from codescandy.com/geeks/pages/dashboard/chat-app.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:33:17 GMT -->
</html>

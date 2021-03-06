<?php include '../../dbcon.php'; ?>

<?php include "../../header.php"; ?>
	<!-- Bg -->
	<div class="py-20" style="
				background: url(../assets/images/background/profile-bg.jpg) no-repeat;
				background-position: center;
			"></div>
	<!-- User info -->
	<div class="card p-lg-2 pt-2 pt-lg-0 rounded-0 border-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-8 col-md-8 col-12">
					<div class="d-flex align-items-center">
						<div class="position-relative mt-n9">
							<img src="../assets/images/avatar/avatar-1.jpg" alt=""
								class="rounded-circle avatar-xxl border-white border-width-4 position-relative" >
							<a href="#!" class="position-absolute top-0 right-0 mr-2" data-toggle="tooltip" data-placement="top"
								title="Verified">
								<img src="../assets/images/svg/checked-mark.svg" alt="" height="30" width="30" />
							</a>
						</div>
						<div class="ml-3">
							<div class="d-flex align-items-center">
								<h3 class="mb-0 font-weight-bold mr-2">Jenny Wilson</h3>
								<span class="badge badge-light-primary text-primary">Instructor</span>
							</div>
							<span class="font-size-xs">Front-end Developer, Designer, Teacher</span>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<div class="font-size-md mt-4 mt-lg-0 pb-2 pb-lg-0 d-lg-flex justify-content-end">
						<a href="#!" class="mdi mdi-youtube text-muted mr-2"></a>
						<a href="#!" class="mdi mdi-link-variant text-muted mr-2"></a>
						<a href="#!" class="mdi mdi-instagram text-muted mr-2"></a>
						<a href="#!" class="mdi mdi-facebook text-muted mr-2"></a>
						<a href="#!" class="mdi mdi-twitter text-muted"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Content -->
	<div class="py-5 py-md-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-12">
					<!-- Card -->
					<div class="card border-0 mb-4">
						<!-- Card body -->
						<div class="card-body">
							<h4>About me</h4>
							<p>
								I am an Innovation designer focussing on UX/UI based in
								Berlin. As a creative resident at Figma explored the city of
								the future and how new technologies like AI, voice control,
								and augmented reality will change our interfaces.
							</p>
							<a href="#!" class="btn-link"> Read more</a>
						</div>
					</div>
					<!-- Card -->
					<div class="card border-0 mb-4 mb-lg-0">
						<!-- Card body -->
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
								<div>
									<h4 class="mb-0 font-weight-bold">32</h4>
									<p class="font-size-xs mb-0">Courses</p>
								</div>
								<div>
									<span><i class="fe fe-file-text font-size-lg"></i></span>
								</div>
							</div>
							<div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
								<div>
									<h4 class="mb-0 font-weight-bold">11,604</h4>
									<p class="font-size-xs mb-0">Total Students</p>
								</div>
								<div>
									<span><i class="fe fe-users font-size-lg"></i></span>
								</div>
							</div>
							<div class="d-flex align-items-center justify-content-between">
								<div>
									<h4 class="mb-0 font-weight-bold">12,230</h4>
									<p class="font-size-xs mb-0">Reviews</p>
								</div>
								<div>
									<span><i class="fe fe-star font-size-lg"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-8 col-12">
					<!-- Card -->
					<div class="card border-0">
						<!-- Card header -->
						<div class="card-header">
							<h4 class="mb-0">
								My Courses <span class="text-muted font-size-xs">(12)</span>
							</h4>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<!-- List group -->
							<ul class="list-group list-group-flush">
								<!-- List group item -->
								<li class="list-group-item px-0 pb-3 pt-0">
									<div class="d-flex align-items-center justify-content-between">
										<a href="#!">
											<div class="d-lg-flex align-items-center">
												<div>
													<img src="../assets/images/course/course-wordpress.jpg" alt="" class="rounded img-4by3-lg" />
												</div>
												<div class="ml-lg-3 mt-2 mt-lg-0">
													<h4 class="text-primary-hover">
														Create a Website with WordPress
														<span class="badge badge-light-success text-success">New</span>
													</h4>
													<ul class="list-inline font-size-xs mb-0 text-inherit">
														<li class="list-inline-item">
															<i class="far fa-clock mr-1"></i>3h 30m
														</li>
														<li class="list-inline-item">
															<svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
																<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
																<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
															</svg>
															Beginner
														</li>
														<li class="list-inline-item">
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star text-warning"></i>
															<span class="text-warning">4.5</span>
															<span class="text-muted">(1,345)</span>
														</li>
													</ul>
												</div>
											</div>
										</a>
										<div>
											<!-- Dropdown -->
											<span class="dropdown dropleft">
												<a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown"
													data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												</a>
												<span class="dropdown-menu" aria-labelledby="courseDropdown">
													<span class="dropdown-header">Share</span>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
													<a class="dropdown-item" href="#!"><i class="fab fa-linkedin dropdown-item-icon"></i>Linked
														In</a>
													<a class="dropdown-item" href="#!"><i class="fas fa-copy dropdown-item-icon"></i>Copy Link</a>
												</span>
											</span>
										</div>
									</div>
								</li>
								<!-- List group item -->
								<li class="list-group-item px-0 py-3">
									<div class="d-flex align-items-center justify-content-between">
										<a href="#!">
											<div class="d-lg-flex align-items-center">
												<div>
													<img src="../assets/images/course/course-javascript.jpg" alt="" class="rounded img-4by3-lg" />
												</div>
												<div class="ml-lg-3 mt-2 mt-lg-0">
													<h4 class="text-primary-hover">
														JavaScript Fundamentals
													</h4>
													<ul class="list-inline font-size-xs mb-0 text-inherit">
														<li class="list-inline-item">
															<i class="far fa-clock mr-1"></i>1h 20m
														</li>
														<li class="list-inline-item">
															<svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
																<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
																<rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE"></rect>
															</svg>
															Advance
														</li>
														<li class="list-inline-item">
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star text-light"></i>
															<span class="text-warning">4</span>
															<span class="text-muted">(1,000)</span>
														</li>
													</ul>
												</div>
											</div>
										</a>
										<div>
											<!-- Dropdown -->
											<span class="dropdown dropleft">
												<a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown1"
													data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												</a>
												<span class="dropdown-menu" aria-labelledby="courseDropdown1">
													<span class="dropdown-header">Share</span>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
													<a class="dropdown-item" href="#!"><i class="fab fa-linkedin dropdown-item-icon"></i>Linked
														In</a>
													<a class="dropdown-item" href="#!"><i class="fas fa-copy dropdown-item-icon"></i>Copy Link</a>
												</span>
											</span>
										</div>
									</div>
								</li>
								<!-- List group item -->
								<li class="list-group-item px-0 py-3">
									<div class="d-flex align-items-center justify-content-between">
										<a href="#!">
											<div class="d-lg-flex align-items-center">
												<div>
													<img src="../assets/images/course/course-angular.jpg" alt="" class="rounded img-4by3-lg" />
												</div>
												<div class="ml-lg-3 mt-2 mt-lg-0">
													<h4 class="text-primary-hover">
														AngularJS Forms Using Bootstrap
													</h4>
													<ul class="list-inline font-size-xs mb-0 text-inherit">
														<li class="list-inline-item">
															<i class="far fa-clock mr-1"></i>2h 30m
														</li>
														<li class="list-inline-item">
															<svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
																<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
																<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
															</svg>
															Beginner
														</li>
														<li class="list-inline-item">
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star text-warning"></i>
															<span class="text-warning">4.5</span>
															<span class="text-muted">(900)</span>
														</li>
													</ul>
												</div>
											</div>
										</a>
										<div>
											<!-- Dropdown -->
											<span class="dropdown dropleft">
												<a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown2"
													data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												</a>
												<span class="dropdown-menu" aria-labelledby="courseDropdown2">
													<span class="dropdown-header">Share</span>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
													<a class="dropdown-item" href="#!"><i class="fab fa-linkedin dropdown-item-icon"></i>Linked
														In</a>
													<a class="dropdown-item" href="#!"><i class="fas fa-copy dropdown-item-icon"></i>Copy Link</a>
												</span>
											</span>
										</div>
									</div>
								</li>
								<!-- List group item -->
								<li class="list-group-item px-0 py-3">
									<div class="d-flex align-items-center justify-content-between">
										<a href="#!">
											<div class="d-lg-flex align-items-center">
												<div>
													<img src="../assets/images/course/course-python.jpg" alt="" class="rounded img-4by3-lg" />
												</div>
												<div class="ml-lg-3 mt-2 mt-lg-0">
													<h4 class="text-primary-hover">
														Get start with Python from base
													</h4>
													<ul class="list-inline font-size-xs mb-0 text-inherit">
														<li class="list-inline-item">
															<i class="far fa-clock mr-1"></i>1h
														</li>
														<li class="list-inline-item">
															<svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
																<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
																<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
															</svg>
															Intermediate
														</li>
														<li class="list-inline-item">
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star text-warning"></i>
															<span class="text-warning">4.5</span>
															<span class="text-muted">(1,900)</span>
														</li>
													</ul>
												</div>
											</div>
										</a>
										<div>
											<!-- Dropdown -->
											<span class="dropdown dropleft">
												<a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown3"
													data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												</a>
												<span class="dropdown-menu" aria-labelledby="courseDropdown3">
													<span class="dropdown-header">Share</span>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
													<a class="dropdown-item" href="#!"><i class="fab fa-linkedin dropdown-item-icon"></i>Linked
														In</a>
													<a class="dropdown-item" href="#!"><i class="fas fa-copy dropdown-item-icon"></i>Copy Link</a>
												</span>
											</span>
										</div>
									</div>
								</li>
								<!-- List group item -->
								<li class="list-group-item px-0 py-3">
									<div class="d-flex align-items-center justify-content-between">
										<a href="#!">
											<div class="d-lg-flex align-items-center">
												<div>
													<img src="../assets/images/course/course-laravel.jpg" alt="" class="rounded img-4by3-lg" />
												</div>
												<div class="ml-lg-3 mt-2 mt-lg-0">
													<h4 class="text-primary-hover">
														The Ultimate Advanced Laravel..
													</h4>
													<ul class="list-inline font-size-xs mb-0 text-inherit">
														<li class="list-inline-item">
															<i class="far fa-clock mr-1"></i>2h 30m
														</li>
														<li class="list-inline-item">
															<svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
																<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
																<rect x="11" y="2" width="2" height="12" rx="1" fill="#754FFE"></rect>
															</svg>
															Advance
														</li>
														<li class="list-inline-item">
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star text-warning"></i>
															<span class="text-warning">4.5</span>
															<span class="text-muted">(1,900)</span>
														</li>
													</ul>
												</div>
											</div>
										</a>
										<div>
											<!-- Dropdown -->
											<span class="dropdown dropleft">
												<a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown4"
													data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												</a>
												<span class="dropdown-menu" aria-labelledby="courseDropdown4">
													<span class="dropdown-header">Share</span>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
													<a class="dropdown-item" href="#!"><i class="fab fa-linkedin dropdown-item-icon"></i>Linked
														In</a>
													<a class="dropdown-item" href="#!"><i class="fas fa-copy dropdown-item-icon"></i>Copy Link</a>
												</span>
											</span>
										</div>
									</div>
								</li>
								<!-- List group item -->
								<li class="list-group-item px-0 py-3">
									<div class="d-flex align-items-center justify-content-between">
										<a href="#!">
											<div class="d-lg-flex align-items-center">
												<div>
													<img src="../assets/images/course/course-gatsby.jpg" alt="" class="rounded img-4by3-lg" />
												</div>
												<div class="ml-lg-3 mt-2 mt-lg-0">
													<h4 class="text-primary-hover">
														The Ultimate Advanced Gatsby Course..
													</h4>
													<ul class="list-inline font-size-xs mb-0 text-inherit">
														<li class="list-inline-item">
															<i class="far fa-clock mr-1"></i>2h 30m
														</li>
														<li class="list-inline-item">
															<svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
																<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
																<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
															</svg>
															Beginner
														</li>
														<li class="list-inline-item">
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-light"></i>
															<i class="mdi mdi-star text-light"></i>
															<span class="text-warning">3.5</span>
															<span class="text-muted">(4,900)</span>
														</li>
													</ul>
												</div>
											</div>
										</a>
										<div>
											<!-- Dropdown -->
											<span class="dropdown dropleft">
												<a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown5"
													data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												</a>
												<span class="dropdown-menu" aria-labelledby="courseDropdown5">
													<span class="dropdown-header">Share</span>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
													<a class="dropdown-item" href="#!"><i class="fab fa-linkedin dropdown-item-icon"></i>Linked
														In</a>
													<a class="dropdown-item" href="#!"><i class="fas fa-copy dropdown-item-icon"></i>Copy Link</a>
												</span>
											</span>
										</div>
									</div>
								</li>
								<!-- List group item -->
								<li class="list-group-item px-0 pb-0 pt-3">
									<div class="d-flex align-items-center justify-content-between">
										<a href="#!">
											<div class="d-lg-flex align-items-center">
												<div>
													<img src="../assets/images/course/course-css.jpg" alt="" class="rounded img-4by3-lg" />
												</div>
												<div class="ml-lg-3 mt-2 mt-lg-0">
													<h4 class="text-primary-hover">
														Learn CSS Language....
													</h4>
													<ul class="list-inline font-size-xs mb-0 text-inherit">
														<li class="list-inline-item">
															<i class="far fa-clock mr-1"></i>2h 30m
														</li>
														<li class="list-inline-item">
															<svg class="mt-n1" width="16" height="16" viewBox="0 0 16 16" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
																<rect x="7" y="5" width="2" height="9" rx="1" fill="#754FFE"></rect>
																<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
															</svg>
															Intermediate
														</li>
														<li class="list-inline-item">
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-warning"></i>
															<i class="mdi mdi-star mr-n1 text-light"></i>
															<i class="mdi mdi-star text-light"></i>
															<span class="text-warning">3.5</span>
															<span class="text-muted">(2,900)</span>
														</li>
													</ul>
												</div>
											</div>
										</a>
										<div>
											<!-- Dropdown -->
											<span class="dropdown dropleft">
												<a class="text-muted text-decoration-none" href="#!" role="button" id="courseDropdown6"
													data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fe fe-more-vertical"></i>
												</a>
												<span class="dropdown-menu" aria-labelledby="courseDropdown6">
													<span class="dropdown-header">Share</span>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-facebook dropdown-item-icon"></i>Facebook</a>
													<a class="dropdown-item" href="#!"><i
															class="fab fa-twitter dropdown-item-icon"></i>Twitter</a>
													<a class="dropdown-item" href="#!"><i class="fab fa-linkedin dropdown-item-icon"></i>Linked
														In</a>
													<a class="dropdown-item" href="#!"><i class="fas fa-copy dropdown-item-icon"></i>Copy Link</a>
												</span>
											</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row align-items-center no-gutters border-top py-2">
            <!-- Desc -->
            <div class="col-md-6 col-12 text-center text-md-left">
                <span>?? 2021 Geeks. All Rights Reserved.</span>
            </div>
              <!-- Links -->
            <div class="col-12 col-md-6">
                <nav class="nav nav-footer justify-content-center justify-content-md-end">
                    <a class="nav-link active pl-0" href="#!">Privacy</a>
                    <a class="nav-link" href="#!">Terms </a>
                    <a class="nav-link" href="#!">Feedback</a>
                    <a class="nav-link" href="#!">Support</a>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include "../../../footer.php" ?>

<?php include_once "./adminheader.php"; ?>

	<div class="pt-5 pb-5">
		<div class="container">
				<!-- User info -->
			<div class="row align-items-center">
				<div class="col-xl-12 col-lg-12 col-md-12 col-12">
					<!-- Bg -->
					<div class="pt-16 rounded-top" style="
								background: url(../../assets/images/background/profile-bg.jpg) no-repeat;
								background-size: cover;
							"></div>
					<div
						class="d-flex align-items-end justify-content-between bg-white px-4 pt-2 pb-4 rounded-none rounded-bottom shadow-sm">
						<div class="d-flex align-items-center">
							<div class="mr-2 position-relative d-flex justify-content-end align-items-end mt-n5">
								<img src="../../assets/images/avatar/avatar-3.jpg" class="avatar-xl rounded-circle border-width-4 border-white"
									alt="" />
							</div>
							<div class="lh-1">
								<h2 class="mb-0">
									Stella Flores
									<a href="#!" class="text-decoration-none" data-toggle="tooltip" data-placement="top" title="Beginner">
										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE"></rect>
											<rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9"></rect>
											<rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9"></rect>
										</svg>
									</a>
								</h2>
								<p class="mb-0 d-block">@stellaflores</p>
							</div>
						</div>
						<div>
							<a href="dashboard-student.php" class="btn btn-outline-primary btn-sm d-none d-md-block">Go to
								Dashboard</a>
						</div>
					</div>
				</div>
			</div>
	<!-- Content -->
			<div class="row mt-0 mt-md-4">
				<div class="col-lg-3 col-md-4 col-12">
					<!-- Side navbar -->
					<nav class="navbar navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav">
						<!-- Menu -->
						<a class="d-xl-none d-lg-none d-md-none text-inherit font-weight-bold" href="#!">Menu</a>
						<!-- Button -->
						<button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button"
							data-toggle="collapse" data-target="#sidenav" aria-controls="sidenav" aria-expanded="false"
							aria-label="Toggle navigation">
							<span class="fe fe-menu"></span>
						</button>
						<!-- Collapse navbar -->
						<div class="collapse navbar-collapse" id="sidenav">
							<div class="navbar-nav flex-column">
								<span class="navbar-header">Subscription</span>
								<!-- List -->
								<ul class="list-unstyled ml-n2 mb-4">
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="student-subscriptions.php"><i class="fe fe-calendar nav-icon"></i>My
											Subscriptions</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="billing-info.php"><i class="fe fe-credit-card nav-icon"></i>Billing
											Info</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="payment-method.php"><i class="fe fe-credit-card nav-icon"></i>Payment</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="invoice.php"><i class="fe fe-clipboard nav-icon"></i>Invoice</a>
									</li>
								</ul>
								<span class="navbar-header">Account Settings</span>
                <!-- List -->
								<ul class="list-unstyled ml-n2 mb-0">
									<!-- Nav item -->
									<li class="nav-item active">
										<a class="nav-link" href="profile-edit.php"><i class="fe fe-settings nav-icon"></i>Edit Profile</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="security.php"><i class="fe fe-user nav-icon"></i>Security</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="social-profile.php"><i class="fe fe-refresh-cw nav-icon"></i>Social
											Profiles</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="notifications.php"><i class="fe fe-bell nav-icon"></i>Notifications</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="profile-privacy.php"><i class="fe fe-lock nav-icon"></i>Profile
											Privacy</a>
									</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="delete-profile.php"><i class="fe fe-trash nav-icon"></i>Delete
											Profile</a>
									</li>
										<!-- Nav item -->
										<li class="nav-item">
											<a class="nav-link " href="linked-accounts.php"><i class="fe fe-user nav-icon"></i>Linked Accounts</a>
										</li>
									<!-- Nav item -->
									<li class="nav-item">
										<a class="nav-link" href="../index.php"><i class="fe fe-power nav-icon"></i>Sign Out</a>
									</li>
								</ul>
							</div>
						</div>
					</nav>
				</div>	
				<div class="col-lg-9 col-md-8 col-12">
					<!-- Card -->
					<div class="card">
						<!-- Card header -->
						<div class="card-header">
							<h3 class="mb-0">Profile Details</h3>
							<p class="mb-0">
								You have full control to manage your own account setting.
							</p>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<div class="d-lg-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center mb-4 mb-lg-0">
									<img src="../../assets/images/avatar/avatar-3.jpg" id="img-uploaded" class="avatar-xl rounded-circle" alt="" />
									<div class="ml-3">
										<h4 class="mb-0">Your avatar</h4>
										<p class="mb-0">
											PNG or JPG no bigger than 800px wide and tall.
										</p>
									</div>
								</div>
								<div>
									<a href="#!" class="btn btn-outline-white btn-sm">Update</a>
									<a href="#!" class="btn btn-outline-danger btn-sm">Delete</a>
								</div>
							</div>
							<hr class="my-5" />
							<div>
								<h4 class="mb-0">Personal Details</h4>
								<p class="mb-4">
									Edit your personal information and address.
								</p>
								<!-- Form -->
								<form class="form-row">
									<!-- First name -->
									<div class="form-group col-12 col-md-6">
										<label class="form-label" for="fname">First Name</label>
										<input type="text" id="fname" class="form-control" placeholder="First Name" required />
									</div>
									<!-- Last name -->
									<div class="form-group col-12 col-md-6">
										<label class="form-label" for="lname">Last Name</label>
										<input type="text" id="lname" class="form-control" placeholder="Last Name" required />
									</div>
									<!-- Phone -->
									<div class="form-group col-12 col-md-6">
										<label class="form-label" for="phone">Phone</label>
										<input type="text" id="phone" class="form-control" placeholder="Phone" required />
									</div>
									<!-- Birthday -->
									<div class="form-group col-12 col-md-6">
										<label class="form-label" for="birth">Birthday</label>
										<input class="form-control flatpickr" type="text" placeholder="Birth of Date" id="birth"
											name="birth" />
									</div>
									<!-- Address -->
									<div class="form-group col-12 col-md-6">
										<label class="form-label" for="address">Address Line 1</label>
										<input type="text" id="address" class="form-control" placeholder="Address" required />
									</div>
									<!-- Address -->
									<div class="form-group col-12 col-md-6">
										<label class="form-label" for="address2">Address Line 2</label>
										<input type="text" id="address2" class="form-control" placeholder="Address" required />
									</div>
									<!-- State -->
									<div class="form-group col-12 col-md-6">
										<label class="form-label">State</label>
										<select class="selectpicker" data-width="100%">
											<option value="">Select State</option>
											<option value="1">Gujarat</option>
											<option value="2">Rajasthan</option>
											<option value="3">Maharashtra</option>
										</select>
									</div>
									<!-- Country -->
									<div class="form-group col-12 col-md-6">
										<label class="form-label">Country</label>
										<select class="selectpicker" data-width="100%">
											<option value="">Select Country</option>
											<option value="1">India</option>
											<option value="2">UK</option>
											<option value="3">USA</option>
										</select>
									</div>
									<div class="col-12">
										<!-- Button -->
										<button class="btn btn-primary" type="submit">
											Update Profile
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!-- Scripts -->
	<?php include_once "./adminfooter.php"; ?>
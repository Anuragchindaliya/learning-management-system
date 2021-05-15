<?php include "pageheader.php" ?>
<!-- Page content -->
<div class="container d-flex flex-column">
	<div class="row align-items-center justify-content-center no-gutters min-vh-100">
		<div class="col-lg-5 col-md-8 py-8 py-xl-0">
			<!-- Card -->
			<div class="card shadow">
				<!-- Card body -->
				<div class="card-body p-6">
					<div class="mb-4">
						<a href="../index.html"><img src="../assets/images/brand/logo/logo-icon.svg" class="mb-4" alt="" /></a>
						<h1 class="mb-1 font-weight-bold">Sign up</h1>
						<span>Already have an account?
							<a href="sign-in.html" class="ml-1">Sign in</a></span>
					</div>
					<!-- Form -->
					<form action="process.php" method="POST" id="addstuform">
						<!-- Username -->
						<div class="form-group">
							<label for="username" class="form-label">User Name</label>
							<input type="text" id="username" class="form-control" name="username" placeholder="User Name" />
							<strong id="namestatus" class="text-danger"></strong>
						</div>
						<!-- Email -->
						<div class="form-group">
							<label for="email" class="form-label">Email</label>
							<input type="email" id="email" class="form-control" name="email" placeholder="Email address here"  />
							<strong id="emailstatus" class="text-danger"></strong>
						</div>
						<!-- Password -->
						<div class="form-group">
							<label for="password" class="form-label">Password</label>
							<input type="password" id="password" class="form-control" name="password" placeholder="**************"  />
							<strong id="passwordstatus" class="text-danger"></strong>

						</div>
						<!-- Checkbox -->
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="agreeCheck" required/>
								<label class="custom-control-label" for="agreeCheck"><span>I agree to the <a href="terms-condition-page.html">Terms of
											Service </a>and
										<a href="terms-condition-page.html">Privacy Policy.</a></span></label>
							</div>
						</div>
						<div>
							<!-- Button -->
							<button type="submit" class="btn btn-primary btn-block">
								Create Free Account
							</button>
						</div>
						<span class="addstatus"></span>
						<!-- <hr class="my-4" />
							<div class="mt-4 text-center">
								Facebook
								<a href="#!" class="btn-social btn-social-outline btn-facebook">
									<i class="fab fa-facebook"></i>
								</a>
								Twitter
								 <a href="#!" class="btn-social btn-social-outline btn-twitter">
									<i class="fab fa-twitter"></i>
								</a>
								LinkedIn
								 <a href="#!" class="btn-social btn-social-outline btn-linkedin">
									<i class="fab fa-linkedin"></i>
								</a>
								GitHub
								 <a href="#!" class="btn-social btn-social-outline btn-github">
									<i class="fab fa-github"></i>
								</a>
							</div> -->
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include "pagefooter.php" ?>
<script>
	$(document).ready(function() {
		$("#addstuform").submit(function(event) {
			var nameval =$("#username").val();
			var emailval =$("#email").val();
			var passwordval =$("#password").val();
			var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/i;
			if(nameval.trim()==''){
				$('#namestatus').text("Please enter Name!");
				$('#username').focus();
				return false;
			} else if(emailval.trim()==''){
				$('#emailstatus').text("Please enter Email!");
				$('#email').focus();
				return false;
			}
			else if(passwordval.trim()==''){
				$('#passwordstatus').text("Please enter Password!");
				$('#password').focus();
				return false;
			}else if(emailval.trim()=='' && regex.test(emailval)){
				$('#emailstatus').text("Please Valid Eamil e.g example@gmail.com!");
				$('#email').focus();
				return false;
			}
			var formData = {
				stusignup: "signup",
				stuname: nameval,
				stuemail:emailval,
				stupassword: passwordval
			};

			$.ajax({
				type: "POST",
				url: "../student/addstudent.php",
				data: formData,
				dataType: "json",
				// encode: true,
				success: function(data){
					console.log(data);
					if (data == "OK") {
					$(".addstatus").html(`<div class="alert alert-success alert-dismissible fade show" role="alert mt-2">
  								Account Created Successfully
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>`);

						clearform();
					
				} else {
					$(".addstatus").html(`Registration successfully`);
				}
				}
			}).done(function(data) {
				// console.log(data);
				// setInterval(function() {
				// 		$(".addstatus").slideDown();
				// 	}, 2000);
				$('#namestatus').text("");
			});

			event.preventDefault();
			return false;
		});
	});

	function clearform(){
		$("#addstuform")[0].reset();
		$('#namestatus').text("");
		$('#emailstatus').text("");
		$('#paswordstatus').text("");
	}
	// function addstu(e) {
	// 	e.preventDefault();
	// 	var stuname = $("#username").val();
	// 	var stuemail = $("#email").val();
	// 	var stupassword = $("#password").val();
	// 	console.log(stuname);
	// 	console.log(stuemail);
	// 	console.log(stupassword);

	// }
</script>
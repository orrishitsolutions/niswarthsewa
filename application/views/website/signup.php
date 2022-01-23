<?php include('include/header.php'); ?>

<main id="content" role="main">
	<div id="banner-tops" class="bg-gray-13 bg-md-transparent" style="background-image: url(<?= base_url('assets/frontend/img/bannertop.jpg'); ?>); height: 350px; padding: 150px 0px; background-size: cover; background-position: center center;">
		<div class="container">
			<div class="my-md-0 breadcrumb20">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
						<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Account</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="my-4 my-xl-8">

			<div class="row">
				<div class="col-md-5 ml-xl-auto mr-md-auto mr-xl-0 mb-8 mb-md-0">
					<div class="colampoxe">
						<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
							<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Login</h3>
						</div>
						<?= !empty($login['error']) ? $login['error'] : ""; ?>
						<?= !empty($login['success']) ? $login['success'] : ""; ?>
						<p class="text-gray-901 mb-4">Welcome back! Sign in to your account.</p>
						<form class="js-validate" novalidate="novalidate" method="post" action="<?= base_url("login"); ?>" >
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
							<div class="js-form-message form-group"><input value="<?= !empty($login['login_email']) ? $login['login_email'] : ""; ?>" type="email" class="form-control" name="login_email" id="signinSrEmailExample3" placeholder="Email address" aria-label="Email address" requireddata-msg="Please enter a valid email address."data-error-class="u-has-error"data-success-class="u-has-success"></div>
							<div class="js-form-message form-group"><input value="<?= !empty($login['login_password']) ? $login['login_password'] : ""; ?>" type="password" class="form-control" name="login_password" id="signinSrPasswordExample2" placeholder="Password" aria-label="Password" requireddata-msg="Your password is invalid. Please try again."data-error-class="u-has-error"data-success-class="u-has-success"></div>
							<div class="js-form-message mb-3">
								<div class="custom-control custom-checkbox d-flex align-items-center"><input type="checkbox" class="custom-control-input" id="rememberCheckbox" name="rememberCheckbox" requireddata-error-class="u-has-error"data-success-class="u-has-success"><label class="custom-control-label form-label" for="rememberCheckbox">Remember me</label></div>
							</div>
							<div class="mb-1">
								<div class="mb-3"><button name="login" value="submit" type="submit" class="btn btn-primary-dark-w px-5">Login</button></div>
								<div class="mb-2"><a class="text-blue" href="#">Lost your password?</a></div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-1 d-none d-md-block">
					<div class="flex-content-center h-100">
						<div class="width-1 bg-1 h-100"></div>
						<div class="width-50 height-50 border border-color-1 rounded-circle flex-content-center font-italic bg-white position-absolute">or</div>
					</div>
				</div>
				<div class="col-md-5 ml-md-auto ml-xl-0 mr-xl-auto">
					<div class="colampoxe">
						<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
							<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Register</h3>
						</div>
						<?= !empty($signup['error']) ? $signup['error'] : ""; ?>
						<?= !empty($signup['success']) ? $signup['success'] : ""; ?>
						<p class="text-gray-901 mb-4">Create new account today to reap the benefits of a personalized shopping experience.</p>
						<form class="js-validate" novalidate="novalidate" method="post" action="<?= base_url("signup"); ?>" >
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
							<div class="js-form-message form-group mb-5"><input value="<?= !empty($signup['email']) ? $signup['email'] : ""; ?>" type="email" class="form-control" name="email" placeholder="Email address" ></div>
							<div class="js-form-message form-group mb-5"><input type="password" class="form-control" name="password" placeholder="Password" ></div>
							<p class="text-gray-901 mb-4">Your personal data will be used to support your experience throughout this website, to manage your account, and for other purposes described in our <a href="privacy-policy.html" class="text-blue">privacy policy.</a></p>
							<div class="mb-600">
								<div class="mb-3"><button name="register" value="submit" type="submit" class="btn btn-primary-dark-w px-5">Register</button></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php include('include/footer.php'); ?>
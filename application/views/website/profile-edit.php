<?php include('include/header.php'); ?>
<main id="content" role="main" class="checkout-page">
	<div id="banner-tops" class="bg-gray-13 bg-md-transparent" style="background-image: url(<?= base_url("assets/frontend/upload/images/bannertop.jpg"); ?>);">
		<div class="container">
			<div class="my-md-0 breadcrumb20">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
						<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Profile
						</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<div class="reservation000225">
		<section class="luxry pt-5 pb-5" style="padding-top:0px !important">

			<div class="container min-container">

				<div class="row">
					<div class="col-md-12 col-sm-12 col-12">

						<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
							<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Hello <?= $controller->profile['first_name'].' '.$controller->profile['middle_name'].' '.$controller->profile['last_name']; ?> </h3><span><a style="color: #0a1122;" href="<?= base_url("profile"); ?>" >Back</a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-12">
						<div class="rhods">

							<div class="first-list">
								<img src="assets/img/profile.png" alt="" style="width: 100px; margin-bottom: 16px;">
								<h3><?= $controller->profile['first_name'].' '.$controller->profile['middle_name'].' '.$controller->profile['last_name']; ?></h3>
								<p> The Ngo Plan Member since <?= !empty($controller->profile['registered_at']) ? date("M d", strtotime($controller->profile['registered_at'])) : ""; ?></p>

							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="pb-5">
			<div class="container min-container">
				<div class="divaridkldf">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-12">
							<h3>
								Edit Profile
							</h3>
						</div>
					</div>
					<div class="row">
						<?= !empty($login['error']) ? $login['error'] : ""; ?>
						<?= !empty($login['success']) ? $login['success'] : ""; ?>
						<form style="width: 100%;" class="js-validate" novalidate="novalidate" method="post" action="<?= base_url("profile/edit"); ?>" >
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
							<div class="form-group" style="width: 100%">
								<input value="<?= !empty($login['first_name']) ? $login['first_name']." ".(!empty($login['middle_name']) ? $login['middle_name']." " : "").$login['last_name'] : ""; ?>" type="name" class="form-control" name="name" placeholder="Name" >
							</div>
							<div class="form-group" style="width: 100%">
								<textarea placeholder="About me (Optional)" class="form-control" name="intro" ><?= !empty($login['intro']) ? $login['intro'] : ""; ?></textarea>
							</div>
							<hr>
							<div class="form-group" style="width: 100%">
								<input value="<?= !empty($login['mobile']) ? $login['mobile'] : ""; ?>" type="mobile" class="form-control" name="mobile" placeholder="Phone Number" >
							</div>
							<div class="form-group" style="width: 100%">
								<input value="<?= !empty($login['email']) ? $login['email'] : ""; ?>" type="email" class="form-control" name="email" placeholder="Email" >
								<span class="note">Your email is never shared with external parties nor do we use it to spam you in any way.</span>
							</div>
							<div class="mb-1">
								<div class="mb-3"><button name="login" value="submit" type="submit" class="btn btn-primary-dark-w px-5">Save Changes</button></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

	</div>
</main>



<?php include('include/footer.php'); ?>

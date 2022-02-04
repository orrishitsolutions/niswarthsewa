<?php include('include/header.php'); ?>

<main id="content" role="main" class="checkout-page">
	<div id="banner-tops" class="bg-gray-13 bg-md-transparent"
		 style="background-image: url(<?= base_url("assets/frontend/upload/images/bannertop.jpg"); ?>);">
		<div class="container">
			<div class="my-md-0 breadcrumb20">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
						<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="<?= base_url(); ?>">Home</a>
						</li>
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
							<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">
								Hello <?= $controller->profile['first_name'] . ' ' . $controller->profile['middle_name'] . ' ' . $controller->profile['last_name']; ?></h3>
							<?php
							if (in_array($login['user_type'], [2,3])) {
								?>
								<div><a style="color: #0a1122;"
																		 href="<?= base_url("profile/chat"); ?>">(Chat)</a>
								</div>
								<?php
							}
							if ($login['user_type'] == 1) {
								?>
								<div><a style="color: #0a1122;" href="<?= base_url("profile/volunteer"); ?>">(Volunteers)</a>
								</div>
								<div><a style="color: #0a1122;" href="<?= base_url("profile/collect"); ?>">(Collect Products)</a>
								</div>
								<?php
							}
							?>
							<span><a style="color: #0a1122;" href="<?= base_url("profile/edit"); ?>">Edit</a></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-12"><?= $this->session->flashdata('success'); ?></div>
					<div class="col-md-4 col-sm-4 col-12">
						<div class="rhods">

							<div class="first-list">
								<img src="assets/img/profile.png" alt="" style="width: 100px; margin-bottom: 16px;">
								<h3><?= $controller->profile['first_name'] . ' ' . $controller->profile['middle_name'] . ' ' . $controller->profile['last_name']; ?></h3>
								<p> The Ngo Plan Member
									since <?= !empty($controller->profile['registered_at']) ? date("M d", strtotime($controller->profile['registered_at'])) : ""; ?></p>

							</div>

						</div>
					</div>
					<div class="col-md-8 col-sm-8 col-12">
						<div class="hotel-form">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-12" style="text-align:left;">
									<div class="list">
										<h3 class="c-12d5dhi"><span
													class="list-heading">A smarter way to The Ngo around</span></h3>
										<p>
											5% additional discount on all Wizard member hotels and 10% off on Wizard
											Base. Unlimited usage during the membership validity period. Experience true
											infinity Enjoy Wizard-exclusive, exciting deals at The Ngo.
											5% additional discount on all Wizard member hotels and 10% off on Wizard
											Base. Unlimited usage during the membership validity period. Experience true
											infinity Enjoy Wizard-exclusive, exciting deals at The Ngo.
										</p>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="pb-5">
			<div class="container min-container">
				<?php
				if ($login['user_type'] == 2) {
					?>
					<div class="divaridkldf">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-12">
								<h3>
									Donated History <span style="color: #0a1122; font-size: 12px;">(<a
												style="color: #0a1122; font-size: 12px; text-decoration: underline;"
												href="<?= base_url("profile/donate"); ?>">Click to Donate</a>)</span>
								</h3>
							</div>
						</div>
						<?php
						if (!empty($donatedProducts)) {
							foreach ($donatedProducts as $valProducts) {
								?>
								<div class="row">
									<div class="col-md-2 col-sm-2 col-12">
										<div class="d-img">
											<img src="<?= !empty($valProducts->image) ? $valProducts->image : UPLOAD_DIR . "no-image.jpg"; ?>"
												 alt="img2" style="width:100%;height:110px;">
										</div>
									</div>
									<div class="col-md-10 col-sm-10 col-12">
										<div class="one-bed">
											<div class="breaks">
												<div class="headingsection">
													<h4><?= $valProducts->title; ?></h4>
													<p><?= date("M d, Y", strtotime($valProducts->created_at)); ?></p>
												</div>
											</div>
											<div class="fast">
												<p style="    text-align: right;"><i class="fa fa-map"
																					 style="    color: #fa5b09;"></i> <?= $valProducts->address; ?>
												</p>
											</div>
										</div>

									</div>
								</div>
								<hr>
								<?php
							}
						} else {
							?>
							You've not donated yet.
							<?php
						}
						?>
					</div>
					<?php
				}
				?>
			</div>
		</section>

	</div>
</main>


<?php include('include/footer.php'); ?>

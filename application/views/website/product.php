<?php include('include/header.php'); ?>
<main id="content" role="main">
	<div class="bg-gray-13 bg-md-transparent">
		<div class="container">
			<div class="my-md-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
						<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="<?= base_url(); ?>">Home</a></li>
						<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page"><?= $product[0]->title; ?>
						</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<section class="productsd closterns" style="    padding-top: 15px;    padding-bottom: 0px;">
		<div class="container">
			<div class="row">
				<?php include('include/left.php'); ?>
				<div class="col-xl-9 col-wd-9gdot5 partsld ">
					<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
						<h3 class="section-title section-title__full mb-0 pb-2 font-size-22"><?= $product[0]->title; ?> </h3>
					</div>
					<div class="row">
						<div style="width: 98%;">
							<?= !empty($data['error']) ? $data['error'] : ""; ?>
							<?= !empty($data['success']) ? $data['success'] : ""; ?>
						</div>
						<div class="col-md-6 mb-4 mb-md-0">
							<div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2" data-infinite="true"
								 data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
								 data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
								 data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
								 data-nav-for="#sliderSyncingThumb">
								<?php
								foreach ($product as $val) {
									?>
									<div class="js-slide">
										<img class="img-fluid"
											 src="<?= !empty($val->image) ? site_url($val->image) : base_url(UPLOAD_DIR . "no-image.jpg"); ?>"
											 alt="<?= $val->title; ?>">
									</div>
								<?php } ?>
							</div>
							<div id="sliderSyncingThumb"
								 class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off"
								 data-infinite="true" data-slides-show="5" data-is-thumbs="true"
								 data-nav-for="#sliderSyncingNav">
								<?php
								foreach ($product as $val) {
									?>
									<div class="js-slide" style="cursor: pointer;">
										<img class="img-fluid"
											 src="<?= !empty($val->image) ? site_url($val->image) : base_url(UPLOAD_DIR . "no-image.jpg"); ?>"
											 alt="<?= $val->title; ?>">
									</div>
									<?php
								}
								?>
							</div>
						</div>
						<div class="col-md-6 mb-md-6 mb-lg-0">
							<div class="sliderpart1" style="padding:0px;">
								<div class="mb-80000">
									<div class="position-relative position-md-static">
										<ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0"
											id="pills-tab-8" role="tablist">
											<li class="nav-item"><a class="nav-link " id="Jpills-one-example1-tab1"
																	data-toggle="pill" href="#Jpills-one-example11"
																	role="tab" aria-controls="Jpills-one-example11"
																	aria-selected="true">Donate Products
													<span></span></a></li>
											<li class="nav-item"><a class="nav-link active"
																	id="Jpills-two-example1-tab2" data-toggle="pill"
																	href="#Jpills-two-example11" role="tab"
																	aria-controls="Jpills-two-example11"
																	aria-selected="false">Doner Discription
													<span></span></a></li>
										</ul>
									</div>
									<div class="borders-radius-17 p-4 mt-4 mt-md-0 px-lg-10 py-lg-9">
										<div class="tab-content" id="Jpills-tabContent">
											<div class="tab-pane fade " id="Jpills-one-example11" role="tabpanel"
												 aria-labelledby="Jpills-one-example1-tab1">
												<div class="row">
													<div class="col-md-8">
														<div class="mb-4">
															<div class="d-flex align-items-baseline">
																<ins class="font-size-36 text-decoration-none"> <?= $product[0]->title; ?> </ins>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="detaoils" style="display:block;">
															<!-- ShareThis BEGIN -->
															<div class="sharethis-inline-share-buttons"></div>
															<!-- ShareThis END -->
														</div>
														<!--div class="box-swikd">
															<span></span>
															<ul>
																<li><a><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
																<li><a><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
																<li><a><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
															</ul>
														</div-->
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<span>
															<?= $product[0]->state; ?>
															<?= $product[0]->district; ?>
															<?= $product[0]->city; ?>
														</span>
													</div>
													<div class="col-md-4">
														<a href="<?= base_url('profile/donate'); ?>">
															<button class="donnerdiscription1">Product Upload</button>
														</a>
													</div>
												</div>
											</div>
											<div class="tab-pane fade active show" id="Jpills-two-example11"
												 role="tabpanel" aria-labelledby="Jpills-two-example1-tab2">
												<div class="amps34522">
													<div class="ampsqwwrtuiopasd" data-aut-id="profileCard">
														<a rel="nofollow" href="/profile/523613657">
															<figure class="ampsqww _186ru" style=""><img
																		src="<?= base_url("assets/frontend/img/profile.png"); ?>">
															</figure>
														</a>
														<div class="awampsqwwrtuiopasdzxc">
															<a rel="nofollow" href="<?= base_url("profile"); ?>">
																<div class="_3oOe9"><?= $product[0]->first_name . " " . $product[0]->middle_name . " " . $product[0]->last_name; ?> </div>
																<span class="amps">
                                                         <svg width="18px" height="18px" viewBox="0 0 1024 1024"
															  data-aut-id="icon" class="" fill-rule="evenodd">
                                                            <path class="rui-4K4Y7"
																  d="M277.333 85.333v60.331l366.336 366.336-366.336 366.336v60.331h60.331l409.003-408.981v-35.307l-409.003-409.045z"></path>
                                                         </svg>
                                                      </span>
															</a>
															<div class="_3AdUv">
																<div data-aut-id="memberSince">
																	<div class="rui-u2K6U rui-2p-vC rui-38RAu rui-1O2Hi">
																		<span>Member since <span><?= date("F Y", strtotime($product[0]->registered_at)); ?></span></span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<?php
															if (!$this->session->userdata('logged_in')) {
																?>
																<button type="button" onclick="window.location='<?= base_url('login')."?redirect=product/t-shirts?pid=".$data['pid']; ?>'"
																		class="ampsqwwrt ampsqwwrtuiop rui-1JPTg rui-2NuAg">
																	<span>Chat with seller</span></button>
																<?php
															} else {
																if ($this->session->userdata('user_type') == 3) {
																?>
																<button type="button" data-toggle="modal"
																		data-target="#myModal2"
																		class="ampsqwwrt ampsqwwrtuiop rui-1JPTg rui-2NuAg">
																	<span>Chat with seller</span></button>
																<?php
																}
															}
															?>
														</div>
														<div class="col-md-6">
															<button class="donnerdiscription ampsqwwrt ampsqwwrtuiop rui-1JPTg rui-2NuAg">
																Doner Description
															</button>
														</div>
													</div>
												</div>
												<section class="prodpro" data-aut-id="callToActionCard"></section>
											</div>
										</div>
									</div>
								</div>
								<div id="tablekksddescription" class="footer-li located">
									<h2>Doner Description</h2>
									<div class="mb-8"
										 style="    display: block; float: left;width: 100%; margin-bottom: 0px !important;">
										<ul class="list-unstyled"
											style="     width: 100%;   padding:15px 15px 0px; display: block; float: left;">
											<?php
											foreach ($donerDescription as $valDonerDescription) {
												?>
												<li class="mb-4">
													<div class="row">
														<div class="col-auto col-md-3"><a
																	href="<?= base_url("product/" . $valDonerDescription->slug . "?pid=" . $valDonerDescription->unique_id); ?>"
																	class="d-block width-75"><img
																		class="img-fluid"
																		src="<?= !empty($valDonerDescription->image) ? base_url($valDonerDescription->image) : base_url(UPLOAD_DIR . "no-image.jpg"); ?>"
																		alt="Image Description"></a></div>
														<div class="col col-md-4" style="padding-left: 0px;">
															<h3 class="text-lh-1dot2 font-size-14 mb-0"
																style="padding-top:16px;"><a
																		href="<?= base_url("product/" . $valDonerDescription->slug . "?pid=" . $valDonerDescription->unique_id); ?>"><?= $valDonerDescription->title; ?></a>
															</h3>
															<div class="font-weight-bold">
																<ins class="font-size-15 text-red text-decoration-none d-block">
																	<?= $valDonerDescription->first_name . " " . $valDonerDescription->middle_name . " " . $valDonerDescription->last_name; ?>
																</ins>
															</div>
														</div>
														<div class="col col-md-5">
															<button onclick="window.location='<?= base_url("product/" . $valDonerDescription->slug . "?pid=" . $valDonerDescription->unique_id); ?>'"
																	id="butview" type="button"
																	class="ampsqwwrt ampsqwwrtuiop rui-1JPTg rui-2NuAg">
																<span>View Detail</span></button>
														</div>
													</div>
												</li>
												<?php
											}
											?>
										</ul>
									</div>
								</div>

								<div id="myModal" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<div class="box-soldid1back box-soldid2"><i class="fa fa-arrow-left"
																							aria-hidden="true"></i>
												</div>
												<button type="button" class="close" data-dismiss="modal"
														style="background: #f00; color: #fff;">&times;
												</button>
											</div>
											<div class="modal-body">
												<!--  <h2 style="    font-size: 22px; text-transform: uppercase;    text-align: center; font-weight: 600;"></h2> -->
												<div class="box-soldid1">
													<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
														<div class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0 best"
															 style="    width: 700px;">
															<h3 class="section-title section-title__full mb-0 pb-2 font-size-24"
																style="text-align: center; display: block; width: 100%;">
																Post Your Ad</h3>
														</div>
													</div>
													<form class="js-validate" novalidate="novalidate">
														<h4 class="inc">Include Some Details</h4>
														<div class="js-form-message form-group mb-5"><input type="email"
																											class="form-control"
																											name="email"
																											id="RegisterSrEmailExample3"
																											placeholder="Clothes"
																											aria-label="Email address"
																											requireddata-msg="Please enter a valid email address."
																											data-error-class="u-has-error"
																											data-success-class="u-has-success">
														</div>
														<div class="js-form-message form-group mb-5"><input type="email"
																											class="form-control"
																											name="email"
																											id="RegisterSrEmailExample3"
																											placeholder="Color"
																											aria-label="Email address"
																											requireddata-msg="Please enter a valid email address."
																											data-error-class="u-has-error"
																											data-success-class="u-has-success">
														</div>
														<div class="js-form-message form-group mb-5"><input type="email"
																											class="form-control"
																											name="email"
																											id="RegisterSrEmailExample3"
																											placeholder="Email"
																											aria-label="Email address"
																											requireddata-msg="Please enter a valid email address."
																											data-error-class="u-has-error"
																											data-success-class="u-has-success">
														</div>
														<div class="js-form-message form-group mb-5"><input type="email"
																											class="form-control"
																											name="email"
																											id="RegisterSrEmailExample3"
																											placeholder=" Message"
																											aria-label="Email address"
																											requireddata-msg="Please enter a valid email address."
																											data-error-class="u-has-error"
																											data-success-class="u-has-success">
														</div>
														<div class="row cuploads">
															<div class="col-md-12">
																<h3 style="font-size: 20px; text-align: center;">Upload
																	Up to 12 Photo</h3>
															</div>
															<div class="col-md-3"><img src="assets/img/cloth1.png">
															</div>
															<div class="col-md-3"><img src="assets/img/cloth1.png">
															</div>
															<div class="col-md-3"><img src="assets/img/cloth1.png">
															</div>
															<div class="col-md-3"><img src="assets/img/cloth1.png">
															</div>
															<div class="col-md-3"><img src="assets/img/cloth1.png">
															</div>
															<div class="col-md-3"><img src="assets/img/cloth1.png">
															</div>
															<div class="col-md-3"><img src="assets/img/cloth1.png">
															</div>
															<div class="col-md-3"><img src="assets/img/cloth1.png">
															</div>
															<div class="col-md-3"><img src="assets/img/cloth1.png">
															</div>
															<div class="col-md-3"><img src="assets/img/cloth1.png">
															</div>
															<div class="col-md-3"><img src="assets/img/cloth1.png">
															</div>
															<div class="col-md-3"><img src="assets/img/cloth1.png">
															</div>
														</div>
														<div class="confirm">
															<h4>CONFIRM YOUR LOCATION</h4>
															<section id="tabs" class="project-tab">
																<div class="container">
																	<div class="row">
																		<div class="col-md-12">
																			<nav>
																				<div class="nav nav-tabs nav-fill"
																					 id="nav-tab" role="tablist">
																					<a class="nav-item nav-link active"
																					   id="nav-home-tab"
																					   data-toggle="tab"
																					   href="#nav-home" role="tab"
																					   aria-controls="nav-home"
																					   aria-selected="true">LIST</a>
																					<a class="nav-item nav-link"
																					   id="nav-profile-tab"
																					   data-toggle="tab"
																					   href="#nav-profile" role="tab"
																					   aria-controls="nav-profile"
																					   aria-selected="false">CURRENT
																						LOCATION</a>
																				</div>
																			</nav>
																			<div class="tab-content"
																				 id="nav-tabContent">
																				<div class="tab-pane fade show active"
																					 id="nav-home" role="tabpanel"
																					 aria-labelledby="nav-home-tab">
																					<label for="State"
																						   style="margin-top:15px;">State
																						*</label>
																					<select id="State" name="State"
																							class="rui-3vs1L rui-3kHFv"
																							data-aut-id="dd-state">
																						<option value="unknown"></option>
																						<option value="2007598">Andaman
																							&amp; Nicobar Islands
																						</option>
																						<option value="2001145">Andhra
																							Pradesh
																						</option>
																						<option value="2001146">
																							Arunachal Pradesh
																						</option>
																						<option value="2001147">Assam
																						</option>
																						<option value="2001148">Bihar
																						</option>
																						<option value="2001149">
																							Chandigarh
																						</option>
																						<option value="2001178">
																							Chhattisgarh
																						</option>
																						<option value="2001150">Dadra
																							&amp; Nagar Haveli
																						</option>
																						<option value="2001151">Daman
																							&amp; Diu
																						</option>
																						<option value="2001152">Delhi
																						</option>
																						<option value="2001153">Goa
																						</option>
																						<option value="2001154">
																							Gujarat
																						</option>
																						<option value="2001155">
																							Haryana
																						</option>
																						<option value="2001156">Himachal
																							Pradesh
																						</option>
																						<option value="2001157">Jammu
																							&amp; Kashmir
																						</option>
																						<option value="2001158">
																							Jharkhand
																						</option>
																						<option value="2001159">
																							Karnataka
																						</option>
																						<option value="2001160">Kerala
																						</option>
																						<option value="2001161">
																							Lakshadweep
																						</option>
																						<option value="2001162">Madhya
																							Pradesh
																						</option>
																						<option value="2001163">
																							Maharashtra
																						</option>
																						<option value="2001164">
																							Manipur
																						</option>
																						<option value="2001165">
																							Meghalaya
																						</option>
																						<option value="2001166">
																							Mizoram
																						</option>
																						<option value="2001167">
																							Nagaland
																						</option>
																						<option value="2001168">Odisha
																						</option>
																						<option value="2001169">
																							Pondicherry
																						</option>
																						<option value="2001170">Punjab
																						</option>
																						<option value="2001171">
																							Rajasthan
																						</option>
																						<option value="2001172">Sikkim
																						</option>
																						<option value="2001173">Tamil
																							Nadu
																						</option>
																						<option value="2007599">
																							Telangana
																						</option>
																						<option value="2001174">
																							Tripura
																						</option>
																						<option value="2001176">Uttar
																							Pradesh
																						</option>
																						<option value="2001175">
																							Uttaranchal
																						</option>
																						<option value="2001177">West
																							Bengal
																						</option>
																					</select>
																				</div>
																				<div class="tab-pane fade"
																					 id="nav-profile" role="tabpanel"
																					 aria-labelledby="nav-profile-tab">
																					<table class="table"
																						   cellspacing="0">
																						<tbody>
																						<tr>
																							<td>State</td>
																							<td class="wrk"><a href="#">Delhi</a>
																							</td>
																						</tr>
																						<tr>
																							<td>City</td>
																							<td class="wrk"><a href="#">Delhi</a>
																							</td>
																						</tr>
																						<tr>
																							<td>Neighbourhood</td>
																							<td class="wrk"><a href="#">Uttam
																									Nagar</a></td>
																						</tr>
																						</tbody>
																					</table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
														</div>
														<div class="review">
															<h4>REVIEW YOUR DETAILS</h4>
															<div class="preview text-center">
																<img class="preview-img" src="assets/img/account.png"
																	 alt="Preview Image" width="200" height="200">
																<div class="browse-button">
																	<i class="fa fa-pencil-alt"></i>
																	<input class="browse-input" type="file" required=""
																		   name="UploadedFile" id="UploadedFile">
																</div>
																<span class="Error"></span>
															</div>
															<div class="js-form-message js-form-message1 form-group mb-5">
																<input type="email" class="form-control" name="email"
																	   id="RegisterSrEmailExample3" placeholder="Name"
																	   aria-label="Email address"
																	   requireddata-msg="Please enter a valid email address."
																	   data-error-class="u-has-error"
																	   data-success-class="u-has-success"></div>
															<div class="js-form-message js-form-message1 form-group mb-5">
																<input type="email" class="form-control" name="email"
																	   id="RegisterSrEmailExample3"
																	   placeholder="Contact.No"
																	   aria-label="Email address"
																	   requireddata-msg="Please enter a valid email address."
																	   data-error-class="u-has-error"
																	   data-success-class="u-has-success"></div>
														</div>
														<div class="mb-600" style="    text-align: center;">
															<div class="mb-3">
																<button type="submit"
																		class="btn btn-primary-dark-w px-5"
																		style="width:130px;">Post Now
																</button>
															</div>
														</div>
													</form>

												</div>
												<div class="box-soldid2">
													<div class="colampoxe"
														 style="box-shadow: none !important;  padding: 0px;">
														<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
															<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">
																Enter your email to login</h3>
														</div>
														<p class="text-gray-901 mb-4">If you are a new user please
															select any other login option from previous page.</p>
														<form class="js-validate" novalidate="novalidate">
															<div class="js-form-message form-group mb-5"><input
																		type="email" class="form-control" name="email"
																		id="RegisterSrEmailExample3"
																		placeholder="Email address"
																		aria-label="Email address"
																		requireddata-msg="Please enter a valid email address."
																		data-error-class="u-has-error"
																		data-success-class="u-has-success"></div>
															<div class="mb-600">
																<div class="mb-3">
																	<button type="submit"
																			class="btn btn-primary-dark-w px-5">Register
																	</button>
																</div>
															</div>
															<p class="text-gray-901 mb-4">Your personal data will be
																used to support your experience throughout this website,
																to manage your account, and for other purposes described
																in our </p>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="footer-li located">
									<h2>Location</h2>
									<ul class="footer-add ">
										<li>
											<?= $product[0]->address; ?>
										</li>
									</ul>
								</div>
							</div>
							<div id="myModal" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<div class="box-soldid1back box-soldid2"><i class="fa fa-arrow-left"
																						aria-hidden="true"></i></div>
											<button type="button" class="close" data-dismiss="modal"
													style="background: #f00; color: #fff;">&times;
											</button>
										</div>
										<div class="modal-body">
											<div class="box-soldid1">
												<div class="img23">
													<img src="assets/img/webpoint.png" alt="">
													<p>Keep all your favourites in one place.</p>
												</div>
												<div class="insljkkd">
													<ul>
														<li><a>
																<button><i class="fas fa-phone"
																		   aria-hidden="true"></i><span>Continue with Phone</span>
																</button>
															</a></li>
														<li><a>
																<button><i class="fab fa-twitter"
																		   aria-hidden="true"></i><span>Continue with Twitter</span>
																</button>
															</a></li>
														<li><a>
																<button><i class="fab fa-linkedin-in"
																		   aria-hidden="true"></i><span>Continue with Linkedin</span>
																</button>
															</a></li>
													</ul>
												</div>
												<div class="img23" style="text-align:center;">
													<span style="font-size:16px;">or</span>
													<p class="bostrakrp"><a href="#1"><b>Login with Email</b></a></p>
													<p>All your personal details are safe with us.</p>
												</div>
											</div>
											<div class="box-soldid2">
												<div class="colampoxe"
													 style="box-shadow: none !important;  padding: 0px;">
													<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
														<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">
															Enter your email to login</h3>
													</div>
													<p class="text-gray-901 mb-4">If you are a new user please select
														any other login option from previous page.</p>
													<form class="js-validate" novalidate="novalidate">
														<div class="js-form-message form-group mb-5"><input type="email"
																											class="form-control"
																											name="email"
																											id="RegisterSrEmailExample3"
																											placeholder="Email address"
																											aria-label="Email address"
																											requireddata-msg="Please enter a valid email address."
																											data-error-class="u-has-error"
																											data-success-class="u-has-success">
														</div>
														<div class="mb-600">
															<div class="mb-3">
																<button type="submit"
																		class="btn btn-primary-dark-w px-5">Register
																</button>
															</div>
														</div>
														<p class="text-gray-901 mb-4">Your personal data will be used to
															support your experience throughout this website, to manage
															your account, and for other purposes described in our </p>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="myModal2" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<div class="box-soldid1back box-soldid2"><i class="fa fa-arrow-left"
																						aria-hidden="true"></i></div>
											<button type="button" class="close" data-dismiss="modal"
													style="background: #f00; color: #fff;">&times;
											</button>
										</div>
										<div class="modal-body">
											<div class="colampoxe"
												 style="box-shadow: none !important;  padding: 0px;    text-align: center;">
												<div class="wiiimgs">
													<div style="display:flex">
														<img src="<?= base_url("assets/frontend/img/avatar_1.png"); ?>"
															 alt="">
														<img src="<?= base_url("assets/frontend/img/arrows.png"); ?>"
															 alt="">
														<img src="<?= base_url("assets/frontend/img/profile.png"); ?>"
															 alt="">
													</div>
												</div>
												<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
													<div class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0 best"
														 style="    width: 700px;">
														<h3 class="section-title section-title__full mb-0 pb-2 font-size-22"
															style="text-align: center; display: block; width: 100%;">
															Write a message
															to <?= $product[0]->first_name . " " . $product[0]->middle_name . " " . $product[0]->last_name; ?></h3>
													</div>
												</div>
												<form class="js-validate" novalidate="novalidate" method="post">
													<input type="hidden"
														   name="<?= $this->security->get_csrf_token_name(); ?>"
														   value="<?= $this->security->get_csrf_hash(); ?>">
													<div class="js-form-message form-group mb-5">
														<input type="message" class="form-control" name="message"
															   placeholder="Write your message here">
													</div>
													<div class="mb-600">
														<div class="mb-3"><input name="submit" type="submit"
																				 class="btn btn-primary-dark-w px-5"
																				 style="width:130px;"
																				 value="Send Message"></div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="containe2r" id="widproducskd" style="padding-top:40px;">
						<div class="mb-xl-14 mb-6">
							<div class="mb-800">
								<div class="position-relative position-md-static px-md-6">
									<ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0"
										id="pills-tab-8" role="tablist">
										<li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2"><a
													data-toggle="tab" href="#home"
													class="nav-link active">Description</a></li>
										<!-- <li  class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2"><a data-toggle="tab" href="#menu1" class="nav-link">Specification</a></li> -->
									</ul>
								</div>
								<div class="borders-radius-17 border p-4 mt-4 mt-md-0 px-lg-10 py-lg-9">
									<div class="tab-content">
										<div id="home" class="tab-pane fade in active">
											<div class="row no-gutters">
												<div class="col-md-auto">
													<h3 class="font-size-24 mb-3">Description</h3>
													<p>
														<?= $product[0]->content; ?>
													</p>
												</div>
											</div>
										</div>
										<!--
										<div id="menu1" class="tab-pane fade">
											<div class="mx-md-5 pt-1">
												<div class="table-responsive mb-4">
													<table class="table table-hover">
														<tbody>
														<tr>
															<th class="px-4 px-xl-5 border-top-0">Weight</th>
															<td class="border-top-0">7.25kg</td>
														</tr>
														<tr>
															<th class="px-4 px-xl-5">Dimensions</th>
															<td>90 x 60 x 90 cm</td>
														</tr>
														<tr>
															<th class="px-4 px-xl-5">Size</th>
															<td>One Size Fits all</td>
														</tr>
														<tr>
															<th class="px-4 px-xl-5">color</th>
															<td>Black with Red, White with Gold</td>
														</tr>
														<tr>
															<th class="px-4 px-xl-5">Guarantee</th>
															<td>5 years</td>
														</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container d-none d-lg-block mb-3">
		<div class="row">
			<div class="col-wd-3 col-lg-4">
				<div class="widget-column">
					<div class="border-bottom border-color-1 mb-5">
						<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Featured Products</h3>
					</div>
					<ul class="list-unstyled products-group">
						<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
							<div class="col-auto">
								<a href="product-detail.html" class="d-block width-75 text-center"><img
											class="img-fluid" src="assets/img/shop1.png" alt="Image Description"></a>
							</div>
							<div class="col pl-4 d-flex flex-column">
								<h5 class="product-item__title mb-0"><a href="product-detail.html"
																		class="text-blue font-weight-bold">Massive
										Donation for Poor People</a></h5>
								<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
									<ins class="font-size-15 text-decoration-none"><i class="fas fa-rupee-sign"></i>
										110.00
									</ins>
								</div>
							</div>
						</li>
						<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
							<div class="col-auto">
								<a href="product-detail.html" class="d-block width-75 text-center"><img
											class="img-fluid" src="assets/img/shop2.png" alt="Image Description"></a>
							</div>
							<div class="col pl-4 d-flex flex-column">
								<h5 class="product-item__title mb-0"><a href="product-detail.html"
																		class="text-blue font-weight-bold">Massive
										Donation for Poor People</a></h5>
								<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
									<ins class="font-size-15 text-decoration-none"><i class="fas fa-rupee-sign"></i>
										110.00
									</ins>
								</div>
							</div>
						</li>
						<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
							<div class="col-auto">
								<a href="product-detail.html" class="d-block width-75 text-center"><img
											class="img-fluid" src="assets/img/shop3.png" alt="Image Description"></a>
							</div>
							<div class="col pl-4 d-flex flex-column">
								<h5 class="product-item__title mb-0"><a href="product-detail.html"
																		class="text-blue font-weight-bold">Massive
										Donation for Poor People</a></h5>
								<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
									<ins class="font-size-15 text-decoration-none"><i class="fas fa-rupee-sign"></i>
										110.00
									</ins>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-wd-3 col-lg-4">
				<div class="border-bottom border-color-1 mb-5">
					<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Onsale Products</h3>
				</div>
				<ul class="list-unstyled products-group">
					<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
						<div class="col-auto">
							<a href="product-detail.html" class="d-block width-75 text-center"><img class="img-fluid"
																									src="assets/img/shop4.png"
																									alt="Image Description"></a>
						</div>
						<div class="col pl-4 d-flex flex-column">
							<h5 class="product-item__title mb-0"><a href="product-detail.html"
																	class="text-blue font-weight-bold">Massive Donation
									for Poor People</a></h5>
							<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
								<ins class="font-size-15 text-decoration-none"><i class="fas fa-rupee-sign"></i> 110.00
								</ins>
							</div>
						</div>
					</li>
					<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
						<div class="col-auto">
							<a href="product-detail.html" class="d-block width-75 text-center"><img class="img-fluid"
																									src="assets/img/shop5.png"
																									alt="Image Description"></a>
						</div>
						<div class="col pl-4 d-flex flex-column">
							<h5 class="product-item__title mb-0"><a href="product-detail.html"
																	class="text-blue font-weight-bold">Massive Donation
									for Poor People</a></h5>
							<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
								<ins class="font-size-15 text-decoration-none"><i class="fas fa-rupee-sign"></i> 899.00
								</ins>
							</div>
						</div>
					</li>
					<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
						<div class="col-auto">
							<a href="product-detail.html" class="d-block width-75 text-center"><img class="img-fluid"
																									src="assets/img/shop6.png"
																									alt="Image Description"></a>
						</div>
						<div class="col pl-4 d-flex flex-column">
							<h5 class="product-item__title mb-0"><a href="product-detail.html"
																	class="text-blue font-weight-bold">Massive Donation
									for Poor People</a></h5>
							<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
								<ins class="font-size-15 text-decoration-none"><i class="fas fa-rupee-sign"></i> 2100.00
								</ins>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-wd-3 col-lg-4">
				<div class="border-bottom border-color-1 mb-5">
					<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Top Rated Products</h3>
				</div>
				<ul class="list-unstyled products-group">
					<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
						<div class="col-auto">
							<a href="product-detail.html" class="d-block width-75 text-center"><img class="img-fluid"
																									src="assets/img/shop7.png"
																									alt="Image Description"></a>
						</div>
						<div class="col pl-4 d-flex flex-column">
							<h5 class="product-item__title mb-0"><a href="product-detail.html"
																	class="text-blue font-weight-bold">Massive Donation
									for Poor People</a></h5>
							<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
								<ins class="font-size-15 text-decoration-none"><i class="fas fa-rupee-sign"></i> 110.00
								</ins>
							</div>
						</div>
					</li>
					<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
						<div class="col-auto">
							<a href="product-detail.html" class="d-block width-75 text-center"><img class="img-fluid"
																									src="assets/img/shop8.png"
																									alt="Image Description"></a>
						</div>
						<div class="col pl-4 d-flex flex-column">
							<h5 class="product-item__title mb-0"><a href="product-detail.html"
																	class="text-blue font-weight-bold">Massive Donation
									for Poor People</a></h5>
							<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
								<ins class="font-size-15 text-decoration-none"><i class="fas fa-rupee-sign"></i> 110.00
								</ins>
							</div>
						</div>
					</li>
					<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
						<div class="col-auto">
							<a href="product-detail.html" class="d-block width-75 text-center"><img class="img-fluid"
																									src="assets/img/shop9.png"
																									alt="Image Description"></a>
						</div>
						<div class="col pl-4 d-flex flex-column">
							<h5 class="product-item__title mb-0"><a href="product-detail.html"
																	class="text-blue font-weight-bold">Massive Donation
									for Poor People</a></h5>
							<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
								<ins class="font-size-15 text-decoration-none"><i class="fas fa-rupee-sign"></i> 110.00
								</ins>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-wd-3 d-none d-wd-block">
				<a href="#1" class="d-block"><img class="img-fluid" src="../../assets/img/330X360/img1.jpg"
												  alt="Image Description"></a>
			</div>
		</div>
	</div>
</main>
</main>
<?php include('include/footer.php'); ?>

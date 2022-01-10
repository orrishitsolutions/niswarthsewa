<?php include('include/header.php'); ?>
<main id="content" role="main">
	<div class="bg-gray-13 bg-md-transparent" style="    background: #fff !important;    padding: 16px 0px 0px;">
		<div class="container">
			<div class="my-md-3a">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb  flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
						<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="<?= base_url(); ?>">Home</a></li>
						<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page"><?= !empty($category->title) ? $category->title : ""; ?>
						</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<section class="productsd " style="    padding-top: 15px;">
		<div class="container subcategorysd">
			<div class="row">
				<?php include('include/left.php'); ?>
				<div class="col-xl-9 col-wd-9gdot5">
					<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
						<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">
							<?= !empty($category->title) ? $category->title : ""; ?>
						</h3>
					</div>
					<ul class="row list-unstyled products-group no-gutters">
						<?php
						if (!empty($subCategory)) {
							foreach ($subCategory as $val) {
								?>
								<li class="col-6 col-md-3 col-wd-2gdot4 product-item">
									<div class="product-item__outer h-100">
										<div class="product-item__inner px-xl-4 p-3">
											<div class="product-item__body pb-xl-2">
												<div class="mb-2">
													<a href="<?= base_url("category/" . $val->slug); ?>"
													   class="d-block text-center">
														<img class="img-fluid"
															 src="<?= base_url($val->category_image); ?>"
															 alt="<?= $val->title; ?>">
													</a>
												</div>
												<h5 class="mb-1 product-item__title">
													<a href="<?= $val->slug; ?>" style="text-align: center;"
													   class="text-blue font-weight-bold">
														<?= $val->title; ?>
													</a>
												</h5>
											</div>
										</div>
									</div>
								</li>
								<?php
							}
						} else {
							if (!empty($products)) {
								foreach ($products as $val) {
									?>
									<li class="col-6 col-md-3 col-wd-2gdot4 product-item">
										<div class="product-item__outer h-100 box-product-item-outer">
											<div class="product-item__inner px-xl-4 p-3">
												<div class="product-item__body pb-xl-2">
													<div class="mb-2"><a href="#1"
																		 class="font-size-12 text-gray-5"><?= $val->category_title; ?></a>
													</div>
													<h5 class="mb-1 product-item__title"><a href="#1"
																							class="text-blue font-weight-bold"><?= $val->title; ?> </a>
													</h5>
													<div class="mb-2">
														<a href="<?= base_url("product/".$val->slug); ?>"
														   class="d-block text-center"><img class="img-fluid"
																							src="<?= base_url($val->image); ?>"
																							alt="<?= $val->title; ?>"></a>
													</div>
													<div class="flex-center-between mb-1">
														<div class="d-none d-xl-block prodcut-add-cart"><a
																	href="<?= base_url("product/".$val->slug); ?>"
																	class="btn-add-cart btn-primary transition-3d-hover"
																	style=" width: 90px; font-size: 11px"> View
																Detail</a></div>
													</div>
												</div>
												<div class="product-item__footer">
													<div class="border-top pt-2 flex-center-between flex-wrap">

													</div>
												</div>
											</div>
										</div>
									</li>
									<?php
								}
							}
						}
						?>

					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="mb-5">
				<div class="catch">
					<div class="row">
						<div class="col-md-12 mb-4 mb-xl-0 col-xl-12">
							<div class=" position-relative">
								<div class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0 best">
									<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Categories</h3>
								</div>

							</div>
						</div>

						<div class="col-md-6 mb-4 mb-xl-0 col-xl-3 ctch-big">
							<a href="#" class="d-black text-gray-90">
								<div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
									<div class="col-6 col-xl-5 col-wd-6 pr-0"><img class="img-fluid"
																				   src="<?= base_url('assets/frontend/img/pro1aa.png'); ?>"
																				   alt="Image Description"></div>
									<div class="col-6 col-xl-7 col-wd-6">
										<div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23"
											 style="color:#333e48;">CATCH BIG
											<strong>DEALS</strong> ON MEN CLOTH
										</div>
										<div class="link text-gray-90 font-weight-bold font-size-15"><a
													href="shop2.html">Shop now<span
														class="link__icon ml-1"><span class="link__icon-inner"><i
																class="ec ec-arrow-right-categproes"></i></span></span></a>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 mb-4 mb-xl-0 col-xl-3 ctch-big">
							<a href="#" class="d-black text-gray-90">
								<div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
									<div class="col-6 col-xl-5 col-wd-6 pr-0"><img class="img-fluid"
																				   src="./assets/img/pro2aa.png"
																				   alt="Image Description"></div>
									<div class="col-6 col-xl-7 col-wd-6">
										<div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23"
											 style="color:#333e48;">CATCH BIG
											<strong>DEALS</strong> ON WOMEN
										</div>
										<div class="link text-gray-90 font-weight-bold font-size-15"><a
													href="shop2.html">Shop now<span
														class="link__icon ml-1"><span class="link__icon-inner"><i
																class="ec ec-arrow-right-categproes"></i></span></span></a>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 mb-4 mb-xl-0 col-xl-3 ctch-big">
							<a href="#" class="d-black text-gray-90">
								<div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
									<div class="col-6 col-xl-5 col-wd-6 pr-0"><img class="img-fluid"
																				   src="./assets/img/pro22aa.png"
																				   alt="Image Description"></div>
									<div class="col-6 col-xl-7 col-wd-6">
										<div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23"
											 style="color:#333e48;">CATCH BIG
											<strong>DEALS</strong> ON KIDS
										</div>
										<div class="link text-gray-90 font-weight-bold font-size-15"><a
													href="shop2.html">Shop now<span
														class="link__icon ml-1"><span class="link__icon-inner"><i
																class="ec ec-arrow-right-categproes"></i></span></span></a>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-6 mb-4 mb-xl-0 col-xl-3 ctch-big">
							<a href="#" class="d-black text-gray-90">
								<div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
									<div class="col-6 col-xl-5 col-wd-6 pr-0"><img class="img-fluid"
																				   src="./assets/img/cloth1c.png"
																				   alt="Image Description"></div>
									<div class="col-6 col-xl-7 col-wd-6">
										<div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23"
											 style="color:#333e48;">CATCH BIG
											<strong>DEALS</strong> ON LIVEING CLOTH
										</div>
										<div class="link text-gray-90 font-weight-bold font-size-15"><a
													href="shop2.html">Shop now<span
														class="link__icon ml-1"><span class="link__icon-inner"><i
																class="ec ec-arrow-right-categproes"></i></span></span></a>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="mb-5">
				<div class="row">
					<div class="col-md-auto mb-6 mb-md-0">
						<div class="p-3 border border-width-2 border-primary borders-radius-20 bg-white min-width-370 spl">
							<div class="colampoxe">
								<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
									<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Send Us A
										Query</h3>
								</div>

								<p class="text-gray-901 mb-4">Interested in any of our products? </p>
								<form class="js-validate" novalidate="novalidate">
									<div class="js-form-message form-group"><input type="email" class="form-control"
																				   name="email"
																				   id="signinSrEmailExample3"
																				   placeholder="First Name"
																				   aria-label="Username or Email address"
																				   requireddata-msg="Please enter a valid email address."
																				   data-error-class="u-has-error"
																				   data-success-class="u-has-success">
									</div>
									<div class="js-form-message form-group"><input type="password" class="form-control"
																				   name="password"
																				   id="signinSrPasswordExample2"
																				   placeholder="Last Name"
																				   aria-label="Password"
																				   requireddata-msg="Your password is invalid. Please try again."
																				   data-error-class="u-has-error"
																				   data-success-class="u-has-success">
									</div>
									<div class="js-form-message form-group"><input type="password" class="form-control"
																				   name="password"
																				   id="signinSrPasswordExample2"
																				   placeholder="Email Id"
																				   aria-label="Password"
																				   requireddata-msg="Your password is invalid. Please try again."
																				   data-error-class="u-has-error"
																				   data-success-class="u-has-success">
									</div>
									<div class="js-form-message form-group"><input type="password" class="form-control"
																				   name="password"
																				   id="signinSrPasswordExample2"
																				   placeholder="Phone"
																				   aria-label="Password"
																				   requireddata-msg="Your password is invalid. Please try again."
																				   data-error-class="u-has-error"
																				   data-success-class="u-has-success">
									</div>
									<div class="js-form-message form-group"><textarea class="colmessges"
																					  placeholder="Message"></textarea>
									</div>

									<div class="mb-1">
										<div class="mb-3">
											<button type="submit" class="btn btn-primary-dark-w px-5">Submit</button>
										</div>

									</div>
								</form>
							</div>

						</div>
					</div>
					<div class="col">
						<div class="">
							<div class="position-relative bg-white text-center z-index-2">
								<ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab"
									role="tablist">
									<li class="nav-item">
										<a class="nav-link active " id="pills-one-example1-tab" data-toggle="pill"
										   href="#pills-one-example1" role="tab" aria-controls="pills-one-example1"
										   aria-selected="true">
											<div class="d-md-flex justify-content-md-center align-items-md-center">Men
												Clothes
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " id="pills-two-example1-tab" data-toggle="pill"
										   href="#pills-two-example1" role="tab" aria-controls="pills-two-example1"
										   aria-selected="false">
											<div class="d-md-flex justify-content-md-center align-items-md-center">Wemen
												Clothes
											</div>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " id="pills-three-example1-tab" data-toggle="pill"
										   href="#pills-three-example1" role="tab" aria-controls="pills-three-example1"
										   aria-selected="false">
											<div class="d-md-flex justify-content-md-center align-items-md-center">Kids
												Clothes
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel"
									 aria-labelledby="pills-one-example1-tab">
									<ul class="row list-unstyled products-group no-gutters">
										<li class="col-6 col-wd-3 col-md-4 product-item">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Men</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro1aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="wish-list.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Men</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro6aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Notes</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro7aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item remove-divider-wd">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Medicine</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro8aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Cooking
																Ware</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro9aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Book</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro10aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>

									</ul>
								</div>
								<div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel"
									 aria-labelledby="pills-two-example1-tab">
									<ul class="row list-unstyled products-group no-gutters">
										<li class="col-6 col-wd-3 col-md-4 product-item">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Women</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro2aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Women</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro16aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Women</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro16aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item remove-divider-wd">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a
																	href="product-detail.html"
																	class="text-blue font-weight-bold">Women</a>
														</h5>
														<div class="mb-2"><a href="#" class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro17aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Women</a>
														</h5>
														<div class="mb-2"><a href="#" class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro18aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Women</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro19aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>

									</ul>
								</div>
								<div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel"
									 aria-labelledby="pills-three-example1-tab">
									<ul class="row list-unstyled products-group no-gutters">
										<li class="col-6 col-wd-3 col-md-4 product-item">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Kids</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro22aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Kids</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro15aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Kids</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro9aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item remove-divider-wd">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Kids</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro16aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title">
															<a href="#" class="text-blue font-weight-bold">Kids</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro3aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
											<div class="product-item__outer h-100">
												<div class="product-item__inner px-xl-4 p-3">
													<div class="product-item__body pb-xl-2">
														<div class="mb-2"><a
																	href="#"
																	class="font-size-12 text-gray-5">Category</a></div>
														<h5 class="mb-1 product-item__title"><a href="#"
																								class="text-blue font-weight-bold">Kids</a>
														</h5>
														<div class="mb-2"><a href="product-detail.html"
																			 class="d-block text-center"><img
																		class="img-fluid" src="./assets/img/pro27aa.png"
																		alt="Image Description"></a>
														</div>
														<div class="flex-center-between mb-1">
															<div class="d-none d-xl-block prodcut-add-cart"><a
																		href="product-detail.html"
																		class="btn-add-cart btn-primary transition-3d-hover"
																		style=" width: 90px; font-size: 11px"> View
																	Detail</a></div>
															<div class="eaxaticled d-none d-xl-block prodcut-add-cart">
																<a href="#"
																   class="btn-add-cart btn-primary transition-3d-hover"><i
																			class="ec ec-add-to-cart"></i></a></div>
														</div>
													</div>
													<div class="product-item__footer">
														<div class="border-top pt-2 flex-center-between flex-wrap">

															<a href="#t.html" class="text-gray-6 font-size-13"><i
																		class="ec ec-favorites mr-1 font-size-15"></i>
																Add to Wishlist</a>
														</div>
													</div>
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
		</div>

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
									<a href="product.html" class="d-block width-75 text-center"><img class="img-fluid"
																									 src="assets/img/cloth1.png"
																									 alt="Image Description"></a>
								</div>
								<div class="col pl-4 d-flex flex-column">
									<h5 class="product-item__title mb-0"><a href="product-detail.html"
																			class="text-blue font-weight-bold">Clothes</a>
									</h5>
									<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
										<a href="product.html"><p class="font-size-15 text-decoration-none">Men
												Clothes</p></a>
									</div>
								</div>
							</li>
							<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
								<div class="col-auto">
									<a href="product-detail.html" class="d-block width-75 text-center"><img
												class="img-fluid" src="assets/img/cloth1a.png" alt="Image Description"></a>
								</div>
								<div class="col pl-4 d-flex flex-column">
									<h5 class="product-item__title mb-0"><a href="product-detail.html"
																			class="text-blue font-weight-bold">Clothes</a>
									</h5>
									<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
										<a href="product.html"><p class="font-size-15 text-decoration-none">Women
												Clothes</p></a>
									</div>
								</div>
							</li>
							<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
								<div class="col-auto">
									<a href="product-detail.html" class="d-block width-75 text-center"><img
												class="img-fluid" src="assets/img/cloth1b.png" alt="Image Description"></a>
								</div>
								<div class="col pl-4 d-flex flex-column">
									<h5 class="product-item__title mb-0"><a href="product-detail.html"
																			class="text-blue font-weight-bold">Clothes</a>
									</h5>
									<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
										<a href="product.html"><p class="font-size-15 text-decoration-none">Kids
												Clothes</p></a>
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
								<a href="product-detail.html" class="d-block width-75 text-center"><img
											class="img-fluid" src="assets/img/ayurvade1.png"
											alt="Image Description"></a>
							</div>
							<div class="col pl-4 d-flex flex-column">
								<h5 class="product-item__title mb-0"><a href="product-detail.html"
																		class="text-blue font-weight-bold">Medicane</a>
								</h5>
								<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
									<a href="product.html"><p class="font-size-15 text-decoration-none">Ayurveda</p></a>
								</div>
							</div>
						</li>
						<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
							<div class="col-auto">
								<a href="product-detail.html" class="d-block width-75 text-center"><img
											class="img-fluid" src="assets/img/books1.png" alt="Image Description"></a>
							</div>
							<div class="col pl-4 d-flex flex-column">
								<h5 class="product-item__title mb-0"><a href="product3.html"
																		class="text-blue font-weight-bold">Education
										Material</a></h5>
								<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
									<a href="product3.html"><p class="font-size-15 text-decoration-none">NCERT Books</p>
									</a>
								</div>
							</div>
						</li>
						<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
							<div class="col-auto">
								<a href="product-detail.html" class="d-block width-75 text-center"><img
											class="img-fluid" src="assets/img/gropro1.png" alt="Image Description"></a>
							</div>
							<div class="col pl-4 d-flex flex-column">
								<h5 class="product-item__title mb-0"><a href="product4.html"
																		class="text-blue font-weight-bold">Grocery
										Products</a></h5>
								<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
									<a href="product4.html"><p class="font-size-15 text-decoration-none">Staples</p></a>
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
								<a href="product-detail.html" class="d-block width-75 text-center"><img
											class="img-fluid" src="assets/img/iron.png" alt="Image Description"></a>
							</div>
							<div class="col pl-4 d-flex flex-column">
								<h5 class="product-item__title mb-0"><a href="product5.html"
																		class="text-blue font-weight-bold">Home
										Appliances</a></h5>
								<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
									<a href="product5.html"><p class="font-size-15 text-decoration-none">Iron</p></a>
								</div>
							</div>
						</li>
						<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
							<div class="col-auto">
								<a href="product-detail.html" class="d-block width-75 text-center"><img
											class="img-fluid" src="assets/img/mastercook-original.png"
											alt="Image Description"></a>
							</div>
							<div class="col pl-4 d-flex flex-column">
								<h5 class="product-item__title mb-0"><a href="product5.html"
																		class="text-blue font-weight-bold">Home
										Appliances</a></h5>
								<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
									<a href="product5.html"><p class="font-size-15 text-decoration-none">
											Polypropylene</p></a>
								</div>
							</div>
						</li>
						<li class="product-item product-item__list row no-gutters mb-6 remove-divider">
							<div class="col-auto">
								<a href="product-detail.html" class="d-block width-75 text-center"><img
											class="img-fluid" src="assets/img/medi2.png" alt="Image Description"></a>
							</div>
							<div class="col pl-4 d-flex flex-column">
								<h5 class="product-item__title mb-0"><a href="product2.html"
																		class="text-blue font-weight-bold">Medicane</a>
								</h5>
								<div class="prodcut-price prodcut-price2 mt-auto flex-horizontal-center">
									<a href="product2.html"><p class="font-size-15 text-decoration-none">Ayush</p></a>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-wd-3 d-none d-wd-block">
					<a href="#1" class="d-block"><img class="img-fluid" src="assets/img/shop1.jpg"
													  alt="Image Description"></a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include('include/footer.php'); ?>

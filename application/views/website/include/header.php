<!DOCTYPE html>
<html lang="en">
<head>
	<title>Niswarth Sewa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="favicon.png">
	<?= link_tag('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700&display=swap'); ?>
	<?= link_tag('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'); ?>
	<?= link_tag('assets/frontend/css/font-family.css'); ?>
	<?= link_tag('assets/frontend/css/animate.min.css'); ?>
	<?= link_tag('assets/frontend/css/hs.megamenu.css'); ?>
	<?= link_tag('assets/frontend/css/jquery.mCustomScrollbar.css'); ?>
	<?= link_tag('assets/frontend/css/jquery.fancybox.css'); ?>
	<?= link_tag('assets/frontend/css/slick.css'); ?>
	<?= link_tag('assets/frontend/css/bootstrap-select.min.css'); ?>
	<?= link_tag('assets/frontend/css/owl.carousel.css'); ?>
	<?= link_tag('assets/frontend/css/style.css'); ?>
	<?= link_tag('assets/frontend/css/responsive.css'); ?>

	<!-- javascript -->
	<script src="<?= base_url('assets/frontend/js/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/frontend/js/owl.carousel.js'); ?>"></script>

	<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=61ed0e0a96a4850019cacd0d&product=image-share-buttons' async='async'></script>
</head>
<body>
<header id="header" class="u-header u-header-left-aligned-nav">
	<div class="top-header">
		<div class="container-fluid">
			<div class="row r1">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<a href="shop2.html">
						<div class="arrow-angle text-center"><strong>Donate Product</strong></div>
						<div class="arrow-banner"></div>
					</a>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="padding:0px;">
					<?php
					$i = 1;
					foreach ($topHeader as $val) {
						?>
						<a href="<?= base_url("category/" . $val->slug); ?>" class="radius radius<?= $i; ?>">
							<ul>
								<li class="radius-img1"><img src="<?= base_url($val->top_header_image); ?>" alt=""></li>
								<li class="text-center text"><strong><?= $val->title; ?></strong></li>
							</ul>

						</a>
						<?php
						$i++;
					}
					?>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 text-center" style=" padding: 0px;"><a
							href="my-account.html" class="btn view-more"><strong>Volunteer</strong></a></div>
			</div>
		</div>
	</div>
	<div class="u-header__section">
		<div class="py-2 py-xl-5 bg-primary-down-lg">
			<div class="container-fluid my-0dot5 my-xl-0">
				<div class="row align-items-center">
					<div class="col-auto col-md-2">
						<nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
							<a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center"
							   href="<?= base_url(); ?>" aria-label="Electro"><img
										src="<?= base_url('assets/frontend/img/logos.png'); ?>" alt=""></a>
							<div class="menubars"><i class="fa fa-bars" aria-hidden="true"></i></div>
						</nav>
					</div>
					<div class="col d-none d-xl-block col-md-7">
						<form class="js-focus-state">
							<label class="sr-only" for="searchproduct">Search</label>
							<div class="input-group">
								<button class="searcvhs">Products</button>
								<input type="email"
									   class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary"
									   name="email" id="searchproduct-item" placeholder="Search for Products"
									   aria-label="Search for Products" aria-describedby="searchProduct1" required>
								<div class="input-group-append">
									<button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button"
											id="searchProduct1"><span class="ec ec-search font-size-24"></span> Search
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col text-right text-xl-left pl-0 pl-xl-3 position-static col-md-3">
						<ul class="updatesd">
							<li class="">
								<?php
								if (empty($controller->currentUser['logged_in'])) {
									?>
									<a id="sidebarNavToggler" class="target-of-invoker-has-unfolds">
										<p><i class="fa fa-user" aria-hidden="true"></i></p>
										Sign Free <br>Join Free
									</a>
									<?php
								} else {
									?>
									<a style="color: #333e48;" class="target-of-invoker-has-unfolds" href="<?= base_url("profile/logout"); ?>">
										<p><i class="fa fa-user" aria-hidden="true"></i></p>
										Logout</a>
									<?php
								}
								?>
							</li>
							<li class="ulineme3"><a href="<?= base_url("profile"); ?>">
								<?php
								$userType = [1 => "Organization", 2 => "Doner", 3 => "Needy"];
								?>
								<i class="far fa-user-circle"></i><span class="cartst"> <?= !empty($controller->currentUser['user_type']) ? $userType[$controller->currentUser['user_type']] : ""; ?> Account</span></a>
							</li>
							<li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block">
								<a href="needy.html" style="    padding: 0px;">
									<i class="fa fa-cart-plus" aria-hidden="true"></i>
									<p class="cartst" style="    font-size: 13px;">Needy</p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="d-none1 d-xl-block container-fluid">
			<div class="row">
				<div class="col-md-auto d-none d-xl-block">
					<div class="max-width-270 min-width-270">
						<div id="basicsAccordion">
							<div class="card border-0">
								<div class="card-header card-collapse border-0" id="basicsHeadingOne">
									<button type="button" id="categories-selects"
											class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
											data-toggle="collapse"
											data-target="#basicsCollapseOne"
											aria-expanded="true"
											aria-controls="basicsCollapseOne">
                                 <span class="ml-0 text-gray-90 mr-2">
                                 <span class="fa fa-list-ul"></span>
                                 </span>
										<span class="pl-1 text-gray-90">Categories</span>
									</button>
								</div>
								<div id="basicsCollapseOne" class="collapse vertical-menu"
									 aria-labelledby="basicsHeadingOne"
									 data-parent="#basicsAccordion">
									<div class="card-body p-0">
										<nav class="js-mega-menu navbar navbar-expand-xl u-header__navbar u-header__navbar--no-space hs-menu-initialized">
											<div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
												<ul class="navbar-nav u-header__navbar-nav">
													<?php
													$i = 0;
													foreach ($topNavigationCategories as $val) {
														?>
														<li class="nav-item hs-has-mega-menu u-header__nav-item"
															data-event="hover"
															data-animation-in="slideInUp"
															data-animation-out="fadeOut"
															data-position="left">
															<a id="basicMegaMenu<?= $i; ?>"
															   class="nav-link u-header__nav-link u-header__nav-link-toggle"
															   href="javascript:;" aria-haspopup="true"
															   aria-expanded="false"><?= $val->title; ?><i
																		class="fas fa-chevron-right"></i></a>
															<div class="hs-mega-menu vmm-tfw u-header__sub-menu"
																 aria-labelledby="basicMegaMenu">
																<div class="vmm-bg">
																	<img class="img-fluid"
																		 src="<?= base_url($val->top_navigation_image); ?>"
																		 alt="Image Description">
																</div>
																<div class="row u-header__mega-menu-wrapper">
																	<?php
																	$subCategories = $controller->Categoriesmodel->getCategory($val->id);
																	foreach ($subCategories as $subcatVal) {
																		?>
																		<div class="col mb-3 mb-sm-0">
																			<span class="u-header__sub-menu-title"><?= $subcatVal->title; ?></span>
																			<ul class="u-header__sub-menu-nav-group mb-3">
																				<?php
																				$subSubCategories = $controller->Categoriesmodel->getCategory($subcatVal->id);
																				foreach ($subSubCategories as $pVal) {
																					?>
																					<li>
																						<a class="nav-link u-header__sub-menu-nav-link"
																						   href="<?= base_url("category/" . $pVal->slug); ?>"><?= $pVal->title; ?></a>
																					</li>
																					<?php
																				}
																				?>
																				<!--<li><a class="nav-link u-header__sub-menu-nav-link u-nav-divider border-top pt-2 flex-column align-items-start" href="#"><div class="">Appliances8</div></a></li>-->
																			</ul>
																		</div>
																		<?php
																	}
																	?>
																</div>
															</div>
														</li>
														<?php
													}
													?>
												</ul>
											</div>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
						<div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
							<ul class="navbar-nav u-header__navbar-nav">
								<?php
								$menuCategories = $controller->Pagesmodel->pageCategory();
								foreach ($menuCategories as $valMenuCategories) {
									?>
									<li class="nav-item hs-has-mega-menu u-header__nav-item"
										data-event="click"
										data-animation-in="slideInUp"
										data-animation-out="fadeOut"
										data-position="left">
										<a id="homeMegaMenu"
										   class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale"
										   href="javascript:;" aria-haspopup="true" aria-expanded="false"><?= $valMenuCategories->name; ?> &nbsp; <i
													class="fa fa-angle-down"></i> </a>
										<div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
											<div class="row u-header__mega-menu-wrapper">
												<?php
												$menuSubCategories = $controller->Pagesmodel->getPagesByCategoryId($valMenuCategories->id);
												if(!empty($menuSubCategories)) {
												?>
													<div class="col-md-6" style="padding: 0;">
														<ul class="u-header__sub-menu-nav-group">
															<?php
															$mf1 = 1;
															foreach ($menuSubCategories as $valMenuSubCategories)
															{
																if ($mf1 > 4) { break; }
																?>
																<li>
																	<a href="<?= base_url($valMenuSubCategories->slug.".html"); ?>" class="nav-link u-header__sub-menu-nav-link"><img src="<?= base_url($valMenuSubCategories->menu_icon_image); ?>" alt=""> &nbsp;<?= $valMenuSubCategories->title; ?></a></li>
																<?php
																$mf1++;
															}
															?>
														</ul>
													</div>
													<div class="col-md-6" style="padding: 0;">
														<ul class="u-header__sub-menu-nav-group">
															<?php
															$mf2 = 1;
															foreach ($menuSubCategories as $valMenuSubCategories)
															{
																if ($mf2 <= 4) { $mf2++; continue; }
																if ($mf2 > 8) { break; }
																?>
																<li><a href="<?= base_url($valMenuSubCategories->slug.".html"); ?>" class="nav-link u-header__sub-menu-nav-link"><img src="<?= base_url($valMenuSubCategories->menu_icon_image); ?>" alt=""> &nbsp;<?= $valMenuSubCategories->title; ?></a></li>
																<?php
																$mf2++;
															}
															?>
														</ul>
													</div>
												<?php
												}
												?>
											</div>
										</div>
									</li>
									<?php
								}
								?>
								
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

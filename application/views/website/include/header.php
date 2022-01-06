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
					<a href="<?= base_url("category/".$val->slug); ?>" class="radius radius<?= $i; ?>">
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
				<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 text-center" style=" padding: 0px;"><a href="my-account.html" class="btn view-more"><strong>Volunteer</strong></a></div>
			</div>
		</div>
	</div>
	<div class="u-header__section">
		<div class="py-2 py-xl-5 bg-primary-down-lg">
			<div class="container-fluid my-0dot5 my-xl-0">
				<div class="row align-items-center">
					<div class="col-auto col-md-2">
						<nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270"><a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="<?= base_url(); ?>" aria-label="Electro"><img src="<?= base_url('assets/frontend/img/logos.png'); ?>" alt=""></a> <div class="menubars"><i class="fa fa-bars" aria-hidden="true"></i></div></nav>
					</div>
					<div class="col d-none d-xl-block col-md-7">
						<form class="js-focus-state">
							<label class="sr-only" for="searchproduct">Search</label>
							<div class="input-group">
								<button class="searcvhs">Products</button><input type="email" class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary" name="email" id="searchproduct-item" placeholder="Search for Products" aria-label="Search for Products" aria-describedby="searchProduct1" required>
								<div class="input-group-append"><button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button" id="searchProduct1"><span class="ec ec-search font-size-24"></span>  Search</button></div>
							</div>
						</form>
					</div>
					<div class="col text-right text-xl-left pl-0 pl-xl-3 position-static col-md-3">
						<ul class="updatesd">
							<li class="">
								<a id="sidebarNavToggler" class="target-of-invoker-has-unfolds">
									<p><i class="fa fa-user" aria-hidden="true"></i></p>
									Sign Free <br>Join Free
								</a>
							</li>
							<li class="ulineme3"><a href="doner-account.html"><i class="far fa-user-circle"></i><span class="cartst"> Doner Account</span></a></li>
							<li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block">
								<a href="needy.html" style="    padding: 0px;">
									<i class="fa fa-cart-plus" aria-hidden="true"></i>   <p class="cartst" style="    font-size: 13px;">Needy</p>
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
									<button type="button" id="categories-selects" class="btn-link btn-remove-focus btn-block d-flex card-btn py-3 text-lh-1 px-4 shadow-none btn-primary rounded-top-lg border-0 font-weight-bold text-gray-90"
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
													$i=0;
													foreach ($topNavigationCategories as $val) {
														?>
														<li class="nav-item hs-has-mega-menu u-header__nav-item"
															data-event="hover"
															data-animation-in="slideInUp"
															data-animation-out="fadeOut"
															data-position="left">
															<a id="basicMegaMenu<?= $i; ?>" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false"><?= $val->title; ?><i class="fas fa-chevron-right"></i></a>
															<div class="hs-mega-menu vmm-tfw u-header__sub-menu" aria-labelledby="basicMegaMenu">
																<div class="vmm-bg">
																	<img class="img-fluid" src="<?= base_url($val->top_navigation_image); ?>" alt="Image Description">
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
																					<li><a class="nav-link u-header__sub-menu-nav-link" href="<?= base_url("category/".$pVal->slug); ?>"><?= $pVal->title; ?></a></li>
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
								<li class="nav-item hs-has-mega-menu u-header__nav-item"
									data-event="click"
									data-animation-in="slideInUp"
									data-animation-out="fadeOut"
									data-position="left">
									<a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale" href="javascript:;" aria-haspopup="true" aria-expanded="false">Impect &nbsp; <i class="fa fa-angle-down"></i>   </a>
									<div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
										<div class="row u-header__mega-menu-wrapper">
											<div class="col-md-6">
												<!--  <span class="u-header__sub-menu-title">Products</span> -->
												<ul class="u-header__sub-menu-nav-group">
													<li><a href="education.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/edu.png" alt=""> &nbsp; Education</a></li>
													<li><a href="health.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/healthcare.png" alt=""> &nbsp; Health</a></li>
													<li><a href="livelhood.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/red-envelope.png" alt=""> &nbsp; Livelihood</a></li>
													<li><a href="women.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/women-rights.png" alt=""> &nbsp; Women Empowerment</a></li>
												</ul>
											</div>
											<div class="col-md-6">
												<!--  <span class="u-header__sub-menu-title">Products</span> -->
												<ul class="u-header__sub-menu-nav-group mb-3">
													<li><a href="disaster.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/natural-disaster.png" alt=""> &nbsp; Disaster Response</a></li>
													<li><a href="empowering.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/employees.png" alt=""> &nbsp; Empowering Grassroots</a></li>
													<li><a href="menstrual.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/menstrual-cycle.png" alt=""> &nbsp; Menstrual Health</a></li>
													<li><a href="access.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/accessibility.png" alt=""> &nbsp; Access & Infrastructure</a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="nav-item hs-has-mega-menu u-header__nav-item men234us2"
									data-event="click"
									data-animation-in="slideInUp"
									data-animation-out="fadeOut"
									data-position="left">
									<a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale" href="javascript:;" aria-haspopup="true" aria-expanded="false">Help in emergencies&nbsp; <i class="fa fa-angle-down"></i>   </a>
									<div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
										<div class="row u-header__mega-menu-wrapper">
											<div class="col-md-6" style="    padding: 0px;">
												<!--  <span class="u-header__sub-menu-title">Products2</span> -->
												<ul class="u-header__sub-menu-nav-group">
													<li><a href="preparing.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/ideass.png" alt=""> &nbsp; Preparing for emergencies</a></li>
													<li><a href="how.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/psychological-help.png" alt=""> &nbsp; How can I help?</a></li>
												</ul>
											</div>
											<div class="col-md-6">
												<!--  <span class="u-header__sub-menu-title">Products2</span> -->
												<ul class="u-header__sub-menu-nav-group mb-3">
													<li><a href="coping.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/economy.png" alt=""> &nbsp; Coping after a crisis</a></li>
													<li><a href="resources.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/resources.png" alt=""> &nbsp;  Resources to help you</a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="nav-item hs-has-mega-menu u-header__nav-item  men234us3"
									data-event="click"
									data-animation-in="slideInUp"
									data-animation-out="fadeOut"
									data-position="left">
									<a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale" href="javascript:;" aria-haspopup="true" aria-expanded="false"> Community services &nbsp; <i class="fa fa-angle-down"></i>   </a>
									<div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
										<div class="row u-header__mega-menu-wrapper">
											<div class="col-md-6">
												<!--    <span class="u-header__sub-menu-title">Products3</span> -->
												<ul class="u-header__sub-menu-nav-group">
													<li><a href="aged.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/care.png" alt=""> &nbsp; Aged care services for older people
														</a>
													</li>
													<li><a href="ndis.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/customer.png" alt=""> &nbsp; NDIS services
														</a>
													</li>
													<li><a href="mental.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/mental-health.png" alt=""> &nbsp; Mental health help
														</a>
													</li>
													<li><a href="homelessness.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/shelter.png" alt=""> &nbsp; Homelessness</a></li>
												</ul>
											</div>
											<div class="col-md-6" style="padding:0px;">
												<!--  <span class="u-header__sub-menu-title">Products3</span>  -->
												<ul class="u-header__sub-menu-nav-group mb-3">
													<li><a href="aboriginal.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/torres-del-paine.png" alt=""> &nbsp; For Aboriginal and Torres Strait Islander peoples
														</a>
													</li>
													<li><a href="children.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/family.png" alt=""> &nbsp; Children and families
														</a>
													</li>
													<li><a href="people.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/legal-system.png" alt=""> &nbsp; People in the justice system
														</a>
													</li>
													<li><a href="young.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/skater.png" alt=""> &nbsp; Young Parents Program (NSW)
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="nav-item hs-has-mega-menu u-header__nav-item men234us4"
									data-event="click"
									data-animation-in="slideInUp"
									data-animation-out="fadeOut"
									data-position="left">
									<a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale" href="javascript:;" aria-haspopup="true" aria-expanded="false">Contribute Material &nbsp; <i class="fa fa-angle-down"></i>   </a>
									<div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
										<div class="row u-header__mega-menu-wrapper">
											<div class="col-md-12">
												<!--           <span class="u-header__sub-menu-title">Products2</span> -->
												<ul class="u-header__sub-menu-nav-group">
													<li><a href="dropping.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/water-drop.png" alt=""> &nbsp; Dropping Centers</a></li>
													<li><a href="collection.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/self-collect.png" alt=""> &nbsp; Collection Camps</a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="nav-item hs-has-mega-menu u-header__nav-item  men234us5"
									data-event="click"
									data-animation-in="slideInUp"
									data-animation-out="fadeOut"
									data-position="left">
									<a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle text-sale" href="javascript:;" aria-haspopup="true" aria-expanded="false">Get Involved &nbsp; <i class="fa fa-angle-down"></i>   </a>
									<div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
										<div class="row u-header__mega-menu-wrapper">
											<div class="col-md-6">
												<!--   <span class="u-header__sub-menu-title">Products3</span> -->
												<ul class="u-header__sub-menu-nav-group">
													<li><a href="volunteer.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/volunteering.png" alt=""> &nbsp; Volunteer</a></li>
													<li><a href="membership.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/membership.png" alt=""> &nbsp; Membership</a></li>
													<li><a href="partner.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/partner.png" alt=""> &nbsp; Partner with us</a></li>
													<li><a href="corporate.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/business-partnership.png" alt=""> &nbsp; Corporate Partnerships</a></li>
												</ul>
											</div>
											<div class="col-md-6">
												<!--      <span class="u-header__sub-menu-title">Products3</span> -->
												<ul class="u-header__sub-menu-nav-group mb-3">
													<li><a href="individual.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/individual.png" alt=""> &nbsp; Individual Support</a></li>
													<li><a href="institutional.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/bank.png" alt=""> &nbsp; Institutional Alliances</a></li>
													<li><a href="contribute.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/contribution.png" alt=""> &nbsp; Contribute Material</a></li>
												</ul>
											</div>
											<div class="col-md-12">
												<!--      <span class="u-header__sub-menu-title">Products3</span> -->
												<ul class="u-header__sub-menu-nav-group mb-3">
													<li><a href="#1" class="nav-link u-header__sub-menu-nav-link"><b style="    font-size: 16px;">Learning Help</b></a></li>
													<li id="ulanesd23"><a href="first.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/first-aid-bag.png" alt=""> &nbsp; First Aid Courses</a></li>
													<li id="ulanesd23"><a href="schools.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/presentation.png" alt=""> &nbsp; For schools</a></li>
													<li id="ulanesd23"><a href="community.html" class="nav-link u-header__sub-menu-nav-link"><img src="assets/img/chat-group.png" alt=""> &nbsp; Community Conversations</a></li>
												</ul>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

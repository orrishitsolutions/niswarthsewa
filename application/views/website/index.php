<?php include('include/header.php');?>
<main id="content" role="main">
	<div class="mb-599">
		<div class="row" style="margin:0px;">
			<div class="col-md-3 slider1part" style="padding:0px;">
				<div class="mb-80000">
					<div class="position-relative position-md-static">
						<ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0" id="pills-tab-8" role="tablist">
							<li class="nav-item" style="width:100%;"><a class="nav-link active" id="Jpills-one-example1-tab1" data-toggle="pill" href="#Jpills-one-example11" role="tab" aria-controls="Jpills-one-example11" aria-selected="true">Donate Services</a></li>
						</ul>
					</div>
					<div class="borders-radius-17 p-4 mt-4 mt-md-0 px-lg-10 py-lg-9">
						<div class="tab-content" id="Jpills-tabContent">
							<div class="tab-pane fade active show" id="Jpills-one-example11" role="tabpanel" aria-labelledby="Jpills-one-example1-tab1">
								<ul style="position:relative;">
									<li class="bordertopts"></li>
									<?php
									$donateService = $controller->Pagesmodel->showCategoryByStaticBlockId("banner_donate_service", "banner");
									foreach ($donateService as $val) {
									?>
									<li>
										<a href="<?= base_url("category/".$val->slug); ?>">
											<img src="<?= base_url($val->banner_part_image); ?>" alt="">
											<p><?= $val->title; ?></p>
										</a>
									</li>
									<?php
									}
									?>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6" style="padding:0px;">
				<div class="bg-img-hero" style="background-image: url(assets/img/banner1.jpg);">
					<div class="container min-height-420 overflow-hidden">
						<div class="js-slick-carousel u-slick"data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-3 pl-2 pb-1">
							<div class="js-slide bg-img-hero-center">
								<div class="row min-height-420 py-7 py-md-0">
									<div class="col-xl-6 col-6 mt-md-8 sliderheadings">
										<h1 class="font-size-64 text-lh-57 font-weight-light"data-scs-animation-in="fadeInUp">DONATE<span class="d-block font-size-55">CLOTHES</span></h1>
										<h6 class="font-size-15 font-weight-bold mb-3"data-scs-animation-in="fadeInUp"data-scs-animation-delay="200">UNDER FAVORABLE CLOTHES</h6>
										<a href="#1" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"data-scs-animation-in="fadeInUp"data-scs-animation-delay="400">Get Started</a>
									</div>
									<div class="col-xl-6 col-6 d-flex align-items-center"data-scs-animation-in="zoomIn"data-scs-animation-delay="500"><img class="img-fluid" src="<?= base_url('assets/frontend/img/slider1.png'); ?>" alt="Image Description"></div>
								</div>
							</div>
							<div class="js-slide bg-img-hero-center" data-animation-delay="0">
								<div class="row min-height-420 py-7 py-md-0">
									<div class="col-xl-6 col-6 mt-md-8 sliderheadings">
										<h1 class="font-size-64 text-lh-57 font-weight-light"data-scs-animation-in="fadeInUp">DONATE<span class="d-block font-size-55">BOOKS</span></h1>
										<h6 class="font-size-15 font-weight-bold mb-3"data-scs-animation-in="fadeInUp"data-scs-animation-delay="200">UNDER FAVORABLE BOOKS</h6>
										<a href="#1" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"data-scs-animation-in="fadeInUp"data-scs-animation-delay="400">Get Started</a>
									</div>
									<div class="col-xl-6 col-6 d-flex align-items-center"data-scs-animation-in="fadeInUp"data-scs-animation-delay="500"><img class="img-fluid" src="<?= base_url('assets/frontend/img/slider2.png'); ?>" alt="Image Description"></div>
								</div>
							</div>
							<div class="js-slide bg-img-hero-center" data-animation-delay="0">
								<div class="row min-height-420 py-7 py-md-0">
									<div class="col-xl-6 col-6 mt-md-8 sliderheadings">
										<h1 class="font-size-64 text-lh-57 font-weight-light"data-scs-animation-in="fadeInUp">DONATE <span class="d-block font-size-55">FOODS</span></h1>
										<h6 class="font-size-15 font-weight-bold mb-3"data-scs-animation-in="fadeInUp"data-scs-animation-delay="200">UNDER FAVORABLE FOODS</h6>
										<a href="#1" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-15"data-scs-animation-in="fadeInUp"data-scs-animation-delay="400">Get Started</a>
									</div>
									<div class="col-xl-6 col-6 d-flex align-items-center"data-scs-animation-in="fadeInRight"data-scs-animation-delay="500"><img class="img-fluid" src="<?= base_url('assets/frontend/img/slider3.png'); ?>" alt="Image Description"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 slider1part" style="padding:0px;">
				<div class="mb-80000">
					<div class="position-relative position-md-static">
						<ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0" id="pills-tab-8" role="tablist">
							<li class="nav-item" style="width:100%;"><a class="nav-link active" id="Jpills-two-example1-tab2" data-toggle="pill" href="#Jpills-two-example11" role="tab" aria-controls="Jpills-two-example11" aria-selected="false">Donate Products</a></li>
						</ul>
					</div>
					<div class="borders-radius-17 p-4 mt-4 mt-md-0 px-lg-10 py-lg-9">
						<div class="tab-content" id="Jpills-tabContent">

							<div class="tab-pane fade  active show" id="Jpills-two-example11" role="tabpanel" aria-labelledby="Jpills-two-example1-tab2">
								<ul style="position:relative;">
									<li class="bordertopts"></li>
									<?php
									$donateService = $controller->Pagesmodel->showCategoryByStaticBlockId("banner_donate_products", "banner");
									foreach ($donateService as $val) {
										?>
										<li>
											<a href="<?= base_url("category/".$val->slug); ?>">
												<img src="<?= base_url($val->banner_part_image); ?>" alt="">
												<p><?= $val->title; ?></p>
											</a>
										</li>
										<?php
									}
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php
	$homepageData = $controller->Pagesmodel->getPageBySlug("", $data, 1);
	if (!empty($homepageData)) echo $homepageData;
?>

<?php include('include/footer.php');?>

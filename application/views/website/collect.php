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
			</div>
		</section>
		<section class="pb-5">
			<div class="container min-container">
				<div class="divaridkldf">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-12">
							<h3>
								Collect
							</h3>
						</div>
					</div>
					<div class="row">
						<?= !empty($login['error']) ? $login['error'] : ""; ?>
						<?= !empty($login['success']) ? $login['success'] : ""; ?>
						<form style="width: 100%;" class="js-validate" novalidate="novalidate" method="post" action="<?= base_url("profile/donate"); ?>" >
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">


							<div class="form-group" style="width: 100%">
								<select class="form-control" name="state" id="state">
									<option value="">------Select State------</option>
									<?php
									foreach ($state as $valState) {
										?>
										<option value="<?= $valState->state_id; ?>">
											<?= $valState->state_title; ?>
										</option>
										<?php
									}
									?>
								</select>
							</div>
							<div class="form-group" style="width: 100%" id="_district">

							</div>
							<div class="form-group" style="width: 100%" id="_city">

							</div>
							<div class="form-group" style="width: 100%" id="_display_product">

							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

	</div>
</main>
<input type="hidden" id="token_value" value="<?= $this->security->get_csrf_hash(); ?>">
<script>
	$('#product_type_id').on('change', function () {
		if (this.value == 2) {
			$("#configurable_options").css("display", "block");
			$("#check_configurable_options").val(1);
		} else {
			$("#configurable_options").css("display", "none");
			$("#check_configurable_options").val(0);
		}
	});

	//District
	$(document).on('change', "#state", function (e) {
		$.post( "<?= base_url("profile/district"); ?>", { state: $("#state").val(), '<?= $this->security->get_csrf_token_name(); ?>': $("#token_value").val() })
			.done(function( data ) {
				var obj = jQuery.parseJSON(data);
				$("#token_value").val(obj.csrfHash);
				$("#_district").html(obj.result);
			});
	});

	//City
	$(document).on('change', "#district", function (e) {
		$.post( "<?= base_url("profile/city"); ?>", { district: $("#district").val(), '<?= $this->security->get_csrf_token_name(); ?>': $("#token_value").val() })
			.done(function( data ) {
				var obj = jQuery.parseJSON(data);
				$("#token_value").val(obj.csrfHash);
				$("#_city").html(obj.result);
			});
	});

	//Product
	$(document).on('change', "#city", function (e) {
		$.post( "<?= base_url("profile/show-product"); ?>", { state: $("#state").val(), district: $("#district").val(), city: $("#city").val(), '<?= $this->security->get_csrf_token_name(); ?>': $("#token_value").val() })
			.done(function( data ) {
				var obj = jQuery.parseJSON(data);
				arr = obj.result;
				var productStr = "";
				for (var key in arr) {
					var value = arr[key];
					productStr += '<div class="row"><div class="col-md-2 col-sm-2 col-12"><div class="d-img"><img src="'+value.image+'"  alt="img2" style="width:100%;height:110px;"></div></div>';
					productStr += '<div class="col-md-10 col-sm-10 col-12"><div class="one-bed"><div class="breaks"><div class="headingsection"><h4>'+value.title+'</h4></div></div>';
					productStr += '<div class="fast"><p style="text-align: right;"><input id="product_'+value.id+'" onclick="collect('+value.id+')" class="btn btn-primary-dark-w px-5" type="button" value="Collect" ></p></div></div></div></div><hr>';
				}
				$("#token_value").val(obj.csrfHash);
				$("#_display_product").html(productStr);
			});
	});

	//Collect
	function collect(product_id)
	{
		$.post( "<?= base_url("profile/collect-product"); ?>", { id: product_id, '<?= $this->security->get_csrf_token_name(); ?>': $("#token_value").val() })
			.done(function( data ) {
				var obj = jQuery.parseJSON(data);
				arr = obj.result;
				var productStr = "";
				for (var key in arr) {
					var value = arr[key];
					console.log(key, value);
				}
				$("#token_value").val(obj.csrfHash);
				$("#product_"+product_id).val("Collected");
			})
	}


</script>

<?php include('include/footer.php'); ?>

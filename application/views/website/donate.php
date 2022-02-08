<?php
$errors = $this->session->flashdata();
include('include/header.php');
?>
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
								Donate
							</h3>
						</div>
					</div>
					<div class="row">
						<?php if (!empty($errors['status'])) : ?>
							<div class="alert alert-success alert-dismissible fade show mt-1" role="alert">
								<strong> <?= $errors['status'] ?></strong>
							</div>
						<?php endif; ?>

						<?php if (!empty($errors['error'])) : ?>
							<div class="alert alert-danger" role="alert">
								<strong> <?= $errors['error'] ?></strong>
							</div>
						<?php endif; ?>
						<?= !empty($data['error']) ? $data['error'] : ""; ?>
						<?= !empty($data['success']) ? $data['success'] : ""; ?>

						<form style="width: 100%;" class="js-validate" novalidate="novalidate" method="post" action="<?= base_url("profile/donate"); ?>" enctype="multipart/form-data" >

							<input type="hidden" id="token_value" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

							<script>
								$(document).ready(function () {
									var i = 20;
									$('.categorytree input[type=checkbox]').each(function () {
										if ($(this).attr("parent_id") > 0) {
											$('<div style="margin-left: ' + i + 'px;width: ' + i + 'px;float: left;">&nbsp;</div>').insertAfter($(this));
										}
									})
									$('.categorytree input[type=checkbox]').each(function () {
										if ($(this).attr("parent_id") > 0) {
											var j = $(this).prevAll("input[type=checkbox]");
											if (j.attr("parent_id") > 0 && $(this).attr("parent_id") == j.val()) {
												var w = parseInt(j.next("div").css("margin-left"));
												if ($(this).next().is("div")) {
													$(this).next("div").css("margin-left", w + parseInt(i) + "px");
													$(this).next("div").css("width", w + parseInt(i) + "px");
												}
											}
										}
									})
								});
							</script>
							<div class="mb-3 categorytree" style="height: 400px; overflow: auto">
								<label for="category" class="form-label">Category</label>
								<br/>
								<?php
								$cat = [];
								$subMark = '';
								?>
								<?= $controller->Categoriesmodel->categoryTree(0 , $subMark, $cat); ?>
							</div>
							<div class="mb-3">
								<label for="product_type_id" class="form-label">Type Name</label>
								<select id="product_type_id" class="form-control" name="product_type_id">
									<option value="">------SELECT------</option>
									<?php
									foreach ($productType as $tVal) {
										?>
										<option value="<?= $tVal->id; ?>" >
											<?= $tVal->type_name; ?>
										</option>
										<?php
									}
									?>
								</select>
							</div>
							<div id="configurable_options" style="display: none" >
								<input id="check_configurable_options" type="hidden" value="0">
								<div class="mb-3">
									<label for="attributes_set_id" class="form-label">Attribute Set</label>
									<select id="attributes_set_id" class="form-control" name="attributes_set_id">
										<option value="">------SELECT------</option>
										<?php
										foreach ($attributeSet as $aVal) {
											?>
											<option value="<?= $aVal->id; ?>" >
												<?= $aVal->name; ?>
											</option>
											<?php
										}
										?>
									</select>
								</div>
							</div>
							<hr>
							<div class="form-group" style="width: 100%">
								<input value="" type="title" class="form-control" name="title" placeholder="Title" >
							</div>
							<div class="form-group" style="width: 100%">
								<input value="<?= !empty($data['quantity']) ? $data['quantity'] : "" ?>" type="quantity" class="form-control" name="quantity" placeholder="Quantity" >
							</div>
							<div class="form-group" style="width: 100%">
								<textarea placeholder="Description" class="form-control" name="content" ></textarea>
							</div>



							<!-- 						<div class="form-group" style="width: 100%">
														<input class="form-control " type="file" name="image[]" multiple="multiple"  id="image" >
													</div> -->

							<div class="form-group">
								<div class="form-group" style="display:inline-block"></div>
								<span id="addFile" style="cursor:pointer;" class="label-right pointer text-primary">
		                            	<i class="fas fa-paperclip"></i>
		                            		Attachements Image
		                            </span>
							</div>
							<hr>
							<input type="hidden" name="users_id" value="<?=$controller->profile['id']?>">
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
							<div class="mb-1">
								<div class="mb-3">
									<button name="login" value="submit" type="submit"  class="btn btn-primary-dark-w px-5" >Publish</button></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

	</div>
</main>
<!--input type="hidden" id="token_value" value="<?php //echo $this->security->get_csrf_hash(); ?>"-->


<script>
	$(document).ready(function(){
		var limit = 1;
		var active = "inbox";
		var max = 17;
		$('#addFile').on('click', function() {
			limit++;
			if (max >= limit ) {
				html='';
				html += '<label class="attach-file pointer attach"  style="margin-left: 5px; margin-right: 5px;"><i class="fa fa-upload"style="cursor:pointer;"></i><input type="file" name="file[]"  class="files" style="display:none"  onchange="validate_fileupload(this);"><i class="fa fa-times remove-file pointer" style="cursor:pointer;background:#000;color:#fff;border-radius: 3px;padding: 5px;font-size: 7px;"></i></label>';
				$(this).prev().append(html);
				$(this).removeAttr('id');
			} else {
				limit--;
				console.log("maximum limit of attachment is " + max);
				$('.label-right').hide();
				//toastr.warning("maximum limit of attachment is " + max);
			}
		});
		$(document.body).on('click', '.remove-file', function(event) {
			event.preventDefault();
			limit--;
			$(this).parent().remove();
		});
	});
	function validate_fileupload(thisthis)
	{
		var limit = 1;
		var max = 16;
		var size=thisthis.files[0].size/1000;
		var maxsize = '5845';
		var allowed_extensions =["jpg","jpeg","png","xml","sql","pdf","csv","zip","html","js","doc","php","css"]
		if(thisthis.type == 'file') {
			fileName = thisthis.value;
			var file_extension = fileName.split('.').pop();
			for(var i = 0; i <= allowed_extensions.length && limit<=max; i++)
			{
				if(allowed_extensions[i]==file_extension && size<maxsize)
				{
					var getImagePath = URL.createObjectURL(thisthis.files[0]);
					$(thisthis).parent().css('background-image', 'url(' + getImagePath + ')');
					$(thisthis).parent().append(file_extension);
					limit++;
					return true;
				}
			}
		}
		if(limit>max)
			toastr.warning('Maximum Number of file is '+max);
		else
			toastr.warning("Invalid file type or size");
		thisthis.value="";
		return false;
	}
	$(document.body).on('mouseenter','.attach-file',function(){
		$(this).children().last().css("display","inline-block");
	});
	$(document.body).on('mouseleave','.attach-file',function(){
		$(this).children().last().css("display","none");
	});
</script>


<script>
	$("#image").on("change", function()
	{
		if ($("#image")[0].files.length > 16) {
			alert("You can select maximum 16  images");
			$("#image").addClass('is-invalid');

		}
		else {
			$("#image").addClass('is-valid');

		}
	});



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


</script>

<?php include('include/footer.php'); ?>



<style type="text/css">

	label.attach-file {
		display: inline-block;
		width: 65px;
		height: 65px;
		background: #F1F1F1;
		border: 1px dashed #DDD;
		border-radius: 5px;
		text-align: center;
		line-height: 50px;
		overflow: hidden;
		background-size: cover;
		background-position: center;
	}


	.remove-file {
		margin-left: 10px;
		position: absolute;
		display: none;
	}
</style>

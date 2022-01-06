<div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
	<div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
		<ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
			<li>
				<div class="dropdown-title">Categories</div>
			</li>
			<?php
			$l=0;
			foreach($leftNavigation as $categoryVal)
			{
				?>
				<li>
					<a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button"
					   data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav<?= $l; ?>Collapse"
					   data-target="#sidebarNav<?= $l; ?>Collapse"><span><i class="fas fa-chevron-right "
																			id="right-arrow"></i></span> <?= $categoryVal->title; ?></a>
					<div id="sidebarNav<?= $l; ?>Collapse" class="collapse" data-parent="#sidebarNav">
						<ul id="sidebarNav<?= $l; ?>" class="list-unstyled dropdown-list">
							<?php
							$subCategories = $controller->Categoriesmodel->getCategory($categoryVal->id);
							foreach ($subCategories as $subcatVal) {
								?>
								<li><a class="dropdown-item" href="<?= $subcatVal->slug; ?>"><?= $subcatVal->title; ?> </a></li>
								<?php
							}
							?>
						</ul>
					</div>
				</li>
				<?php
				$l++;
			}
			?>
		</ul>
	</div>
	<?php
	if (!empty($filter))
	{
		?>
		<div class="mb-6">
			<div class="border-bottom border-color-1 mb-5">
				<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
			</div>
			<script>
				$(function(){
					$(".filter input").click(function(){
						str = "";
						$('.filter input').each(function() {
							if($(this).is(":checked")) {
								str += $(this).attr("attribute")+"-"+$(this).val() + "=" + $(this).val() + "&";
							}
						});
						var url = window.location.href;
						var a = url.indexOf("?");
						var b =  url.substring(a);
						var c = url.replace(b,"");
						url = c;
						window.location = url + "?" + str;
					});
					/*var url = window.location.href;
					alert(url);
					$('.filter input').each(function() {
						alert($(this).attr("attribute"));
						if (url.match($(this).attr("attribute")).length > 0) {
							//$(this).attr("checked","checked");
						}
					});*/
				});
			</script>
			<?php
			$a = 0;
			foreach ($filter as $attributes) {
				?>
				<div class="border-bottom pb-4 mb-4">
					<h4 class="font-size-14 mb-3 font-weight-bold"><?= $attributes['name']; ?></h4>
					<?php
					$b = 0;
					foreach ($attributes['attributes'] as $val) {
						?>
						<div class="filter form-group d-flex align-items-center justify-content-between mb-2 pb-1">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="brandTnf<?= $a.$b; ?>" attributeId="<?= $attributes['id']; ?>" attribute="<?= $attributes['slug']; ?>" value="<?= $val->name; ?>" >
								<label class="custom-control-label" for="brandTnf<?= $a.$b; ?>"><?= $val->name; ?>
									<!-- <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span> -->
								</label>
								<?php
								$qs = $attributes['slug']."-".$val->name."=".$val->name;
								$qs = strstr($_SERVER['QUERY_STRING'],$qs);
								if(!empty($qs)){
									?>
									<script>
										$("#brandTnf<?= $a.$b; ?>").attr("checked","checked");
									</script>
									<?php
								}
								?>
							</div>
						</div>
						<?php
						$b++;
					}
					$a++;
					?>
					<!-- <div class="collapse" id="collapseBrand">
						<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
							<div class="custom-control custom-checkbox"><input type="checkbox"
																			   class="custom-control-input"
																			   id="brandGucci"><label
										class="custom-control-label" for="brandGucci">Gucci<span
											class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
							</div>
						</div>
						<div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
							<div class="custom-control custom-checkbox"><input type="checkbox"
																			   class="custom-control-input"
																			   id="brandMango"><label
										class="custom-control-label" for="brandMango">Mango<span
											class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
							</div>
						</div>
					</div>
					<a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2"
					   data-toggle="collapse" href="#collapseBrand" role="button" aria-expanded="false"
					   aria-controls="collapseBrand"><span class="link__icon text-gray-27 bg-white"><span
									class="link__icon-inner">+</span></span><span
								class="link-collapse__default">Show more</span><span
								class="link-collapse__active">Show less</span></a> -->
				</div>
				<?php
			}
			?>
		</div>
		<?php
	}
	?>
	<div class="mb-8">
		<div class="border-bottom border-color-1 mb-5">
			<h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Latest Products</h3>
		</div>
		<ul class="list-unstyled">
			<li class="mb-4">
				<div class="row">
					<div class="col-auto"><a href="#" class="d-block width-75"><img class="img-fluid"
																					src="<?= base_url('assets/frontend/img/img1203.jpg'); ?>"
																					alt="Image Description"></a>
					</div>
					<div class="col">
						<h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="#">Clothes</a></h3>

					</div>
				</div>
			</li>
			<li class="mb-4">
				<div class="row">
					<div class="col-auto"><a href="single-product-fullwidth.html"
											 class="d-block width-75"><img class="img-fluid"
																		   src="assets/img/img3110.jpg"
																		   alt="Image Description"></a>
					</div>
					<div class="col">
						<h3 class="text-lh-1dot2 font-size-14 mb-0"><a href="#">Books</a></h3>

					</div>
				</div>
			</li>
		</ul>
	</div>
</div>

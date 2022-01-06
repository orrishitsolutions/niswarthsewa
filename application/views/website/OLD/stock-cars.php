<!DOCTYPE html>
<html lang="en">
   <head>
      <?php 
         include('include/head-link.php');
         ?>
      <base id="myBase">
      <style>
         .footer_intero dl,
         ol,
         ul {
         color: #8e8e8e;
         }
         .list_grid_v.stockDefault {
         display: none;
         }
         div.gallery {
         margin: 5px;
         border: 1px solid #ccc;
         float: left;
         width: 155px;
         }
         .owl-carousel.searchb_slide.owl-loaded.owl-drag button.owl-prev {
         top: 39px;
         left: 100%;
         }
         .owl-carousel.searchb_slide.owl-loaded.owl-drag button.owl-next {
         right: -66px;
         top: 39px;
         }
      </style>
   </head>
   <body>
      <?php 
         include 'include/header.php';
         ?>
      <div class="breadcrumbs">
         <div class="container">
            <div class="braedc_hrad">
               <h1>49 Pre Owned Luxury Cars Available </h1>
               <p>House of used & new cars</p>
            </div>
            <div class="breadcrmb_nav">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="#">Stock Cars</a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="stock_car">
         <div class="container">
            <div class="opup-sets-model">
               <div class="row">
                  <div class="col-md-12">
                     <div class="stoch_heaD_title">
                        <h3 class="text-center">Find Your Dream Car</h3>
                        <p class="text-center">
                           Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio modi
                           eius suscipit officiis dolorem, impedit, necessitatibus hic, voluptates explicabo quos possimus
                           recusandae laborum architecto maxime nam nesciunt error. Dolorem, nobis.
                        </p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="list_grid_v stockDefault">
                        <ul>
                           <li><a class=" active" href="#"><i class="fa fa-th" aria-hidden="true"></i></a></li>
                           <li><a class="" href="#"><i class="fa fa-list" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 offset-3">
                  <div class="stockcar_navss">
                     <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active brand_data" id="pills-Make-tab" data-toggle="pill"
                           href="#pills-Make" role="tab" aria-controls="pills-Make" aria-selected="true">Brand</a></li>
                        <li class="nav-item"><a class="nav-link style_data" id="pills-Itemss-tab" data-toggle="pill"
                           href="#pills-Itemss" role="tab" aria-controls="pills-Itemss" aria-selected="false">Car
                           Style</a>
                        </li>
                        <li class="nav-item"><a class="nav-link price_data" id="pills-Pricess-tab" data-toggle="pill"
                           href="#pills-Pricess" role="tab" aria-controls="pills-Pricess"
                           aria-selected="false">Price</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="stock_nav_contents_s">
                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Make" role="tabpanel"
                           aria-labelledby="pills-Make-tab">
                           <div class="brows_make align-self-center">
                              <div class="st_slide_c_nav_box all_stk align-items-center"><a href="stock-cars.php">All</a>
                              </div>
                              <div class="st_slide_c_nav_box tttgslide">
                                 <div class="owl-carousel searchb_slide">
                                     <?php
                                       if(count($category_select)!=="")
                                       {
                                           for ($i=0; $i < count($category_select); $i++) { 
                                              ?>
                                    <div class="item">
                                       <a href="#">
                                       <img src="<?=base_url()?>assets-orrish/storage/category-image/<?=$category_select[$i]['file']?>" alt="<?=$category_select[$i]['c_name']?>" />
                                       <span><?=$category_select[$i]['c_name']?></span>
                                       </a>
                                    </div>
                                    <?php } } ?>
                                 </div>
                              </div>
                              <div class="stkbtnss"><a class="btn" data-toggle="modal" data-target="#abe_modal">View
                                 All</a>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Itemss" role="tabpanel" aria-labelledby="pills-Itemss-tab">
                           <div class="brows_make align-self-center">
                              <div class="st_slide_c_nav_box all_stk align-items-center"><a href="stock-cars.php">All</a>
                              </div>
                              <div class="st_slide_c_nav_box tttgslide">
                                 <div class="owl-carousel searchb_slide2">
                                    <?php
                                       if(count($style_select)!=="")
                                       {
                                           for ($i=0; $i < count($style_select); $i++) { 
                                              ?>
                                    <div class="item">
                                       <a href="#">
                                          <div class="swipe-img-effct">
                                             <div class="swipe-aftr-left">
                                                <img class="before-slide lazy" src="<?=base_url()?>assets-orrish/storage/car-style/<?=$style_select[$i]['file1']?>" alt="<?=$style_select[$i]['s_name']?>" />
                                                <img class="after-slide lazy" src="<?=base_url()?>assets-orrish/storage/car-style/<?=$style_select[$i]['file2']?>" alt="<?=$style_select[$i]['s_name']?>" />
                                             </div>
                                          </div>
                                          <span><?=$style_select[$i]['s_name']?></span>
                                       </a>
                                    </div>
                                    <?php } } ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Pricess" role="tabpanel" aria-labelledby="pills-Pricess-tab">
                           <div class="privce_filt_set">
                              <form method="get">
                                 <div class="row">
                                    <div class="col-md-9">
                                       <div class="rang_price">
                                          <label>Price Range</label>
                                          <input type="hidden" id="slider_range" class="flat-slider" />
                                          <input type="hidden" class="min_price" name="min_price" value="1000000">
                                          <input type="hidden" class="max_price" name="max_price" value="40000000">
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="pricefilterbtn"><button class="main_s_btn">Explore Now<i
                                          class="fa fa-angle-right"></i></button></div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="stockcar_wrap">
               <div class="container" id="post-data">
                  <div class="row">
 <?php
                                       if(count($car_select)!=="")
                                       {
                                           for ($i=0; $i < count($car_select); $i++) { 
                                              ?>
                     <div class="col-md-4 page-no" page_id='2'>
                        <div class="abe_prod wow fadeIn hover-img animated" data-wow-delay=".0s"
                           style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                           <a href="#">
                              <div class="abe_P_img">
                                 <img class="hov-zoom lazy" src="<?=base_url()?>assets-orrish/storage/product/<?=$car_select[$i]['p_file']?>" width="348" height="273"
                                    alt="Mercedes-Benz CLA 200D CDI SPORTS">
                           </a>
                           <div class="whatsappcall"><a href="#" target="_blank" class="abew"><i
                              class="fa fa-whatsapp"></i></a><a href="#" class="abep" target="_blank"><i
                              class="fa fa-phone phonemobile"></i></a></div>
                           </div>
                           <div class="abe_model">
                              <div class="skew_bg">
                                 <h3><?=$car_select[$i]['name']?></h3>
                              </div>
                           </div>
                           <div class="abe_fetured">
                              <ul>
                                 <li><img src="<?=base_url()?>assets-website/image/car.png">
                                    <?=$car_select[$i]['model']?>
                                 </li>
                                 <li><img src="<?=base_url()?>assets-website/image/petrol.png">
                                    <?=$car_select[$i]['fuel']?>   
                                  </li>
                                 <li><img src="<?=base_url()?>assets-website/image/meter.png">
                                     <?php 
                                          $driven = $car_select[$i]['driven'];
                                           echo number_format($driven, 0, '', ',');
                                     ?> WSR 
                                  </li>
                              </ul>
                           </div>
                           <div class="abe_p_bot_btn">
                              <ul>
                                 <li class="pleft"> <i class="fas fa-rupee-sign"></i> 
                                    <?php 
                                          $price = $car_select[$i]['price'];
                                           echo number_format($price, 0, '', ',').' /-';
                                     ?>
                                 </li>
                                 <li class="p-right">
                                       <a href="<?=base_url('car-detail')?>/<?=$car_select[$i]['id']?>"> 
                                            See Detail <img src="<?=base_url()?>assets-website/image/plus.png">
                                       </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>

                  <?php } } ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade darkBg" id="abe_modal" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content abe_modal">
               <a class="close-abe-modal" data-dismiss="modal" aria-label="Close" href="javascript:voide(0);"> <img src="<?=base_url()?>assets-website/img/reserve/popcloase.png" /></a>
               <div class="reserve_mod_body">
                  <?php
                     if(count($category_select)!=="")
                     {
                         for ($i=0; $i < count($category_select); $i++) { 
                            ?>
                  <div class="gallery">
                     <a href="#">
                        <img src="<?=base_url()?>assets-orrish/storage/category-image/<?=$category_select[$i]['file']?>" alt="<?=$category_select[$i]['c_name']?>" />
                        <div class="desc"><?=$category_select[$i]['c_name']?></div>
                     </a>
                  </div>
                  <?php } } ?>
               </div>
            </div>
         </div>
      </div>
      <form id="myform"><input type="hidden" name="view" value="grid"></form>
      <input type="hidden" value="0" id='ajax_run'>
      <?php 
         include 'include/footer.php';
         include 'include/foot-link.php';
         ?>
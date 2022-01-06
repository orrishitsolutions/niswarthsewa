<!DOCTYPE html>
<html lang="en">
   <head>
      <?php 
         include('include/head-link.php');
         ?>
      <base id="myBase">
      <style>
         .resrcv_btn a.main_s_btn {
         color: #fff;
         font-weight: 400;
         background: #ff1e1f;
         padding: 9px 0px;
         width: 150px;
         display: inline-block;
         }
         .resrcv_btn:hover a.main_s_btn {
         color: #fff;
         font-weight: 400;
         background: #000;
         padding: 9px 0px;
         width: 150px;
         display: inline-block;
         }
         .footer_intero dl,
         ol,
         ul {
         color: #8e8e8e;
         }
         .tz-gallery {
         padding-bottom: 0;
         }
         .after_c_dtal p {
         text-align: left;
         }
         .car_d_para p {
         text-align: left;
         }
         .wrapCarouselFull.tz-gallery {
         height: 500px;
         }
         .owl-nav {
         display: block;
         }
      </style>
   </head>
   <body>
      <?php 
         include 'include/header.php';
         
         // if(count($car_select)!=="") {
             //for ($i=0; $i < count($car_select); $i++) { 
            ?>
      <div class="breadcrumbs">
         <div class="container">
            <div class="braedc_hrad">
               <h2><?php echo $car_select->name; ?></h2>
               <p>
               </p>
            </div>
            <div class="breadcrmb_nav">
               <ul>
                  <li><a href="<?=base_url()?>">Home</a></li>
                  <li><a href="<?=base_url('stock-cars')?>">Stock Car</a></li>
                  <li><a href="#"><?php echo $car_select->name; ?></a></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="car_details">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-8">
                  <div class="car_d_head_main wow fadeIn animated" data-wow-delay=".0s"
                     style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                     <h1><?php echo $car_select->name; ?></h1>
                     <div class="car_d_head_list">
                        <ul>
                           <li><img src="<?=base_url()?>assets-website/img/car_details/delhi.png">
                              <?php echo $car_select->location; ?>
                           </li>
                           <li><img src="<?=base_url()?>assets-website/img/car_details/update.png">
                              Updated on
                              <?php
                                 echo date('d M',strtotime($car_select->created_at))
                                 ?>
                           </li>
                           <li><img src="<?=base_url()?>assets-website/img/car_details/view.png">
                              <?php echo $car_select->view; ?>Views
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="wrapCarouselFull tz-gallery">
                     <div class="owl-carousel carousel-cardetails">
                        <div class="item tz-gallery_">
                           <a class="lightbox" href="#">
                           <img src="<?=base_url()?>assets-orrish/storage/product/<?php echo $car_select->p_file; ?>" style=" height: 100%;" alt="sold out">
                           </a>
                        </div>
                        <?php
                           if(count($exterior_select)!=="") {
                               for ($i=0; $i < count($exterior_select); $i++) { 
                           ?>
                        <div class="item tz-gallery_">
                           <a class="lightbox" href="#">
                           <img src="<?=base_url()?>assets-orrish/storage/product/exterior/<?=$exterior_select[$i]['file']?>" style=" height: 100%;" alt="sold out">
                           </a>
                        </div>
                        <?php } } ?>
                     </div>
                     <div class="whatsappcall"><a href="#" target="_blank" class="abew"><i
                        class="fa fa-whatsapp"></i></a><a href="#" class="abep" target="_blank"><i
                        class="fa fa-phone"></i></a></div>
                  </div>
                  <div class="wrapCarouselThumbs">
                     <div class="owl-carousel car-details-thumbs">
                        <div class="item-details_thumb"><img class="lazy" src="<?=base_url()?>assets-orrish/storage/product/<?php echo $car_select->p_file; ?>" style=" height: 100%; max-height: 20vh;" alt="sold out"></div>
                        <?php
                           if(count($exterior_select)!=="") {
                               for ($i=0; $i < count($exterior_select); $i++) { 
                           ?>
                        <div class="item-details_thumb">
                           <img class="lazy" src="<?=base_url()?>assets-orrish/storage/product/exterior/<?=$exterior_select[$i]['file']?>" style=" height: 100%; max-height: 20vh;" alt="sold out">
                        </div>
                        <?php } } ?>
                     </div>
                  </div>
                  <div class="car_details_tabs">
                     <div class="showc_tabs">
                        <ul class="nav nav-pills mb-3 wow fadeIn animated" data-wow-delay=".0s" id="pills-tab"
                           role="tablist" style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                           <li class="nav-item"><a class="nav-link active show" id="pills-wallpaper-tab" data-toggle="pill"
                              href="#pills-wallpaper" role="tab" aria-controls="pills-wallpaper"
                              aria-selected="false">Description</a></li>
                           <li class="nav-item"><a class="nav-link" id="pills-abe-video-tab" data-toggle="pill"
                              href="#pills-abe-video" role="tab" aria-controls="pills-abe-video"
                              aria-selected="false">Features</a></li>
                           <li class="nav-item"><a class="nav-link" id="pills-abe-exterior-tab" data-toggle="pill"
                              href="#pills-abe-exterior" role="tab" aria-controls="pills-abe-exterior"
                              aria-selected="false">Exterior</a></li>
                           <li class="nav-item"><a class="nav-link" id="pills-abe-exterior-tab" data-toggle="pill"
                              href="#pills-abe-interior" role="tab" aria-controls="pills-abe-interior"
                              aria-selected="true">Interior</a></li>
                        </ul>
                        <div class="tab-content wow fadeIn animated" data-wow-delay=".30s" id="pills-tabContent"
                           style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                           <div class="tab-pane fade active show" id="pills-wallpaper" role="tabpanel"
                              aria-labelledby="pills-wallpaper-tab">
                              <div class="card_d_tab_bod_box">
                                 <div class="car_dertaild_grid">
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="drid_li">
                                             <ul>
                                                <li><b>Condition :</b> Used</li>
                                                <li><b>Year :</b> 2015</li>
                                                <li><b>Engine Size :</b></li>
                                                <li><b>Registration Number :</b> DL</li>
                                                <li><b>Date of Registration :</b> </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="drid_li">
                                             <ul>
                                                <li><b>Colour :</b> SILVER </li>
                                                <li><b>Colour Interior :</b> BROWN </li>
                                                <li><b>Engine Type :</b> Diesel </li>
                                                <li><b> Registration Types :</b> Individual</li>
                                                <li><b>Insurance :</b> </li>
                                                <li><b> Insurance Date :</b> </li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <div class="drid_li">
                                             <ul>
                                                <li style="display:none;"><b> Mileage :</b> </li>
                                                <li><b> Transmission :</b> Automatic</li>
                                                <li><b> Assembly :</b> </li>
                                                <li><b> Registration State :</b> </li>
                                                <li><b> Warranty :</b> </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="after_c_dtal">
                                    <p><b>Location :</b> RAJOURI GARDEN</p>
                                 </div>
                                 <div class="car_d_para">
                                    <p>
                                       MERCEDES BENZ GLA 200D SPORTS available in silver colour is a 2015 model. It has
                                       been run
                                       for 50,000 WSR with a diesel engine. It's interior colour is
                                       Brown. It has automatic transmission, With Panoramic Sunroof Visit
                                       Lc-Emporio today to buy
                                       your
                                       dream car now.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-abe-video" role="tabpanel"
                              aria-labelledby="pills-abe-video-tab">
                              <div class="car_d_list_w_ico">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="ico_with_text_detal">
                                          <ul>
                                             <li> Reversing Camera</li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div class="ico_with_text_detal">
                                          <ul>
                                             <li> Electronic Tailgate</li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-abe-exterior" role="tabpanel"
                              aria-labelledby="pills-abe-exterior-tab">
                              <div class="tz-gallery ex-int_thum_wrap">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div class="intrexter">
                                          <a class="lightbox" href="#">
                                          <img class="lazy" src="<?=base_url()?>assets-orrish/storage/product/<?php echo $car_select->p_file; ?>" alt="Pre Owned Toyota Fortuner 2 WD A/T Front Look">
                                          </a>
                                       </div>
                                    </div>
                                    <?php
                                       if(count($exterior_select)!=="") {
                                           for ($i=0; $i < count($exterior_select); $i++) { 
                                       ?>
                                    <div class="col-md-4">
                                       <div class="intrexter"><a class="lightbox" href="#">
                                          <img class="lazy" src="<?=base_url()?>assets-orrish/storage/product/exterior/<?=$exterior_select[$i]['file']?>" alt="<?=$exterior_select[$i]['name']?>"></a> 
                                       </div>
                                    </div>
                                    <?php } } ?>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-abe-interior" role="tabpanel"
                              aria-labelledby="pills-abe-interior-tab">
                              <div class="tz-gallery ex-int_thum_wrap">
                                 <div class="row">
                                    <?php
                                       if(count($interior_select)!=="") {
                                           for ($i=0; $i < count($interior_select); $i++) { 
                                       ?>
                                    <div class="col-md-4">
                                       <div class="intrexter"><a class="lightbox" href="#">
                                          <img class="lazy" src="<?=base_url()?>assets-orrish/storage/product/exterior/<?=$interior_select[$i]['file']?>" alt="<?=$interior_select[$i]['name']?>"></a> 
                                       </div>
                                    </div>
                                    <?php } } ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="car_d_side">
                     <div class="socfials wow fadeIn animated" data-wow-delay=".0s"
                        style="visibility: visible; animation-delay: 0s; animation-name: fadeIn;">
                        <div class="sharethis-inline-share-buttons"></div>
                     </div>
                     <div class="reserve_box wow fadeIn animated" data-wow-delay=".30s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="res_headss">
                           <div class="resrcv_btn">
                              <a class="main_s_btn">
                              <?php 
                                 if($car_select->sell_status=='1')
                                 {
                                       echo "Sellable";
                                 }
                                 else{
                                       echo "sold out"; 
                                       }
                                 ?>
                              </a> 
                           </div>
                        </div>
                     </div>
                     <div class="side_bar_pont_w_ic">
                        <div class="list_w_s_ic">
                           <ul>
                              <li class=" wow fadeIn animated" data-wow-delay=".0s">
                                 <img src="<?=base_url()?>assets-website/img/car_details/side2.png">
                                 <div class="s_po-head">
                                    <?php echo $car_select->model; ?>
                                 </div>
                                 <small class="s_po_sub">Model</small>
                              </li>
                              <li class=" wow fadeIn" data-wow-delay=".30s">
                                 <img src="<?=base_url()?>assets-website/img/car_details/side5.png" />
                                 <div class="s_po-head">
                                    <?php 
                                       $driven =$car_select->driven;
                                        echo number_format($driven, 0, '', ',');
                                       ?> WSR
                                 </div>
                                 <small class="s_po_sub">Driven</small>
                              </li>
                              <li class="wow fadeIn" data-wow-delay=".0s">
                                 <img src="<?=base_url()?>assets-website/img/car_details/side4.png" />
                                 <div class="s_po-head">  <?=$car_select->fuel?> </div>
                                 <small class="s_po_sub">Fuel</small>
                              </li>
                              <li class="wow fadeIn" data-wow-delay=".30s">
                                 <img src="<?=base_url()?>assets-website/img/car_details/side1.png" />
                                 <div class="s_po-head"><?=$car_select->seller?></div>
                                 <small class="s_po_sub">Seller</small>
                              </li>
                              <li class="wow fadeIn" data-wow-delay=".0s">
                                 <img src="<?=base_url()?>assets-website/img/car_details/side6.png" />
                                 <div class="s_po-head"><?=$car_select->transmission?></div>
                                 <small class="s_po_sub">Transmission</small>
                              </li>
                              <li class="wow fadeIn" data-wow-delay=".30s">
                                 <img src="<?=base_url()?>assets-website/img/car_details/side3.png" />
                                 <div class="s_po-head"><?=$car_select->owner?></div>
                                 <small class="s_po_sub">Owner</small>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="side_c_infio wow fadeIn animated" data-wow-delay=".0s">
                        <div class="box_infos_s">
                           <a href="#" data-toggle="modal" data-target="#abe_modal-request">
                              <div class="icon_b_inf"><img src="<?=base_url()?>assets-website/img/car_details/sidered1.png"></div>
                              <div class="box_inf_text">Request a call back</div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="quicklook">
         <div class="container">
            <div class="abe_head wow fadeIn" data-wow-delay=".0s">
               <small>Have a Quick Look</small>
               <h2>Similar Cars</h2>
            </div>
            <div class="quicklook_slide">
               <div class="owl-carousel quicklook_prod">
                  <?php 
                     if(count($Simlar_select)!=="")
                       {
                        for ($i=0; $i < count($Simlar_select); $i++) { 
                       ?>
                  <div class="item wow fadeIn" data-wow-delay=".0s">
                     <div class="abe_prod wow fadeIn hover-img" data-wow-delay=".0s">
                        <div class="abe_P_img">
                           <a href="#"><img class="hov" src="<?=base_url()?>assets-orrish/storage/product/<?=$Simlar_select[$i]['p_file']?>" width="348" height="273"
                              alt="Audi Q3 35 TDI PREMIUM PLUS"></a>
                           <div class="whatsappcall"><a href="#" target="_blank" class="abew"><i
                              class="fa fa-whatsapp"></i></a><a href="#" class="abep" target="_blank"><i
                              class="fa fa-phone"></i></a>
                           </div>
                        </div>
                        <div class="abe_model">
                           <div class="skew_bg">
                              <h3><?=$Simlar_select[$i]['name']?></h3>
                           </div>
                        </div>
                        <div class="abe_fetured">
                           <ul>
                              <li><img src="<?=base_url()?>assets-website/image/car.png">
                                 <?=$Simlar_select[$i]['model']?>
                              </li>
                              <li><img src="<?=base_url()?>assets-website/image/petrol.png">
                                 <?=$Simlar_select[$i]['fuel']?>   
                              </li>
                              <li><img src="<?=base_url()?>assets-website/image/meter.png"> 
                                 <?php 
                                    $driven = $Simlar_select[$i]['driven'];
                                     echo number_format($driven, 0, '', ',');
                                    ?>
                                 WSR
                              </li>
                           </ul>
                        </div>
                        <div class="abe_p_bot_btn">
                           <ul>
                              <li class="pleft"> <i class="fas fa-rupee-sign"></i> 
                                 <?php 
                                    $price = $Simlar_select[$i]['price'];
                                     echo number_format($price, 0, '', ',').' /-';
                                    ?>
                              </li>
                              <li class="p-right"><a href="<?=base_url('car-detail')?>/<?=$Simlar_select[$i]['id']?>">See Detail <img
                                 src="<?=base_url()?>assets-website/img/icons/plus.png" /></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <?php } } ?>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade darkBg reqsetCall" id="abe_modal-request" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content abe_modal">
               <a class="close-abe-modal" data-dismiss="modal" aria-label="Close" href="javascript:voide(0);"> 
               <img src="<?=base_url()?>assets-website/img/reserve/popcloase.png" />
               </a>
               <div class="request_c_abe">
                  <div class="h_m_lin reqst_head">
                     <h3>Request A Call</h3>
                  </div>
                  <form method="POST" id="callbackform" action="<?=base_url('Website/Request')?>">
                     <input type="hidden" name="request_name" value="<?=$car_select->name?>">
                     <input type="hidden" name="subject" value="Request A Call">
                     <input type="hidden" name="url" value="<?=current_url()?>">
                     <input type="hidden" name="Brand" value="<?=$car_select->c_name?>">
                     <input type="hidden" name="<?= $this->security->get_csrf_token_name()?>" value="<?= $this->security->get_csrf_hash(); ?>">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <div class="input-group-text"><img src="<?=base_url()?>assets-website/img/reserve/user.png" /> </div>
                        </div>
                        <input class="form-control" type="text" name="name" id="name" placeholder="User Name" >
                     </div>
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <div class="input-group-text"><img src="<?=base_url()?>assets-website/img/reserve/mails.png" /> </div>
                        </div>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email" >
                     </div>
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <div class="input-group-text"><img src="<?=base_url()?>assets-website/img/reserve/phione.png" /> </div>
                        </div>
                        <input placeholder="Phone No." type="tel" name="telphone" id="telphone" class="form-control" maxlength="10"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
                     </div>
                     <div class="input-group"><textarea class="form-control" rows="3" name="message" id="message" placeholder="Message"
                        ></textarea></div>
                     <div class="modal_btns">
                        <button type="submit" class="main_s_btn" id="requesttocall" value="Do you really want to Request <?=$car_select->name?>">Submit<i
                           class="fa fa-angle-right"></i></button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <?php 
         include 'include/footer.php';
         include 'include/foot-link.php';
         ?>
      <script>
         $(document).ready(function () {
           $("#callbackform").submit(function (event) {
            event.preventDefault();
              var action = $('#callbackform').attr('action');
              var formData= $( "#callbackform" ).serialize();
              //var formData = new FormData($("form#callbackform")[0]);
              //console.log(action);
               var name = $("#name").val();
               var email = $("#email").val();
               var telphone= $("#telphone").val();
            
               var pattrnname = /^[a-zA-z\s]{3,100}$/;
               var pattrnemail = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
               var patternmobile = /^[\d]{10}$/; 
         
                if(name == '')
                 {
                     $("#name").attr('placeholder',"Name can't be empty");
                     $("#name").addClass("ggggg");
                     return false;
                 }
                 if(!name.match(pattrnname))
                 {
                     $("#name").attr('placeholder',"Name can't be Match");
                     $("#name").addClass("ggggg");
                     return false;
                 }
                
                 if(email == '')
                 {
                     $("#email").attr('placeholder',"Email can't be empty");
                     $("#email").addClass("ggggg");
                     return false;
                 }
                 if(!email.match(pattrnemail)) 
                 {
                     $("#email").attr('placeholder',"Please enter a valid email address.");
                     $("#email").addClass("ggggg");
                     return false;
                 }
                if(!telphone.match(patternmobile))
                 {
                     $("#telphone").attr('placeholder',"Mobile Number is Require Enter only 10 digit number");
                     $("#telphone").addClass("ggggg");
                     return false;
                 }
                 else
                  {
                  $.ajax({
                     method: "POST",
                     url: action,
                     data: formData,
                     success: function (html) {
                        //console.log(html);
                        if (html == "mail send") {
                           document.getElementById("callbackform").reset();
                        } else {
                            console.log(html);
                            //$('#myModal3').modal().hide();
                           document.getElementById("callbackform").reset();
                        }
                     }
                  });
               }            
           });
         });
         
      </script>
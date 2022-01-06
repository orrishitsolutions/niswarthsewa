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

      div#tab_1 {
         display: block;
      }
      .whysell_to {
         background-image: url("<?=base_url()?>assets-website/image/whysell_bg.jpg");
         background-size: cover;
         background-repeat: no-repeat;
         background-position: bottom center;
         padding-top: 180px;
         padding-bottom: 90px;
         -webkit-filter: grayscale(1);
         filter: grayscale(1);
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
            <h1>Your Old Car can earn you a jackpot</h1>
         </div>
         <div class="breadcrmb_nav">
            <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">Sell Car</a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="valuecars">
      <div class="container">
         <div class="row">
            <div class="col-md-5">
               <div class="value_texts">
                  <div class="abe_head wow fadeIn" data-wow-delay=".0s">
                     <small>A trusted offer That</small>
                     <h2>Truly Values your car</h2>
                  </div>
                  <div class="value_paara wow fadeIn" data-wow-delay=".20s">
                     <div class="prara_F_val">
                        <p>Sell your car to us and get best instant price for it. Our scientific and data driven pricing
                           method
                           takes your car’s condition and the market trends in account to offer you a price that truly
                           values
                           your car</p>
                     </div>
                     <div class="icons_para_val">
                        <ul>
                           <li><img src="<?=base_url()?>assets-website/image/location-su.jpg" /> Fair and Competitive value</li>
                           <li><img src="<?=base_url()?>assets-website/image/wave-su.png" /> Easy, Fast and Transparent</li>
                           <li><img src="<?=base_url()?>assets-website/image/carboard.jpg" /> Stress-Free Process</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-7">
               <div class="right_v_img wow fadeIn" data-wow-delay=".30s">
                  <img src="<?=base_url()?>assets-website/image/cabriolet.png" alt="">
               </div>
            </div>
         </div>
      </div>
      <div class="step-tab_set" id="scrollform">
         <div class="container">
            <div class="row justify-content-md-center">
               <div class="col-md-9">
                  <div class="box_posisn">
                     <div id="sellcars">
                        <center></center>
                     </div>
                     <form method="post" class="basic_form" enctype="multipart/form-data">
                        <div class="ttop_aluign wow fadeIn" data-wow-delay=".0s">
                           <div class="breadcrumb flat"> <a class="step active tab_1"><small>1</small> Car Details</a><a
                                 class="step tab_2"><small>2</small> Car Image</a><a class="step tab_3"><small>3</small>
                                 Personal
                                 Details</a></div>
                        </div>
                        <div class="mytabs tab wow fadeIn animated" data-wow-delay=".20s" id="tab_1">
                           <div class="first_tab_desgin">
                              <div class="tab_head_step">
                                 <h4>FILL YOUR CAR DETAILS</h4>
                              </div>
                              <div class="row">
                                 <div class="col-md-4">
                                    <label>
                                       Car Make
                                       <select name="brand" class="brand" required>
                                          <option value="">Select Car Make</option>
                                          <option value="Aston Martin">Aston Martin</option>
                                          <option value="Audi">Audi</option>
                                          <option value="Bentley">Bentley</option>
                                          <option value="BMW">BMW</option>
                                          <option value="Cadillac">Cadillac</option>
                                          <option value="Chrysler">Chrysler</option>
                                          <option value="DC Design">DC Design</option>
                                          <option value="Ferrari">Ferrari</option>
                                          <option value="Fiat">Fiat</option>
                                          <option value="Ford">Ford</option>
                                          <option value="Hummer">Hummer</option>
                                          <option value="Jaguar">Jaguar</option>
                                          <option value="JEEP">JEEP</option>
                                          <option value="Lamborghini">Lamborghini</option>
                                          <option value="Land Rover">Land Rover</option>
                                          <option value="Lexus">Lexus</option>
                                          <option value="MAHINDRA">MAHINDRA</option>
                                          <option value="Maserati">Maserati</option>
                                          <option value="Mazda">Mazda</option>
                                          <option value="Mercedes-Benz">Mercedes-Benz</option>
                                          <option value="MG">MG</option>
                                          <option value="MINI">MINI</option>
                                          <option value="Porsche">Porsche</option>
                                          <option value="Range Rover">Range Rover</option>
                                          <option value="ROLLS ROYCE">ROLLS ROYCE</option>
                                          <option value="SKODA">SKODA</option>
                                          <option value="Toyota">Toyota</option>
                                          <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                                          <option value="Volvo">Volvo</option>
                                          <option value="Other">Other</option>
                                       </select>
                                    </label>
                                 </div>
                                 <div class="col-md-4"><label> Car Model<input type="text" name="model"
                                          placeholder="Enter Car Model" required></label></div>
                                 <input type="hidden" name="style" value="0">
                                 <div class="col-md-4"><label> MGF Year<input type="number" name="mfg_year"
                                          placeholder="Enter MGF Year" required></label></div>
                                 <div class="col-md-4"><label> KMs Driven<input type="text" name="kilomiter"
                                          placeholder="Enter Kms" required></label></div>
                                 <div class="col-md-4"><label> Registration No.<input type="text" name="reg_no"
                                          placeholder="Enter Registration No"></label></div>
                              </div>
                           </div>
                           <div style="overflow:auto; text-align: center;">
                              <div>
                                 <button type="button" id="nextBtn" onclick="next_tab('tab_2','tab_1')">Next</button>
                              </div>
                           </div>
                        </div>
                        <div class="mytabs tab wow " data-wow-delay1=".10s" id="tab_2">
                           <div class="first_tab_desgin">
                              <div class="tab_head_step">
                                 <h4>Upload your car images</h4>
                              </div>
                              <div class="img_stepss">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <div class="step_brand_bb">
                                          <label><img src="assets/front/img/icons/blankimg.png"
                                                class="img1" style="width:91px; height:77px;" /><input type="file"
                                                name="image[]" style="display:none;" class="imgInp"
                                                src_cls="img1"></label></div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="step_brand_bb"><label><img src="assets/front/img/icons/blankimg.png"
                                                class="img2" style="width:91px; height:77px;" /><input type="file"
                                                name="image[]" style="display:none;" class="imgInp"
                                                src_cls="img2"></label></div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="step_brand_bb"><label><img src="assets/front/img/icons/blankimg.png"
                                                class="img3" style="width:91px; height:77px;" /><input type="file"
                                                name="image[]" style="display:none;" class="imgInp"
                                                src_cls="img3"></label></div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="step_brand_bb"><label><img src="assets/front/img/icons/blankimg.png"
                                                class="img4" style="width:91px; height:77px;" /><input type="file"
                                                name="image[]" style="display:none;" class="imgInp"
                                                src_cls="img4"></label></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div style="overflow:auto;">
                              <div style="float:right;"><button type="button" id="prevBtn"
                                    onclick="prev_tab('tab_1','tab_2')"
                                    style="display: inline;">Previous</button><button type="button" id="nextBtn"
                                    onclick="next_tab('tab_3','tab_2')">Next</button></div>
                           </div>
                        </div>
                        <div class="mytabs tab wow " data-wow-delay1=".10s" id="tab_3">
                           <div class="first_tab_desgin">
                              <div class="tab_head_step">
                                 <h4>FILL YOUR parsonal DETAILS</h4>
                              </div>
                              <div class="row">
                                 <div class="col-md-4"><label> Name<input type="text" name="name"
                                          placeholder="Enter Name" required></label></div>
                                 <div class="col-md-4"><label> Email ID<input type="email" name="email"
                                          placeholder="Enter Email ID" required></label></div>
                                 <div class="col-md-4"><label> Mobile No.<input type="number" name="mobile"
                                          placeholder="Enter Mobile No." required
                                          oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                          maxlength='10' minlength='10'></label></div>
                                 <div class="col-md-4"><label> City<input type="text" name="city"
                                          placeholder="Enter City" required></label></div>
                                 <div class="col-md-8"></div>
                              </div>
                           </div>
                           <div style="overflow:auto;">
                              <div style="float:right;"><button type="button" id="prevBtn"
                                    onclick="prev_tab('tab_2','tab_3')"
                                    style="display: inline;">Previous</button><button type="submit" name="submit_data"
                                    id="nextBtn">Submit</button></div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="whysell_to">
      <div class="container">
         <div class="abe_head white text-center wow fadeIn" data-wow-delay=".0s">
            <small>Why sell to</small>
            <h2 class='mx-auto'> EMPORIO</h2>
         </div>
         <div class="row">
            <div class="col-md-3">
               <div class="why_s_ic_box wow fadeIn" data-wow-delay=".20s">
                  <div class="iconssbox">
                     <div class="circle_icon_box"><img class="lazy" src="<?=base_url()?>assets-website/image/seting-su.png" /></div>
                     <div class="iconb_text">
                        <h5>Best price Guarantee</h5>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="why_s_ic_box wow fadeIn" data-wow-delay=".30s">
                  <div class="why_s_ic_box">
                     <div class="iconssbox">
                        <div class="circle_icon_box"><img class="lazy" src="<?=base_url()?>assets-website/image/mobile-su.png" /></div>
                        <div class="iconb_text">
                           <h5>Instant payment</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="why_s_ic_box wow fadeIn" data-wow-delay=".0s">
                  <div class="why_s_ic_box">
                     <div class="iconssbox">
                        <div class="circle_icon_box"><img class="lazy" src="<?=base_url()?>assets-website/image/cars-su.png" /></div>
                        <div class="iconb_text">
                           <h5>sell car in a single visit</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="why_s_ic_box wow fadeIn" data-wow-delay=".20s">
                  <div class="why_s_ic_box">
                     <div class="iconssbox">
                        <div class="circle_icon_box"><img class="lazy" src="<?=base_url()?>assets-website/image/reverse-su.png" /></div>
                        <div class="iconb_text">
                           <h5>Free RC transfer</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="she_how">
      <div class="container">
         <div class="abe_head text-center wow fadeIn" data-wow-delay=".0s">
            <small>SEE HOW</small>
            <h2 class='mx-auto'> EMPORIO WORK</h2>
         </div>
         <div id="tab-carousels">
            <div class="row justify-content-md-center">
               <div class="col-md-7">
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
                     <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><a href="0.html#"
                              class="tabsss">Online Car Valuation</a></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"><a href="0.html#"
                              class="tabsss">Book
                              Appointment & Visit Branch</a></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"><a href="0.html#"
                              class="tabsss">Sell Car
                              in Single Visit</a></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="see_imgg_one"><img class="lazy" src="<?=base_url()?>assets-website/image/mans.jpg" /></div>
                           <div class="see_how_btn"><a href="#scrollform" class="main_s_btn moving-r">START CAR
                                 VALUATION<i class="fa fa-angle-right"></i></a> </div>
                        </div>
                        <div class="carousel-item">
                           <div class="see_imgg_one"><img class="lazy" src="<?=base_url()?>assets-website/image/mans.jpg" /></div>
                           <div class="see_how_btn"><a href="#scrollform" class="main_s_btn moving-r">START CAR
                                 VALUATION<i class="fa fa-angle-right"></i></a> </div>
                        </div>
                        <div class="carousel-item">
                           <div class="see_imgg_one"><img class="lazy" src="<?=base_url()?>assets-website/image/valuation-img.png" /></div>
                           <div class="see_how_btn"><a href="#scrollform" class="main_s_btn moving-r">START CAR
                                 VALUATION<i class="fa fa-angle-right"></i></a> </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="ind_m_pref">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="abe_head wow fadeIn" data-wow-delay=".0s">
                  <small>India’s most preferred choice </small>
                  <h2>For Pre-owned Cars in India</h2>
               </div>
            </div>
            <div class="col-md-3 align-self-center wow fadeIn" data-wow-delay=".20s">
               <div class="preferd_c align-self-center">
                  <h3>2400+</h3>
                  <p>Happy sellers</p>
               </div>
            </div>
            <div class="col-md-2 align-self-center wow fadeIn" data-wow-delay=".30s">
               <div class="preferd_c align-self-center">
                  <h3>Rapid</h3>
                  <p>Processing</p>
               </div>
            </div>
         </div>
      </div>
   </div>

      <?php 
      include 'include/footer.php';
      include 'include/foot-link.php';
   ?>
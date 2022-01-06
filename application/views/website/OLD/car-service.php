<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

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
   </style>
</head>

<body>
<?php 
  include('include/header.php');
?>

   <div class="breadcrumbs">
      <div class="container">
         <div class="braedc_hrad">
            <h1>Car servicing</h1>
            <p>House of used & new cars</p>
         </div>
         <div class="breadcrmb_nav">
            <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">Showroom</a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="_service-form">

      <div class="container">

         <div class="row align-self-center">

            <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
               <div class="main_form">
                  <h4>Fill the form and our executive will attend you shortly.</h4>
                  <form class="form basic_form" method="post">
                     <input type="hidden" name="type" value="car_service">
                     <input type="hidden" name="subject" value="Car servicing">
                     <div class="field">
                        <div class="field-groups">
                           <label>Select Car Service<em>*</em></label>
                           <select name="car_service" required>
                              <option value="">-- please select --</option>
                              <option value="Book for Insurance Claim">Book for Insurance Claim</option>
                              <option value="Book Car for Paint Job">Book Car for Paint Job</option>

                           </select>
                        </div>
                        <!--field-groups-->
                        <div class="field-groups">
                           <label>Name<em>*</em></label>
                           <input type="text" name="name" placeholder="Enter your name" required>
                        </div>
                        <!--field-groups-->
                     </div>
                     <!--field-->
                     <div class="field">
                        <div class="field-groups">
                           <label>Email<em>*</em></label>
                           <input type="email" name="email" placeholder="Enter email" required>
                        </div>
                        <!--field-groups-->
                        <div class="field-groups">
                           <label>Your Phone<em>*</em></label>
                           <input type="number" name="phone" placeholder="Enter your Phone Number" required
                              oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                              maxlength="10" minlength='10' data-required-message="Please insert valid mobile number!">
                        </div>
                        <!--field-groups-->
                     </div>
                     <!--field-->
                     <div class="field">
                        <div class="field-groups">
                           <label>Car make and model<em>*</em></label>
                           <input type="text" name="car" placeholder="Enter Car Make and Model" required>
                        </div>
                        <!--field-groups-->
                        <div class="field-groups appoint">
                           <label>Appointment Date & Time<em>*</em></label>
                           <input type="text" name="appointment_date" placeholder="dd/mm/yyyy" required id="datepicker">
                           <!-- <input type="time" name="appointment_time" placeholder="Select Time" value="12:00:00"
                              required> -->
                        </div>
                        <!--field-groups-->
                     </div>
                     <!--field-->
                     <div class="field text-center mb-20">
                        <button type="submit" class="main_s_btn final_submit" name="submitnow" style="z-index: 1;">Book
                           Your Service<i class="fa fa-angle-right"></i></button>
                     </div>
                     <!--field-->
                  </form>
               </div>
               <!--main_form-->
            </div>
            <!--col-md-6 col-md-6 col-xs-12-->

            <!--container-->
            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
               <div class="entry-img">
                  <img src="./assets/image/lexus-gold.webp" alt="">
               </div>
               <!--entry-img-->
            </div>
            <!--col-md-5 col-sm-5 col-xs-12-->
         </div>
         <!--row align-self-center-->
      </div>

   </div>
   <!--_service-form-->
   <div class="whysell_to">
      <div class="container">
         <div class="abe_head white text-center wow fadeIn" data-wow-delay=".0s">
            <small>Our</small>
            <h2 class='mx-auto'>Car Services</h2>
         </div>
         <div class="row">
            <div class="col-md-3">
               <div class="why_s_ic_box wow fadeIn" data-wow-delay=".20s">
                  <div class="iconssbox">
                     <div class="circle_icon_box">
                        <img src="./assets/image/036958415151.png" />
                     </div>
                     <div class="iconb_text">
                        <h5>Book For Insurance Claim</h5>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="why_s_ic_box wow fadeIn" data-wow-delay=".30s">
                  <div class="why_s_ic_box">
                     <div class="iconssbox">
                        <div class="circle_icon_box">
                           <img src="./assets/image/314196553587.png" />
                        </div>
                        <div class="iconb_text">
                           <h5>Book Car For Detailing</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="why_s_ic_box wow fadeIn" data-wow-delay=".0s">
                  <div class="why_s_ic_box">
                     <div class="iconssbox">
                        <div class="circle_icon_box">
                           <img src="./assets/image/615635548915.png" />
                        </div>
                        <div class="iconb_text">
                           <h5>Book Car For Paint Job</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="why_s_ic_box wow fadeIn" data-wow-delay=".20s">
                  <div class="why_s_ic_box">
                     <div class="iconssbox">
                        <div class="circle_icon_box">
                           <img src="./assets/image/831550693161.png" />
                        </div>
                        <div class="iconb_text">
                           <h5>Get your car fixed</h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="testimonials_sec our_clients tcbg">
      <div class="container">
         <div class="abe_head text-center">
            <small>Our</small>
            <h2 class='mx-auto'>Testimonials</h2>
         </div>
         <div class="testm_wrap">
            <div class="owl-carousel testimonial">
               <div class="item">
                  <div class="row align-self-center">
                     <div class="col-md-4">
                        <div class="testm_img wow fadeInUp" data-wow-delay=".0s">
                           <img src="./assets/image/testimonial.jpeg" />
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="testm_text wow fadeInUp" data-wow-delay=".30s">
                           <div class="testm_discrption">
                              <div class="quote_ic">
                                 <img src="assets/img/icons/quote.png" />
                              </div>
                              <p>
                                 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis ut libero, dolore nemo
                                 nostrum, praesentium delectus sint quam minima voluptatum ipsum eos, sed consequatur!
                                 Voluptas fuga beatae similique rerum voluptatem.
                              </p>
                           </div>
                           <div class="testm_abee_auth">
                              <h4>Buyer Name</h4>
                              <small>Buyer</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="row align-self-center">
                     <div class="col-md-4">
                        <div class="testm_img wow fadeInUp" data-wow-delay=".0s">
                           <img src="./assets/image/testimonial.jpeg" />
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="testm_text wow fadeInUp" data-wow-delay=".30s">
                           <div class="testm_discrption">
                              <div class="quote_ic">
                                 <img src="assets/img/icons/quote.png" />
                              </div>
                              <p>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita tenetur cum eum minus
                                 dolorem aliquam? At voluptatibus unde ab, ratione fugiat aliquam velit laudantium earum
                                 consequatur! Expedita error libero nostrum?
                              </p>
                           </div>
                           <div class="testm_abee_auth">
                              <h4>Buyer Name2</h4>
                              <small>Buyer</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="row align-self-center">
                     <div class="col-md-4">
                        <div class="testm_img wow fadeInUp" data-wow-delay=".0s">
                           <img src="./assets/image/testimonial.jpeg" />
                        </div>
                     </div>
                     <div class="col-md-8">
                        <div class="testm_text wow fadeInUp" data-wow-delay=".30s">
                           <div class="testm_discrption">
                              <div class="quote_ic">
                                 <img src="assets/img/icons/quote.png" />
                              </div>
                              <p>

                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, non aspernatur
                                 eum repudiandae vel qui delectus doloremque rerum dolorem quod molestias at sequi
                                 beatae corporis mollitia, sunt dolore, aliquam libero.

                              </p>
                           </div>
                           <div class="testm_abee_auth">
                              <h4>Buyer Name3</h4>
                              <small>Buyer</small>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
         <div class="our_partner">
            <div class="row">
               <div class="col-md-3">
                  <div class="our_c_text wow fadeInDown" data-wow-delay=".0s">
                     <div class="abe_head">
                        <small>We</small>
                        <h2>Deal in</h2>
                     </div>
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="owl-carousel our-partner">
                     <div class="item wow fadeInRight" data-wow-delay=".0s">
                        <img src="./assets/image/bently-slider-logo.png" />
                     </div>
                     <div class="item wow fadeInRight" data-wow-delay=".0s">
                        <img src="./assets/image/bently-slider-logo.png" />
                     </div>
                     <div class="item wow fadeInRight" data-wow-delay=".0s">
                        <img src="./assets/image/bently-slider-logo.png" />
                     </div>
                     <div class="item wow fadeInRight" data-wow-delay=".0s">
                        <img src="./assets/image/bently-slider-logo.png" />
                     </div>
                     <div class="item wow fadeInRight" data-wow-delay=".0s">
                        <img src="./assets/image/bently-slider-logo.png" />
                     </div>
                     <div class="item wow fadeInRight" data-wow-delay=".0s">
                        <img src="./assets/image/bently-slider-logo.png" />
                     </div>
                     <div class="item wow fadeInRight" data-wow-delay=".0s">
                        <img src="./assets/image/bently-slider-logo.png" />
                     </div>
                     <div class="item wow fadeInRight" data-wow-delay=".0s">
                        <img src="./assets/image/bently-slider-logo.png" />
                     </div>
                     <div class="item wow fadeInRight" data-wow-delay=".0s">
                        <img src="./assets/image/bently-slider-logo.png" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
  <?php 
      include 'include/footer.php';
      include 'include/foot-link.php';
   ?>
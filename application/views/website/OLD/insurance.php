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

      .col-md-4.align-self-bottom {
         padding-top: 10px;
      }

      .second_breadcrumb {

         background-image: url(./assets/image/bannr-su.jpg);

         background-size: cover;

         background-repeat: no-repeat;

         background-position: left center;

         padding-top: 140px;

         padding-bottom: 140px;

      }
   </style>
</head>

<body>
   <?php 
  include 'include/header.php';
?>
   <div class="second_breadcrumb">
      <div class="container">
         <div class="row">
            <div class="col-md-6 align-self-center">
               <div class="sec_b_head">
                  <h1>More than <br>just a car Insurance</h1>
               </div>
               <div class="sec_b_sub_head"><small>Solutions for everything that you car needs </small></div>
            </div>
         </div>
      </div>
   </div>
   <div class="insurance_form">
      <div class="container">
         <div class="abe_head text-center wow fadeIn" data-wow-delay=".0s">
            <small>Buying Car Insurance from </small>
            <h2 class="mx-auto">EMPORIO is simple</h2>
         </div>
         <div class="row">
            <center>
               <div class="col-md-8">
                  <div class="insurance_form_set wow fadeIn" data-wow-delay=".30s">
                     <div class="insur_head_f">
                        <h2>Just fill in the form and one of our executive will get back to you shortly.</h2>
                     </div>
                     <form method="post" class="basic_form" enctype="multipart/form-data">
                        <input type="hidden" name="type" value="insurance"><input type="hidden" name="subject"
                           value="Insurance Inquiry">
                        <div class="row">
                           <div class="col-md-4"><label><input class="form-control" type="text" name="name" value=""
                                    placeholder="Enter Your Name" required></label></div>
                           <div class="col-md-4"><label> <input class="form-control" type="email" name="email" value=""
                                    placeholder="Enter Email" required></label></div>
                           <div class="col-md-4"><label> <input class="form-control" type="number" name="phone" value=""
                                    placeholder="Enter Phone No." required maxlength='10' minlength='10'
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"></label>
                           </div>
                           <div class="col-md-4"><label> Registraion Certificate (required)<input type="file"
                                    name="reg_certificate" class="form-control" required style="display: block;"
                                    id="rc_file" onchange="return fileValidation('rc_file')"></label></div>
                           <div class="col-md-4"><label> Previous Insurance (required) <input type="file"
                                    name="prev_insurance" class="form-control" required style="display: block;"
                                    id="pi_file" onchange="return fileValidation('pi_file')"></label></div>
                           <div class="col-md-4 align-self-bottom"><button type="submit" name="submit_insurance"
                                 id="search_vihcle" class="main_s_btn">Request Quote <i
                                    class="fa fa-angle-right"></i></button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </center>
         </div>
      </div>
   </div>
   <div class="clients_more_logo wow fadeIn" data-wow-delay=".0s">
      <div class="container">
         <div class="insur_clints_l">
            <div class="row">
               <div class="image_box_c col-md-2 col-sm-2 col-xs-2 align-self-center"><img
                     src="assets/image//HDFC-ERGO-su.png" />
               </div>
               <div class="image_box_c col-md-2 col-sm-2 col-xs-2 align-self-center"><img
                     src="assets/image//HDFC-ERGO-su.png" />
               </div>
               <div class="image_box_c col-md-2 col-sm-2 col-xs-2 align-self-center"><img
                     src="assets/image//HDFC-ERGO-su.png" />
               </div>
               <div class="image_box_c col-md-2 col-sm-2 col-xs-2 align-self-center"><img
                     src="assets/image//HDFC-ERGO-su.png" />
               </div>
               <div class="image_box_c col-md-2 col-sm-2 col-xs-2 align-self-center"><img
                     src="assets/image//HDFC-ERGO-su.png" />
               </div>
               <div class="image_box_c col-md-2 col-sm-2 col-xs-2 align-self-center">
                  <h3> insurers</h3>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="advantage">
      <div class="container">
         <div class="abe_head text-center wow fadeIn" data-wow-delay=".0s">
            <small>EMPORIO</small>
            <h2 class="mx-auto">Advantage</h2>
         </div>
         <div id="tab-carousels" class="wow fadeIn" data-wow-delay=".30s">
            <div class="row justify-content-md-center">
               <div class="col-md-5">
                  <div class="advantage_tab">
                     <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item active"><a class="custm_advantg_nav active" id="pills-home-tab"
                              data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                              aria-selected="true">Simple</a></li>
                        <li class="nav-item"><a class="custm_advantg_nav" id="pills-profile-tab" data-toggle="pill"
                              href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Easy
                              Claim</a>
                        </li>
                        <li class="nav-item"><a class="custm_advantg_nav" id="pills-contact-tab" data-toggle="pill"
                              href="#pills-contact" role="tab" aria-controls="pills-contact"
                              aria-selected="false">Affordable</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="advantage_bodys">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="advnt_jhead">
                              <div class="abe_head">
                                 <small class="red">Affordable</small>
                                 <h2>Buy Cheap, Add value</h2>
                              </div>
                           </div>
                           <div class="advntg_para">
                              <p>We provide you vehicle insurances at much cheaper available market rates that adds
                                 value to your
                                 budget.</p>
                           </div>
                           <div class="advantag_bullt">
                              <ul>
                                 <li><img src="assets/image//tickks-su.jpg" /> Discount offers for long term buyers
                                 </li>
                                 <li><img src="assets/image//tickks-su.jpg" /> Budget savers that adds value</li>
                                 <li><img src="assets/image//tickks-su.jpg" /> You get what you pay for</li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="advntg_img"><img src="assets/image//advantage3-su.png" /></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="advantage_bodys">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="advntg_img"><img src="assets/image//advantage3-su.png" /></div>
                        </div>
                        <div class="col-md-6">
                           <div class="advnt_jhead">
                              <div class="abe_head">
                                 <small class="red">Easy Claim Settlements</small>
                                 <h2>Rapid, Hassle Free Claims</h2>
                              </div>
                           </div>
                           <div class="advntg_para">
                              <p>Its Time-saving, you will find yourself in a comfortable zone towards your car
                                 insurance purchase
                                 without any commotion </p>
                           </div>
                           <div class="advantag_bullt">
                              <ul>
                                 <li><img src="assets/image//tickks-su.jpg" /> 24/7 Customer Service Helpline from
                                    Insurer</li>
                                 <li><img src="assets/image//tickks-su.jpg" /> Hassle free Inspection</li>
                                 <li><img src="assets/image//tickks-su.jpg" /> Instant Claim Assistance and SMS
                                    updates</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                  <div class="advantage_bodys">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="advnt_jhead">
                              <div class="abe_head">
                                 <small class="red">simple</small>
                                 <h2>Flexible Ways to Get Insure</h2>
                              </div>
                           </div>
                           <div class="advntg_para">
                              <p>We give you the most adaptable ways to select one of the various options available to
                                 get your
                                 car insurance done</p>
                           </div>
                           <div class="advantag_bullt">
                              <ul>
                                 <li><img src="assets/image//tickks-su.jpg" /> Multiple Insurance Options Available
                                 </li>
                                 <li><img src="assets/image//tickks-su.jpg" /> Periodical Evaluation Options</li>
                                 <li><img src="assets/image//tickks-su.jpg" /> Comprehensive Cover for better
                                    Insurance Coverage</li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="advntg_img"><img src="assets/image//advantage3-su.png" /></div>
                        </div>
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
<!DOCTYPE html>
<html lang="en">

<head>
   <?php 
  include('include/head-link.php');
?>

   <base id="myBase">


   <!-- =============================================contact us manish CSS starts======================================= -->
   <style>
      #form #email::placeholder,
      #form #name::placeholder,
      #form #location::placeholder,
      #form #phone::placeholder,
      #form #msg::placeholder {
         color: #000;
      }

      .contact-us-banner {
         background-image: url("../img/lex-banner.png");
         height: 325px;
         background-repeat: no-repeat;
         background-position: center;
         background-size: cover;
         margin-top: 70px;
      }

      .contact-us-banner .parent {
         height: 325px;
         position: relative;
      }

      .contact-us-banner .parent #breadcrumb {
         background: transparent;
         margin-top: 140px;
         position: absolute;
         text-align: center;
         width: 100%;
      }

      .contact-us-banner .parent #breadcrumb li a {
         color: #fafafabd;
         font-size: 18px;
         font-weight: 500;
      }

      .header-bottom {
         background: #2e2d2d;
      }



      .contact-us {
         height: auto;
         background-color: #f2f2f2;
      }

      .contact-us .parent {
         margin: 0px 0px;
      }

      .contact-us .parent .top-ribbon {
         height: 65px;
         position: relative;
         width: 100%;
         background: #e22323;
      }

      .contact-us .parent .top-ribbon::after {
         content: "";
         right: 0px;
         position: absolute;
         border-right: 46px solid #fff;
         border-top: 66px solid transparent;
         height: auto;
         top: -1px;
      }

      /* .head {
         padding-bottom: 16px;
      } */

      .contact-us .parent .head .txt {
         font-size: 80px;
         font-weight: 800;
         position: relative;
         letter-spacing: 0.5px;
         margin: 0px;
      }

      .contact-us .parent .head .txt::after {
         content: "";
         position: absolute;
         height: 3px;
         width: 100px;
         left: 0;
         bottom: -10px;
         background: #e22323;
         transform: skewX(-40deg);
      }

      .contact-head-padding {
         padding-bottom: 27px;
         color: #000;
         font-size: 30px;
         font-weight: 900;
         letter-spacing: 0.5px;
      }

      .contact-us .parent .head .txt::before {
         content: "";
         position: absolute;
         height: 3px;
         width: 100px;
         left: 0;
         bottom: -17px;
         background: #e22323;
         transform: skewX(-40deg);
      }

      .cont-extra-pad {
         margin-left: 17px;
      }

      /* .contact-us .parent .address {
         margin: 30px 0px;
      } */

      .contact-us .parent .address .add-ul li {
         list-style-type: none;
         font-size: 17.5px;
         margin: 10px 0px;
         font-weight: 700;
         position: relative;
         padding: 14px 0px;
      }

      .contact-us .parent .address .add-ul li p {
         padding-left: 10px;
         margin-bottom: 6px;
         letter-spacing: 0.5px;
      }

      .head-contact {
         padding-left: 18px;
         padding-top: 15px;
         line-height: 25px;
      }

      .head-contact ul li h4 {
         font-weight: 700;
         padding-top: 12px;
      }

      .head-contact ul li p {
         padding-left: 0px;
         color: #000;
         font-family: "roboto";
         font-size: 14px;
         letter-spacing: 0.5px;
         font-weight: 400;
      }

      .head-contact ul {
         padding-left: 0px;
      }

      .contact-us .parent .address .add-ul li:first-child:before {
         content: "";
         /* display: block; */
         position: absolute;
         background: url(./img/envelope.png) no-repeat;
         width: 46px;
         height: 46px;
         float: left;
         margin: 0 6px 0 0;
         background-size: cover;
         left: -47px;
      }

      .contact-us .parent .address .add-ul li:nth-child(2):before {
         content: "";
         /* display: block; */
         position: absolute;
         background: url(./img/phone-2.png) no-repeat;
         width: 46px;
         height: 46px;
         float: left;
         margin: 0 6px 0 0;
         background-size: cover;
         left: -47px;
      }

      .hrhead h3,
      h5 {
         padding-left: 10px;
      }

      .h5,
      h5 {
         font-size: 14px;
      }

      .add-ul i {
         font-size: 45px;
      }

      .tel-sec {
         margin-top: 14px;
      }

      .head-contact ul {
         list-style-type: none;
      }

      .h4,
      h4 {
         font-size: 18px;
      }


      .btn {
         padding-bottom: 20px;
         padding-top: 8px;
      }

      .contact-us .parent .btn-div {
         padding: 2px 10px;
         float: right;
         width: 100%;
      }

      .contact-us .parent .btn-div a {
         padding: 10px 40px;
         border: 1px solid rgb(63, 61, 61);
         float: right;
         transform: skewX(-18deg);
         color: black;
         font-size: 17px;
         font-weight: 900;
      }

      .contact-us #direction:hover {
         color: #fff;
         background: #e22323;
         transition: all 0.3s linear;
      }

      .contact-us #direction i.fas.fa-caret-right {
         font-size: 17px;
         vertical-align: middle;
      }

      .contact-us #direction:hover i.fas.fa-caret-right {
         transform: translateX(10px);
         transition: all 0.3s linear;
      }

      .contact-us .parent2 {
         padding: 0px 11px;
      }

      .contact-us .parent2 .txt2 {
         font-size: 22px;
         font-weight: 600;
         margin-top: 0px;
         color: #000;
      }

      .head-contact h2 {
         font-size: 25px;
         font-weight: 600;
         color: #ff1e1f;
         letter-spacing: 0.5px;
      }

      .contact-us .parent2 .form-p #form {
         height: auto;
         padding: 10px;
      }


      .contact-us .parent2 .form-p #form #email,
      #phone,
      #name,
      #location {
         width: 48%;
         padding: 11px 18px;
         outline: none;
         border: 1px solid #ccc;
         margin: 10px 0px;
         text-transform: capitalize;
      }

      .contact-us .parent2 .form-p #form input::placeholder {
         font-size: 14px;
         font-weight: 500;
         color: #757575;
      }

      .contact-us .parent2 .form-p #form #name,
      #location {
         margin-right: 10px;
      }



      input#name {
         border-radius: 5px;
      }

      input#email {
         border-radius: 5px;
      }

      input#phone {
         border-radius: 5px;
      }

      select#drop-down {
         border-radius: 5px;
      }

      textarea#msg {
         border-radius: 5px;
      }

      a#submit-btn {
         border-radius: 5px;
      }



      .contact-us .parent2 .form-p #form #msg {
         width: 100%;
         height: 150px;
         outline: none;
         border: 1px solid #ccc;
         color: black;
         letter-spacing: 0.5px;
         font-size: 20px;
         font-weight: 500;
         margin: 10px 0px;
      }

      .contact-us .parent2 .form-p #form #msg::placeholder {
         color: 757575;
         letter-spacing: 0.5px;
         font-size: 14px;
         font-weight: 500;
         padding: 11px 18px;
      }

      .contact-us .parent2 .form-p #form .click-btn {
         padding: 10px;
         height: 64px;
      }

      .contact-us .parent2 .form-p #form .click-btn #submit-btn {
         padding: 12px 0px;
         text-align: center;
         font-size: 14px;
         font-weight: 500;
         letter-spacing: 0.5px;
         border-radius: 35px;
         background-color: #ff1e1f;
         color: #fff;
         display: inline-block;
         width: 150px;
      }

      .contact-us .parent2 .form-p #form .click-btn #submit-btn:hover {
         color: #fff;
         transition: all 0.3s linear;
         background: #000;
         text-decoration: none;
         border-radius: 35px;
      }

      .contact-3-cylinder {
         height: 252px;
         position: relative;
      }

      .con-box {
         height: 82px;
         width: 290.5px;
         border: 1px solid #000;
         border-top-left-radius: 40px;
         border-bottom-left-radius: 40px;
         position: absolute;
         top: 89px;
         left: calc(50% - 145px);
         border-left: 0px;
      }

      .con-box span {
         position: absolute;
         top: 27px;
         font-size: 18px;
         left: 98px;
         color: #000;
      }

      .con-circle {
         height: 80px;
         width: 80px;
         border-radius: 50px;
         border: 1px solid #000;
         position: relative;
      }

      .con-circle img {
         width: 55px;
         position: absolute;
         top: 11px;
         left: 10px;
      }

      a#direction {
         float: left;
         margin-left: 19%;
         margin-top: 0;
      }

      .contact-us .parent2.form-p #form .click-btn:hover #direction i.fas.fa-caret-right {
         transform: translateX(10px);
         transition: all 0.3s linear;
      }

      .contact-us .space-creator {
         margin: 0px 0px;
      }

      .contact-us .padding-l0 {
         padding-left: 0px;
         padding-right: 0px;
      }

      .contact-us .padding-l {
         padding-left: 0px;
      }

      .contact-us .padding-r {
         padding-right: 0px;
      }

      .contact-us .parent .padding-right {
         padding-left: 24px;
         /* margin: 30px 0px; */
      }

      span.add_-icon {
         float: left;
         margin-right: 10px;
         font-size: 20px;
         color: #ff1e1f;
         -webkit-box-orient: vertical;
      }
   </style>
   <!-- =============================================contact us manish CSS ends======================================= -->

</head>

<body>
   <?php 
  include 'include/header.php';
?>
   <div class="breadcrumbs">
      <div class="container">
         <div class="braedc_hrad">
            <h1>career</h1>
            <p>House of used & new cars</p>
         </div>
         <div class="breadcrmb_nav">
            <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">career</a></li>
            </ul>
         </div>
      </div>
   </div>

   <!-- ===========================================contact us by manish======================================== -->



   <!-- <div class="contact_info">
      <div class="container">

         <h2 class="text-center contact-head-padding">Get In Touch</h2>

         <div class="row cont-extra-pad">
            <div class="col-md-4 align-self-center">
               <div class="con_infos_box wow fadeIn" data-wow-delay=".0s">
                  <div class="icons_c_box"><img src="assets/image//mob-cylinder.png" /></div>
                  <div class="cont_inf_text align-self-center">
                     <p>7055705585</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 align-self-center">
               <div class="con_infos_box wow fadeIn" data-wow-delay=".30s">
                  <div class="icons_c_box"><img src="assets/img/icons/telep.png" /></div>
                  <div class="cont_inf_text align-self-center">
                     <p>7055705585</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 align-self-center">
               <div class="con_infos_box wow fadeIn" data-wow-delay=".60s">
                  <div class="icons_c_box"><img src="assets/img/icons/mail.png" /></div>
                  <div class="cont_inf_text align-self-center">
                     <p><a href='#'>Info@LC-Emporio.com</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->


   <section class="contact-us">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-l0">
               <div class="row space-creator" style="width:1000px; margin:auto;">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-l" style="display: none;">
                     <div class="parent">

                        <div class="head-contact">
                           <h2>OUR SHOWROOM</h2>


                           <ul>
                              <li>
                                 <h4>Gurgaon Headquarters</h4>
                                 <span class="add_-icon"><i class="fas fa-map-marker-alt"></i></span>
                                 <p class="text-left">C-4 , 1st floor, jhillmill garden, Ring road, Next to bmw
                                    showroom, New Delhi 110027.
                                 </p>
                              </li>
                              <li>
                                 <h4>Mumbai Studio</h4>
                                 <span class="add_-icon"><i class="fas fa-map-marker-alt"></i></span>
                                 <p class="text-left">C-4 , 1st floor, jhillmill garden, Ring road, Next to bmw
                                    showroom, New Delhi 110027.


                                 </p>
                              </li>
                              <li>
                                 <h4>Hyderabad Studio</h4>
                                 <span class="add_-icon"><i class="fas fa-map-marker-alt"></i></span>
                                 <p class="text-left">C-4 , 1st floor, jhillmill garden, Ring road, Next to bmw
                                    showroom, New Delhi 110027.


                                 </p>
                              </li>
                           </ul>



                        </div>

                        <div class="padding-right">
                           <div class="head">
                           </div>

                           <div class="address">
                              <ul class="add-ul">
                                 <li>
                                    <p class="text-left">Info@LC-Emporio.com</p>
                                    <h5>The best way to get answer faster. </h5>
                                 </li>

                                 <li>
                                    <p class="text-left"> 7055 7055 85</p>
                                    <h5>We are happy to help (10am to 10pm)</h5>
                                 </li>

                              </ul>
                           </div>

                        </div>
                     </div>

                  </div>




                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-r">
                     <div class="parent2" style="box-shadow: 0px 0px 3px 1px #ccc; margin: 50px 0px;">
                        <div>
                        </div>
                        <div class="form-p">
                           <form id="form">
                              <h3 class="txt2" style="text-align: center;">SEND US AN EMAIL</h3>
                              <p class="text-center">Drop us a line by using the below form
                              </p>
                              <input type="text" placeholder="name" id="name">
                              <input type="email" placeholder="Email Address" id="email">
                              <input type="text" placeholder="location" id="location">
                              <input type="tel" placeholder="Phone Number" id="phone">


                              <textarea id="msg" cols="100" rows="4" placeholder="Message"></textarea>

                              <div class="click-btn" style="text-align: center;">
                                 <a href="#" id="submit-btn">SUBMIT <i class="fas fa-caret-right"></i>
                                 </a>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   <!-- <section class="map">
      <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.48129412968!2d77.06889969035102!3d28.52728034389636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1631185710236!5m2!1sen!2sin"
         width="100%" height="350" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
   </section> -->

         <?php 
      include 'include/footer.php';
      include 'include/foot-link.php';
   ?>
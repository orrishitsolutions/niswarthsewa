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
      color: #000;
    }

    li.linkedin {
      border-radius: 50%;
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
        <h1>About Us</h1>
<!-- directors_select
experience_select
team_select
testimonials_select
deal_select -->
          
        <p>House of used & new cars</p>
      </div>
      <div class="breadcrmb_nav">
        <ul>
          <li><a href="<?=base_url()?>">Home</a></li>
          <li><a href="<?=base_url('about-us')?>">About Us</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="about_p">
    <div class="abe_head text-center">
      <h2 class="mx-auto">About Directors</h2>
      <p>
        <?php
          // echo "<pre>";
          // print_r($directors_select);
          // echo "<pre>";
          // print_r($experience_select);
          // echo "<pre>";
          // print_r($team_select);
          // echo "<pre>";
          // print_r($testimonials_select);
          // echo "<pre>";
          // print_r($deal_select);
          ?>
      Cars and working with cars is my passion. With this showroom.</p>
    </div>
    <div class="container">
      <div class="row">
        <div class="owl-carousel abtslide">

          <?php
                           if(count($directors_select)!=="")
                           {
                               for ($i=0; $i < count($directors_select); $i++) { 
                                  ?>
          <div class="item">
            <div class="about_repeat">
              <div class="col-md-6">
                <div class="inr_abt_abe_img wow fadeIn" data-wow-delay=".0s">
                  <img class="w-100" src="<?=base_url()?>assets-orrish/storage/About-image/<?=$directors_select[$i]['file']?>" /></div>
              </div>
              <div class="col-md-6 align-self-center">
                <div class="abour_abe wow fadeIn" data-wow-delay=".30s">
                  <div class="abe_head" style="color: #000;">
                    <h3><?=$directors_select[$i]['title1']?></h3>
                  </div>
                  <div class="abt_abe_para">
                    <?=$directors_select[$i]['description1']?>
                  </div>
                </div>
              </div>
            </div>
          </div>
                                  <?php
                           }
                           }
                           ?>
          
        </div>
      </div>
    </div>
  </div>
  
          <?php
                           if(count($experience_select)!=="")
                           {
                               for ($i=0; $i < count($experience_select); $i++) { 
                                  ?>
  <div class="experiencess">
    <div class="container">
      <div class="abe_head text-center">
        <small>Experience the</small>
        <h2 class='mx-auto'>LC EMPORIO</h2>
      </div>
      <div class="row">
        <div class="col-md-5">
          <?=$experience_select[$i]['description1']?>
          <!-- <div class="our_m_lvistion">
            <div class="m_f_box wow fadeIn" data-wow-delay=".0s">
              <div class="h_m_lin">
                <h3>Our Forte</h3>
              </div>
              <div class="_miss_para">                  
                <ul>
                  <li>No Accidental Cars</li>
                  <li>No Odometer Tampered</li>
                  <li>No Hidden Cost</li>
                  <li>No Processing Fee</li>
                </ul>

              </div>
            </div>
            <div class="m_f_box wow fadeIn" data-wow-delay=".0s">
              <div class="h_m_lin">
                <h3>Our Vision & Mission</h3>
              </div>
              <div class="_miss_para">
                <p>Our Mission is to simply be the best in every area of our business. We will accomplish this by
                  providing the most exceptional customer experience, being the best place to work, and strongly
                  supporting our community, all while working together as</p>
              </div>
            </div>
            <div class="m_f_box wow fadeIn" data-wow-delay=".30s">
              <div class="h_m_lin">
                <h3>Our Core Values</h3>
              </div>
              <div class="_miss_para">
                <p>Our core values are the pillars that support our Mission statement. They form the rock solid
                  foundation that guides our individual and collective actions. These core values are intertwined so
                  that each supports the other.</p>
              </div>
            </div>
          </div> -->
        </div>
        <div class="col-md-7">
          <div class="pl-20">
            <div class="video_pop">
              <img src="<?=base_url()?>assets-orrish/storage/About-image/<?=$experience_select[$i]['file']?>" /> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="user_count">
    <div class="container">
      <div id="counter">
        <div class="row">
          <div class="col-md-4 col-sm-2">
            <div class="user_f_box wow fadeIn" data-wow-delay=".0s">
              <div class="u_icon"><img src="<?=base_url()?>assets-website/image/ccar.png" /></div>
              <div class="u_numb">
                <div class="counter-value" data-count="<?=$experience_select[$i]['title1']?>"><?=$experience_select[$i]['title1']?>+</div>
              </div>
              <div class="u_texts">
                <p>Exclusive Variant</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-2">
            <div class="user_f_box wow fadeIn" data-wow-delay=".30s">
              <div class="u_icon"><img src="<?=base_url()?>assets-website/image/cccar2.png" /></div>
              <div class="u_numb">
                <div class="counter-value" data-count="<?=$experience_select[$i]['title2']?>"><?=$experience_select[$i]['title2']?>+</div>
              </div>
              <div class="u_texts">
                <p>Luxury Car Brands</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-2">
            <div class="user_f_box wow fadeIn" data-wow-delay=".60s">
              <div class="u_icon"><img src="<?=base_url()?>assets-website/image/ccuser.png" /></div>
              <div class="u_numb">
                <div class="counter-value" data-count="<?=$experience_select[$i]['title3']?>"><?=$experience_select[$i]['title3']?>+</div>
              </div>
              <div class="u_texts">
                <p>Happy Clients</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php } } ?>

  <div class="our_team">
    <div class="container">
      <div class="abe_head text-center">
        <small>Our</small>
        <h2 class='mx-auto'>Expert Team</h2>
      </div>
      <div class="owl-carousel our-team-slide">
         <?php
            if(count($team_select)!=="")
            {
                for ($i=0; $i < count($team_select); $i++) { 
                   ?>
        <div class="item">
          <div class="team_wrap wow fadeIn" data-wow-delay=".0s">
            <div class="team_img_box">
              <img src="<?=base_url()?>assets-orrish/storage/About-image/<?=$team_select[$i]['file']?>" /></div>
            <div class="teax_text_wrap">
              <div class="hov_text_box">
                <div class="team_h_text">
                  <h4><?=$team_select[$i]['title1']?></h4>
                  <small><?=$team_select[$i]['title2']?></small>
                  <hr class="lineGray">
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php }  } ?>
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
          <?php
            if(count($testimonials_select)!=="")
            {
               for ($i=0; $i < count($testimonials_select); $i++) { 
                  ?>
         
          <div class="item">
            <div class="row align-self-center">
              <div class="col-md-4">
                <div class="testm_img wow fadeInUp" data-wow-delay=".0s">
                  <img src="<?=base_url()?>assets-orrish/storage/About-image/<?=$testimonials_select[$i]['file']?>" /> </div>
              </div>
              <div class="col-md-8">
                <div class="testm_text wow fadeInUp" data-wow-delay=".30s">
                  <div class="testm_discrption">
                    <div class="quote_ic"><img src="<?=base_url()?>assets-website/img/icons/quote.png" /></div>
                   <?=$testimonials_select[$i]['description1']?>
                  </div>
                  <div class="testm_abee_auth">
                    <h4><?=$testimonials_select[$i]['title1']?></h4>
                    <small><?=$testimonials_select[$i]['title2']?></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }  } ?> 
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
              <?php
                           if(count($deal_select)!=="")
                           {
                               for ($i=0; $i < count($deal_select); $i++) { 
                                  ?>
         
              <div class="item wow fadeInRight" data-wow-delay=".0s">
              <img alt="<?=$deal_select[$i]['title1']?>" src="<?=base_url()?>assets-orrish/storage/About-image/<?=$deal_select[$i]['file']?>" />
              </div>
              <?php } } ?>

              
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
  <script>

    /*About Slider */

    $('.abt_slider').owlCarousel({
      loop: true,
      margin: 0,
      responsiveClass: true,
      autoplay: true,
      items: 1,
      dots: false,
      nav: true,
      navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
      ],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 1,
        }
      }
    });


    $('.abtslide').owlCarousel({
      loop: true,
      margin: 0,
      responsiveClass: true,
      autoplay: true,
      items: 1,
      autoplayTimeout: 8000,
      interval: 12000,
      pause: 'hover',
      autoplayHoverPause: true,
      dots: false,
      nav: true,
      navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
      ],
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 1,
        }
      }
    });



  </script>

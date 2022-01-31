<?php
   include('include/header.php'); 
   ?>
<main id="content" role="main">
   <div id="banner-tops" class="bg-gray-13 bg-md-transparent" style="background-image: url(<?= base_url()?>assets/frontend/img/bannertop.jpg);">
      <div class="container">
         <div class="my-md-0 breadcrumb20">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                  <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Blog</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</main>
<main id="content" role="main">
   <section class="blogs48">
      <div class="container">
         <div class="row">
            <div class="col-xl-9 col-wd">
               <div class="max-width-1100-wd">
                  <div class="border-bottom border-color-1 mb-5">
                     <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Blog</h3>
                  </div>
                  <div class="row">
                  	<?php 
                  	   $this->load->helper('text');
                        if(count($BlogAll)!=="")
                           {
                               for ($i=0; $i < count($BlogAll); $i++) { 
                              ?>

                              <div class="col-lg-6">
                        <article class="card mb-13 border-0">
                           <img src="<?= base_url() ?>assets/frontend/upload/blog-image/<?= $BlogAll[$i]['file'] ?>" alt="" style="height: 222px; width: 475px;">
                           <div class="card-body pt-5 pb-0 px-0">
                              <h4 class="mb-3">
                                 <a href="<?= base_url()?><?= $BlogAll[$i]['slug'] ?>.php">
            <?php
                  echo character_limiter($BlogAll[$i]['title'], 50); 
            ?>
                                 </a>
                              </h4>
                              <div class="mb-3 pb-3 border-bottom">
                                 <div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                    
                                     <a href="#1" class="mx-0dot5 text-gray-5">
                                       <?=$BlogAll[$i]['tags_data']?></a>
                                    <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
                                    <a href="#1" class="mx-0dot5 text-gray-5">
                                       <?php
                                     echo date('M d ,  Y', strtotime($BlogAll[$i]['created_at']))
                                        ?>
                                    </a>
                                 </div>
                              </div>
                              <p>
                                 <?php
                  echo character_limiter($BlogAll[$i]['short_description'], 250); 
            ?>
                           </p>
                              <div class="flex-horizontal-center">
                                 <a href="<?= base_url()?><?= $BlogAll[$i]['slug'] ?>.php" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
                                 <a href="<?= base_url()?>blog/<?= $BlogAll[$i]['slug'] ?>.php" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> <?=$BlogAll[$i]['comment']?> Leave a comment</a>
                              </div>
                           </div>
                        </article>
                     </div>

                              <?php
                               }
                            }
                  	?>
                     

                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-wd">
               <aside class="mb-7">
                  <div class="border-bottom border-color-1 mb-5">
                     <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">About Blog</h3>
                  </div>
                  <p class="text-gray-90 mb-0" style="color:#333e48;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero.</p>
               </aside>
               <aside class="mb-7">
                  <div class="border-bottom border-color-1 mb-5">
                      <!-- <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Categories</h3> -->
                      <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">New Post</h3>
                  </div>
                  <div class="list-group">
                     <?php 
                        $this->load->helper('text');
                        if(count($BlogAll)!=="")
                           {
                               for ($i=0; $i < count($BlogAll); $i++) { 
                              ?>
                               <a href="<?= base_url()?><?= $BlogAll[$i]['slug'] ?>.php" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-0">
                                 <i class="mr-2 fas fa-angle-right"></i> 
                                 <?php echo character_limiter($BlogAll[$i]['title'], 20);  ?>
                              </a>

                     <?php
                        }
                     }
                     ?>
                     
                  </div>
               </aside>
              <!--  <aside class="mb-7">
                  <div class="border-bottom border-color-1 mb-5">
                     <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Tags Clouds</h3>
                  </div>
                  <div class="d-flex flex-wrap mx-n1">
                     <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1" style="color:#333e48;">Blog1</a>
                     <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1" style="color:#333e48;">Blog2</a>
                     <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1" style="color:#333e48;">Blog3</a>
                     <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1" style="color:#333e48;">Blog4</a>
                     <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1" style="color:#333e48;">Blog5</a>
                     <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1" style="color:#333e48;">Blog6</a>
                     <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1" style="color:#333e48;">Blog7</a>
                     <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1" style="color:#333e48;">Blog8</a>
                     <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1" style="color:#333e48;">Blog9</a>
                     <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1" style="color:#333e48;">Blog10</a>
                  </div>
               </aside> -->
            </div>
         </div>
      </div>
   </section>
</main>
<?php include('include/footer.php'); ?>
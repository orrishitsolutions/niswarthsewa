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

                  	echo "<pre>";
		            print_r($BlogAll);

                  	?>
                     <div class="col-lg-6">
                        <article class="card mb-13 border-0">
                           <img src="<?= base_url()?>assets/frontend/img/blog1.jpg" alt="">                                        
                           <div class="card-body pt-5 pb-0 px-0">
                              <h4 class="mb-3"><a href="single-blog.html">Ngo Nishivarth menstruation work during disasters importance of MY Pads in Rahat Kits</a></h4>
                              <div class="mb-3 pb-3 border-bottom">
                                 <div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                    <a href="#1" class="mx-0dot5 text-gray-5">Clothes,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Books,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Statianery,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Appliances</a>
                                    <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
                                    <a href="#1" class="mx-0dot5 text-gray-5">March 4, 2021</a>
                                 </div>
                              </div>
                              <p>#Menstruation has always been one of the most disregarded issues in India. The #taboo and stigma attached to it makes it all the more frustrating to address the complexities of problems menstruators face in India.</p>
                              <div class="flex-horizontal-center">
                                 <a href="single-blog.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
                                 <a href="#" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-lg-6">
                        <article class="card mb-13 border-0">
                           <img src="<?= base_url()?>assets/frontend/img/blog2.jpg" alt="">                                        
                           <div class="card-body pt-5 pb-0 px-0">
                              <h4 class="mb-3">
                              	<a href="single-blog.html">This made our souls happy…</a></h4>
                              <div class="mb-3 pb-3 border-bottom">
                                 <div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                    <a href="#1" class="mx-0dot5 text-gray-5">Clothes,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Books,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Statianery,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Appliances</a>
                                    <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
                                    <a href="#1" class="mx-0dot5 text-gray-5">March 4, 2021</a>
                                 </div>
                              </div>
                              <p>
                                 Padla village of Banswara district, #Rajasthan, is an agricultural area where people’s main source of income is farming. Unfortunately, water scarcity and the challenges it brings led many of the locals work as laborers as well.
                              </p>
                              <div class="flex-horizontal-center">
                                 <a href="single-blog.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
                                 <a href="#" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-lg-6">
                        <article class="card mb-13 border-0">
                           <img src="<?= base_url()?>assets/frontend/img/blog3.jpg" alt="">                                        
                           <div class="card-body pt-5 pb-0 px-0">
                              <h4 class="mb-3"><a href="single-blog.html">People of Palghar solve their own hunger with Kitchen Gardens</a></h4>
                              <div class="mb-3 pb-3 border-bottom">
                                 <div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                    <a href="#1" class="mx-0dot5 text-gray-5">Clothes,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Books,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Statianery,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Appliances</a>
                                    <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
                                    <a href="#1" class="mx-0dot5 text-gray-5">March 4, 2021</a>
                                 </div>
                              </div>
                              <p>As covid cases finally began to dwindle in Karsud village of Vikramgad, Palghar #Maharashtra, hope began to rise in this Adivasi community.</p>
                              <div class="flex-horizontal-center">
                                 <a href="single-blog.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
                                 <a href="#" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-lg-6">
                        <article class="card mb-13 border-0">
                           <img src="<?= base_url()?>assets/frontend/img/blog4.jpg" alt="">
                           <div class="card-body pt-5 pb-0 px-0">
                              <h4 class="mb-3"><a href="single-blog.html">When women take action against their menstrual challenges. they shine..</a></h4>
                              <div class="mb-3 pb-3 border-bottom">
                                 <div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                    <a href="#1" class="mx-0dot5 text-gray-5">Clothes,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Books,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Statianery,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Appliances</a>
                                    <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
                                    <a href="#1" class="mx-0dot5 text-gray-5">March 4, 2021</a>
                                 </div>
                              </div>
                              <p>The women of #Lasunirvadi village in #Jalgaon, Maharashtra show the world how it’s done.. Most families here are migrant farmers of Madhya Pradesh,</p>
                              <div class="flex-horizontal-center">
                                 <a href="single-blog.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
                                 <a href="#1" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-lg-6">
                        <article class="card mb-13 border-0">
                           <img src="<?= base_url()?>assets/frontend/img/blog5.jpg" alt="">
                           <div class="card-body pt-5 pb-0 px-0">
                              <h4 class="mb-3"><a href="single-blog.html">Ngo Nishivarth menstruation work during disasters</a></h4>
                              <div class="mb-3 pb-3 border-bottom">
                                 <div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                    <a href="#1" class="mx-0dot5 text-gray-5">Clothes,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Books,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Statianery,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Appliances</a>
                                    <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
                                    <a href="#1" class="mx-0dot5 text-gray-5">March 4, 2021</a>
                                 </div>
                              </div>
                              <p>Ngo Nishivarth menstruation work during disasters…importance of MY Pads in Rahat Kits #Menstruation has always been one of the most disregarded issues in India.</p>
                              <div class="flex-horizontal-center">
                                 <a href="single-blog.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
                                 <a href="#1" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-lg-6">
                        <article class="card mb-13 border-0">
                           <img src="<?= base_url()?>assets/frontend/img/blog6.jpg" alt="">
                           <div class="card-body pt-5 pb-0 px-0">
                              <h4 class="mb-3"><a href="single-blog.html">A neighbor’s pride</a></h4>
                              <div class="mb-3 pb-3 border-bottom">
                                 <div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                    <a href="#1" class="mx-0dot5 text-gray-5">Clothes,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Books,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Statianery,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Appliances</a>
                                    <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
                                    <a href="#1" class="mx-0dot5 text-gray-5">March 4, 2021</a>
                                 </div>
                              </div>
                              <p>Akkolli, a remote village with little access to even bus services, is nestled in Wayanad district of Kerala, home to the tribal settlement of Churuli.</p>
                              <div class="flex-horizontal-center">
                                 <a href="single-blog.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
                                 <a href="#1" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-lg-6">
                        <article class="card mb-13 border-0">
                           <img src="<?= base_url()?>assets/frontend/img/blog7.jpg" alt="">
                           <div class="card-body pt-5 pb-0 px-0">
                              <h4 class="mb-3"><a href="single-blog.html">‘Now, mothers won’t lose their lives while on their way to give birth’</a></h4>
                              <div class="mb-3 pb-3 border-bottom">
                                 <div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                    <a href="#1" class="mx-0dot5 text-gray-5">Clothes,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Books,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Statianery,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Appliances</a>
                                    <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
                                    <a href="#1" class="mx-0dot5 text-gray-5">March 4, 2021</a>
                                 </div>
                              </div>
                              <p>Karamba, a remote village in the Hazaribagh district of Jharkhand, houses just 19 families. To reach the village, one has to cross 3 km of dense forest and a rivulet.</p>
                              <div class="flex-horizontal-center">
                                 <a href="single-blog.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
                                 <a href="#1" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-lg-6">
                        <article class="card mb-13 border-0">
                           <img src="<?= base_url()?>assets/frontend/img/blog8.jpg" alt="">
                           <div class="card-body pt-5 pb-0 px-0">
                              <h4 class="mb-3"><a href="single-blog.html">‘I have never seen such enthusiasm in the villagers before…</a></h4>
                              <div class="mb-3 pb-3 border-bottom">
                                 <div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                    <a href="#1" class="mx-0dot5 text-gray-5">Clothes,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Books,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Statianery,</a>
                                    <a href="#1" class="mx-0dot5 text-gray-5"> Appliances</a>
                                    <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
                                    <a href="#1" class="mx-0dot5 text-gray-5">March 4, 2021</a>
                                 </div>
                              </div>
                              <p>’When our team spoke to the residents of Nibapur village in Dahanu Block of Palghar district, Maharashtra, they expressed a need for a community centre for meetings,</p>
                              <div class="flex-horizontal-center">
                                 <a href="single-blog.html" class="btn btn-soft-secondary-w mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">Read More</a>
                                 <a href="#1" class="font-size-12 text-gray-5 ml-4"><i class="far fa-comment"></i> Leave a comment</a>
                              </div>
                           </div>
                        </article>
                     </div>
                     <div class="col-lg-6">
                        <article class="card mb-13 border-0">
                           <div class="card-body p-0">
                              <blockquote class="blockquote" style="padding: 47px 34px;">
                                 <p>Quisque a commodo lectus. Nunc vel dolor sed libero venenatis egestas. Cras non volutpat enim. Cras molestie purus id lorem sodales, in facilisis erat tristique. Aliquam luctus orci aliquet augue eleifend.</p>
                                 <footer class="blockquote-footer"><cite title="Source Title">Rajesh Singh</cite></footer>
                              </blockquote>
                           </div>
                        </article>
                     </div>
                     <div class="col-lg-6">
                        <article class="card mb-8 border-0">
                           <div class="card-body p-5 p-md-10 bg-gray-1">
                              <p class="d-block font-size-25 text-gray-39">If you are looking for a developer on – check out the link</p>
                              <a href="#" class="text-blue">blog1</a>
                           </div>
                        </article>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-wd">
               <!-- <aside class="mb-7">
                  <form class="">
                      <div class="d-flex align-items-center">
                          <label class="sr-only" for="signupSrEmail">Search Electro blog</label>
                          <div class="input-group">
                              <input type="text" class="form-control px-4" name="search" id="signupSrEmail" placeholder="Search..." aria-label="Search Electro blog">
                          </div>
                          <button type="submit" class="btn btn-primary text-nowrap ml-3 d-none">
                              <span class="fas fa-search font-size-1 mr-2"></span> Search
                          </button>
                      </div>
                  </form>
                  </aside> -->
               <aside class="mb-7">
                  <div class="border-bottom border-color-1 mb-5">
                     <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">About Blog</h3>
                  </div>
                  <p class="text-gray-90 mb-0" style="color:#333e48;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero.</p>
               </aside>
               <aside class="mb-7">
                  <div class="border-bottom border-color-1 mb-5">
                     <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Categories</h3>
                  </div>
                  <div class="list-group">
                     <a href="#1" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-0"><i class="mr-2 fas fa-angle-right"></i> Blog1</a>
                     <a href="#1" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Blog2</a>
                     <a href="#1" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Blog3</a>
                     <a href="#1" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Blog4</a>
                     <a href="#1" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Blog5</a>
                     <a href="#1" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Blog6</a>
                     <a href="#1" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Blog7</a>
                     <a href="#1" class="font-bold-on-hover px-3 py-2 list-group-item list-group-item-action border-right-0 border-left-0 border-bottom-0"><i class="mr-2 fas fa-angle-right"></i> Blog8</a>
                  </div>
               </aside>
               <aside class="mb-7">
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
               </aside>
            </div>
         </div>
      </div>
   </section>
</main>
<?php include('include/footer.php'); ?>
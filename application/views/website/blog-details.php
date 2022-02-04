<?php
   include('include/header.php'); 
   ?>
<main id="content" role="main">
         <div id="banner-tops" class="bg-gray-13 bg-md-transparent" style="background-image: url(<?= base_url()?>assets/frontend/img/bannertop.jpg);">
            <div class="container">
               <div class="my-md-0 breadcrumb20">
                   <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1">
                                    <a href="<?= base_url()?>">Home</a>
                                 </li>
                                 <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1">
                                    <a href="<?= base_url('blog')?>">Blog</a>
                                 </li>
                                 <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">&nbsp &nbsp <?=$blog_details->title?> </li>
                            </ol>
                        </nav>
               </div>
            </div>
         </div>
   </main>
    <main id="content" role="main">
         <section class="blog-singles23"> <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-md-9 col-wd">
                        <div class="min-width-1100-wd">
                            <article class="card mb-8 border-0">
                                <img class="img-fluid blog-singles" src="<?= base_url() ?>assets/frontend/upload/blog-image/<?= $blog_details->file?>" alt="Image Description">
                                <div class="card-body pt-5 pb-0 px-0">
                                    <div class="d-block d-md-flex flex-center-between mb-4 mb-md-0">
                                        <h4 class="mb-md-3 mb-1"><?=$blog_details->title?></h4>
                                        <a href="#" class="font-size-12 text-gray-5 ml-md-4"><i class="far fa-comment"></i> <?= $blog_details->comment?> Leave a comment</a>
                                    </div>
                                    <div class="mb-3 pb-3 border-bottom">
                                        <div class="list-group list-group-horizontal flex-wrap list-group-borderless align-items-center mx-n0dot5">
                                             <a href="#1" class="mx-0dot5 text-gray-5">
                                                   <?= $blog_details->tags_data?>
                                             </a>
                                            <span class="mx-2 font-size-n5 mt-1 text-gray-5"><i class="fas fa-circle"></i></span>
                                            <a href="#1" class="mx-0dot5 text-gray-5">
                                                <?php
                                           echo date('M d ,  Y', strtotime($blog_details->created_at))
                                           ?>
                                            </a>
                                        </div>
                                    </div>

                                    <?php echo  $blog_details->description?>
                                  <!--  <p><strong>#Menstruation has always been one of the most disregarded issues in India. The #taboo and stigma attached to it makes it all the more frustrating to address the complexities of problems menstruators face in India. </strong></p>
                                    <p>
                           Like in the case of villages where there are a very few, extremely small, and badly constructed private spaces. 
                           Either there isn’t a roof or it’s a mud structure with no sewage pipes, or barely a structure at all. 
                           Thus, even changing pads in these conditions is a challenge on its own. Moreover, in most cases the water 
                           from the bathroom ends up running across the road, which becomes an embarrassment for the users, leading them 
                           to not bathe for those four days of menstruation. It doesn’t end there. There is no relief even at home…the houses 
                           are usually very small with at least 4-5 people present at all times, so how do the women change pads there? 
                           On top of that, the availability of pads in itself is a luxury most of the time. Usually, the women end up looking for 
                           dirty clothes to use, which does a lot of damage to the body. Cervical cancer, Hepatitis-B, and other diseases related to 
                           reproductive and urinary systems, to name a few, are risks these women and girls face all the time. 
                           The circumstances are dire, and cause both physical and mental harm. In disaster-prone environments, women and adolescent 
                           girls face numerous more obstacles. Many have reverted to using ash and hay covered in rags during their periods due to 
                           lack of access to even clean cloth, let alone pads. Goonj, under its #Rahat initiative, reaches the much required relief 
                           to them by channelizing Family Kits including clothes, food, and basic amenities. To address the plight of the menstruators, 
                           with these kits, MY Pads (cloth sanitary pads made in-house) are also channelized. Through our ‘Not Just a Piece of Cloth’ 
                           #NJPC initiative’s ‘Chuppi Todo Baithak’ (awareness sessions), our teams also tell them how to make cloth pads at home and make 
                           them aware of the importance of menstrual health and hygiene. 
                           </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>During the #Covid phase itself, more than 1.55 million 
                           </p>
                                            <p>MY Pads and 12.30 million kg of ration and other essentials have been channelized to people across India. However 
                           the need remains huge. We are there. Need you too.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <blockquote>
                                                <p><span>"</span>MY Pads and 12.30 million kg of ration and other essentials have been channelized to people across India. However the need remains huge. We are there. Need you too.</p>
                                                
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </article>-->
                            <div class="bg-gray-1 px-3 py-5 mb-10 mt-4">
                                <div class="d-block d-md-flex media">
                                    <div class="u-xl-avatar mb-4 mb-md-0 mr-md-4">
                                        <img class="img-fluid" src="<?= base_url()?>assets/frontend/img/blogsingle1.jpg" alt="Image Description">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="font-size-18 mb-3"><a href="#1">Jai Prakash Singh</a></h3>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis diam erat. Duis velit lectus, posuere a blandit sit amet, tempor at lorem. Donec ultricies, lorem sed ultrices interdum, leo metus luctus sem, vel vulputate diam ipsum sed lorem.</p>
                                    </div>
                                </div>
                                
                            </div>
                         
                            <div class="mb-10">
                                <div class="border-bottom border-color-1 mb-10">
                                    <h4 class="section-title mb-0 pb-3 font-size-25">3 Comments</h4>
                                </div>
                                <ol class="nav">
                                    <li class="w-100 border-bottom pb-6 mb-6 border-color-1">
                                        
                                        <div class="d-block d-md-flex media">
                                            <div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
                                                <img class="img-fluid rounded-circle" src="<?= base_url()?>assets/frontend/img/blog21.jpg" alt="Image Description">
                                            </div>
                                            <div class="media-body">
                                                <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>
                                                <div class="d-flex">
                                                    <h4 class="font-size-14 font-weight-bold mr-2"><a href="#1" class="">Karan Kumar</a></h4>
                                                    <span><a href="#1" class="text-gray-23">March 16, 2016</a></span>
                                                    <a href="#" class="text-blue ml-auto">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </li>
                                    <li class="w-100 border-bottom pb-6 mb-6 border-color-1">
                                        
                                        <div class="d-block d-md-flex media">
                                            <div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
                                                <img class="img-fluid rounded-circle" src="<?= base_url()?>assets/frontend/img/blog21.jpg" alt="Image Description">
                                            </div>
                                            <div class="media-body">
                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus.</p>
                                                <div class="d-flex">
                                                    <h4 class="font-size-14 font-weight-bold mr-2"><a href="#1" class="">Anna Kohli</a></h4>
                                                    <span><a href="#1" class="text-gray-23">March 16, 2016</a></span>
                                                    <a href="#" class="text-blue ml-auto">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </li>
                                    <li class="w-100  border-bottom pb-6 mb-6 border-color-1">
                                        
                                        <div class="d-block d-md-flex media">
                                            <div class="u-xl-avatar mr-md-4 mb-4 mb-md-0">
                                                <img class="img-fluid rounded-circle" src="<?= base_url()?>assets/frontend/img/blog21.jpg" alt="Image Description">
                                            </div>
                                            <div class="media-body">
                                                <p>Sed id tincidunt sapien. Pellentesque cursus accumsan tellus, nec ultricies nulla sollicitudin eget. Donec feugiat orci vestibulum porttitor sagittis.</p>
                                                <div class="d-flex">
                                                    <h4 class="font-size-14 font-weight-bold mr-2"><a href="#1" class="">Princes</a></h4>
                                                    <span><a href="#1" class="text-gray-23">March 16, 2016</a></span>
                                                    <a href="#" class="text-blue ml-auto">Reply</a>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </li>
                                </ol>
                            </div>
                            <div class="mb-10">
                                <div class="border-bottom border-color-1 mb-6">
                                    <h4 class="section-title mb-0 pb-3 font-size-25">Leave a Reply</h4>
                                </div>
                                <p class="text-gray-90">Your email address will not be published. Required fields are marked <span class="text-dark">*</span></p>
                                <form class="js-validate" novalidate="novalidate">
                                    <div class="js-form-message mb-4">
                                     

                                        <div class="input-group">
                                            <textarea class="form-control p-5" rows="4" name="text" placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                           
                                            <div class="js-form-message mb-4">
                                              
                                                <input type="text" class="form-control" name="Name" placeholder="Name " aria-label="" required="" data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success" autocomplete="off">
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-6">
                                           
                                            <div class="js-form-message mb-4">
                                             
                                                <input type="email" class="form-control" name="emailAddress" placeholder="Email address" aria-label="" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-12">
                                           
                                            <div class="js-form-message mb-4">
                                              
                                                <input type="text" class="form-control" name="website" placeholder="Website" aria-label="" data-msg="Please enter website name." data-error-class="u-has-error" data-success-class="u-has-success">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary-dark-w px-5">Post Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
               
                    <div class="col-xl-3 col-md-3  col-wd">
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
                                <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1"style="color:#333e48;">Blog6</a>
                                <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1"style="color:#333e48;">Blog7</a>
                                <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1"style="color:#333e48;">Blog8</a>
                                <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1"style="color:#333e48;">Blog9</a>
                                <a href="#1" class="text-gray-90 mb-2 bg-primary-on-hover py-2 px-3 border mx-1"style="color:#333e48;">Blog10</a>
                            </div>
                        </aside>
                    </div>
                </div>
                
            </div>
     </section>   </main>
<?php include('include/footer.php'); ?>

<style type="text/css">
   "
   {
    font-size: 40px;
    position: absolute;
    z-index: 99;
    left: 30px;
    top: 10px;
    color: #fa5b09;
   }
</style>
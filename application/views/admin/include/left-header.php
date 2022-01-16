 <nav class="sidebar">
            <div class="sidebar-header">
               <a href="<?=current_url()?>" class="sidebar-brand">Niswarth Sewa</a>
               <div class="sidebar-toggler not-active"><span></span><span></span><span></span></div>
            </div>
            <div class="sidebar-body">
               <ul class="nav">
                  <li class="nav-item nav-category">Main</li>
                  <li class="nav-item">
                     <a href="<?=base_url('admin/dashboard')?>" class="nav-link">
                        <i class="link-icon" data-feather="box">
                        </i><span class="link-title">Dashboard</span></a>
                  </li>
                  

                  <li class="nav-item nav-category">Website Home</li>
                  <li class="nav-item">
                     <a class="nav-link collapsed" data-bs-toggle="collapse" href="#authPages1" role="button" aria-expanded="false" aria-controls="authPages1">
                       <i class="link-icon" data-feather="home"></i>
                       <span class="link-title">Home</span>
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down link-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
                     </a>
                     <div class="expand" id="authPages1" style="">
                       <ul class="nav sub-menu">
						   <li class="nav-item">
							   <a href="<?=base_url('admin/category-pages')?>" class="nav-link">Pages categories</a>
						   </li>
						   <li class="nav-item">
							   <a href="<?=base_url('admin/pages')?>" class="nav-link">Static Pages</a>
						   </li>
						   <li class="nav-item">
							   <a href="<?=base_url('admin/services')?>" class="nav-link">Page Services</a>
						   </li>
                           <li class="nav-item">
                              <a href="<?=base_url('admin/static-blocks')?>" class="nav-link">Static BLocks</a>
                           </li>
                        </ul>
                     </div>
                   </li>

                  <li class="nav-item nav-category"> management Category </li>
                  <li class="nav-item">
                     <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
                       <i class="fab fa-product-hunt"></i>
                        <span class="link-title">Catalog</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                     </a>
                     <div class="expand" id="forms">
                        <ul class="nav sub-menu">
							<li class="nav-item">
								<a href="<?=base_url('admin/category')?>"class="nav-link">Categories</a>
							</li>
							<li class="nav-item">
								<a href="<?=base_url('admin/products')?>"class="nav-link">Products</a>
							</li>
                        </ul>
                     </div>
                  </li>
                  <li class="nav-item nav-category">Media</li>
                  <li class="nav-item">
                     <a class="nav-link collapsed" data-bs-toggle="collapse" href="#authPages3" role="button" aria-expanded="false" aria-controls="authPages3">
                       <i class="link-icon" data-feather="at-sign"></i>
                       <span class="link-title">Media</span>
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down link-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
                     </a>
                     <div class="expand" id="authPages3" style="">
                       <ul class="nav sub-menu">
						   <li class="nav-item">
                              <a href="#" class="nav-link">Gallery</a>
                           </li>
						   <li class="nav-item">
							   <a href="#" class="nav-link">Upload</a>
						   </li>
                        </ul>
                     </div>
                   </li>
                    <li class="nav-item nav-category">Customer Services</li>
                     <li class="nav-item">
                     <a class="nav-link collapsed" data-bs-toggle="collapse" href="#authPages8" role="button" aria-expanded="false" aria-controls="authPages8">
                       <i class="link-icon" data-feather="inbox"></i>
                       <span class="link-title">Customer</span>
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down link-arrow"><polyline points="6 9 12 15 18 9"></polyline></svg>
                     </a>
                     <div class="expand" id="authPages8" style="">
                       <ul class="nav sub-menu">
                           <li class="nav-item">
                              <a href="#" class="nav-link">Users</a>
                           </li>
						   <li class="nav-item">
							   <a href="#" class="nav-link">Contact</a>
						   </li>
                        
                        </ul>
                     </div>
                   </li>


              <!--     <li class="nav-item nav-category">Components</li>
                  <li class="nav-item">
                     <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms"><i class="link-icon" data-feather="inbox"></i><span class="link-title">Forms</span><i class="link-arrow" data-feather="chevron-down"></i></a>
                     <div class="collapse" id="forms">
                        <ul class="nav sub-menu">
                           <li class="nav-item">
                              <a href="<?=base_url('admin/basic-elements')?>" class="nav-link">Basic Elements</a>
                           </li>
                           <li class="nav-item">
                              <a href="<?=base_url('admin/advanced-elements')?>" class="nav-link">Advanced Elements</a>
                           </li>
                           <li class="nav-item">
                              <a href="<?=base_url('admin/editors')?>" class="nav-link">Editors</a>
                           </li>
                           <li class="nav-item">
                              <a href="<?=base_url('admin/wizard')?>" class="nav-link">Wizard</a>
                           </li>
                        </ul>
                     </div>
                  </li>
                 


                  <li class="nav-item">
                     <a class="nav-link" data-bs-toggle="collapse" href="#tables" role="button" aria-expanded="false" aria-controls="tables"><i class="link-icon" data-feather="layout"></i><span class="link-title">Table</span><i class="link-arrow" data-feather="chevron-down"></i></a>
                     <div class="collapse" id="tables">
                        <ul class="nav sub-menu">
                           <li class="nav-item">
                              <a href="<?=base_url('admin/basic-table')?>" class="nav-link">Basic Tables</a></li>

                           <li class="nav-item">
                              <a href="<?=base_url('admin/data-table')?>" class="nav-link">Data Table</a></li>

                        </ul>
                     </div>
                  </li> -->
                  
                 
                  
                  
                  
                 
                  
               </ul>
            </div>
         </nav>

<!-- 
          <nav class="settings-sidebar">
            <div class="sidebar-body">
               <a href="#" class="settings-sidebar-toggler"><i data-feather="settings"></i></a>
               <div class="theme-wrapper">
                  <h6 class="text-muted mb-2">Light Theme:</h6>
                  <a class="theme-item" href="#">
                     <img src="<?=base_url()?>assets-orrish/images/screenshots/light.jpg" alt="light theme"></a>
                  <h6 class="text-muted mb-2">Dark Theme:</h6>
                  <a class="theme-item active" href="#">
                     <img src="<?=base_url()?>assets-orrish/images/screenshots/dark.jpg" alt="light theme"></a>
               </div>
            </div>
         </nav> -->

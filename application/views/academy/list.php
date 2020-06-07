<div class="header-for-bg">
            <div class="background-header position-relative">
               <img src="<?php echo base_url()  ?>assets/images/page-img/profile-bg7.jpg" class="img-fluid w-100 rounded rounded" alt="header-bg">
               <div class="title-on-header">
                  <div class="data-block">
                     <h2>Tunivisions Academy</h2>
                  </div>
               </div>
            </div>
         </div>
<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                 <?php                          
                                 
  
                                 foreach ($Fromations as $key ) { ?> 
                  <div class="col-md-6 col-lg-4">
                     <div class="iq-card">
                        <div class="top-bg-image">
                           <img src="<?php echo base_url()?>uploads/Academy/<?php echo $key->affiche  ?>" class="img-fluid w-100" alt="group-bg">
                        </div>
                        <div class="iq-card-body text-center">
                           <div class="group-icon">
                              <img src="<?php echo base_url()?>uploads/avatar/<?php echo $key->avatar  ?>" alt="profile-img" class="rounded-circle img-fluid avatar-120">
                           </div>
                           <div class="group-info pt-3 pb-3">
                              <h4><?php echo $key->label  ?></h4>
                              <p><?php echo $key->description  ?></p>
                           </div>
                           <div class="group-details d-inline-block pb-3">
                              <ul class="d-flex align-items-center justify-content-between list-inline m-0 p-0">
                                 <li class="pl-3 pr-3">
                                    <p class="mb-0">Certification</p>
                                    <h6>320</h6>
                                 </li>
                                 <li class="pl-3 pr-3">
                                    <p class="mb-0">Visite</p>
                                    <h6>1.2k</h6>
                                 </li>
                              </ul>
                           </div>
                           <!--
                           <div class="group-member mb-3">
                              <div class="iq-media-group">
                                 <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg" alt="">
                                 </a>
                                 <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg" alt="">
                                 </a>
                                 <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-40 rounded-circle" src="images/user/07.jpg" alt="">
                                 </a>
                                 <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-40 rounded-circle" src="images/user/08.jpg" alt="">
                                 </a>
                                 <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-40 rounded-circle" src="images/user/09.jpg" alt="">
                                 </a>
                                 <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-40 rounded-circle" src="images/user/10.jpg" alt="">
                                 </a>
                              </div>
                           </div>
                           -->
                           <button type="submit" class="btn btn-primary d-block w-100">Join</button>
                        </div>
                     </div>
                  </div>


                  <?php  } ?> 
                  
                  
               </div>
            </div>
         </div>



        
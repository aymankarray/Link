<div class="header-for-bg">
            <div class="background-header position-relative">
               <img src="<?php echo base_url()  ?>assets/images/page-img/profile-bg8.jpg" class="img-fluid w-100 rounded rounded" alt="header-bg">
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
                  

                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Charte & JD</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <a href="#"> </a>
                           </div>
                        </div>
						<div class="iq-card-body">
                           <ul id="JD" class="d-flex list-inline m-0 p-0">
                              
                              <?php if (count($Fromations) < 6  ){ 
                              
                                 
  
                                 foreach ($Fromations as $key ) { ?>
                           
                              <li class="text-center col-sm-2">
                                 <div class="music-thumbnail position-relative mb-3">
                                    <a href="#"><img src="<?php echo base_url()  ?>uploads/Academy/<?php echo 
                                    $key->affiche ?>" alt="music-thumb" class="img-fluid w-100"></a>
                                    <div class="play-btn">
                                       <a href="#"><i class="ri-play-fill text-white"></i></a>
                                    </div>
                                 </div>
                                 <h6><?php echo $key->label  ?></h6>
                                 <p class="mb-0"> <?php echo xTimeAgo($key->createdDTM,date('Y-m-d H:i:s')) ; ?> </p>
                              </li>
                              
                              <?php   }
                                       } ?>
                             
                           </ul>
                        </div>



                     </div>
                  </div>
                  

               </div>
            </div>
         </div>


        
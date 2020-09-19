<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                    <form action="<?php echo base_url() ?>Passation/addNewPassation" id="fp" method="post"  >
                     <div class="iq-card">

                      
                        <div class="iq-card-header d-flex justify-content-between">

                           <div class="iq-header-title">
                              <h4 class="card-title">Dossier de passation </h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown show">
                                
                                 
                              </div>
                           </div>
                        </div>

                        <div class="iq-card-body">
                           <div class="table-responsive">
                              
                   
                        

            
                          <div class="row" >

                            <div class="col-sm-6">

                            <h4 class="text-primary"  ><br>Experience Tunivisions :</h4>
                            <small class="text-muted ">On va prendre une copie de votre profile comme étant un cv merci de le <a data-toggle="modal" data-target="#experience"   class="text-primary "  > mettre à jour </a> <br> </small>
                              <?php foreach ($Experience as $key) {   ?>
                                               <div class="col-sm-12">
                                                  <div class="event-post position-relative">

                                                     <div class="iq-card-body  p-2">
                                                        <h6>
                                                           <i class="ri-briefcase-line"></i>  <b><?php echo $key->role   ?></b> <?php echo $key->cellule ?> chez <a class="text-primary" href="<?php echo base_url() ?>club/clubInfo/<?php echo  $key->clubId ?>"  >
                                                          <?php if($key->clubId > 3) { echo 'Club' ; }  ?>    
                                                          Tunivisions     
                                                         <?php echo $key->ClubName   ?></a> 
                                                        <?php if ( $key->Approuve == 0 ) {   ?>
                                                           <i class="ri-checkbox-circle-fill" style="color:#05BD53 "></i> 
                                                        <?php } ?> 
                                                     </h6>
                                                        <p><?php echo $key->attacheDT?>  - <?php echo $key->endDT   ?></p>
                                                     </div>
                                                  </div>
                                               </div>
                              <?php }  ?>

                              <hr>

                            <h4 class="text-primary" ><br>Autres activités associatives :</h4>
                            <small class="text-muted ">On va prendre une copie de votre profile comme étant un cv merci de le  <a data-toggle="modal" data-target="#ExperienceA" class="text-primary " > mettre à jour </a> <br> </small>
                               <?php foreach ($ExperienceA as $key) {   ?>
                                                <div class="col-sm-12">
                                                   <div class="event-post position-relative">
                                                      <div class="iq-card-body  p-2">
                                                         <h6>
                                                            <i class="ri-briefcase-line"></i> <b><?php echo $key->role  ?></b> à <a class="text-primary" ><?php echo $key->association  ?> </a>
                                                             
                                                         </h6>
                                                         <p>de <?php echo $key->debut?> à <?php echo $key->fin  ?></p>
                                                      </div>

                                                   </div>
                                                </div>
                               <?php }  ?>

                               <hr>

                            <h4 class="text-primary" ><br>Diplomes :</h4>
                            <small class="text-muted ">On va prendre une copie de votre profile comme étant un cv merci de le <a data-toggle="modal" data-target="#diplome"  class="text-primary " > mettre à jour </a> <br> </small>
                               <?php foreach ($Diplome as $key) {   ?>
                                                <div class="col-sm-12">
                                                   <div class="event-post position-relative">
                                                      <div class="iq-card-body  p-2">
                                                         <h6>
                                                            <i class="ri-briefcase-line"></i> <b><?php echo $key->type  ?></b> <?php echo $key->titre ?> à <a class="text-primary" ><?php echo $key->instituts  ?> </a>
                                                             
                                                         </h6>
                                                         <p>de <?php echo $key->dateDebut?> à <?php echo $key->dateFin  ?></p>
                                                      </div>

                                                   </div>
                                                </div>
                               <?php }  ?>


                            

                               <hr>

                            <h4 class="text-primary" ><br>Activités professionelle :</h4>
                            <small class="text-muted ">On va prendre une copie de votre profile comme étant un cv merci de le  <a data-toggle="modal" data-target="#experiencePro" class="text-primary " > mettre à jour </a> <br> </small>
                               <?php foreach ($ExperienceP as $key) {   ?>
                                                <div class="col-sm-12">
                                                   <div class="event-post position-relative">
                                                      <div class="iq-card-body  p-2">
                                                         <h6>
                                                            <i class="ri-briefcase-line"></i> <b><?php echo $key->poste   ?></b> <?php echo $key->departement ?> chez <a class="text-primary" ><?php echo $key->ste  ?> </a>
                                                             
                                                         </h6>
                                                         <p>de <?php echo $key->debut?> à <?php echo $key->fin  ?></p>
                                                      </div>

                                                   </div>
                                                </div>
                               <?php }  ?>


                            <hr>

                            <h4 class="text-primary" ><br>Langues :</h4>
                            <small class="text-muted ">On va prendre une copie de votre profile comme étant un cv merci de le  <a data-toggle="modal" data-target="#langue" class="text-primary " > mettre à jour </a> <br> </small>
                               <?php foreach ($Langue as $key) {   ?>
                                                <div class="col-sm-12">
                                                   <div class="event-post position-relative">
                                                      <div class="iq-card-body  p-2">
                                                        <b><?php echo $key->nom   ?>  : </b>
                                                        <div class="progress mb-3">
                                                             <div class="progress-bar" role="progressbar" style="width:  <?php echo $key->niveau ?>%" aria-valuenow="<?php echo $key->niveau ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                         
                                                      </div>

                                                   </div>
                                                </div>
                               <?php }  ?>



                               <hr>

                            <h4 class="text-primary" ><br>hard Skills :</h4>
                            <small class="text-muted ">On va prendre une copie de votre profile comme étant un cv merci de le  <a data-toggle="modal" data-target="#hard" class="text-primary " > mettre à jour </a> <br> </small>
                               <?php foreach ($skils as $key) {   ?>
                                                <div class="col-sm-12">
                                                   <div class="event-post position-relative">
                                                      <div class="iq-card-body  p-2">
                                                        <b><?php echo $key->nom   ?>  : </b>
                                                        <div class="progress mb-3">
                                                             <div class="progress-bar" role="progressbar" style="width: <?php echo $key->niveau ?>%" aria-valuenow="<?php echo $key->niveau   ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                         
                                                      </div>

                                                   </div>
                                                </div>
                               <?php }  ?>






                            </div>
                            
                            <div class="col-sm-6" style="height:834px ;overflow:auto;">
                             <h4 class="text-primary" ><br>Formations</h4>
                              <?php foreach ($ressourceInfo as $key) {   ?>
                                          
                                          <div class="timeline-dots"></div>
                                          <h6 class="float-left mb-1"> 
                                             <?php echo $key->titre   ?>  <a class="text-primary"> (<?php echo $key->score?>  points ) </a>
                                          </h6>
                                          <small class="float-right mt-1">
                                            le <?php echo $key->startDate?> 
                                          </small>
                                          <div class="d-inline-block w-100">
                                             <p>

                                             </p>
                                          </div>
                                          
                                <?php }   ?>
                            </div>
                           


                            <div class="col-sm-12">
                              <h4 ><br>lettre de motivation :</h4>
                              <?php echo $passation->LM ?>
                            </div>




                            <div class="col-sm-12">
                              <h4><br>Plan d'action :</h4>
                              <p>
                                <?php echo $passation->PA ?>
                              </p>
                            </div>


                          </div>

                        

                        <br>

                              
                           </div>
                        </div>
                     </div>
                     </form>
                  </div>
               </div>















<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Declation du projet</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown show">
                                
                                 
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <?php $this->load->helper("form"); ?>
                    <form role="form"  id="addproject" action="<?php echo base_url() ?>Club/addNewPassation" method="post" role="form"  enctype="multipart/form-data">
                        

              
                          <div class="row" >
                            
                            <div class="col-sm-6">
                            <h4>
                              <br>Poste actuelle : 
                            </h4>
                            
                              <?php echo $role_text ?>
                                                    
                            </div>
                            <div class="col-sm-6">
                            <h4>
                             <br>Cellule actuelle :
                            </h4>
                           
                              <?php echo $cellule ?>
                                                        
                            </div>
                          </div>
                          <div class="row" >
                            <div class="col-sm-6">
                            <h4>
                              <br>Je veux postulé pour le poste de 
                            </h4>
                            <select name=""   class="form-control" >
                              <option value="1" >Président(e)</option>
                              <option value="2" >Vice Président(e)</option>
                              <option value="6" >Assistant(e)</option>
                            </select>                            
                            </div>
                            <div class="col-sm-6">
                            <h4>
                              <br> cellule
                            </h4>
                            <select name="cellule" id="cellule"  class="form-control" >
                                             <option value="-1" >Veuillez choisir votre unité </option>
                                             <option value="" ></option>
                                             <option value="Marketing" >Marketing</option>
                                             <option value="Administration et finance" >Administration et finance</option>
                                             <option value="Evenementiel" >Evenementiel</option>
                                             <option value="Gestion des talents" >Gestion des talents</option>
                            </select>                            
                            </div>
                          </div>
                          <div class="row" >

                            <div class="col-sm-6">

                            <h4><br>Experience Tunivisions :</h4>
                            <small class="text-muted ">On va prendre une copie de votre profile comme étant un cv merci de le <a href="<?php echo base_url() ?>User/CarierShow/<?php echo $uid ?>"> mettre à jour </a> <br> </small>
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

                              <h4><br>Diplomes :</h4>
                            <small class="text-muted ">On va prendre une copie de votre profile comme étant un cv merci de le <a href="<?php echo base_url() ?>User/CarierShow/<?php echo $uid ?>"> mettre à jour </a> <br> </small>
                               <?php foreach ($Diplome as $key) {   ?>
                                                <div class="col-sm-12">
                                                   <div class="event-post position-relative">
                                                      <div class="iq-card-body  p-2">
                                                         <h6>
                                                            <i class="ri-briefcase-line"></i> <b><?php echo $key->type  ?></b> <?php echo $key->titre ?> à <a class="text-primary" ><?php echo $key->instituts  ?> </a>
                                                             
                                                         </h6>
                                                         <p><?php echo $key->dateDebut?> - <?php echo $key->dateFin  ?></p>
                                                      </div>

                                                   </div>
                                                </div>
                               <?php }  ?>
                            </div>
                            
                            <div class="col-sm-6">
                             <h4 >Formations</h4>
                              <?php foreach ($ressourceInfo as $key) {   ?>
                                          
                                          <div class="timeline-dots"></div>
                                          <h6 class="float-left mb-1"> 
                                             <?php echo $key->titre   ?>  <a> (<?php echo $key->score?>  points ) </a>
                                          </h6>
                                          <small class="float-right mt-1">
                                             <?php echo $key->startDate?> 
                                          </small>
                                          <div class="d-inline-block w-100">
                                             <p>

                                             </p>
                                          </div>
                                          
                                <?php }   ?>
                            </div>
                           



                            <div class="col-sm-6">
                            <h4><br>Autres activités associatives  :</h4>
                            <textarea rows="5"  class="form-control" ></textarea>
                            </div>

                            <div class="col-sm-6">
                            <h4><br>Autres activités associatives  :</h4>
                            <textarea rows="5"  class="form-control" ></textarea>
                            </div>



                            <div class="col-sm-12">
                            <h4><br>Plan d'action :</h4>
                            <textarea rows="10"  class="form-control" ></textarea>
                            </div>


                          </div>

                          <div>
                            
                          </div>

                    
                            
                          

                            
                            
                           

                           
         
                        
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Envoyer" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                            <br>
                            <br>
                        </div>
                    </form>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>


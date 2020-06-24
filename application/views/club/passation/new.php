<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
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
                            <select name=""   class="form-control" required >
                              <option value="1" >Président(e)</option>
                   <!--           <option value="2" >Vice Président(e)</option>
                              <option value="6" >Assistant(e)</option> -->
                            </select>                            
                            </div>
                            <div class="col-sm-6">
                            <h4>
                              <br> cellule
                            </h4>
                            <select name="cellule"  class="form-control" required style="display: none;" >
                                             <option value="" >Veuillez choisir votre unité </option>
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
                            <h4><br>Autres activités associatives :</h4>
                            <small class="text-muted ">On va prendre une copie de votre profile comme étant un cv merci de le  <a data-toggle="modal" data-target="#ExperienceA" class="text-primary " > mettre à jour </a> <br> </small>
                               <?php foreach ($ExperienceA as $key) {   ?>
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



                              <h4><br>Diplomes :</h4>
                            <small class="text-muted ">On va prendre une copie de votre profile comme étant un cv merci de le <a data-toggle="modal" data-target="#diplome"  class="text-primary " > mettre à jour </a> <br> </small>
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


                            



                            <h4><br>Activités professionelle :</h4>
                            <small class="text-muted ">On va prendre une copie de votre profile comme étant un cv merci de le  <a data-toggle="modal" data-target="#experiencePro" class="text-primary " > mettre à jour </a> <br> </small>
                               <?php foreach ($ExperienceP as $key) {   ?>
                                                <div class="col-sm-12">
                                                   <div class="event-post position-relative">
                                                      <div class="iq-card-body  p-2">
                                                         <h6>
                                                            <i class="ri-briefcase-line"></i> <b><?php echo $key->poste   ?></b> <?php echo $key->departement ?> chez <a class="text-primary" ><?php echo $key->ste  ?> </a>
                                                             
                                                         </h6>
                                                         <p><?php echo $key->debut?> - <?php echo $key->fin  ?></p>
                                                      </div>

                                                   </div>
                                                </div>
                               <?php }  ?>






                            </div>
                            
                            <div class="col-sm-6" style="height:834px ;overflow:auto;">
                             <h4 ><br>Formations</h4>
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
                           


                            <div class="col-sm-12">
                              <h4><br>lettre de motivation :</h4>
                              <textarea rows="10"  class="form-control" required ></textarea>
                            </div>


                          </div>

                          <div>
                            
                          </div>

                        <br>
    
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


               <!--  experience   -->
         <div class="modal fade" id="experience" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <form action="<?php echo base_url() ?>Cariere/CarierAdd1" method="post">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Nouvelle experience</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <div class="modal-body">

                        <label>Debut</label>
                        <input type="number"  name="attacheDT" id="attacheDT"  class="form-control" min="2016" max="2020" required>
                        <label>Fin</label>
                        <input type="number" min="2017" max="2020"   name="endDT" id="endDT" class="form-control"  required>
                     
               
                        <label>Poste</label>
                        <select name="roleId" id="roleId"  class="form-control" required >
                           <option value="-1" >Veuillez choisir votre poste </option>
                           <?php foreach ($Roles as $key ) {
                            echo "<option value='".$key->roleId."'>".$key->role."</option>" ; 
                           }?>
                        </select>
                        <br>
                        <label>Cellule</label>
                        <select name="cellule" id="cellule"  class="form-control" >
                           <option value="" ></option>
                           <option value="Marketing" >Marketing</option>
                           <option value="Administration et finance" >Administration et finance</option>
                           <option value="Evenementiel" >Evenementiel</option>
                           <option value="Gestion des talents" >Gestion des talents</option>
                        </select>
                        <br>
                        <label>Club</label>
                        <select name="clubId" id="clubId"   class="form-control" required >
                           <option value="-1" >Veuillez choisir votre club </option>
                           <?php foreach ($Clubs as $key ) {
                            echo "<option value='".$key->clubID."'>".$key->name."</option>" ;  
                           }?>
                        </select>


                     
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <input id="TF" type="submit"  class="btn btn-primary">
                  </div>
                  </form>
               </div>
            </div>
         </div>
      <!-- -->



               <!-- Autre experience   -->
         <div class="modal fade" id="ExperienceA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <form action="<?php echo base_url() ?>Cariere/CarierAddA1" method="post">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Autre activité associative</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <div class="modal-body">

                        <label>Debut</label>
                        <input type="number"  name="debut" id="debut"  class="form-control" min="2010" max="2020" required>
                        <label>Fin</label>
                        <input type="number" min="2010" max="2020"   name="end" id="end" class="form-control"  required>
                     
               
                        <label>Poste</label>
                        <select name="role" id="role"  class="form-control" required >
                           <option>Membre</option>
                           <option>Responsable</option>
                           <option>Vice Président</option>
                           <option>Président</option>
                        </select>
                        
                        <br>
                        <label>association</label>
                        <input name="association" id="association"  class="form-control" >

                        


                     
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <input id="TF" type="submit"  class="btn btn-primary">
                  </div>
                  </form>
               </div>
            </div>
         </div>
      <!-- -->




      <!--  diplome   -->
         <div class="modal fade" id="diplome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <form  method="post" action="<?php echo base_url() ?>Cariere/DiplomeAdd1" >
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Ajouter un diplome</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <div class="modal-body">

                        <label>Debut</label>
                        <input type="number"  name="dateDebut" id="dateDebut"  class="form-control" min="2010" max="2020" required>
                        <label>Fin</label>
                        <input type="number" min="2010" max="2020" name="dateFin" id="dateFin" class="form-control"  required>
                     
               
                        <label>Type de diplome : </label>
                        <select name="type" id="type"  class="form-control" required >
                           <option value="" >Veuillez choisir votre poste </option>
                           <option value="Licence appliquée" >Licence appliquée</option>
                           <option value="Licence fondamentale" >Licence fondamentale</option>
                           <option value="Master professionnel" >Master professionnel</option>
                           <option value="Master de recherche" >Master de recherche</option>
                           <option value="Ingénierie" >Ingénierie</option>
                        </select>
                        <br>
                        <label>Titre : </label>
                        <input type="text"   class="form-control" name="titre" >
                        <br>
                        <label>Ecole : </label>
                        <select name="institut" id="institut"   class="form-control" required >
                           <option value="-1" >Veuillez choisir votre école </option>
                           <?php foreach ($Clubs as $key ) {
                            echo "<option value='".$key->clubID."'>".$key->name."</option>" ;  
                           }?>
                        </select>


                     
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <input id="TF" type="submit"  class="btn btn-primary">
                  </div>
                  </form>
               </div>
            </div>
         </div>
      <!-- -->





      <!--  Exp pro   -->
         <div class="modal fade" id="experiencePro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <form  method="post" action="<?php echo base_url() ?>Cariere/experiencePro" >
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">ajouter une experience professionelle</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <div class="modal-body">

                        <label>Debut</label>
                        <input type="number"  name="debut" id="debut"  class="form-control"  max="2020" required>
                        <label>Fin</label>
                        <input type="number"  name="fin" id="fin" class="form-control"  required>

                        <label>Société : </label>
                        <input type="text"   class="form-control" name="ste" >
                        <br>
                        <label>Domaine : </label>
                        <select name="steDomain" id="steDomain"   class="form-control" required >
                           <option value="Informatique" >Informatique</option>
                        </select>
               
                        <label>Poste : </label>
                        <input type="text" name="poste" id="poste"  class="form-control" required >
                        <br>
                        <label>Departement : </label>
                        <input type="text" name="departement" id="departement"  class="form-control" required >
                        <br>
                        


                     
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <input id="TF" type="submit"  class="btn btn-primary">
                  </div>
                  </form>
               </div>
            </div>
         </div>
      <!-- -->









          <script type="text/javascript">
          $( document ).ready( function()
          {
              var roleId = $( '#roleId' );
              
              var clubId = $( '#clubId' );
              var institut = $( '#institut' );
              var institut = $( '#type' );

              
             $('#roleId').select2();
           
             $('#clubId').select2();
             $('#type').select2();
             $('#institut').select2();

         });

   </script>
<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                    <form action="<?php echo base_url() ?>Passation/addNewPassation/3" id="fp" method="post"  >
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
                              <h4>Nom</h4>
                              <input type="text" name="nom" class="form-control" required>            
                            </div>
                            <div class="col-sm-6">
                              <h4>Prenom</h4>
                              <input type="text" name="prenom" class="form-control" required>              
                            </div>
                            <div class="col-sm-12">
                              <h4>Adresse</h4>
                              <textarea type="text" name="adresse" class="form-control" required ></textarea>              
                            </div>
                            <div class="col-md-6">                                
                                <div class="form-group">
                                
                                            <select class="form-control" name="gouvernorat" id="gouvernorat" required >
                                                <option value="">-- Gouvernorat --</option>
                                            </select>


                                </div>
                            </div>
                            <div class="col-md-6">                                
                                <div class="form-group">
                              
                                            <select class="form-control" name="delegation" id="delegation" required >
                                                <option value="">-- Delegation --</option>
                                             </select>

                                </div>
                            </div>  
                          </div>
              
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
                              <br>Je veux postuler pour le poste de 
                            </h4>
                            <select name="roleId"   class="form-control" required >
                              <option value="" >>Veuillez choisir votre poste</option>
                              <option value="2" >Coordinateur</option>

                            </select>                            
                            </div>
                            <div class="col-sm-6">
                              <!--
                            <h4>
                              <br> cellule
                            </h4>
                            <select name="cellule"  class="form-control" required  >
                                             <option value="" >Veuillez choisir votre cellule</option>
                                             <option value="Marketing" >Marketing</option>
                                             <option value="Administration et finance" >Administration et finance</option>
                                             <option value="Evenementiel" >Evenementiel</option>
                                             <option value="Gestion des talents" >Gestion des talents</option>
                                             <option value=" " > Président </option>
                            </select>                            
                            </div>
                            -->
                          </div>
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
                           


                            <div class="col-sm-6">
                              <h4 ><br>lettre de motivation :</h4>
                              <textarea rows="20"  class="form-control" name="LM" required ></textarea>
                            </div>




                            <div class="col-sm-6">
                              <h4><br>Plan d'action :</h4>
                              <textarea rows="20"  class="form-control" name="PA" required ></textarea>
                            </div>


                          </div>

                        

                        <br>
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Envoyer"  />
                            <input type="reset" class="btn btn-default" value="Reset" />
                            <br>
                            <br>
                        </div>
                    
                              
                           </div>
                        </div>
                     </div>
                     </form>
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
                        <br>
                     
               
                        <label>Poste</label>
                        <select name="roleId" id="roleId"  class="form-control" required >
                           <option value="" >Veuillez choisir votre poste </option>
                                    <option value="1" >Président </option>
                                    <option value="3" >Vice Président </option>
                                    <option value="5" >Membre </option>
                                    <option value="7" >Manager (Bureau national) </option>
                                    <option value="6" >Assistant (Bureau national) </option>
                              </select>
                                   
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
                        <input type="number"  max="2020"   name="fin" id="fin" class="form-control"  required>
                        <small class="text-muted">0000 si vous occupez ce poste actuellement</small><br>
               
                        <label>Poste</label>
                        <select name="role" id="role"  class="form-control" required >
                           <option>Membre</option>
                           <option>Responsable</option>
                           <option>Vice Président</option>
                           <option>Président</option>
                        </select>
                        
                        <br>
                        <label>association</label>
                        <input name="association" id="association"  class="form-control" required >

                        


                     
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
                        <input type="number"   name="dateFin" id="dateFin" class="form-control"  required>
                        <small class="text-muted">0000 si vous occupez ce poste actuellement</small><br>
               
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
                        <input type="text"   class="form-control" name="titre" required >
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
                        <input type="number" min="2010" min="2020"  name="fin" id="fin" class="form-control"  required>
                        


                        <label>Société : </label>
                        <input type="text"   class="form-control" name="ste" >
                        <br>
                        <label>Domaine : </label>
                        <select name="steDomain" id="steDomain"   class="form-control" >
                           <option value="Informatique" >Informatique</option>
                           <option value="Santé" >Santé</option>
                           <option value="Evenmentiel" >Evenmentiel</option>
                           <option value="Marketing" >Marketing</option>
                           <option value="Comerciale" >Comerciale</option>
                           <option value="Toursime" >Toursime</option>
                           <option value="Agriculture" >Agriculture</option>
                           <option value="Communication" >Communication</option>
                           <option value="Media" >Media</option>
                           <option value="Juridique" >Juridique</option>
                        </select>
               
                        <label>Poste : </label>
                        <input type="text" name="poste" id="poste"  class="form-control" required >
                        <br>
                        <label>Departement : </label>
                        <input type="text" name="departement" id="departement"  class="form-control"  >
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



      <!--  Lang   -->
         <div class="modal fade" id="langue" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <form  method="post" action="<?php echo base_url() ?>Cariere/lang" >
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">ajouter une langue</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <div class="modal-body">

                        <label>Langue : </label>
                        <select data-placeholder="Choisissez une langue ... " id="lang" name="nom" >
                            <option value="Afrikaans">Afrikaans</option>
                            <option value="Albanian">Albanian</option>
                            <option value="Arabic">Arabic</option>
                            <option value="Armenian">Armenian</option>
                            <option value="Basque">Basque</option>
                            <option value="Bengali">Bengali</option>
                            <option value="Bulgarian">Bulgarian</option>
                            <option value="Catalan">Catalan</option>
                            <option value="Cambodian">Cambodian</option>
                            <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                            <option value="Croatian">Croatian</option>
                            <option value="Czech">Czech</option>
                            <option value="Danish">Danish</option>
                            <option value="Dutch">Dutch</option>
                            <option value="English">English</option>
                            <option value="Estonian">Estonian</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finnish">Finnish</option>
                            <option value="French">French</option>
                            <option value="Georgian">Georgian</option>
                            <option value="German">German</option>
                            <option value="Greek">Greek</option>
                            <option value="Gujarati">Gujarati</option>
                            <option value="Hebrew">Hebrew</option>
                            <option value="Hindi">Hindi</option>
                            <option value="Hungarian">Hungarian</option>
                            <option value="Icelandic">Icelandic</option>
                            <option value="Indonesian">Indonesian</option>
                            <option value="Irish">Irish</option>
                            <option value="Italian">Italian</option>
                            <option value="Japanese">Japanese</option>
                            <option value="Javanese">Javanese</option>
                            <option value="Korean">Korean</option>
                            <option value="Latin">Latin</option>
                            <option value="Latvian">Latvian</option>
                            <option value="Lithuanian">Lithuanian</option>
                            <option value="Macedonian">Macedonian</option>
                            <option value="Malay">Malay</option>
                            <option value="Malayalam">Malayalam</option>
                            <option value="Maltese">Maltese</option>
                            <option value="Maori">Maori</option>
                            <option value="Marathi">Marathi</option>
                            <option value="Mongolian">Mongolian</option>
                            <option value="Nepali">Nepali</option>
                            <option value="Norwegian">Norwegian</option>
                            <option value="Persian">Persian</option>
                            <option value="Polish">Polish</option>
                            <option value="Portuguese">Portuguese</option>
                            <option value="Punjabi">Punjabi</option>
                            <option value="Quechua">Quechua</option>
                            <option value="Romanian">Romanian</option>
                            <option value="Russian">Russian</option>
                            <option value="Samoan">Samoan</option>
                            <option value="Serbian">Serbian</option>
                            <option value="Slovak">Slovak</option>
                            <option value="Slovenian">Slovenian</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Swahili">Swahili</option>
                            <option value="Swedish ">Swedish </option>
                            <option value="Tamil">Tamil</option>
                            <option value="Tatar">Tatar</option>
                            <option value="Telugu">Telugu</option>
                            <option value="Thai">Thai</option>
                            <option value="Tibetan">Tibetan</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Turkish">Turkish</option>
                            <option value="Ukrainian">Ukrainian</option>
                            <option value="Urdu">Urdu</option>
                            <option value="Uzbek">Uzbek</option>
                            <option value="Vietnamese">Vietnamese</option>
                            <option value="Welsh">Welsh</option>
                            <option value="Xhosa">Xhosa</option>
                          </select>
                        <label>Niveau : </label>
                        <input type="range" name="niveau" min="0" max="100" class="form-control">


                     
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



      <!--  Skils   -->
         <div class="modal fade" id="hard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <form  method="post" action="<?php echo base_url() ?>Cariere/hard" >
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">ajouter Hard Skils</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <div class="modal-body">

                        <label>Hard skils : </label>
                        <input type="text" name="nom" class="form-control" >
                        <label>Niveau : </label>
                        <input type="range" name="niveau" min="0" max="100" class="form-control">


                     
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
              var lang = $( '#lang' );
              
             $('#roleId').select2();
             $('#lang').select2();
             $('#clubId').select2();
             $('#type').select2();
             $('#institut').select2();

         });

   </script>


   <script type="text/javascript">
          $( document ).ready( function()
          {
              var json ;
              var gouvernorat = $( '#gouvernorat' );
              var delegation = $( '#delegation' );
              
             $('#gouvernorat').select2();
             $('#delegation').select2();

              var d = $.ajax({
              url: '<?php echo base_url(); ?>assets/json/tunisia.json',
              type: "GET",
              dataType: 'json',
              success: function (data) {
                  console.log(data);
                     $.each( data , function (index, value)
                  {
                  gouvernorat.append('<option value="' + index + '">' +  index  + '</option>');
                  });

                  gouvernorat.change( function()
                  {
                  var gouv = $(this).val();
                  var deleg = data[ gouv ];

                  $('option', delegation).remove();
                  delegation.append('<option value="">-- Delegation --</option>');

                  $.each( deleg, function (index, value)
                  {
                  delegation.append('<option value="' + value['cp'] + ' - ' +  value['localite'] + ' - ' + value['delegation'] + '">' + value['cp'] + ' - ' +  value['localite'] + ' - ' + value['delegation'] + '</option>');
                  });
                  });    

              } 
              });



                  
              });
          </script>

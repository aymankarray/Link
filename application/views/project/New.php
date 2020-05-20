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
                    <form role="form"  id="addproject" action="<?php echo base_url() ?>Project/addNewP" method="post" role="form"  enctype="multipart/form-data">
                        


                           

                    
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Banner</label>
                                        <br>
                                       
                                            <input type="file" name="file" id="file" class="dropify" required/>
                                       
                                         
                                        <br>  
                                       
                                       <p >le format de fichier doit etre JPG ou JPEG avec une taile maximale de 500 ko </p>
                                      <p id="error1" style="display:none; color:#FF0000;">
                                          Format d'image invalide! Le format d'image doit être JPG, JPEG.
                                          </p>
                                          <p id="error2" style="display:none; color:#FF0000;">
                                          La taille maximale du fichier est de 500 ko.
                                          </p>
                                    </div>

                                    <script type="text/javascript">
                                          $('#submitt').prop("disabled", true);
                                            var a=0;
                                            //binds to onchange event of your input field
                                            $('#file').bind('change', function() {
                                              if ($('input:submit').attr('disabled',false)){
                                                 $('input:submit').attr('disabled',true);
                                                 }
                                                var ext = $('#file').val().split('.').pop().toLowerCase();
                                                if ($.inArray(ext, ['jpg','jpeg']) == -1){
                                                   $('#error1').slideDown("slow");
                                                   $('#error2').slideUp("slow");
                                                   a=0;
                                                 }else{
                                                   var picsize = (this.files[0].size);
                                                   if (picsize > 500000){
                                                   $('#error2').slideDown("slow");
                                                 a=0;
                                                 }else{
                                                 a=1;
                                                    $('#error2').slideUp("slow");
                                                 }
                                                    $('#error1').slideUp("slow");
                                                 if (a==1){
                                                 $('input:submit').attr('disabled',false);
                                               }
                                            }
                                        });
                                    </script>
                                    
                                </div>
                            </div>
                            <div class="row"> 
                              <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Cible  &nbsp; &nbsp; <br> </label>
                                        <label class="kt-radio">
                                                <input type="radio" name="cible" id="Publique" value="Publique" required> Publique
                                                <span></span>
                                        </label>
                                        &nbsp;&nbsp;
                                        <label class="kt-radio">
                                                <input type="radio" name="cible" id="prive" value="Privé"> Privé
                                                <span></span>
                                        </label>
                                        &nbsp;&nbsp;
                                        <label class="kt-radio">
                                                <input type="radio" name="cible" id="Only" value="Only tunimateur" > Only tunimateur
                                                <span></span>
                                        </label>

                                        <script type="text/javascript">
                                          $( "#Publique" ).click(function() {
                                              $("#facebook").prop("required", true);
                                            });
                                          $( "#Only" ).click(function() {
                                              $("#facebook").prop("required", true);
                                            });
                                          $( "#prive" ).click(function() {
                                              $("#facebook").prop("required", false);
                                            });
                                        </script>


                                    </div>
                                </div>
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Lien d'évenement facebook : </label>
                                        <input type="url" name="facebook" id="facebook" class="form-control" >
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="fname">Type</label>
                                        <select class="form-control" id="type" name="type" >
                                            <option value="Evenement">Evenement</option>
                                            <option value="Formation">Formation</option>
                                            <option value="Conférence">Conférence</option>
                                            <option value="Action">Action</option>
                                            <option value="Couverture Mediatique">Couverture Mediatique</option>
                                            <option value="Compétition">Compétition</option>
                                            <option value="Soirée">Soirée</option>
                                        </select>
                                    </div>
                                    
                                </div>


                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="fname">Titre</label>
                                        <input type="text" class="form-control required" id="Titre" name="Titre" maxlength="255" required >
                                    </div>
                                    
                                </div>
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Description</label>
                                       <textarea class="form-control" name="description" id="tinymceExample" rows="20" required></textarea>

                                    </div>
                                    
                                </div>
                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Date debut</label>
                                        <!-- min="<?php echo date('Y-m-d').'T00:00' ?>" -->
                                        <input type="datetime-local" class="form-control "    id="debut" name="debut"  required >
                                    </div>
                                </div>

                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Date fin</label>
                                        <!-- min="<?php echo date('Y-m-d').'T00:00' ?>" -->
                                        <input type="datetime-local" class="form-control"    id="fin" name="fin"  required >
                                    </div>
                              </div>
                            

                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Local</label>
                                          <input type="text" class="form-control required" id="local" name="local" maxlength="255" required >      


                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Capacité</label>
                                          <input type="number" class="form-control required" id="capacite" name="capacite"  required >      


                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Prix</label>
                                          <input type="number" class="form-control required" id="prix" name="prix"  required >      


                                    </div>
                                </div>

                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Cellule Marketing</label>
                                            <?php   foreach($members as $record)
                                                    {
                                                        if($record->cellule == 'Marketing')
                                                        {
                                            ?>            

                                                    <div class="form-check form-check-flat form-check-primary">
                                                      <label class="form-check-label">
                                                        <input type="checkbox" name="ressource[]" value="<?php echo   $record->userId ; ?>"  class="form-check-input">
                                                      <?php  echo   $record->name ; ?> 
                                                      </label>
                                                    </div>
                                                    
                                            <?php
                                                     
                                                    }
                                                }
                                            ?> 


                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Cellule Evenementiel</label>
                                               
                                            <?php   foreach($members as $record)
                                                    {
                                                        if($record->cellule == 'Evenementiel')
                                                         {
                                            ?>            

                                                    <div class="form-check form-check-flat form-check-primary">
                                                      <label class="form-check-label">
                                                        <input type="checkbox" name="ressource[]" value="<?php echo   $record->userId ; ?>"  class="form-check-input">
                                                      <?php  echo   $record->name ; ?> 
                                                      </label>
                                                    </div>
                                                    
                                            <?php
                                                     
                                                    }
                                                }
                                            ?>

                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Cellule Administration & Finance</label>
                                               
                                            <?php   foreach($members as $record)
                                                    {
                                                        if($record->cellule == 'Administration et finance')
                                                         {
                                            ?>            

                                                    <div class="form-check form-check-flat form-check-primary">
                                                      <label class="form-check-label">
                                                        <input type="checkbox" name="ressource[]" value="<?php echo   $record->userId ; ?>"  class="form-check-input">
                                                      <?php  echo   $record->name ; ?> 
                                                      </label>
                                                    </div>
                                                    
                                            <?php
                                                     
                                                    }
                                                }
                                            ?>

                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Cellule Gestion des talents</label>
                                               
                                            <?php   foreach($members as $record)
                                                    {
                                                        if($record->cellule == 'Gestion des talents')
                                                        {
                                            ?>            

                                                    <div class="form-check form-check-flat form-check-primary">
                                                      <label class="form-check-label">
                                                        <input type="checkbox" name="ressource[]" value="<?php echo   $record->userId ; ?>"  class="form-check-input">
                                                      <?php  echo   $record->name ; ?> 
                                                      </label>
                                                    </div>
                                                    
                                            <?php
                                                     
                                                    }
                                                }
                                            ?>

                                    </div>
                                </div>
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
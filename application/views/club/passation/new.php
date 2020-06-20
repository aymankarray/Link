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
                        

              <small class="text-muted">On va prendre une copie de votre profile comme étant un cv merci de le mettre à jour <br> </small>
                          <div class="row" >
                            
                            <div class="col-sm-6">
                            <h4>
                              Poste actuelle : 
                            </h4>
                            
                              <?php echo $role_text ?>
                                                    
                            </div>
                            <div class="col-sm-6">
                            <h4>
                              Cellule actuelle :
                            </h4>
                           
                              <?php echo $cellule ?>
                                                        
                            </div>

                            <div class="col-sm-6">
                            <h4>
                              Je veux postulé pour le poste de 
                            </h4>
                            <select name=""   class="form-control" >
                              <option value="1" >Président(e)</option>
                              <option value="2" >Vice Président(e)</option>
                              <option value="6" >Assistant(e)</option>
                            </select>                            
                            </div>
                            <div class="col-sm-6">
                            <h4>
                              cellule
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
                            <div class="col-sm-12">
                            <label>Plan d'action :</label>
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


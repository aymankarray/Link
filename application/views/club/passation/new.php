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
                        


                          <div class="row " >
                            <small class="text-muted">
                              on va prendre une copie de votre profile comme étant un cv merci de le mettre à jour </small>
                            <div class="col-sm-6">
                            <label>
                              Poste actuelle
                            </label>
                            <select name=""  >
                              <option value="" ><?php echo $role ?></option>
                            </select>                            
                            </div>
                            <div class="col-sm-6">
                            <label>
                              Cellule actuelle
                            </label>
                            <select >
                              <option  ><?php echo $cellule ?></option>
                            </select>                            
                            </div>

                            <div class="col-sm-6">
                            <label>
                              Je veux postulé pour le poste de 
                            </label>
                            <select name=""  >
                              <option value="1" >Président(e)</option>
                              <option value="2" >Vice Président(e)</option>
                              <option value="6" >Assistant(e)</option>
                            </select>                            
                            </div>
                            <div class="col-sm-6">
                            <label>
                              cellule
                            </label>
                            <select name="cellule" id="cellule"  class="form-control" >
                                             <option value="-1" >Veuillez choisir votre unité </option>
                                             <option value="" ></option>
                                             <option value="Marketing" >Marketing</option>
                                             <option value="Administration et finance" >Administration et finance</option>
                                             <option value="Evenementiel" >Evenementiel</option>
                                             <option value="Gestion des talents" >Gestion des talents</option>
                            </select>                            
                            </div>

                            <label>Plan d'action :</label>
                            <textarea rows="20" >
                              
                            </textarea>

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


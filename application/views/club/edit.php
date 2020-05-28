<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Modification du club</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown show">
                                
                                 
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <?php $this->load->helper("form"); ?>
                    <form role="form"  id="editClub" action="<?php echo base_url() ?>Clube/edit<?php echo $clubInfo->clubID ?>" method="post" role="form"  enctype="multipart/form-data">
                        


                        <label>Nom</label>
                        <input type="text" name="name" value="<?php echo $clubInfo->name ?>" class="form-control" >
                       
                        <label>Region</label>
                        <input type="text" name="city" value="<?php echo $clubInfo->city ?>" class="form-control" >
                       
                        <label>Date création</label>
                        <input type="date" name="birthday" value="<?php echo $clubInfo->birthday ?>" class="form-control" >
                        
                        <label>facebook</label>
                        <input type="url" name="email" value="<?php echo $clubInfo->email ?>" class="form-control" >
                        
                        <label>email</label>
                        <input type="email" name="facebook" value="<?php echo $clubInfo->facebook ?>" class="form-control" >
                        
                        <label>Actif</label>
                        <select name="is_Actif" class="form-control" >
                          <option value="Actif">Actif</option>
                          <option value="Actif">Inactif</option>
                        </select>


                        <label>Président</label>
                        <select name="President" class="form-control" >
                          <?php foreach ($members as $key ) {?>

                          <option value="<?php echo  $key->userId ?>" > <?php echo  $key->name ?> </option>
                            <?php } ?>
                        </select>


                        <iframe src="https://tunivisions.link/User/ProfileShow/2">
                          
                        </iframe>

                            
                            
                           

                           
         
                        
    
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


<script type="text/javascript">
    
    

</script>
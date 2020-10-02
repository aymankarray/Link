
                              
<section>
    <div class="gap gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row widget-page merged20">
              <div class="col-lg-12 col-md-12 col-sm-6">
                <aside class="sidebar">
                   <div class="widget">
                    <h4 class="widget-title">Modification du club <?php echo $clubInfo->name ?> </h4>
                    <ul class="faved-page">
                     <
                              <?php $this->load->helper("form"); ?>
                    <form role="form"  id="editClub" action="<?php echo base_url() ?>Club/edit/<?php echo $clubInfo->clubID ?>" method="post" role="form"  enctype="multipart/form-data">
                        


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
                          <option value="0">Actif</option>
                          <option value="1">Inactif</option>
                        </select>


                        <label>Président</label>
                        <select name="President" class="form-control" >
                          <?php foreach ($members as $key ) {?>

                          <option value="<?php echo  $key->userId ?>" > <?php echo  $key->name ?> </option>
                            <?php } ?>
                        </select>

                            <input type="submit" class="btn btn-primary" value="Envoyer" />
                            <input type="reset" class="btn btn-secondry" value="Reset" />
                   
                       
                    </form>

                    </ul>
                  </div>
                </aside>
              </div><!-- sidebar -->
            </div>  
          </div>
        </div>
      </div>
    </div>  
  </section> 
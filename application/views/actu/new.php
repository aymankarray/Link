<div id="content-page" class="content-page">
    <div class="container">
                <div class="row" style="background-color: white ">
      <div class="card col-md-12" >
      <?php $this->load->helper("form"); ?>
        <form role="form" id="addproject" action="<?php echo base_url() ?>Actu/addNewA" method="post" role="form"  enctype="multipart/form-data">
        
        <div class="card-header">
          <h4>Ajouter une actualité</h4>
        </div>


        <div class="card-body">

              <label for="fname">image</label>
              <input type="file" class="dropify"  id="fileToUpload" name="fileToUpload" required>
                                    
              <label for="fname">Titre</label>
              <input type="text" class="form-control required" id="titre" name="titre" maxlength="255" required >
              <label for="fname">Description </label>
              <textarea class="form-control" id="summernote" name="description" rows="18">
              </textarea>
              <label for="fname">Embeded Code </label>
              <input type="textarea" class="form-control" id="lien" name="lien"  row="20" >            
                                                      
        </div>
        <div class="card-footer">
             <input type="submit" class="btn btn-primary" value="Envoyer" />
             <input type="reset" class="btn btn-default" value="Reset" />
        </div>
       </form>

        </div>

      </div>
    </div>
</div>
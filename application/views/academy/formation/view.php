         <div id="content-page" class="content-page">
            <div class="container">
               

                <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Tabs Vertical Pills</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility.</p>
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="nav flex-column nav-pills text-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <?php foreach ($chapters as $key ) { ?>
                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#<?php echo $key->chapterId  ; ?>" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <?php echo $key->num  ; ?> - <?php echo $key->titre  ; ?>
                                    </a>
                                    <?php } ?>
                                 </div>
                              </div>
                              <div class="col-sm-9">
                                 <div class="tab-content mt-0" id="v-pills-tabContent">
                                    <?php foreach ($chapters as $key ) { ?>
                                       <div class="tab-pane fade show active" id="<?php echo $key->chapterId  ; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                          <div class="card" style="width: cover">
                                             <div class="card-title"><?php echo $key->titre  ; ?></div>
                                             <div class="iq-card-body"><?php echo $key->embed  ; ?></div>
                                             
                                          </div>
                                          <hr>
                                          <h6>Description</h6>
                                          <p><?php echo $key->description  ; ?></p>
                                       </div>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>




            </div>
         </div>
      </div>
  
                                

                                    

         <div id="content-page" class="content-page">
            <div class="container">
               

                <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"><?php echo $formationInfo->label  ; ?></h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="nav flex-column nav-pills text-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <?php foreach ($chapters as $key ) { ?>
                                    <a class="nav-link <?php  if( $key->chapterId == 1){ ?> active<?php } ?> " id="v-pills-home-tab" data-toggle="pill" href="#Ch<?php echo $key->chapterId  ; ?>" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <?php echo $key->num  ; ?> - <?php echo $key->titre  ; ?>
                                    </a>
                                    <?php } ?>
                                 </div>
                              </div>
                              <div class="col-sm-9">
                                 <div class="tab-content mt-0" id="v-pills-tabContent">
                                    <?php foreach ($chapters as $key ) { ?>
                                       <div class="tab-pane fade <?php  if( $key->chapterId == 1){ ?> show active<?php } ?>" id="Ch<?php echo $key->chapterId  ; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                          <div class="card" style="width: cover">
                                             <div class="card-title"><h4><?php echo $key->titre  ; ?></h4></div>
                                             <div class="iq-card-body">   

                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $key->embed  ; ?>" frameborder="0" allow="" allowfullscreen></iframe>
                                               
                                             
                                                <hr>
                                                <h5>Description</h5>
                                                <p><?php echo $key->description  ; ?></p>
                                             
                                             </div>
                                          
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
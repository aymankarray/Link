<div id="content-page" class="content-page">
            <div class="container">

			<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/mdi/css/materialdesignicons.min.css">
			
			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://127.0.0.1/Tunivisions-Link/assets/vendors/prismjs/themes/prism.css">



        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
          <div>
            <h4 class="mb-3 mb-md-0"> <?php echo $projectInfo->titre ; ?> <small><small> par <b>club Tunivisions <?php echo $projectInfo->ClubName ; ?>  </small></b> <small><small>#<?php echo $projectInfo->projectId ; ?></small></small> </small></h4>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow">

              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Date du projet</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php $date = new DateTime($projectInfo->endDate); echo $date->format('d/m/Y');  ?></h4>              
                      </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Lieu</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo $projectInfo->local;  ?></h4>              
                      </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Participant</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo $projectInfo->capacite;  ?></h4>              
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Déclarer le</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo $projectInfo->createdDate ;  ?></h4>              
                      </div>
                    </div>


                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Type</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo $projectInfo->type  ?></h4>                       
                      </div>
                    </div>
                    <br> 
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">cible</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo $projectInfo->cible  ?></h4>                       
                      </div>
                    </div>

                     <br> 
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">prix</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1"><?php echo $projectInfo->prix  ?> DT</h4>                       
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Evenement Facebook</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        <h4 class="mb-1">
                          <?php  if ( $projectInfo->eventFB !='' ) { ?>
                           <a href="<?php echo $projectInfo->eventFB ; ?>" ><i class="ri-facebook-fill"></i> Aller au facebook </a>
                            <?php }  ?>
                        </h4>                       
                      </div>
                    </div>


                  </div>
                </div>
              </div>
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                      <h6 class="card-title mb-0">Note</h6>
                      <div class="dropdown mb-2">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-md-12 col-xl-12">
                        
                          <div class="row">


                            <?php if ($SA == 1 ) { ?> 
                            <form method="post" action="<?php echo base_url()?>Score_club/noteProject/<?php echo $projectInfo->projectId ; ?>"  >
                         

                            <label> Titre  </label>
                            <select name="titre" class="form-control">
                              <option value="Participation : ">Participation</option>
                              <option value="Organisation : ">Organisation</option>
                            </select> 
                            <label> score </label>
                            <input class="form-control" type="number" name="scoreP" value="<?php echo $scoreClub->sc ?>" >
                            <label> Remarque </label>
                            <textarea class="form-control"  name="remarque"  value="<?php echo $scoreClub->remarque ?>" ></textarea>
                            <label>Badges</label>
                            <select name="badge"  class="form-control" >
                              <?php 
                              foreach ($BadgesRecords as $badge ) 
                              { 
                               ?>
                              <option value="<?php echo $badge->badgeId ?>" > <?php echo $badge->name ?> </option>
                              <?php 
                              }
                               ?>
                            </select>
                            <input type="submit" class="btn btn-primary" >
                            </form>
                          <?php } else { ?>
                            <h6> score </h6>
                            "<?php echo $scoreClub->sc ?>" 
                            <h6> Remarque :  </h6>
                            <?php echo $scoreClub->remarque ?>
                                   <?php 
                                 }
                               ?>

                            

                          </div>
                                             
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             
            </div>
          </div>
        </div> <!-- row -->


       

        <div class="row">
          
        </div> <!-- row -->

        <div class="row">
          
          
        </div> <!-- row -->

        <div class="row">
          <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0"> <?php echo count($resource)?> Membres participants </h6>
                  
                </div>
                <div class="d-flex flex-column">
                  <?php foreach ($resource as $res ) {
                   ?>
                  <a href="#" class="d-flex align-items-center border-bottom pb-3">
                    <div class="mr-3">
                      <img src="<?php echo base_url() ?>uploads/avatar/<?php echo $res->avatar ?>" class="alligator-turtle" alt="user">
                    </div>
                    <div class="w-100">
                      <div class="d-flex justify-content-between">
                        <h6 class="text-body mb-2"><?php echo $res->name ?></h6>
                        <p class="text-muted tx-12">
                        <?php for ($i=0 ; $i <$res->score ; $i++) { 
                        ?>
                         &#9733;
                        <?php
                        }
                        ?></p>
                      </div>
                      <p class="text-muted tx-13"><?php echo '' ?></p>
                    </div>
                  </a>
                  <?php 

                  } ?>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-xl-8 stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                  <h6 class="card-title mb-0">Marketing</h6>
                  
                </div>
                <div class="table-responsive">
                    <span>
                      <?php echo $projectInfo->description ?>
                    </span>
                    <div >
                      <a href="<?php echo $evaluations->album ; ?>">Album photo </a>
                      <br>
                     <iframe src="https://www.facebook.com/plugins/post.php?href=<?php echo $evaluations->album ; ?>&width=600" width="100%" height="621" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div  >
                       
                     <a href="<?php echo $evaluations->afterMovie ; ?>">After Movie </a>
                      <br>
                     <iframe src="https://www.facebook.com/plugins/post.php?href=<?php echo $evaluations->afterMovie ; ?>&width=600" width="100%" height="621" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                
                    </div>
                </div>
              </div> 
            </div>
          </div>
        </div> <!-- row -->


</div>
</div>
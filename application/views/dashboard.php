<div id="content-page" class="content-page">
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="iq-card">

                
                <div class="row ">
                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Clubs Senior</h6>
                                        <div class="dropdown mb-2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2"><?php echo $clubscountS ; ?></h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Clubs Junior</h6>
                                        <div class="dropdown mb-2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2"><?php echo $clubscountJ ; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Tunimateurs</h6>
                                        <div class="dropdown mb-2">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2"><?php echo $tunimateursApp ;?></h3>
                                        </div>
                                        <div class="col-6 col-md-12 col-xl-7">
                                            <div id="sparklinePie"></div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Tunimateurs Junior</h6>
                                        <div class="dropdown mb-2">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2"><?php echo $tunimateursAppJ ;?></h3>
                                        </div>
                                        <div class="col-6 col-md-12 col-xl-7">
                                            <div id="sparklinePie"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Membre Alumni</h6>
                                        <div class="dropdown mb-2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2"><?php echo $tunimateursAppA ; ?></h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0">Projets</h6>
                                        <div class="dropdown mb-2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2"><?php echo $projets ; ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

</div>
<!-- row -->
<?php  if ($countEval>0 && ($role ==1  ||  ($role == 3  && $cellule=='Gestion des talents' )) ){ ?>
                    <a href=" <?php echo base_url() ; ?>Evaluation/evaluationListing ">

                        <div class="alert alert-primary fade show" role="alert">
                            <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                            <div class="alert-text"><strong>Alerte :  </strong> Vous avez
                                <?php echo $countEval ?> évaluation à valider !</div>
                            <div class="alert-close">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="la la-close"></i></span>
                                </button>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
<div class="row">

    <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">10 Top Members</h6>
                    <div class="dropdown mb-2">

                    </div>
                </div>

                <style type="text/css">
                    .pro-turtle {
                        object-fit: cover;
                        object-position: 50% 50%;
                        width: 40px;
                        height: 40px;
                    }
                </style> 
                <table  class="table table-dark table-hover" >
                          <th>
                          </th>
                          <th>
                            Tunimateur
                          </th>
                          <th>
                            Sco
                          </th>
                                        <?php  if(!empty($RateMember)){ $c=1 ;   foreach ($RateMember as $membre ) { ?>
                                          <tr>

                                            <td  > <img src="https://www.tunivisions.link/uploads/avatar/<?php echo $membre->avatar ?>" class="alligator-turtle " alt="user"> </td>

                                            <td> <small><small>

                                            <?php   if ($c== 1) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(241,196,14,1)"/></svg>

                                            <?php } else if ($c== 2) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(149,164,166,1)"/></svg>

                                            <?php } else if ($c== 3) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(155,77,9,1)"/></svg>

                                            <?php   }  ?>
                                            <span>
                                            <?php echo $membre->name ?> <br>
                                            <small><small><?php echo $membre->clubName ?></small></small>
                                            </span>

                                            </small></small> </td>

                                            <td> <p class="text-muted "><small><small><?php echo $membre->scores ?> Points</small></p> </td>
                                          </tr>
                                          
                                        </thead>
                                        <?php $c= $c + 1 ;  }   }else { echo "Il y a pas de données";} ?>
                </table>
                <!--
                <div class="d-flex flex-column">
                    <?php $c=0 ; if(!empty($RateMember)){ foreach ($RateMember as $membre ) { ?>
                        <a href="<?php echo base_url() ; ?>User/ProfileShow/<?php echo $membre->userId ?>" class="d-flex align-items-center border-bottom">
                            <div class="mr-3">
                                <img src="https://www.tunivisions.link/uploads/avatar/<?php echo $membre->avatar ?>" class="alligator-turtle  mr-3" alt="user">
                            </div>
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h5 class="text-body "><?php echo $membre->name ?></h5>
                                    <p class="text-muted ">
                                        <?php echo $membre->scores ?> Points</p>
                                </div>
                               <small>
                                <p class="text-muted tx-13">Club Tunivisions
                                    <?php echo $membre->clubName ?>
                                </p>
                                </small>
                            </div>
                           
                        </a>
                        <?php }  }else { echo "Il y a pas de données";} ?>
                </div>
            -->
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-xl-8 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Classement des clubs </h6>
                    <span class="text-muted"><b> Dernière mise à jour : </b>
                 <?php echo $LastRaitingClub->createdDate ; ?>  
                  </span>
                </div>
                <div class="table-responsive" style="height:720px ;overflow:auto;">
                    <table class="table table-dark table-hover"  id="dtVerticalScrollExample">
                        <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Club</th>
                                <th class="pt-0">Score</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php $c=0 ; if(!empty($RateClub)){ foreach ($RateClub as $club ) { ?>
                                <tr <?php if ($club->clubID == $MyclubID) { echo 'bgcolor="#ADD8E6" '; }?> >
                                    <td>
                                        <small> <?php $c++ ; echo $c ?></small>
                                    </td>
                                    <td>
                                        <small>





                                            <?php echo $club->name ?> 

                                                <?php   if ($c== 1) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(241,196,14,1)"/></svg>

                                            <?php } else if ($c== 2) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(149,164,166,1)"/></svg>

                                            <?php } else if ($c== 3) { ?>

                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 7a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 3.5l-1.323 2.68-2.957.43 2.14 2.085-.505 2.946L12 17.25l2.645 1.39-.505-2.945 2.14-2.086-2.957-.43L12 10.5zm1-8.501L18 2v3l-1.363 1.138A9.935 9.935 0 0 0 13 5.049L13 2zm-2 0v3.05a9.935 9.935 0 0 0-3.636 1.088L6 5V2l5-.001z" fill="rgba(155,77,9,1)"/></svg>

                                            <?php   }  ?>
                                            
                                    </small>
                                    </td>
                                    <td>
                                       <small> <?php echo $club->scores ?></small>
                                    </td>
                                   
                                </tr>
                                <?php } }else { echo "Il y a pas de données";} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row -->

<!-- row -->

            </div>
        </div>
    </div>
    <!-- row -->

</div>
</div>
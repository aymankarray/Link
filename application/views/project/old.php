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

                                <table class="table dataTable no-footer" style="width: cover" >
                   <thead>
                     <th>Date </th>
                     <th>Club </th>
                     <th>Projet </th>
                     <th>Evaluation </th>
                     <th>Validation </th>
                   </thead>
                   <tbody>
                   

              
                  <?php foreach ($projectRecords as $record ) {
                    
                  ?>
                  <tr>

                    <td>
                               
                    <?php 
                               $date = new DateTime($record->doDate);
                            
                              echo $date->format('d/m/Y');       ?>  
                    </td>


                    

                    <td>
                  
                         <b>
                                    <?php echo $record->ClubName ?>
                                  </b>
                      </td>


                    <td>
                      <h6 >
                                                                 
                                  <span>
                                    <?php 
                                    $string = strip_tags( $record->titre );
                                    if (strlen($string) > 30){

                                        // truncate string
                                        $stringCut = substr($string, 0, 30);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '... ';
                                        }

                                     echo $string ;
                                     ?>  </span>
                                  
                              
                      </h6>
                                
                                <?php echo $record->type  ?><br>
                               

                                <?php if ($record->cible=='Publique' )
                                    { ?>
                                        <i class="flaticon-share"></i>
                                <?php }
                                    else if ( $record->cible=='Privé' ){ ?>
                                        <i class="flaticon2-user-outline-symbol"></i>
                                <?php } 
                                 
                                    else if ( $record->cible=='Only tunimateur' ){ ?>
                                        <i class="flaticon-users"></i>
                                <?php } ?>

                              

                                <?php  echo $record->cible ?>
                 

                                <br>
                                
                                 
                                
                                
                    
                    </td>
                    
                    <td>
                      <?php  if($record->statut  == 'En Attend' ){  ?>
                              <span class="badge badge-warning ">En cours </span>
                      <?php }else{ ?>
                            <a> Evalué par  : <?php echo $record->dobyName ?></a>
                            <?php if($record->eventFB != '') { ?><br><a href="<?php echo $record->eventFB ?> ">Event facebook </a><?php } ?>
                            <?php if($record->album != '') { ?><br><a href="<?php echo $record->album ?> ">Album photo </a><?php } ?>
                            <?php if($record->afterMovie != '') { ?><br><a href="<?php echo $record->afterMovie ?> ">After movie </a><?php } ?>
                      <?php  } ?>
                    </td>

                    <td>
                       <?php  if($record->statut  == 'En Attend' ){  ?>

                      <?php  }else if($record->statut  == 'fini' && $record->valider  == ''  ){  ?>
                        <h6 class="badge badge-warning" >
                         <a href="<?php echo base_url()?>Score_club/PNoter/<?php echo $record->projectId ;  ?>" >
                               A Valider 
                            </a>
                          </h6>
                      <?php }else if($record->statut  == 'fini' && $record->valider  == 'Valider'  ) { ?>
                            

                            <b> <?php echo $record->score ?> points </b><br>
                            <a href="<?php echo base_url()?>Score_club/PNoter/<?php echo $record->projectId ;  ?>" class="kt-widget__title">
                            <span class="badge badge-primary">Validé par  : <?php echo $record->validName ?></span>
                            </a>
                            
                            
                      <?php  } ?>
                    </td>
                    
   

                  </tr>
                     
                   
                  <?php } ?>
                  </tbody>
             
            </table>
               
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
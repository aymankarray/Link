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

                                <table class="display table dataTable no-footer" id="tableid" style="width: cover" >
                   <thead>
                     
                     <th>Club </th>
                     <th>Projet </th>
                     <th>Evaluation </th>
                     <th width="5%" >Validation </th>
                   </thead>
                   <tbody>
                   

              
                  <?php foreach ($projectRecords as $record ) {
                    
                  ?>
                  <tr>




                    

                    <td>
                  
                         <b>
                                <small>    <?php echo $record->ClubName ?> </small>
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
                      <small>le  :  <?php echo $record->startDate  ?> </small>
                                <br>
                         <small>       <?php echo $record->type  ?> </small><br>
                               

                                <?php if ($record->cible=='Publique' )
                                    { ?>
                                        <i class="flaticon-share"></i>
                                <?php }
                                    else if ( $record->cible=='Privé' ){ ?>
                                        <i class="flaticon2-user-outline-symbol"></i>
                                <?php } 
                                 
                                    else if ( $record->cible=='Only tunimateur' ){ ?>
                                        <i class="flaticon-users"></i>
                                <?php } ?></small>

                              

                                <?php  echo $record->cible ?></small>
                 

                                <br>
                                
                                 
                                
                                
                    
                    </td>
                    
                    <td>
                      <small> 
                      <?php  if($record->statut  == 'En Attend' ){  ?>
                              <span class="badge badge-warning ">En cours </span>
                      <?php }else{ ?>
                            <a> Evalué par  : <?php echo $record->dobyName ?></a>
                            <br>
                            le :                     <?php 
                               $date = new DateTime($record->doDate);
                            
                              echo $date->format('d/m/Y');       ?>  
                              <hr>
                            <?php if($record->eventFB != '') { ?><br><a href="<?php echo $record->eventFB ?> ">Event facebook </a><?php } ?>
                            <?php if($record->album != '') { ?><br><a href="<?php echo $record->album ?> ">Album photo </a><?php } ?>
                            <?php if($record->afterMovie != '') { ?><br><a href="<?php echo $record->afterMovie ?> ">After movie </a><?php } ?>
                      <?php  } ?>
                    </small>
                    </td>

                    <td >

                       <?php  if($record->statut  == 'En Attend' ){  ?>

                      <?php  }else if($record->statut  == 'fini' && $record->valider  == ''  ){  ?>
                      
                         <a class="btn btn-primary btn-sm mr-2" href="<?php echo base_url()?>Score_club/PNoter/<?php echo $record->projectId ;  ?>" >
                               Valider 
                            </a>
                         
                      <?php }else if($record->statut  == 'fini' && $record->valider  == 'Valider'  ) { ?>
                            
<small>
                            <b> <?php echo $record->score ?> points </b><br>
                            <a href="<?php echo base_url()?>Score_club/PNoter/<?php echo $record->projectId ;  ?>" class="kt-widget__title">
                            <span class="badge badge-primary">Validé par  : <?php echo $record->validName ?></span>
                            </a>
</small>                            
                            
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

       
  
         

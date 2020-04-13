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


                            <table id="example" class="table" style="width:100%" >
                    <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Titre</th>
                        <th>faite </th>
                        
                        

                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($evaluationRecords))
                    {
                        foreach($evaluationRecords as $record)
                        {
                    ?>
                    <tr>

                        
                   

                        <td><?php echo $record->evaluationId ?></td>
                        <td>  <?php echo $record->titre ?> </td>
                        <td> <?php if($record->name !=''){ ?> Le <b> <?php echo $record->doDate ?> <br> </b> par <b> <?php echo $record->name ?></b><?php } ?> </td>

                 
                        <td class="text-center">



                        <?php if ($record->statut == 'En Attend') {
                            
                        ?>
                        <a href="<?php echo base_url() ?>Evaluation/doEvaluation/<?php echo $record->evaluationId ?>" >
                            <i data-feather="edit" width="20px" ></i>faire
                        </a>
                        <?php 
                        }else if($clubID == 0 ){
                          ?>
                            <a href="<?php echo base_url() ?>Evaluation/doEvaluationF/<?php echo $record->evaluationId ?>" c title="View">
                          <i data-feather="edit-2"></i>
                        </a>
                          <?php  
                        }

                        ?>

                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                  </table>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
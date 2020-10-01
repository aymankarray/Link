<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">

                      <div class="widget">
                    <h4 class="widget-title">La liste des club</h4>
                     <table  class="table" id="tableid" style="width: cover" >
                    <thead>
                    <tr>
                        <th>Faculté</th>
                        <th>Secteur</th>
                        <th>Président</th>
                        <th>Membres</th>
                        <th>Contact</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!empty($clubRecords))
                    {
                        foreach($clubRecords as $record)
                        {
                    ?>
                    <tr>
                       
                        <td>
                          <a href="<?php echo base_url() ?>club/clubInfo/<?php echo $record->clubID ?>" target="_blank"   >
                           <small><?php echo $record->name ?> </small> 
                           <?php if ($record->is_Actif=="0"){  ?>
                            <i class="ri-stop-circle-fill"></i>
                           <?php } ?>
                         </a>
                        </td>
                        <td>
                            <small><?php echo $record->city ?></small>
                        </td>
                        <td>
                          <a href="<?php echo base_url() ?>User/ProfileShow/<?php echo $record->userId ?>" target="_blank"   >
                          <small> <?php echo $record->P ?></small>
                         </a>
                        </td>
                        <td>
                            <small><?php echo $record->members ; ?> </small>
                        </td>
                        <td>
                   
                           
                            <?php if($record->facebook != ''){ ?>

                                <A HREF="mailto:<?php echo $record->facebook ?>"><i class="ri-mail-fill"></i></A> 
                            <?php } 

                            if($record->email != ''){ ?>

                         
                              <a href="<?php echo $record->email ?>">
                                <i class="ri-facebook-box-fill"></i>
                              </a>  

                            <?php } ?>

                            
                           
                           
                      

                       
                        </td>
                        <?php if($SA== 1){ ?>
                        <td>
                             <a href="https://tunivisions.link/Club/editClub/<?php echo  $record->clubID ?>"> <i class="ri-edit-2-fill"></i>
                        </td>
                         <?php    }    ?> 

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
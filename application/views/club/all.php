<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">La liste des club </h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown show">
                                
                                 
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">

               <table id="example" class="table dataTable no-footer"  style="width:100%" >
                    <thead>
                    <tr>
                        <th>Faculté</th>
                        <th>Secteur</th>
                        <th>Président</th>
                        <th>Membres</th>
                        <th>Contact</th>
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
                           <small><?php echo $record->name ?>
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
                            <?php echo $record->members ; ?> </small>
                        </td>
                        <td>
                          <small>
                           
                            <?php if($record->facebook != ''){ ?>

                                <A HREF="mailto:<?php echo $record->facebook ?>"><i class="ri-mail-fill"></i></A> 
                            <?php } 

                            if($record->email != ''){ ?>

                             <br>

                              <a href="<?php echo $record->email ?>"><i class="ri-facebook-box-fill"></i></i></i></a>  

                            <?php } ?>

                            
                           
                           
                          </small>

                       
                       

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
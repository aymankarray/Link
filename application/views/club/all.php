<section>
    <div class="gap gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row widget-page merged20">
              <div class="col-lg-12 col-md-12 col-sm-6">
                <aside class="sidebar">
                   <div class="widget">
                    <h4 class="widget-title">Liste des clubs </h4>
                    <ul class="faved-page">
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
                               <i class="fa fa-ban" aria-hidden="true"></i>
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


                            <?php if ($record->SenJun == 3 ){ echo 'University' ; }?>
                            <?php if ($record->SenJun == 4 ){ echo 'High School' ; }?>






                        </td>
                        <?php if($SA== 1){ ?>
                        <td>
                             <a href="https://tunivisions.link/Club/editClub/<?php echo  $record->clubID ?>">   <i class="ti-pencil"></i>
                        </td>
                         <?php    }    ?> 

                    </tr>
                    <?php
                        }
                    }
                    ?>
                    </tbody>
                  </table>

                    </ul>
                  </div>
                </aside>
              </div><!-- sidebar -->
            </div>  
          </div>
        </div>
      </div>
    </div>  
  </section> 
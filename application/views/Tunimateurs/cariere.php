<div id="content-page" class="content-page">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-sm-12">
                     <div class="iq-card position-relative inner-page-bg bg-primary" style="height: 150px;">
                        <div class="inner-page-title">
                           <h3 class="text-white">Tunivisions Experience</h3>
                           <p class="text-white">lorem ipsum</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Experience</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="iq-timeline">

                               <li>
                                 <div class="timeline-dots"></div>
                                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Mise à jour votre Tunivisions Experience
                                 </button>
                                 
                              </li>

                              <?php foreach ($Experience as $key) {   ?>
                              <li>
                                 <div class="timeline-dots"></div>
                                 <h6 class="float-left mb-1"> 
                                    <?php echo $key->role   ?> <?php echo $key->cellule ?> chez 
                                     <a class="text-primary" href="<?php echo base_url() ?>club/clubInfo/<?php echo  $key->clubId ?>"  >
                                       <?php echo $key->ClubName   ?>  
                                    </a>  
                                 </h6>
                                 <small class="float-right mt-1">
                                    <?php echo $key->attacheDT?>  - <?php echo $key->endDT   ?>
                                 </small>
                                 <div class="d-inline-block w-100">
                                    <p>

                                    </p>
                                 </div>
                              </li>
                              <?php }  ?>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>


         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <form action="<?php echo base_url() ?>User/CarierAdd/<?php echo $uid ?>" method="post">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Nouvelle experience</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">×</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       
                                          

                                          

                                          <label>Poste</label>
                                          <select name="roleId" id="roleId"  class="select2jsMultiSelect form-control" >
                                             <option value="-1" ></option>
                                             <?php foreach ($Roles as $key ) {
                                              echo "<option value='".$key->roleId."'>".$key->role."</option>" ; 
                                             }?>
                                          </select>
                                          <label>Cellule</label>
                                          <select name="cellule" id="cellule"  class="select2jsMultiSelect form-control" >
                                             <option value="-1" ></option>
                                             <option></option>
                                          </select>
                                          <label>Club</label>
                                          <select name="clubId" id="clubId"   class="select2jsMultiSelect form-control" >
                                             <option value="-1" ></option>
                                             <?php foreach ($Clubs as $key ) {
                                              echo "<option value='".$key->clubID."'>".$key->name."</option>" ;  
                                             }?>
                                          </select>

                                          <label>Debut</label>
                                          <input type="date"  name="attacheDT" id="attacheDT"  class="form-control" >
                                          <label>Fin</label>
                                          <input type="date" name="endDT" id="endDT" class="form-control" >

                                       
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       <input type="submit" class="btn btn-primary">Envoyer</button>
                                    </div>
                                    </form>
                                 </div>
                              </div>
                           </div>



   
    <script type="text/javascript">
          $( document ).ready( function()
          {
              var roleId = $( '#roleId' );
              var cellule = $( '#cellule' );
              var clubId = $( '#clubId' );
              
             $('#roleId').select2();
             $('#cellule').select2();
             $('#clubId').select2();

             if($('#roleId').val() == '-1'){
              alert("voyez choisir le poste") ; 
            }

            if($('#cellule').val() == '-1'){
              alert("voyez choisir la cellule") ; 
            }

            if($('#clubId').val() == '-1'){
              alert("voyez choisir le club") ; 
            }

            $("#attacheDT").datepicker({
                 numberOfMonths: 2,
                 onSelect: function (selected) {
                     var dt = new Date(selected);
                     dt.setDate(dt.getDate() + 1);
                     $("#endDT").datepicker("option", "minDate", dt);
                 }
             });
             $("#endDT").datepicker({
                 numberOfMonths: 2,
                 onSelect: function (selected) {
                     var dt = new Date(selected);
                     dt.setDate(dt.getDate() - 1);
                     $("#attacheDT").datepicker("option", "maxDate", dt);
                 }
             });


         });

   </script>



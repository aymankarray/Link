
<div id="content-page" class="content-page">
            <div class="container">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script defer type="text/javascript"  src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script defer type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>



<style type="text/css">
    
    .content-loader tr td {
    white-space: nowrap;
}

</style>





                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Systeme</a></li>
                        <li class="breadcrumb-item active" aria-current="page">utilisateurs</li>
                    </ol>
                </nav>

                <div class="row">
                   
            <div class="card col-md-12">
              <div class="card-body">
                                <h6 class="card-title"></h6>
                                   
                
                    <table id="example" class="display" style="width: cover" >
                    <thead>
                    <tr>
                       
                        <th>id</th>
                        <th>Nom et prénom</th>
                        <th>Club</th>
                        <th>Contact</th>
                        <th>Inscription </th>
                        <th>Actif</th>
                        
                    </tr>
                    </thead>

                    <tbody>
                              
                </style>
                    
                    <?php
                    if(!empty($userRecords))
                    {
                        foreach($userRecords as $record)
                        {
                    ?>
                    <tr>
                       
                        <td>
                            <small>
                            <?php echo $record->userId ?>
                            </small>
                        </td>
                      
                        <td>              
                                        <a class="kt-user-card-v2__name" href="https://tunivisions.link/User/ProfileShow/<?php echo $record->userId ?>" >
                                        <small><small> <?php echo $record->name ?> </small></small>
                                        </a>
                                        <br>                              
                                        <span class="kt-user-card-v2__desc">
                                        <small>  <small>  <?php echo $record->role ?> <?php echo $record->cellule ?>  </small></small>
                                        </span>                            
                                    </div>                      
                                
                          

                        </td>
                        <td>

                            <span style="width: 145px;">
                                <div class="kt-user-card-v2">
                                    <div class="kt-user-card-v2__pic">
                                        
                                    </div>                          
                                    <div class="kt-user-card-v2__details">                              
                                        <a class="kt-user-card-v2__name" href="#">
                                          <small> <?php echo $record->ClubName ?> </small> </td>
                                        </a>                              
                                    </div>                      
                                </div>
                            </span>


                        </td>
                        
                        
                        <td>
                            <A HREF="mailto:<?php echo $record->email ?>"><i class="ri-mail-fill"></i></A> 
                            <a href="tel:<?php echo $record->mobile ?>"><i class="ri-phone-fill"></i></i></a>
                            <a href="<?php echo $record->facebook ?>"><i class="ri-facebook-box-fill"></i></i></i></a>
                         </td>

                        <td>
                            <small><small>

                           parrin : <a class="kt-user-card-v2__name" href="https://tunivisions.link/User/ProfileShow/<?php echo $record->p_userId ?>" > <?php echo $record->parrain ?></a><br>
                           date d'inscription :<a> <?php echo $record->createdDtm ?></a>
                       </small></small>
                        </td>
                        
                        <td> 
                           
                        <?php if($record->isDeleted == 0) { ?>
                            <span class="btn btn-Info" > <small> Approuvé  </small></span>
                        <?php }   ?>
                        <?php if($record->isDeleted == 1) { ?>
                            <span class="btn btn-warning" > <small> non approuvé </small> </span>
                        <?php } ?>

                        <?php  if($record->isDeleted == 2) {  ?>
                            <span class="btn btn-danger" > <small> bloqué </small> </span>
                        <?php } ?>
     
                           
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


             <!-- begin::Global Config(global config for global JS sciprts) -->
            <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script defer src="<?php echo base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script type="text/javascript">
            $(document).ready( function () {
                $('#example').DataTable();
            } );
  </script>
</div></div>

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
                                   
                
                    <table  class="table dataTable no-footer" id="tableid" style="width: cover" >
                    <thead>
                    <tr>
                       

                        <th>Club</th>
                        <th>Nombre des dossiers</th>
                        <th>P</th>
                        <th>P</th>
                        <th>N VPAF</th>
                        <th>N AAF</th>
                        <th>N VPRH</th>
                        <th>N ARH</th>
                        <th>Action</th>
                        
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
                       
                        <td><?php echo $record->clubName ;?></td>
                        <td><?php echo $record->ND ;?></td>
                        <td><?php echo $record->NP ?></td>
                        <td><?php echo $record->NVPAF ?></td>
                        <td><?php echo $record->NAAF ?></td>
                        <td><?php echo $record->NVPRH ?></td>
                        <td><?php echo $record->NARH ?></td>
                       
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
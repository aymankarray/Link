<style type="text/css">
       .alligator-turtle12 {
  object-fit: cover;
  object-position: 50% 50%;

  width: 100%;
  height: 150px;
}
</style>


<div id="content-page" class="content-page">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-sm-12">


<div class="row">
    <?php
        if(!empty($tfmRecords))
            {
              foreach($tfmRecords as $record)
            {
            ?>
    <div class="card col-md-6">
        <!--begin:: Portlet-->
        <div class="kt-portlet kt-portlet--height-fluid">
        <div>
             <img src="<?php echo base_url()  ?>uploads/projet/<?php echo $record->banner; ?>"  class="alligator-turtle12" alt="image">  
        </div>

            <div class="kt-portlet__body kt-portlet__body--fit">
                <!--begin::Widget -->
                <div class="kt-widget kt-widget--project-1">
                    <div class="kt-widget__head">
                        <div class="kt-widget__label">
                            <div class="kt-widget__media">
                                 
                             </div>
                            <div class="kt-widget__info">
                                <div class="kt-widget__media">
                                    <h2>
                                
                                    <?php 
                                    $string = strip_tags( $record->nom );
                                    if (strlen($string) > 20){

                                        // truncate string
                                        $stringCut = substr($string, 0, 20);
                                        $endPoint = strrpos($stringCut, ' ');

                                        //if the string doesn't contain any space then it will cut without word basis.
                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                        $string .= '... ';
                                        }

                                     echo $string ;
                                     ?>
                               
                                </h2>
                               
                                <a <?php foreach ($tfmpartRecords as $tfmp ) {
                            if ( $tfmp->tfmId == 7   ){ ?> style="display: none" <?php }} ?>
                            href="<?php echo base_url() ; ?>TFM/partant/<?php echo $record->tfmId ; ?>">  
                       
                            <?php if ($record->tfmId == 7 ){ ?>
                                <div class="btn btn-danger">
                                    <span class="kt-widget__subtitle"></span>
                                    <span class="kt-widget__value"> je veux participer </span><span></span>
                                </div>

                                                            <?php }  ?>
                            </a> 
                                   <br>
                                           <!--
                                            <?php if ($record->tfmId == 7 ){ ?>
                                                <div class="btn btn-danger"> SOLD OUT </div>

                                              <?php }  ?>
                                            -->
                                           <span>
  
                            
                        <?php foreach ($tfmpartRecords as $tfmp ) {
                            if ( $tfmp->tfmId == 7 &&  $record->tfmId == 7 && $tfmp->statut == 1  ){
                            ?>

                                <form action="<?php echo base_url() ?>TFM/remboursement/<?php echo $tfm->tfmId ?>" >
                                    <h4>  <input type="radio" name="" value="1"> Remboursé  </h4>
                                   
                                    <h4> <input type="radio" name="" value="2"> Partant  </h4>
                                    <br>
                                    <input type="submit" name="envoyer" class="btn btn-primary" >
                                </form>

                          <?php        
                                }
                                else if( $tfmp->tfmId == $record->tfmId && $tfmp->statut == 2  ) {
                                   ?>
                            <span class="btn btn-warning "> 
                                        <b>En cours de traitement</b> <br>

                                         Paiement 1 <b>175 DT</b>  Avant le <b>18/08/2020</b> <br>
                                         <br><b>système de paiement FIFO ( First IN First OUT )</b>     
                            </span> 
                         <?php   
                                }
                            } 
                            ?>

                            
                            

                         </span>   
                                           <br>
                                
                                </h5>
                            </div>                                                          
                                <br>
                                
                                <br>
                                <span class="btn btn-primary "> 
                                        <?php $date = new DateTime($record->dateDebut) ; 
                                        echo '<span>'.$date->format('d').'-'.$date->format('M').'-20'.$date->format('y').'</span>' ; ?>    
                                </span>
                                <span class="btn btn-danger "> 
                                        <?php $date = new DateTime($record->dateFin) ; 
                                        echo '<span>'.$date->format('d').'-'.$date->format('M').'-20'.$date->format('y').'</span>' ; ?>    
                                </span>
                                <br>

                            </div>
                        </div>
                        
                                
                    </div>

                    <div class="kt-widget__body">

                        <div class="kt-widget__content">
                            
                            <div class="kt-widget__details">
                                <span class="kt-widget__subtitle"></span>
                                <span class="kt-widget__value"><i class="fas fa-map-marker-alt"></i> &nbsp; <span><small><?php  echo $record->local; ?> </small> </span><span></span>
                            </div>
                            
                            <div class="kt-widget__details">
                                <span class="kt-widget__subtitle"></span>
                                <span class="kt-widget__value"><i class="fas fa-money-bill-wave"></i> &nbsp;<small> <span><?php if ($record->prix == 0){echo "Gratuit";}else{echo $record->prix.' DT';} ?> </small> </span><span></span>
                            </div>



                        </div>

                    </div>

                    
                </div>
                <!--end::Widget -->
            </div>
        </div>
        <!--end:: Portlet-->
    </div>
    <?php
                        }
                    }
                    ?>
</div>

</div>
</div>
</div>
</div>
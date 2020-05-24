
<style type="text/css">
   #upload{
    display:none
}
</style>



<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 row m-0 p-0">
                     <div class="col-sm-12">
                        <div id="post-modal-data" class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Créer une publication </h4>
                              </div>
                           </div>
                           <div class="iq-card-body" data-toggle="modal" data-target="#post-modal">
                              <div class="d-flex align-items-center">
                                 <div class="user-img">
                                    <img src="https://tunivisions.link/uploads/avatar/<?php echo $avatar ?>" alt="userimg" class="alligator-turtle ">
                                 </div>
                                 <form class="post-text ml-3 w-100" action="javascript:void();">
                                    <input type="text" name="postText" class="form-control rounded" placeholder="Que voulez-vous dire, <?php echo $name ?> ? " style="border:none;">
                                 </form>
                              </div>
                              <hr>
                              
                              <ul class="post-opt-block d-flex align-items-center list-inline m-0 p-0">
                                 <li class="iq-bg-primary rounded p-2 pointer mr-3">
                                    
                                 </li>
                                 <!--
                                 <li class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/08.png" alt="icon" class="img-fluid"> Tag Friend</li>
                                 <li class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/09.png" alt="icon" class="img-fluid"> Feeling/Activity</li>
                                 <li class="iq-bg-primary rounded p-2 pointer">
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" id="post-option" data-toggle="dropdown">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option" style="">
                                             <a class="dropdown-item" href="#">Check in</a>
                                             <a class="dropdown-item" href="#">Live Video</a>
                                             <a class="dropdown-item" href="#">Gif</a>
                                             <a class="dropdown-item" href="#">Watch Party</a>
                                             <a class="dropdown-item" href="#">Play with Friend</a>
                                          </div>
                                       </div>
                                    </div>
                                 </li>-->
                              </ul>
                                  
                           </div>
                           <div class="modal fade" id="post-modal" tabindex="-1" role="dialog" aria-labelledby="post-modalLabel" aria-hidden="true" style="display: none;">
                              <form action="<?php echo base_url()?>Posts/addNewP"   method="post" enctype="multipart/form-data"  >
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <div class="user-img">
                                             <img src="https://tunivisions.link/uploads/avatar/<?php echo $avatar ?>" alt="userimg" class="alligator-turtle">
                                          </div>

                                       <h5 class="modal-title" id="post-modalLabel">Créer une publication</h5>
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="ri-close-fill"></i></button>
                                    </div>
                                    <div class="modal-body">
                                       <div class="d-flex align-items-center">
                                          


                                          
                                        <textarea id="textarea"  class="form-control rounded" name="postText" placeholder="Que voulez-vous dire, <?php echo $name ?> ? " row="10"; style="resize: none;" required ></textarea>
                                           
                                           <script type="text/javascript">
                                                 function convert()
                                                 {
                                                  var text=document.getElementById("textarea").value;
                                                  var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
                                                  var text1=text.replace(exp, "<a href='$1'>$1</a>");
                                                  var exp2 =/(^|[^\/])(www\.[\S]+(\b|$))/gim;
                                                  document.getElementById("converted_url").innerHTML=text1.replace(exp2, '$1<a target="_blank" href="http://$2">$2</a>');
                                                 }
                                               </script>

                                          
                                       </div>
                                       <hr>

                                       <br>
                                                                             
                                          <input class="dropify-fr" data-height="500" data-max-file-size="250K" data-max-height="2000"  type="file" name="file"  > 
                               
                  <!--  
                                      
                                       <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                           <li class="col-md-12 mb-3" id="lien" style="display: none;"> 
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3">
                                                <a href="#"></a>
                                                 <input type="url" class="form-control" name=""  placeholder="integrer un lien " >
                                              </div>
                                          </li>
                                          <li class="col-md-12 mb-3" id="tof" style="display: none;">
                                             <div class="form-group">
                                                <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="customFile">
                                                   <label class="custom-file-label" for="customFile">Choisir un fichier</label>
                                                </div>
                                             </div>
                                          </li>
                                      
                                          -->
                                          <!--
                                          <li class="col-md-6 mb-3">
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/09.png" alt="icon" class="img-fluid"> Feeling/Activity</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/10.png" alt="icon" class="img-fluid"> Check in</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/11.png" alt="icon" class="img-fluid"> Live Video</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/12.png" alt="icon" class="img-fluid"> Gif</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/13.png" alt="icon" class="img-fluid"> Watch Party</div>
                                          </li>
                                          <li class="col-md-6 mb-3">
                                             <div class="iq-bg-primary rounded p-2 pointer mr-3"><a href="#"></a><img src="<?php echo base_url() ;  ?>images/small/14.png" alt="icon" class="img-fluid"> Play with Friends</div>
                                          </li>-->
                                       </ul>
                                       
                                       <hr>
                                       
                                       <button type="submit" onclick="convert();" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                    </div>
                                 </div>
                              </div>
                           </form>
                           </div>
                        </div>
                     </div>


                     <?php   if (!empty($postRecords)) {    foreach ($postRecords as $record ) {  ?>

                     <div id ="post<?php echo $record->postId ?>" class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body">
                              <div class="user-post-data">
                                 <div class="d-flex flex-wrap">
                                    <div class="">
                                       <img class="alligator-turtle  mr-3" src="https://tunivisions.link/uploads/avatar/<?php echo $record->avatar ?>"  alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                       <h5 class="mb-0 d-inline-block"><a href="https://tunivisions.link/User/ProfileShow/<?php echo $record->userId ?>" class="alligator-turtle  mr-3" ><?php echo $record->name?></a></h5>
                                       <p class="mb-0 d-inline-block">a mise à jour son statut</p>
                                       <p class="mb-0 text-primary"><a href="<?php echo base_url().'Posts/post/'.$record->postId ?>"><?php echo xTimeAgo($record->DatePosted,date('Y-m-d H:i:s')) ; ?></a></p>
                                    </div>
                                    
                                    <div class="iq-card-post-toolbar">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                         
                                          <div class="dropdown-menu m-0 p-0">
                                             <?php if ($userId == $record->userId ){  ?>
                                             <a class="dropdown-item p-3"  >
                                                <div class="d-flex align-items-top">
                                                   <div class="icon font-size-20"><i class="ri-notification-line"></i></div>
                                                   <div class="data ml-2">
                                                      <h6>Modifier</h6>
                                                      <p class="mb-0">modifier le contenu de ce post</p>
                                                   </div>
                                                </div>
                                             </a>
                                             <a class="dropdown-item p-3" id="<?php echo $record->postId ?>" onclick="deleteP(this.id)" >
                                                <div class="d-flex align-items-top">
                                                   <div class="icon font-size-20"><i class="ri-close-circle-line"></i></div>
                                                   <div class="data ml-2">
                                                      <h6>Supprimer</h6>
                                                      <p class="mb-0">Ajouter au Corbeille</p>
                                                   </div>
                                                </div>
                                             </a>
                                             <?php } else { ?>
                                             <a class="dropdown-item p-3" id="<?php echo $record->postId ?>" onclick="deleteP(this.id)" >
                                                <div class="d-flex align-items-top">
                                                   <div class="icon font-size-20"><i class="ri-close-circle-line"></i></div>
                                                   <div class="data ml-2">
                                                      <h6>Signaler</h6>
                                                      <p class="mb-0">Signaler ce post </p>
                                                   </div>
                                                </div>
                                             </a>
                                          <?php }  ?>
                                          </div>
                                         
                                       </div>
                                    </div>
                                      
                                 </div>
                              </div>
                              <div class="mt-3" >
                                 <p  style="font-size: 13"  >
                                    <?php 

                                          $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
                                          $text = $record->Content ;
                                          if(preg_match($reg_exUrl, $text, $url)) {
                                                 echo preg_replace($reg_exUrl, "<a href=".$url[0]." target=_blank >".$url[0]."</a> ", $text);
                                          } else {
                                                 echo $text;
                                          }

                                          if ($reg_exUrl = "(?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*" ) { ?>

                                             
                                            
                                          
                                          <?php
                                          }

                                    ?>
                                       
                                    </p>

                              </div>
                              <?php if ($record->photo != 'Post___' ) { ?>
                              <div class="user-post">
                                 <a href="javascript:void();">
                                    <img src="<?php echo base_url() ?>uploads/post/<?php echo $record->photo ?>" alt="post-image" class="img-fluid rounded w-100"></a>
                              </div>
                           <?php }  ?>
                              
                              <div class="comment-area mt-3">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="total-comment-block">
                                          
                                          <?php if (!empty($record->likeCheck)) {  ?>
                                           <b id="PLiked<?php echo $record->postId ?>" class='btn mb-3 btn-primary rounded-pill'  > <i class='ri-heart-2-fill'></i> <?php echo count($record->likeRecords) ?> J'aimes </b>

                                            <?php } else {  ?>
                                            


                                             <p class="btn btn-outline-primary rounded-pill mb-3"  id="<?php echo $record->postId ?>" onclick="like(this.id)" >  <?php echo count($record->likeRecords) ?> <i class='ri-heart-2-fill'></i> j'aimes </p>
                                            <b id="Liked<?php echo $record->postId ?>" class='btn mb-3 btn-primary rounded-pill' style="display: none" > <i class='ri-heart-2-fill'></i> <?php echo count($record->likeRecords)+ 1 ?> J'aimes </b>
                                             <?php }   ?>

                                             &nbsp; 

                                             <?php if  (count($record->commentsRecords) ==  0) {  ?>
                                                <b  class='btn btn-outline-primary rounded-pill mb-3' onclick="location.href = '<?php echo base_url().'Posts/post/'.$record->postId ?>';"  >
                                                   <?php echo count($record->commentsRecords) ?> <i class="ri-chat-3-fill"></i> Commentaires
                                                 </b>
                                             <?php } if  (count($record->commentsRecords) >  0 ){ ?>
                                             <b  class='btn mb-3 btn-primary rounded-pill' onclick="location.href = '<?php echo base_url().'Posts/post/'.$record->postId ?>';" >
                                                   <?php echo count($record->commentsRecords) ?> <i class="ri-chat-3-fill"></i> Commentaires
                                                 </b>
                                             <?php } ?> 

                                          </div>

                                 </div>
                                 <hr>
                                 <ul class="post-comments p-0 m-0">

                                    
                 
                           
                           

                                    
                                    
                                     <?php 
                           
                   

                                    if(!empty($record->commentsRecords))
                                     { 
                                     foreach ($record->commentsRecords as $key ) {  ?>     
                                    
                                    <li class="mb-2" style="background-color: #FFF0F1   ">
                                       <div class="d-flex flex-wrap">
                                          <div class="user-img">
                                             <img class="alligator-turtle  mr-3" src="https://tunivisions.link/uploads/avatar/<?php echo $key->avatar ?>"  >
                                          </div>
                                          <div class="comment-data-block ml-3">
                                             <h6><a href="https://tunivisions.link/User/ProfileShow/<?php echo $key->comUserId ?>" class="text-primary"  > <?php echo $key->name ; ?> </a></h6>
                                            
                                             <p class="mb-0"><?php echo $key->content ; ?></p>
                                             <div class="d-flex flex-wrap align-items-center comment-activity">
                                             
                                                <span class="text-primary" > <?php echo xTimeAgo($key->createdDTM,date('Y-m-d H:i:s')) ; ?> </span>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <?php  } }    ?>    
                                                                  
                                 </ul>
                                 <form id="commentF" class="comment-text d-flex align-items-center mt-1" method="post" action="<?php echo base_url().'Posts/addNewComment/'.$record->postId ?>">
                                    <input type="text" name="comment<?php echo $record->postId ?>" class="form-control rounded" placeholder="votre commentaire " style="background-color: #FFF0F1  " required>
                                    <div class="comment-attagement d-flex">

                                       <!-- 
                                       <a href="#" onclick="document.getElementById('commentF').submit();" ><i class="ri-link mr-3"></i></a>
                                       <a href="javascript:void();"><i class="ri-user-smile-line mr-3"></i></a>
                                       <a href="javascript:void();"><i class="ri-camera-line mr-3"></i></a>
                                      -->

                                                                       </div>
                                 </form>

                              </div>
                           </div>
                        </div>
                     </div>
                     <?php } } ?>
                     
                     
                     
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Actualité</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="m-0 p-0">
                            <style type="text/css">
                                            .actu-turtle {
                                        object-fit: cover;
                                        object-position: 50% 50%;
                                    
                                        border-radius: 20%;

                                        width: 75px;
                                        height: 55px;
                                      }
                            </style>

                              <?php foreach ($ActuRecords as $record ) { ?>
                              <li class="d-flex mb-4 align-items-center">
                                 <a href="<?php echo base_url().'Actu/show/'.$record->actuID ?>" >
                                  <img src="https://www.tunivisions.link/uploads/Actu/<?php echo $record->image ?>" class="actu-turtle">
                                 </a>

                                 <div class="stories-data ml-3">
                                    <h5>
                                       <a href="<?php echo base_url().'Actu/show/'.$record->actuID ?>" >
                                       <?php 
                                                        $string = strip_tags( $record->titre  );
                                                        if (strlen($string) > 25){

                                                            // truncate string
                                                            $stringCut = substr($string, 0, 25);
                                                            $endPoint = strrpos($stringCut, ' ');

                                                            //if the string doesn't contain any space then it will cut without word basis.
                                                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                            $string .= '... ';
                                                            }

                                                         echo $string ;
                                                         ?>  
                                           </a>                  
                                       </h5>
                                      
                                    <p class="mb-0">
                                                      <?php 
                                                        $string = strip_tags( $record->description  );
                                                        if (strlen($string) > 55){

                                                            // truncate string
                                                            $stringCut = substr($string, 0, 55);
                                                            $endPoint = strrpos($stringCut, ' ');

                                                            //if the string doesn't contain any space then it will cut without word basis.
                                                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                            $string .= '... ';
                                                            }

                                                         echo $string ;
                                                         ?>  

                                    </p>
                                 </div>
                                 
                              </li>
                              <?php } ?>
                              
                           </ul>
                           <a href="#" class="btn btn-primary d-block mt-3">Voir plus</a>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Evenement</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="">
                                    <a class="dropdown-item" href="<?php echo base_url() ?>project/projectListing" ><i class="ri-eye-fill mr-2"></i>Voir plus</a>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="m-0 p-0">
                              <?php foreach ($projectRecords as $projets ) { ?>
                              <li class="d-flex mb-4 align-items-center ">
                                 <img src="https://www.tunivisions.link/uploads/projet/<?php echo $projets->banner ?>" class="actu-turtle"  alt="item-image">
                                 <div class="stories-data ml-3">
                                    <h5><?php echo $projets->titre ?></h5>
                                    <p class="mb-0"><?php          $date = new DateTime($projets->startDate);
                                                                   echo $date->format('d/m/Y');?> </p>
                                    <p class="mb-0"><small> par : Club Tunivisions <?php echo $projets->ClubName ?> </small> </p>
                                 </div>
                              </li>
                               <?php } ?>
                           </ul>
                        </div>
                     </div>
                   

                   <!--  
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Upcoming Birthday</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="media-story m-0 p-0">
                              <li class="d-flex mb-4 align-items-center">
                                 <img src="<?php echo base_url() ;  ?>images/user/01.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Anna Sthesia</h5>
                                    <p class="mb-0">Today</p>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <img src="<?php echo base_url() ;  ?>images/user/02.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Paul Molive</h5>
                                    <p class="mb-0">Tomorrow</p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Suggested Pages</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="suggested-page-story m-0 p-0 list-inline">
                              <li class="mb-3">
                                 <div class="d-flex align-items-center mb-3">
                                    <img src="<?php echo base_url() ;  ?>images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                    <div class="stories-data ml-3">
                                       <h5>Iqonic Studio</h5>
                                       <p class="mb-0">Lorem Ipsum</p>
                                    </div>
                                 </div>
                                 <img src="<?php echo base_url() ;  ?>images/small/img-1.jpg" class="img-fluid rounded" alt="Responsive image">
                                 <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i> Like Page</a></div>
                              </li>
                              <li class="">
                                 <div class="d-flex align-items-center mb-3">
                                    <img src="<?php echo base_url() ;  ?>images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                    <div class="stories-data ml-3">
                                       <h5>Cakes &amp; Bakes </h5>
                                       <p class="mb-0">Lorem Ipsum</p>
                                    </div>
                                 </div>
                                 <img src="<?php echo base_url() ;  ?>images/small/img-2.jpg" class="img-fluid rounded" alt="Responsive image">
                                 <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i> Like Page</a></div>
                              </li>
                           </ul>
                        </div>
                     </div>

                  -->
                  </div>
                  <div class="col-sm-12 text-center">
                     <img src="<?php echo base_url() ;  ?>images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
                  </div>
               </div>
            </div>
         </div>


<script type="text/javascript">
      
      function like (clickid) {
         link  = "<?php echo base_url()?>Posts/Like/"+clickid  ; 

         $.ajax({
            url: link , 
            success: function(result){
            $('#'+clickid).hide();
            $('#Liked'+clickid).show();
                        }
            });

           
      }


       function deleteP (clickid) {
         link  = "<?php echo base_url()?>Posts/deletePost/"+clickid  ; 

         $.ajax({
            url: link , 
            success: function(result){
            $('#post'+clickid).hide();
 
                        }
            });

           
      }

</script>

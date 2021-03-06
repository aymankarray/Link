


<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">

<div class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body">
                              <div class="user-post-data">
                                 <div class="d-flex flex-wrap">
                                    <div class=" mr-3">
                                       <img class="alligator-turtle  mr-3" src="https://tunivisions.link/uploads/avatar/<?php echo $postRecords->avatar ?>" >
                                    </div>
                                    <div class="media-support-info mt-2">
                                       <h5 class="mb-0 d-inline-block"><a href="https://tunivisions.link/User/ProfileShow/<?php echo $postRecords->userId ?>"  ><?php echo $postRecords->name ?></a></h5>
                                       <p class="mb-0 d-inline-block">a mise à jour son statut</p>
                                       <p class="mb-0 text-primary">Il y a <?php echo xTimeAgo($postRecords->DatePosted,date('Y-m-d H:i:s')) ; ?></p>
                                    </div>
                                    <div class="iq-card-post-toolbar">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                          <div class="iq-card-post-toolbar">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                         
                                          <div class="dropdown-menu m-0 p-0">
                                             <?php if ($userId == $postRecords->userId ){  ?>
                                             <a class="dropdown-item p-3"  >
                                                <div class="d-flex align-items-top">
                                                   <div class="icon font-size-20"><i class="ri-notification-line"></i></div>
                                                   <div class="data ml-2">
                                                      <h6>Modifier</h6>
                                                      <p class="mb-0">modifier le contenu de ce post</p>
                                                   </div>
                                                </div>
                                             </a>
                                             <a class="dropdown-item p-3" id="<?php echo $postRecords->postId ?>" onclick="deleteP(this.id)" >
                                                <div class="d-flex align-items-top">
                                                   <div class="icon font-size-20"><i class="ri-close-circle-line"></i></div>
                                                   <div class="data ml-2">
                                                      <h6>Supprimer</h6>
                                                      <p class="mb-0">Ajouter au Corbeille</p>
                                                   </div>
                                                </div>
                                             </a>
                                             <?php } else { ?>
                                             <a class="dropdown-item p-3" id="<?php echo $postRecords->postId ?>" onclick="deleteP(this.id)" >
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
                                 </div>
                              </div>
                              <div class="mt-3" >
                                 <p  style="font-size: 13" >
                                    <?php 

                                          $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
                                          $text = $postRecords->Content ;
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

                              <?php if ($postRecords->photo != 'Post___' ) { ?>
                              <div class="user-post">
                                 <a href="javascript:void();">
                                    <img src="<?php echo base_url() ?>uploads/post/<?php echo $postRecords->photo ?>" alt="post-image" class="img-fluid rounded w-100"></a>
                              </div>
                           <?php }  ?>
                              
                              <div class="comment-area mt-3">
                                 <div class="d-flex justify-content-between align-items-center">
                                    <div class="like-block position-relative d-flex align-items-center">
                                      
                                       <div class="total-comment-block">
                                          
                                          <?php if (!empty($likeCheck)) {  ?>
                                           <b id="PLiked<?php echo $postRecords->postId ?>" class='btn mb-3 btn-primary rounded-pill'  > <i class='ri-heart-2-fill'></i> <?php echo count($likeRecords) ?> J'aimes </b>

                                            <?php } else {  ?>
                                            


                                             <p class="btn btn-outline-primary rounded-pill mb-3"  id="<?php echo $postRecords->postId ?>" onclick="like(this.id)" >  <?php echo count($likeRecords) ?> <i class='ri-heart-2-fill'></i> j'aimes </p>
                                            <b id="Liked<?php echo $postRecords->postId ?>" class='btn mb-3 btn-primary rounded-pill' style="display: none" > <i class='ri-heart-2-fill'></i> <?php echo count($likeRecords)+ 1 ?> J'aimes </b>
                                             <?php }   ?>

                                             &nbsp; 

                                             <?php if  (count($commentsRecords) ==  0) {  ?>
                                                <b  class='btn btn-outline-primary rounded-pill mb-3' >
                                                   <?php echo count($commentsRecords) ?> <i class="ri-chat-3-fill"></i> Commentaires
                                                 </b>
                                             <?php } if  (count($commentsRecords) >  0 ){ ?>
                                             <b  class='btn mb-3 btn-primary rounded-pill' >
                                                   <?php echo count($commentsRecords) ?> <i class="ri-chat-3-fill"></i> Commentaires
                                                 </b>
                                             <?php } ?> 

                                          </div>
                                       </div>
                                    </div>
                                    
                                   
                                 </div>
                                 <hr>
                                 <ul class="post-comments p-0 m-0">

                                    
                        <?php 
                           
                   

                                    if(!empty($commentsRecords))
                                     { 
                                     foreach ($commentsRecords as $key ) {  ?>     
                                    
                                    <li  id="C<?php echo $key->commentId ?>" class="mb-2" style="background-color: aliceblue ">
                                       <div class="d-flex flex-wrap">
                                          <div class="user-img">
                                             <img class="alligator-turtle  mr-3" src="https://tunivisions.link/uploads/avatar/<?php echo $key->avatar ?>"  >
                                          </div>
                                          <div class="comment-data-block ml-3">
                                             <h6><a href="https://tunivisions.link/User/ProfileShow/<?php echo $key->comUserId ?>" class="text-primary"  > <?php echo $key->name ; ?> </a></h6>
                                            
                                             <p class="mb-0"><?php echo $key->content ; ?></p>
                                             <div class="d-flex flex-wrap align-items-center comment-activity">
                                             
                                                <span class="text-primary mr-3" > <?php echo xTimeAgo($key->createdDTM,date('Y-m-d H:i:s')) ; ?> 

                                                 </span>
                                                 .
                                                 <?php if ($userId == $key->userId ){  ?>
                                                 <a class="text"  id="<?php echo $key->commentId ?>" onclick="deleteComment(this.id)" > <i class="ri-delete-bin-line"></i> supprimer </a>
                                                 <?php } ?>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <?php  } }    ?>                                 
                                 </ul>
                                
                                 <form id="commentF" class="comment-text d-flex align-items-center mt-1" method="post" action="<?php echo base_url().'Posts/addNewComment/'.$postRecords->postId ?>">
                                    <input type="text" name="comment<?php echo $postRecords->postId ?>" class="form-control rounded" required>
                                    <div class="comment-attagement d-flex">
                                      
                                       <a href="#" onclick="document.getElementById('commentF').submit();" ><i class="ri-link mr-3"></i></a>
                                       <!-- 
                                       <a href="javascript:void();"><i class="ri-user-smile-line mr-3"></i></a>
                                       <a href="javascript:void();"><i class="ri-camera-line mr-3"></i></a>
                                      -->

                                                                       </div>
                                 </form>
                            
                              </div>
                           </div>
                        </div>
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

      
      function deleteComment (clickid) {
         link  = "<?php echo base_url()?>Posts/deleteComment/"+clickid  ; 

         $.ajax({
            url: link , 
            success: function(result){
            $('#C'+clickid).hide();
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
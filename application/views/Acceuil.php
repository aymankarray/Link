
<style type="text/css">
   #upload{
    display:none
}
</style>

<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 row m-0 p-0">
                    

                    <!-- publication  --> 
                    <?php foreach ($postRecords as $post ) { ?>

 
                     <div class="col-sm-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body">
                              <div class="user-post-data">
                                 <div class="d-flex flex-wrap">
                                    <div class="media-support-user-img mr-3">
                                       <img class="rounded-circle img-fluid" src="https://tunivisions.link/uploads/avatar/<?php echo $post->avatar ?>" alt="">
                                    </div>
                                    <div class="media-support-info mt-2">
                                       <h5 class="mb-0 d-inline-block"><a href="#" class=""><?php echo $post->name ?></a></h5>
                                       <p class="mb-0 d-inline-block">Added New Image in a Post</p>
                                       <p class="mb-0 text-primary"><a href="<?php echo base_url().'Posts/post/'.$post->postId ?>"><?php echo xTimeAgo($post->DatePosted,date('Y-m-d H:i:s')) ; ?></a></p>
                                    </div>
                                    <div class="iq-card-post-toolbar">
                                       <div class="dropdown">
                                          <span class="dropdown-toggle" id="postdata-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                          <div class="dropdown-menu m-0 p-0" aria-labelledby="postdata-5">
                                              <?php if ($uid == $post->userId ){  ?>
                                             <a class="dropdown-item p-3" id="<?php echo $post->postId ?>"  href="deleteP(this.id)">
                                                <div class="d-flex align-items-top">
                                                   <div class="icon font-size-20"><i class="ri-close-circle-line"></i></div>
                                                   <div class="data ml-2">
                                                      <h6>Supprimer ce Post</h6>
                                                      <p class="mb-0">See fewer posts like this.</p>
                                                   </div>
                                                </div>
                                             </a>
                                              <?php }  ?>
                                             
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="mt-3">
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
                              <?php if ($post->photo != 'Post___' ) { ?>
                                 <div class="user-post">
                                    <a href="javascript:void();">
                                       <img src="<?php echo base_url() ?>uploads/post/<?php echo $record->photo ?>" alt="post-image" class="img-fluid rounded w-100"></a>
                                 </div>
                              <?php }  ?>
                              <<div class="comment-area mt-3">
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
                     <!-- publication  -->    

                  </div>

                  <!-- Eventsss -->
                  <div class="col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Stories</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="media-story m-0 p-0">
                              <li class="d-flex mb-4 align-items-center">
                                 <i class="ri-add-line font-size-18"></i>
                                 <div class="stories-data ml-3">
                                    <h5>Creat Your Story</h5>
                                    <p class="mb-0">time to story</p>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center active">
                                 <img src="images/page-img/s2.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Anna Mull</h5>
                                    <p class="mb-0">1 hour ago</p>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <img src="images/page-img/s3.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Ira Membrit</h5>
                                    <p class="mb-0">4 hour ago</p>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <img src="images/page-img/s1.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Bob Frapples</h5>
                                    <p class="mb-0">9 hour ago</p>
                                 </div>
                              </li>
                           </ul>
                           <a href="#" class="btn btn-primary d-block mt-3">See All</a>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Events</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton" style="">
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
                           <ul class="media-story m-0 p-0">
                              <li class="d-flex mb-4 align-items-center ">
                                 <img src="images/page-img/s4.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Web Workshop</h5>
                                    <p class="mb-0">1 hour ago</p>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <img src="images/page-img/s5.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Fun Events and Festivals</h5>
                                    <p class="mb-0">1 hour ago</p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Upcoming Birthday</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="media-story m-0 p-0">
                              <li class="d-flex mb-4 align-items-center">
                                 <img src="images/user/01.jpg" alt="story-img" class="rounded-circle img-fluid">
                                 <div class="stories-data ml-3">
                                    <h5>Anna Sthesia</h5>
                                    <p class="mb-0">Today</p>
                                 </div>
                              </li>
                              <li class="d-flex align-items-center">
                                 <img src="images/user/02.jpg" alt="story-img" class="rounded-circle img-fluid">
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
                                    <img src="images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                    <div class="stories-data ml-3">
                                       <h5>Iqonic Studio</h5>
                                       <p class="mb-0">Lorem Ipsum</p>
                                    </div>
                                 </div>
                                 <img src="images/small/img-1.jpg" class="img-fluid rounded" alt="Responsive image">
                                 <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i> Like Page</a></div>
                              </li>
                              <li class="">
                                 <div class="d-flex align-items-center mb-3">
                                    <img src="images/page-img/42.png" alt="story-img" class="rounded-circle img-fluid avatar-50">
                                    <div class="stories-data ml-3">
                                       <h5>Cakes &amp; Bakes </h5>
                                       <p class="mb-0">Lorem Ipsum</p>
                                    </div>
                                 </div>
                                 <img src="images/small/img-2.jpg" class="img-fluid rounded" alt="Responsive image">
                                 <div class="mt-3"><a href="#" class="btn d-block"><i class="ri-thumb-up-line mr-2"></i> Like Page</a></div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 text-center">
                     <img src="images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;">
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


<style type="text/css">
       .profile-turtle {
  object-fit: cover;
  object-position: 50% 50%;
  width: 150px;
  height: 150px;
}
</style>


      <div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-body profile-page p-0">
                           <div class="profile-header">
                              <div class="cover-container">
                                 <img src="https://scontent.ftun3-1.fna.fbcdn.net/v/t1.0-9/79385061_951733981864962_3787148526337654784_o.jpg?_nc_cat=107&_nc_sid=dd9801&_nc_ohc=4ZmEDOHWD8IAX_208AJ&_nc_ht=scontent.ftun3-1.fna&oh=aac7c6637b936148262d2f18ae14e7de&oe=5EEFBE0C" alt="profile-bg" class="rounded img-fluid">
                                 <ul class="header-nav d-flex flex-wrap justify-end p-0 m-0">
                                    <li><a href="javascript:void();"><i class="ri-pencil-line"></i></a></li>
                                    <li><a href="javascript:void();"><i class="ri-settings-4-line"></i></a></li>
                                 </ul>
                              </div>
                              <div class="user-detail text-center mb-3">
                                 <div class="" >
                                    <img  src="<?php echo base_url() ?>uploads/avatar/<?php echo $userInfo->avatar ?>" alt="profile-img" class=" profile-turtle" style="border-style: solid;border-color: white;" >
                                 </div>
                                 <div class="profile-detail">
                                    <h3 class=""><?php echo $userInfo->name ?></h3>
                                 </div>
                              </div>
                              <div class="profile-info p-4 d-flex align-items-center justify-content-between position-relative">
                                 <div class="social-links">
                                    <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                       <?php if ($userInfo->facebook != '' ) { ?>
                                       <li class="text-center pr-3">
                                          <a href="<?php echo $userInfo->facebook ?>"><img src="<?php echo base_url() ;  ?>images/icon/08.png" class="img-fluid rounded" alt="facebook"></a>
                                       </li>
                                       <?php } ?>
                                       <?php if ($userInfo->instagram != '' ) { ?>
                                       <li class="text-center pr-3">
                                          <a href="<?php echo $userInfo->instagram ?>"><img src="<?php echo base_url() ;  ?>images/icon/10.png" class="img-fluid rounded" alt="Instagram"></a>
                                       </li>
                                       <?php } ?>
                                       <?php if ($userInfo->linkedin != '' ) { ?>
                                       <li class="text-center pr-3">
                                          <a href="<?php echo $userInfo->linkedin ?>"><img src="<?php echo base_url() ;  ?>images/icon/13.png" class="img-fluid rounded" alt="linkedin"></a>
                                       </li>
                                       <?php } ?>
                                    </ul>
                                 </div>
                                 <div class="social-info">
                                    <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                       <li class="text-center pl-3">
                                          <h6>Posts</h6>
                                          <p class="mb-0"><?php echo count($postRecords) ?></p>
                                       </li>
                                       
                                       <li class="text-center pl-3">
                                          <h6>Score</h6>
                                          <p class="mb-0">206</p>
                                       </li>
                                       <!--
                                       <li class="text-center pl-3">
                                          <h6>Following</h6>
                                          <p class="mb-0">100</p>
                                       </li>
                                       -->
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-body p-0">
                           <div class="user-tabing">
                              <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                                 <li class="col-sm-3 p-0">
                                    <a class="nav-link active" data-toggle="pill" href="#timeline">Timeline</a>
                                 </li>
                                 <li class="col-sm-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#about">About</a>
                                 </li>
                                 <li class="col-sm-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#friends">friends</a>
                                 </li>
                                 <li class="col-sm-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#photos">Photos</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="tab-content">
                        <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                           <div class="iq-card-body p-0">
                              <div class="row">
                                 <div class="col-lg-4">
                                    <div class="iq-card">
                                       <div class="iq-card-body">
                                          <a href="#">
                                             <span class="badge badge-pill badge-primary font-weight-normal ml-auto mr-1">
                                                <i class="ri-star-line"></i>
                                             </span> 
                                             <?php echo count($ressourceInfo) ?> Badges
                                          </a>
                                       </div>
                                    </div>
                                    <div class="iq-card">
                                       <div class="iq-card-header d-flex justify-content-between">
                                          <div class="iq-header-title">
                                             <h4 class="card-title">Tunivisions Experience</h4>
                                          </div>
                                          <div class="iq-card-header-toolbar d-flex align-items-center">
                                             <p class="m-0"><a href="javacsript:void();" data-toggle="modal" data-target="#exampleModal"> Modifier </a></p>
                                          </div>
                                       </div>
                                       <div class="iq-card-body">
                                          <div class="row">
                                             <?php foreach ($Experience as $key) {   ?>
                                             <div class="col-sm-12">
                                                <div class="event-post position-relative">

                                                   <div class="iq-card-body  p-2">
                                                      <h6>
                                                         <i class="ri-briefcase-line"></i>  <b><?php echo $key->role   ?></b> <?php echo $key->cellule ?> chez <a class="text-primary" href="<?php echo base_url() ?>club/clubInfo/<?php echo  $key->clubId ?>"  >
                                                        <?php if($key->clubId > 3) { echo 'Club' ; }  ?>    
                                                        Tunivisions     
                                                       <?php echo $key->ClubName   ?></a> 
                                                      <?php if ( $key->Approuve == 0 ) {   ?>
                                                         <i class="ri-checkbox-circle-fill" style="color:#05BD53 "></i> 
                                                      <?php } ?> 
                                                   </h6>
                                                      <p><?php echo $key->attacheDT?>  - <?php echo $key->endDT   ?></p>
                                                   </div>
                                                </div>
                                             </div>
                                              <?php }  ?>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-card">
                                       <div class="iq-card-header d-flex justify-content-between">
                                          <div class="iq-header-title">
                                             <h4 class="card-title">Diplomes</h4>
                                          </div>
                                          <div class="iq-card-header-toolbar d-flex align-items-center">
                                             <p class="m-0"><a href="javacsript:void();" data-toggle="modal" data-target="#exampleModal1"> Modifier </a></p>
                                          </div>
                                       </div>
                                       <div class="iq-card-body">
                                          <div class="row">
                                             <?php foreach ($Diplome as $key) {   ?>
                                                <div class="col-sm-12">
                                                   <div class="event-post position-relative">
                                                      <div class="iq-card-body  p-2">
                                                         <h6>
                                                            <i class="ri-briefcase-line"></i> <b><?php echo $key->type  ?></b> <?php echo $key->titre ?> à <a class="text-primary" ><?php echo $key->instituts  ?> </a>
                                                             
                                                         </h6>
                                                         <p><?php echo $key->dateDebut?> - <?php echo $key->dateFin  ?></p>
                                                      </div>

                                                   </div>
                                                </div>
                                              <?php }  ?>
                                          </div>
                                       </div>
                                    </div>
                                    
                                    
                                    
                                 </div>
                                 <div class="col-lg-8">
                                    <div class="iq-card">
                                       <div class="iq-card-header d-flex justify-content-between">
                                          <div class="iq-header-title">
                                             <h4 class="card-title">Formations</h4>
                                          </div>
                                       </div>
                                       <div class="iq-card-body" id=>
                                          <?php foreach ($ressourceInfo as $key) {   ?>
                                          
                                          <div class="timeline-dots"></div>
                                          <h6 class="float-left mb-1"> 
                                             <?php echo $key->titre   ?>  <a> (<?php echo $key->score?>  points ) </a>
                                          </h6>
                                          <small class="float-right mt-1">
                                             <?php echo $key->startDate?> 
                                          </small>
                                          <div class="d-inline-block w-100">
                                             <p>

                                             </p>
                                          </div>
                                          
                                          <?php }   ?>

                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="about" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-body">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                                          <li>
                                             <a class="nav-link active" data-toggle="pill" href="#basicinfo">Contact and Basic Info</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" data-toggle="pill" href="#family">Family and Relationship</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" data-toggle="pill" href="#work">Work and Education</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" data-toggle="pill" href="#lived">Places You've Lived</a>
                                          </li>
                                          <li>
                                             <a class="nav-link" data-toggle="pill" href="#details">Details About You</a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="col-md-9 pl-4">
                                       <div class="tab-content">
                                          <div class="tab-pane fade active show" id="basicinfo" role="tabpanel">
                                             <h4>Contact Information</h4>
                                             <hr>
                                             <div class="row">
                                                <div class="col-3">
                                                   <h6>Email</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $userInfo->email ;?></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Mobile</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php if($SA == 1 ){echo $userInfo->mobile ;} ?></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Address</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $userInfo->adresse ?> <br> <?php echo $userInfo->gouvernorat ?> <?php echo $userInfo->delegation ?></p>
                                                </div>
                                             </div>
                                             <h4 class="mt-3">Social</h4>
                                             <hr>
                                             <div class="row">
                                                <div class="col-3">
                                                   <h6>Facebook</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><a  href="<?php echo $userInfo->facebook ?>"><?php echo $userInfo->facebook ?></a></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Instagram</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><a  href="<?php echo $userInfo->instagram ?>"><?php echo $userInfo->instagram ?></a></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Linkedin</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><a  href="<?php echo $userInfo->linkedin ?>"><?php echo $userInfo->linkedin ?></a></p>
                                                </div>

                                             </div>
                                             <h4 class="mt-3">Basic Information</h4>
                                             <hr>
                                             <div class="row">
                                                <div class="col-3">
                                                   <h6>Date de naissance</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo date('d/m', strtotime($userInfo->birthday)); ?></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Année</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo date('Y', strtotime($userInfo->birthday)); ?></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>Gender</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0"><?php echo $userInfo->sexe ;?></p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>interested in</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0">Designing</p>
                                                </div>
                                                <div class="col-3">
                                                   <h6>language</h6>
                                                </div>
                                                <div class="col-9">
                                                   <p class="mb-0">Arabe , francais ,Anglais</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="tab-pane fade" id="family" role="tabpanel">
                                             <h4 class="mb-3">Relationship</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Your Relationship Status</h6>
                                                   </div>
                                                </li>
                                             </ul>
                                             <h4 class="mt-3 mb-3">Family Members</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Family Members</h6>
                                                   </div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Paul Molive</h6>
                                                      <p class="mb-0">Brothe</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Anna Mull</h6>
                                                      <p class="mb-0">Sister</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Paige Turner</h6>
                                                      <p class="mb-0">Cousin</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="tab-pane fade" id="work" role="tabpanel">
                                             <h4 class="mb-3">Work</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Work Place</h6>
                                                   </div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Themeforest</h6>
                                                      <p class="mb-0">Web Designer</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>iqonicdesign</h6>
                                                      <p class="mb-0">Web Developer</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>W3school</h6>
                                                      <p class="mb-0">Designer</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                             </ul>
                                             <h4 class="mb-3">Professional Skills</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Professional Skills</h6>
                                                   </div>
                                                </li>
                                             </ul>
                                             <h4 class="mt-3 mb-3">College</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add College</h6>
                                                   </div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Lorem ipsum</h6>
                                                      <p class="mb-0">USA</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="tab-pane fade" id="lived" role="tabpanel">
                                             <h4 class="mb-3">Current City and Hometown</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Georgia</h6>
                                                      <p class="mb-0">Georgia State</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><img src="<?php echo base_url() ;  ?>images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Atlanta</h6>
                                                      <p class="mb-0">Atlanta City</p>
                                                   </div>
                                                   <div class="edit-relation"><a href="javascript:void();"><i class="ri-edit-line mr-2"></i>Edit</a></div>
                                                </li>
                                             </ul>
                                             <h4 class="mt-3 mb-3">Other Places Lived</h4>
                                             <ul class="suggestions-lists m-0 p-0">
                                                <li class="d-flex mb-4 align-items-center">
                                                   <div class="user-img img-fluid"><i class="ri-add-fill"></i></div>
                                                   <div class="media-support-info ml-3">
                                                      <h6>Add Place</h6>
                                                   </div>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="tab-pane fade" id="details" role="tabpanel">
                                             <h4 class="mb-3">About You</h4>
                                             <p>Hi, I’m Bni, I’m 26 and I work as a Web Designer for the iqonicdesign.</p>
                                             <h4 class="mt-3 mb-3">Other Name</h4>
                                             <p>Bini Rock</p>
                                             <h4 class="mt-3 mb-3">Favorite Quotes</h4>
                                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="friends" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-body">
                                 <h2>Friends</h2>
                                 <div class="friend-list-tab mt-2">
                                    <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                                       <li>
                                          <a class="nav-link active" data-toggle="pill" href="#all-friends">All Friends</a>
                                       </li>
                                       <li>
                                          <a class="nav-link" data-toggle="pill" href="#recently-add">Recently Added</a>
                                       </li>
                                       <li>
                                          <a class="nav-link" data-toggle="pill" href="#closefriends">Close friends</a>
                                       </li>
                                       <li>
                                          <a class="nav-link" data-toggle="pill" href="#home">Home/Town</a>
                                       </li>
                                       <li>
                                          <a class="nav-link" data-toggle="pill" href="#following">Following</a>
                                       </li>
                                    </ul>
                                    <div class="tab-content">
                                       <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Petey Cruiser</h5>
                                                               <p class="mb-0">15  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Anna Sthesia</h5>
                                                               <p class="mb-0">50  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton02" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton02">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Paul Molive</h5>
                                                               <p class="mb-0">10  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton03" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton03">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Gail Forcewind</h5>
                                                               <p class="mb-0">20  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton04" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton04">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Paige Turner</h5>
                                                               <p class="mb-0">12  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton05" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>b Frapples</h5>
                                                               <p class="mb-0">6  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton06" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton06">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/13.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Walter Melon</h5>
                                                               <p class="mb-0">30  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton07" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton07">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/14.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Barb Ackue</h5>
                                                               <p class="mb-0">14  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton08" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton08">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Buck Kinnear</h5>
                                                               <p class="mb-0">16  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton09" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton09">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Ira Membrit</h5>
                                                               <p class="mb-0">22  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton10" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton10">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Shonda Leer</h5>
                                                               <p class="mb-0">10  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton11" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton11">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>ock Lee</h5>
                                                               <p class="mb-0">18  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton12" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton12">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Maya Didas</h5>
                                                               <p class="mb-0">40  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton13" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton13">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Rick O'Shea</h5>
                                                               <p class="mb-0">50  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton14" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton14">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Pete Sariya</h5>
                                                               <p class="mb-0">5  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton15" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton15">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Monty Carlo</h5>
                                                               <p class="mb-0">2  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton16" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton16">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Sal Monella</h5>
                                                               <p class="mb-0">0  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton17" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton17">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Sue Vaneer</h5>
                                                               <p class="mb-0">25  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton18" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton18">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Cliff Hanger</h5>
                                                               <p class="mb-0">18  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton19" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton19">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Barb Dwyer</h5>
                                                               <p class="mb-0">23  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton20" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton20">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Terry Aki</h5>
                                                               <p class="mb-0">8  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton21" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton21">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/13.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Cory Ander</h5>
                                                               <p class="mb-0">7  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton22" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton22">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/14.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Robin Banks</h5>
                                                               <p class="mb-0">14  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton23" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton23">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Jimmy Changa</h5>
                                                               <p class="mb-0">10  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton24" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton24">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Barry Wine</h5>
                                                               <p class="mb-0">18  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton25" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton25">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Poppa Cherry</h5>
                                                               <p class="mb-0">16  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton26" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton26">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Zack Lee</h5>
                                                               <p class="mb-0">33  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton27" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton27">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Don Stairs</h5>
                                                               <p class="mb-0">15  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton28" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton28">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Peter Pants</h5>
                                                               <p class="mb-0">12  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton29" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton29">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Hal Appeno </h5>
                                                               <p class="mb-0">13  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton30" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton30">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-pane fade" id="recently-add" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Otto Matic</h5>
                                                               <p class="mb-0">4  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton31" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton31">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Moe Fugga</h5>
                                                               <p class="mb-0">16  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton32" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton32">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Tom Foolery</h5>
                                                               <p class="mb-0">14  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton33" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton33">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Bud Wiser</h5>
                                                               <p class="mb-0">16  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton34" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton34">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Polly Tech</h5>
                                                               <p class="mb-0">10  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton35" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton35">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Holly Graham</h5>
                                                               <p class="mb-0">8  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton36" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton36">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Tara Zona</h5>
                                                               <p class="mb-0">5  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton37" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton37">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Barry Cade</h5>
                                                               <p class="mb-0">20  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton38" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton38">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-pane fade" id="closefriends" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Bud Wiser</h5>
                                                               <p class="mb-0">32  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton39" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton39">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Otto Matic</h5>
                                                               <p class="mb-0">9  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton40" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton40">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Peter Pants</h5>
                                                               <p class="mb-0">2  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton41" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton41">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Zack Lee</h5>
                                                               <p class="mb-0">15  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton42" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton42">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Barry Wine</h5>
                                                               <p class="mb-0">36  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton43" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton43">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Robin Banks</h5>
                                                               <p class="mb-0">22  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton44" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton44">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Cory Ander</h5>
                                                               <p class="mb-0">18  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton45" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton45">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Moe Fugga</h5>
                                                               <p class="mb-0">12  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton46" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton46">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Polly Tech</h5>
                                                               <p class="mb-0">30  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton47" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton47">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Hal Appeno</h5>
                                                               <p class="mb-0">25  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton48" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton48">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-pane fade" id="home" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Paul Molive</h5>
                                                               <p class="mb-0">14  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton49" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton49">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Paige Turner</h5>
                                                               <p class="mb-0">8  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton50" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton50">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Barb Ackue</h5>
                                                               <p class="mb-0">23  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton51" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton51">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Ira Membrit</h5>
                                                               <p class="mb-0">16  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton52" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton52">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Maya Didas</h5>
                                                               <p class="mb-0">12  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton53" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton53">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-pane fade" id="following" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Maya Didas</h5>
                                                               <p class="mb-0">20  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton54" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton54">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Monty Carlo</h5>
                                                               <p class="mb-0">3  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton55" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton55">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Cliff Hanger</h5>
                                                               <p class="mb-0">20  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton56" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton56">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>b Ackue</h5>
                                                               <p class="mb-0">12  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton57" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton57">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/09.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Bob Frapples</h5>
                                                               <p class="mb-0">12  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton58" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton58">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/10.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Anna Mull</h5>
                                                               <p class="mb-0">6  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton59" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton59">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/15.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>ry Wine</h5>
                                                               <p class="mb-0">15  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton60" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton60">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/16.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Don Stairs</h5>
                                                               <p class="mb-0">12  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton61" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton61">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/17.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Peter Pants</h5>
                                                               <p class="mb-0">8  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton62" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton62">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/18.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Polly Tech</h5>
                                                               <p class="mb-0">18  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton63" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton63">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/19.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Tara Zona</h5>
                                                               <p class="mb-0">30  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton64" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton64">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Arty Ficial</h5>
                                                               <p class="mb-0">15  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton65" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton65">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/06.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Bill Emia</h5>
                                                               <p class="mb-0">25  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton66" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton66">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/07.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Bill Yerds</h5>
                                                               <p class="mb-0">9  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton67" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton67">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 mb-3">
                                                   <div class="iq-friendlist-block">
                                                      <div class="d-flex align-items-center justify-content-between">
                                                         <div class="d-flex align-items-center">
                                                            <a href="#">
                                                            <img src="<?php echo base_url() ;  ?>images/user/08.jpg" alt="profile-img" class="img-fluid">
                                                            </a>
                                                            <div class="friend-info ml-3">
                                                               <h5>Matt Innae</h5>
                                                               <p class="mb-0">19  friends</p>
                                                            </div>
                                                         </div>
                                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                                            <div class="dropdown">
                                                               <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton68" data-toggle="dropdown" aria-expanded="true" role="button">
                                                               <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                               </span>
                                                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton68">
                                                                  <a class="dropdown-item" href="#">Get Notification</a>
                                                                  <a class="dropdown-item" href="#">Close Friend</a>
                                                                  <a class="dropdown-item" href="#">Unfollow</a>
                                                                  <a class="dropdown-item" href="#">Unfriend</a>
                                                                  <a class="dropdown-item" href="#">Block</a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="photos" role="tabpanel">
                           <div class="iq-card">
                              <div class="iq-card-body">
                                 <h2>Photos</h2>
                                 <div class="friend-list-tab mt-2">
                                    <ul class="nav nav-pills d-flex align-items-center justify-content-left friend-list-items p-0 mb-2">
                                       <li>
                                          <a class="nav-link active" data-toggle="pill" href="#photosofyou">Photos of You</a>
                                       </li>
                                       <li>
                                          <a class="nav-link" data-toggle="pill" href="#your-photos">Your Photos</a>
                                       </li>
                                    </ul>
                                    <div class="tab-content">
                                       <div class="tab-pane fade active show" id="photosofyou" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/60.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/61.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/62.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/63.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/64.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/65.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-pane fade" id="your-photos" role="tabpanel">
                                          <div class="iq-card-body p-0">
                                             <div class="row">
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/51.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/52.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/53.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/54.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/55.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/56.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/57.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/58.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/59.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                                <div class="col-md-6 col-lg-3 mb-3">
                                                   <div class="user-images position-relative overflow-hidden">
                                                      <a href="#">
                                                      <img src="<?php echo base_url() ;  ?>images/page-img/60.jpg" class="img-fluid rounded" alt="Responsive image">
                                                      </a>
                                                      <div class="image-hover-data">
                                                         <div class="product-elements-icon">
                                                            <ul class="d-flex align-items-center m-0 p-0 list-inline">
                                                               <li><a href="#" class="pr-3 text-white"> 60 <i class="ri-thumb-up-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 30 <i class="ri-chat-3-line"></i> </a></li>
                                                               <li><a href="#" class="pr-3 text-white"> 10 <i class="ri-share-forward-line"></i> </a></li>
                                                            </ul>
                                                         </div>
                                                      </div>
                                                      <a href="#" class="image-edit-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit or Remove"><i class="ri-edit-2-fill"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>




         <!--  experience   -->
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

                        <label>Debut</label>
                        <input type="number"  name="attacheDT" id="attacheDT"  class="form-control" min="2016" max="2020" required>
                        <label>Fin</label>
                        <input type="number" min="2017" max="2017"   name="endDT" id="endDT" class="form-control"  required>
                     
               
                        <label>Poste</label>
                        <select name="roleId" id="roleId"  class="form-control" required >
                           <option value="-1" >Veuillez choisir votre poste </option>
                           <?php foreach ($Roles as $key ) {
                            echo "<option value='".$key->roleId."'>".$key->role."</option>" ; 
                           }?>
                        </select>
                        <br>
                        <label>Cellule</label>
                        <select name="cellule" id="cellule"  class="form-control" >
                           <option value="-1" >Veuillez choisir votre unité </option>
                           <option value="" ></option>
                           <option value="Marketing" >Marketing</option>
                           <option value="Administration et finance" >Administration et finance</option>
                           <option value="Evenementiel" >Evenementiel</option>
                           <option value="Gestion des talents" >Gestion des talents</option>
                        </select>
                        <br>
                        <label>Club</label>
                        <select name="clubId" id="clubId"   class="form-control" required >
                           <option value="-1" >Veuillez choisir votre club </option>
                           <?php foreach ($Clubs as $key ) {
                            echo "<option value='".$key->clubID."'>".$key->name."</option>" ;  
                           }?>
                        </select>


                     
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <input id="TF" type="submit"  class="btn btn-primary">
                  </div>
                  </form>
               </div>
            </div>
         </div>
      <!-- -->



      <!--  diplome   -->
         <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <form  method="post">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">ajouter un Diplome</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <div class="modal-body">

                        <label>Debut</label>
                        <input type="number"  name="attacheDT" id="dateDebut"  class="form-control" min="2010" max="2020" required>
                        <label>Fin</label>
                        <input type="number" min="2010" max="2020" name="dateFin" id="dateFin" class="form-control"  required>
                     
               
                        <label>Type de diplome : </label>
                        <select name="type" id="type"  class="form-control" required >
                           <option value="" >Veuillez choisir votre poste </option>
                           <option value="Licence appliquée" >Licence appliquée</option>
                           <option value="Licence fondamentale" >Licence fondamentale</option>
                           <option value="Master professionnel" >Master professionnel</option>
                           <option value="Master de recherche" >Master de recherche</option>
                           <option value="Ingénieurie" >Ingénieurie</option>
                        </select>
                        <br>
                        <label>Titre : </label>
                        <input type="text"   class="form-control" name="titre" >
                        <br>
                        <label>Ecole : </label>
                        <select name="clubId" id="clubId"   class="form-control" required >
                           <option value="-1" >Veuillez choisir votre école </option>
                           <?php foreach ($Clubs as $key ) {
                            echo "<option value='".$key->clubID."'>".$key->name."</option>" ;  
                           }?>
                        </select>


                     
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <input id="TF" type="submit"  class="btn btn-primary">
                  </div>
                  </form>
               </div>
            </div>
         </div>
      <!-- -->
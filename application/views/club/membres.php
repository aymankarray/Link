<section>
    <div class="gap2 gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row merged20" id="page-contents">
              <!-- user profile banner  -->
              <div class="col-lg-12">
                <div class="central-meta">
                  <div class="title-block">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="align-left">
                          <h5>Friends / Followers <span>44</span></h5>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="row merged20">
                          <div class="col-lg-7 col-lg-7 col-sm-7">
                            <form method="post">
                              <input type="text" placeholder="Search Friend">
                              <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="select-options">
                              <select class="select" style="display: none;">
                                <option>Sort by</option>
                                <option>A to Z</option>
                                <option>See All</option>
                                <option>Newest</option>
                                <option>oldest</option>
                              </select><div class="chosen-container chosen-container-single" style="width: 72px;" title=""><a class="chosen-single"><span>Sort by</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
                            </div>
                          </div>
                          <div class="col-lg-1 col-md-1 col-sm-1">
                            <div class="option-list">
                              <i class="fa fa-ellipsis-v"></i>
                              <ul>
                                <li><a title="" href="#">Show Friends Public</a></li>
                                <li><a title="" href="#">Show Friends Private</a></li>
                                <li><a title="" href="#">Mute Notifications</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- title block -->
                <div class="central-meta padding30">
                  <div class="row">
                    <?php foreach ($members as $member ) { ?>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="friend-box">
                        <figure>
                          <img src="images/resources/frnd-cover1.jpg" alt="">
                          <span>Followers: 120</span>
                        </figure>
                        <div class="frnd-meta">
                          <img src="images/resources/frnd-figure1.jpg" alt="">
                          <div class="frnd-name">
                            <a href="#" title=""><?php echo $member->name ?></a>
                            <span><?php echo $member->role ?></span>
                          </div>
                          <ul class="frnd-info">
                            <li><span>Departement:</span><?php echo $member->cellule ?></li>
                            <li><span>Anniversaire :</span> <?php echo $member->birthday ?></li>
                            <li><span>Sexe :</span> <?php echo $member->sexe ?></li>
                            <li><span>E-Mail:</span><?php echo $member->email ?></li>
                            <li><span>Photos:</span> 144</li>
                            
                          </ul>
                          <a class="send-mesg" href="#" title="">Message</a>
                          <div class="more-opotnz">
                            <i class="fa fa-ellipsis-h"></i>
                            <ul>
                              <li><a href="#" title="">Block</a></li>
                              <li><a href="#" title="">UnBlock</a></li>
                              <li><a href="#" title="">Mute Notifications</a></li>
                              <li><a href="#" title="">hide from friend list</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                      # code...
                     <?php }  ?>
                  </div>
                  <div class="lodmore">
                    <span>Viewing 1-8 of 44 friends</span>
                    <button class="btn-view btn-load-more"></button>
                  </div>
                </div>
              </div>  
            </div>  
          </div>
        </div>
      </div>
    </div>  
  </section>
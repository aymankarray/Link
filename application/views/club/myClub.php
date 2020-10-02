<section>
    <div class="gap2 gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row merged20" id="page-contents">
              <div class="user-profile">
                <figure>
                  <div class="edit-pp">
                    <label class="fileContainer">
                      <i class="fa fa-camera"></i>
                      <input type="file">
                    </label>
                  </div>
                  <img src="<?php echo base_url()?>assets/images/resources/fav-banner.jpg" alt="">                  
                  <ul class="profile-controls">
                    <li><a href="#" title="" data-toggle="tooltip" data-original-title="Like"><i class="fa fa-thumbs-up"></i></a></li>
                    <li><a href="#" title="" data-toggle="tooltip" data-original-title="Follow"><i class="fa fa-star"></i></a></li>
                    <li><a class="send-mesg" href="#" title="" data-toggle="tooltip" data-original-title="Send Message"><i class="fa fa-comment"></i></a></li>
                    <li>
                      <div class="edit-seting" title="" data-toggle="tooltip" data-original-title="Edit Profile image"><i class="fa fa-sliders"></i>
                        <ul class="more-dropdown">
                          <li>
                            <a href="#" title="">Share this Page</a>
                          </li>
                          <li>
                            <a href="#" title="">Update Profile Photo</a>
                          </li>
                          <li>
                            <a href="#">Update Header Photo</a>
                          </li>
                          <li>
                            <a href="setting.html" title="" data-toggle="tooltip" data-original-title="">Account Settings</a>
                          </li>
                          <li>
                            <a href="timeline-friends.html" title="">Invite Friends</a>
                          </li>
                          <li>
                            <a href="support-and-help.html" title="">Find support</a>
                          </li>
                          <li>
                            <a href="setting.html" title="">Block Page</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                  <ol class="pit-rate">
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class="rated"><i class="fa fa-star"></i></li>
                    <li class=""><i class="fa fa-star"></i></li>
                    <li><span>4.7/5</span></li>
                  </ol>
                </figure>
                
                <div class="profile-section">
                  <div class="row">
                    <div class="col-lg-2">
                      <div class="profile-author">
                        <a class="profile-author-thumb" href="about.html">
                          <img alt="author" src="images/resources/fav-dp.jpg">
                          <div class="edit-dp">
                            <label class="fileContainer">
                              <i class="fa fa-camera"></i>
                              <input type="file">
                            </label>
                          </div>
                        </a>
                        <div class="author-content">
                          <a class="h4 author-name" href="#"><?php echo $clubInfo->name ?></a>
                          <div class="country"><?php echo $clubInfo->city ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-10">
                      <ul class="profile-menu">
                        <li>
                          <a class="active" href="<?php echo base_url() ?>Club/clubInfo/<?php echo $cl ?>">Projets</a>
                        </li>
                        <li>
                          <a class="" href="<?php echo base_url() ?>Club/clubInfo/<?php echo $cl ?>">Membes</a>
                        </li>

                        
                      </ul>
                      <ol class="folw-detail">
                        <li><span>Posts</span><ins>101</ins></li>
                        <li><span>Followers</span><ins>1.3K</ins></li>
                        <li><span>Members</span><ins>22k</ins></li>
                      </ol>
                    </div>
                  </div>
                </div>  
              </div><!-- user profile banner  -->
             <!-- sidebar -->
              <div class="col-lg-9">
                
                
                
                <div class="loadMore">
                  <div class="central-meta item" style="display: inline-block;">
                    <div class="user-post">
                      <div class="friend-info">
                        <figure>
                          <img src="images/resources/nearly1.jpg" alt="">
                        </figure>
                        <div class="friend-name">
                          <div class="more">
                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                              <ul>
                                <li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
                                <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                <li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
                                <li><i class="fa fa-address-card-o"></i>Boost This Post</li>
                                <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                                <li><i class="fa fa-wpexplorer"></i>Select as featured</li>
                                <li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
                              </ul>
                            </div>
                          </div>
                          <ins><a href="time-line.html" title="">Digital Market</a></ins>
                          <span>sponsored <i class="fa fa-globe"></i></span>
                          
                        </div>
                        <div class="post-meta">
                          <figure>
                            <img src="images/sponsors.gif" alt="">
                            <ul class="like-dislike">
                              <li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                              <li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
                              <li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
                            </ul>
                          </figure> 
                          <div class="description">
                            <a href="#" class="learnmore" data-ripple="">Learn More</a>
                            <p>
                              Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc.

                            </p>
                          </div>
                          <div class="we-video-info">
                            <ul>
                              <li>
                                <span class="views" title="views">
                                  <i class="fa fa-eye"></i>
                                  <ins>1.2k</ins>
                                </span>
                              </li>
                              <li>
                                <div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
                              </li>
                              <li>
                                <span class="comment" title="Comments">
                                  <i class="fa fa-commenting"></i>
                                  <ins>52</ins>
                                </span>
                              </li>

                              <li>
                                <span>
                                  <a class="share-pst" href="#" title="Share">
                                    <i class="fa fa-share-alt"></i>
                                  </a>
                                  <ins>20</ins>
                                </span> 
                              </li>
                            </ul>
                            <div class="users-thumb-list">
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                <img alt="" src="images/resources/userlist-1.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                <img alt="" src="images/resources/userlist-2.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                <img alt="" src="images/resources/userlist-3.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                <img alt="" src="images/resources/userlist-4.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                <img alt="" src="images/resources/userlist-5.jpg">  
                              </a>
                              <span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
                            </div>
                          </div>
                        </div>
                        <div class="coment-area" style="display: block;">
                          <ul class="we-comet">
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/nearly3.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>

                            </li>
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/comet-4.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Sophia</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster.
                                  <i class="em em-smiley"></i>
                                </p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>
                            </li>
                            <li>
                              <a href="#" title="" class="showmore underline">more comments+</a>
                            </li>
                            <li class="post-comment">
                              <div class="comet-avatar">
                                <img src="images/resources/nearly1.jpg" alt="">
                              </div>
                              <div class="post-comt-box">
                                <form method="post">
                                  <textarea placeholder="Post your comment"></textarea>
                                  <div class="add-smiles">
                                    <div class="uploadimage">
                                      <i class="fa fa-image"></i>
                                      <label class="fileContainer">
                                        <input type="file">
                                      </label>
                                    </div>
                                    <span class="em em-expressionless" title="add icon"></span>
                                    <div class="smiles-bunch">
                                      <i class="em em---1"></i>
                                      <i class="em em-smiley"></i>
                                      <i class="em em-anguished"></i>
                                      <i class="em em-laughing"></i>
                                      <i class="em em-angry"></i>
                                      <i class="em em-astonished"></i>
                                      <i class="em em-blush"></i>
                                      <i class="em em-disappointed"></i>
                                      <i class="em em-worried"></i>
                                      <i class="em em-kissing_heart"></i>
                                      <i class="em em-rage"></i>
                                      <i class="em em-stuck_out_tongue"></i>
                                    </div>
                                  </div>

                                  <button type="submit"></button>
                                </form> 
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div><!-- digital sponsors -->
                  <div class="central-meta item" style="display: inline-block;">
                    <div class="user-post">
                      <div class="friend-info">
                        <figure>
                          <img src="images/resources/friend-avatar10.jpg" alt="">
                        </figure>
                        <div class="friend-name">
                          <div class="more">
                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                              <ul>
                                <li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
                                <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                <li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
                                <li><i class="fa fa-address-card-o"></i>Boost This Post</li>
                                <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                                <li><i class="fa fa-wpexplorer"></i>Select as featured</li>
                                <li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
                              </ul>
                            </div>
                          </div>
                          <ins><a href="time-line.html" title="">Mathilda Brinker</a></ins>
                          <span>published: june,2 2020 19:PM</span>
                        </div>
                        <div class="post-meta">
                          <div class="description">
                            <p>
                              World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
                            </p>
                          </div>
                          
                          <ul class="like-dislike">
                            <li><a href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                            <li><a href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
                            <li><a href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
                          </ul>
                          <div class="we-video-info">
                            <ul>
                              <li>
                                <span class="views" title="views">
                                  <i class="fa fa-eye"></i>
                                  <ins>1.2k</ins>
                                </span>
                              </li>
                              <li>
                                <div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
                              </li>
                              <li>
                                <span class="comment" title="Comments">
                                  <i class="fa fa-commenting"></i>
                                  <ins>52</ins>
                                </span>
                              </li>

                              <li>
                                <span>
                                  <a class="share-pst" href="#" title="Share">
                                    <i class="fa fa-share-alt"></i>
                                  </a>
                                  <ins>20</ins>
                                </span> 
                              </li>
                            </ul>
                            <div class="users-thumb-list">
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                <img alt="" src="images/resources/userlist-1.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                <img alt="" src="images/resources/userlist-2.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                <img alt="" src="images/resources/userlist-3.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                <img alt="" src="images/resources/userlist-4.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                <img alt="" src="images/resources/userlist-5.jpg">  
                              </a>
                              <span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
                            </div>
                          </div>
                        </div>
                        <div class="coment-area" style="">
                          <ul class="we-comet">
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/nearly3.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>

                            </li>
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/comet-4.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Sophia</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster.
                                  <i class="em em-smiley"></i>
                                </p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>
                            </li>
                            <li>
                              <a href="#" title="" class="showmore underline">more comments+</a>
                            </li>
                            <li class="post-comment">
                              <div class="comet-avatar">
                                <img src="images/resources/nearly1.jpg" alt="">
                              </div>
                              <div class="post-comt-box">
                                <form method="post">
                                  <textarea placeholder="Post your comment"></textarea>
                                  <div class="add-smiles">
                                    <div class="uploadimage">
                                      <i class="fa fa-image"></i>
                                      <label class="fileContainer">
                                        <input type="file">
                                      </label>
                                    </div>
                                    <span class="em em-expressionless" title="add icon"></span>
                                    <div class="smiles-bunch">
                                      <i class="em em---1"></i>
                                      <i class="em em-smiley"></i>
                                      <i class="em em-anguished"></i>
                                      <i class="em em-laughing"></i>
                                      <i class="em em-angry"></i>
                                      <i class="em em-astonished"></i>
                                      <i class="em em-blush"></i>
                                      <i class="em em-disappointed"></i>
                                      <i class="em em-worried"></i>
                                      <i class="em em-kissing_heart"></i>
                                      <i class="em em-rage"></i>
                                      <i class="em em-stuck_out_tongue"></i>
                                    </div>
                                  </div>

                                  <button type="submit"></button>
                                </form> 
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="central-meta item" style="display: inline-block;">
                    <div class="user-post">
                      <div class="friend-info">
                        <figure>
                          <img alt="" src="images/resources/friend-avatar10.jpg">
                        </figure>
                        <div class="friend-name">
                          <div class="more">
                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                              <ul>
                                <li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
                                <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                <li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
                                <li><i class="fa fa-address-card-o"></i>Boost This Post</li>
                                <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                                <li><i class="fa fa-wpexplorer"></i>Select as featured</li>
                                <li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
                              </ul>
                            </div>
                          </div>
                          <ins><a title="" href="time-line.html">Janice Griffith</a></ins>
                          <span>published: june,2 2010 19:PM</span>
                        </div>
                        <div class="description">
                          <p>
                            Curabitur World's most beautiful car in <a title="" href="#">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
                          </p>
                        </div>
                        <div class="post-meta">
                          <div class="linked-image align-left">
                            <a title="" href="#"><img alt="" src="images/resources/page1.jpg"></a>
                          </div>
                          <div class="detail">
                            <span>Love Maid - HighChill</span>
                            <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... </p>
                            <a title="" href="#">www.sample.com</a>
                          </div>    
                          
                          <ul class="like-dislike">
                              <li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                              <li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
                              <li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
                            </ul>
                          <div class="we-video-info">
                            <ul>
                              <li>
                                <span class="views" title="views">
                                  <i class="fa fa-eye"></i>
                                  <ins>1.2k</ins>
                                </span>
                              </li>
                              <li>
                                <div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
                              </li>
                              <li>
                                <span class="comment" title="Comments">
                                  <i class="fa fa-commenting"></i>
                                  <ins>52</ins>
                                </span>
                              </li>

                              <li>
                                <span>
                                  <a class="share-pst" href="#" title="Share">
                                    <i class="fa fa-share-alt"></i>
                                  </a>
                                  <ins>20</ins>
                                </span> 
                              </li>
                            </ul>
                            <div class="users-thumb-list">
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                <img alt="" src="images/resources/userlist-1.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                <img alt="" src="images/resources/userlist-2.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                <img alt="" src="images/resources/userlist-3.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                <img alt="" src="images/resources/userlist-4.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                <img alt="" src="images/resources/userlist-5.jpg">  
                              </a>
                              <span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
                            </div>
                          </div>
                        </div>
                        <div class="coment-area" style="">
                          <ul class="we-comet">
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/nearly3.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>

                            </li>
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/comet-4.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Sophia</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster.
                                  <i class="em em-smiley"></i>
                                </p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>
                            </li>
                            <li>
                              <a href="#" title="" class="showmore underline">more comments+</a>
                            </li>
                            <li class="post-comment">
                              <div class="comet-avatar">
                                <img src="images/resources/nearly1.jpg" alt="">
                              </div>
                              <div class="post-comt-box">
                                <form method="post">
                                  <textarea placeholder="Post your comment"></textarea>
                                  <div class="add-smiles">
                                    <div class="uploadimage">
                                      <i class="fa fa-image"></i>
                                      <label class="fileContainer">
                                        <input type="file">
                                      </label>
                                    </div>
                                    <span class="em em-expressionless" title="add icon"></span>
                                    <div class="smiles-bunch">
                                      <i class="em em---1"></i>
                                      <i class="em em-smiley"></i>
                                      <i class="em em-anguished"></i>
                                      <i class="em em-laughing"></i>
                                      <i class="em em-angry"></i>
                                      <i class="em em-astonished"></i>
                                      <i class="em em-blush"></i>
                                      <i class="em em-disappointed"></i>
                                      <i class="em em-worried"></i>
                                      <i class="em em-kissing_heart"></i>
                                      <i class="em em-rage"></i>
                                      <i class="em em-stuck_out_tongue"></i>
                                    </div>
                                  </div>

                                  <button type="submit"></button>
                                </form> 
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="central-meta item" style="display: none;">
                    <div class="user-post">
                      <div class="friend-info">
                        <figure>
                          <img src="images/resources/nearly6.jpg" alt="">
                        </figure>
                        <div class="friend-name">
                          <div class="more">
                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                              <ul>
                                <li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
                                <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                <li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
                                <li><i class="fa fa-address-card-o"></i>Boost This Post</li>
                                <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                                <li><i class="fa fa-wpexplorer"></i>Select as featured</li>
                                <li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
                              </ul>
                            </div>
                          </div>
                          <ins><a href="time-line.html" title="">Sophia</a> shared location</ins>
                          <span><i class="fa fa-globe"></i> published: january,5 2010 19:PM</span>
                        </div>
                        <div class="post-meta">
                          <div class="post-map">
                            <div class="nearby-map">
                              <div id="map-canvas" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div style="overflow: hidden;"></div><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -190, -135);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -190, -135);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div></div></div><div style="width: 24px; height: 24px; overflow: hidden; position: absolute; left: -12px; top: -6px; z-index: 18;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"></div><div style="width: 24px; height: 24px; overflow: hidden; position: absolute; left: 48px; top: -90px; z-index: -66;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"></div><div style="width: 24px; height: 24px; overflow: hidden; position: absolute; left: -2px; top: 97px; z-index: 121;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div title="Mi marcador" style="width: 40px; height: 40px; overflow: hidden; position: absolute; opacity: 0.0001; cursor: pointer; touch-action: none; left: -20px; top: -14px; z-index: 18;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 40px; height: 40px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"></div><div title="Otro marker" style="width: 40px; height: 40px; overflow: hidden; position: absolute; opacity: 0.0001; cursor: pointer; touch-action: none; left: 40px; top: -98px; z-index: -66;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 40px; height: 40px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"></div><div title="Otro marker mas" style="width: 40px; height: 40px; overflow: hidden; position: absolute; opacity: 0.0001; cursor: pointer; touch-action: none; left: -10px; top: 89px; z-index: 121;"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 40px; height: 40px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"><div style="cursor: default; position: absolute; top: 0px; left: 0px; z-index: -17;"><div class="gm-style-iw-a" style="position: absolute; left: 0px; top: 18px;"><div class="gm-style-iw-t" style="right: 0px; bottom: 35px;"><div class="gm-style-iw gm-style-iw-c" style="padding-right: 0px; padding-bottom: 0px; max-width: 0px; max-height: 0px; min-width: 0px;"><div class="gm-style-iw-d" style="overflow: scroll;"><div><b>Mi marcador</b><br>Tel: 46546545</div></div><button draggable="false" title="Fermer" aria-label="Fermer" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: -6px; right: -6px; width: 30px; height: 30px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 14px; height: 14px; margin: 8px;"></button></div></div></div></div></div></div></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe></div></div></div>
                            </div>
                            <ul class="like-dislike">
                              <li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                              <li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
                              <li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
                            </ul>
                          </div><!-- near by map -->

                          <div class="description">
                            <p>
                              Curabitur Lonely Cat Enjoying in Summer <a href="#" title="">#mypage</a> ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
                            </p>
                          </div>
                          <div class="we-video-info">
                            <ul>
                              <li>
                                <span class="views" title="views">
                                  <i class="fa fa-eye"></i>
                                  <ins>1.2k</ins>
                                </span>
                              </li>
                              <li>
                                <div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
                              </li>
                              <li>
                                <span class="comment" title="Comments">
                                  <i class="fa fa-commenting"></i>
                                  <ins>52</ins>
                                </span>
                              </li>

                              <li>
                                <span>
                                  <a class="share-pst" href="#" title="Share">
                                    <i class="fa fa-share-alt"></i>
                                  </a>
                                  <ins>20</ins>
                                </span> 
                              </li>
                            </ul>
                            <div class="users-thumb-list">
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                <img alt="" src="images/resources/userlist-1.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                <img alt="" src="images/resources/userlist-2.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                <img alt="" src="images/resources/userlist-3.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                <img alt="" src="images/resources/userlist-4.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                <img alt="" src="images/resources/userlist-5.jpg">  
                              </a>
                              <span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
                            </div>
                          </div>
                        </div>
                        <div class="coment-area" style="">
                          <ul class="we-comet">
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/nearly3.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>

                            </li>
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/comet-4.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Sophia</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster.
                                  <i class="em em-smiley"></i>
                                </p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>
                            </li>
                            <li>
                              <a href="#" title="" class="showmore underline">more comments+</a>
                            </li>
                            <li class="post-comment">
                              <div class="comet-avatar">
                                <img src="images/resources/nearly1.jpg" alt="">
                              </div>
                              <div class="post-comt-box">
                                <form method="post">
                                  <textarea placeholder="Post your comment"></textarea>
                                  <div class="add-smiles">
                                    <div class="uploadimage">
                                      <i class="fa fa-image"></i>
                                      <label class="fileContainer">
                                        <input type="file">
                                      </label>
                                    </div>
                                    <span class="em em-expressionless" title="add icon"></span>
                                    <div class="smiles-bunch">
                                      <i class="em em---1"></i>
                                      <i class="em em-smiley"></i>
                                      <i class="em em-anguished"></i>
                                      <i class="em em-laughing"></i>
                                      <i class="em em-angry"></i>
                                      <i class="em em-astonished"></i>
                                      <i class="em em-blush"></i>
                                      <i class="em em-disappointed"></i>
                                      <i class="em em-worried"></i>
                                      <i class="em em-kissing_heart"></i>
                                      <i class="em em-rage"></i>
                                      <i class="em em-stuck_out_tongue"></i>
                                    </div>
                                  </div>

                                  <button type="submit"></button>
                                </form> 
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="central-meta item" style="display: none;">
                    <div class="user-post">
                      <div class="friend-info">
                        <figure>
                          <img src="images/resources/nearly1.jpg" alt="">
                        </figure>
                        <div class="friend-name">
                          <div class="more">
                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                              <ul>
                                <li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
                                <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                <li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
                                <li><i class="fa fa-address-card-o"></i>Boost This Post</li>
                                <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                                <li><i class="fa fa-wpexplorer"></i>Select as featured</li>
                                <li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
                              </ul>
                            </div>
                          </div>
                          <ins><a href="time-line.html" title="">Jack Carter</a> share <a href="#" title="">link</a></ins>
                          <span><i class="fa fa-globe"></i> published: january,5 2010 19:PM </span>
                        </div>
                        <div class="post-meta">
                          <figure>
                            <a href="https://www.youtube.com/watch?v=fF382gwEnG8" title="" data-strip-group="mygroup" class="strip vdeo-link" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }">
                            <img src="images/resources/user-post.jpg" alt="">
                              <i>
                                <svg version="1.1" class="play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="55px" width="55px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                                <path class="stroke-solid" fill="none" stroke="" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                C97.3,23.7,75.7,2.3,49.9,2.5"></path>
                                <path class="icon" fill="" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"></path>
                                </svg>
                              </i>
                              <h2>Canada tourist spots you must visit in 2020</h2>
                            </a>
                            <ul class="like-dislike">
                              <li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                              <li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
                              <li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
                            </ul>

                          </figure>                       
                          <div class="description">
                            <p>
                              Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc.
                            </p>
                          </div>
                          <div class="we-video-info">
                            <ul>
                              <li>
                                <span class="views" title="views">
                                  <i class="fa fa-eye"></i>
                                  <ins>1.2k</ins>
                                </span>
                              </li>
                              <li>
                                <div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
                              </li>
                              <li>
                                <span class="comment" title="Comments">
                                  <i class="fa fa-commenting"></i>
                                  <ins>52</ins>
                                </span>
                              </li>

                              <li>
                                <span>
                                  <a class="share-pst" href="#" title="Share">
                                    <i class="fa fa-share-alt"></i>
                                  </a>
                                  <ins>20</ins>
                                </span> 
                              </li>
                            </ul>
                            <div class="users-thumb-list">
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                <img alt="" src="images/resources/userlist-1.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                <img alt="" src="images/resources/userlist-2.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                <img alt="" src="images/resources/userlist-3.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                <img alt="" src="images/resources/userlist-4.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                <img alt="" src="images/resources/userlist-5.jpg">  
                              </a>
                              <span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
                            </div>
                          </div>
                        </div>
                        <div class="coment-area" style="">
                          <ul class="we-comet">
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/nearly3.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>

                            </li>
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/comet-4.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Sophia</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster.
                                  <i class="em em-smiley"></i>
                                </p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>
                            </li>
                            <li>
                              <a href="#" title="" class="showmore underline">more comments+</a>
                            </li>
                            <li class="post-comment">
                              <div class="comet-avatar">
                                <img src="images/resources/nearly1.jpg" alt="">
                              </div>
                              <div class="post-comt-box">
                                <form method="post">
                                  <textarea placeholder="Post your comment"></textarea>
                                  <div class="add-smiles">
                                    <div class="uploadimage">
                                      <i class="fa fa-image"></i>
                                      <label class="fileContainer">
                                        <input type="file">
                                      </label>
                                    </div>
                                    <span class="em em-expressionless" title="add icon"></span>
                                    <div class="smiles-bunch">
                                      <i class="em em---1"></i>
                                      <i class="em em-smiley"></i>
                                      <i class="em em-anguished"></i>
                                      <i class="em em-laughing"></i>
                                      <i class="em em-angry"></i>
                                      <i class="em em-astonished"></i>
                                      <i class="em em-blush"></i>
                                      <i class="em em-disappointed"></i>
                                      <i class="em em-worried"></i>
                                      <i class="em em-kissing_heart"></i>
                                      <i class="em em-rage"></i>
                                      <i class="em em-stuck_out_tongue"></i>
                                    </div>
                                  </div>

                                  <button type="submit"></button>
                                </form> 
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="central-meta item" style="display: none;">
                    <div class="user-post">
                      <div class="friend-info">
                        <figure>
                          <img src="images/resources/nearly1.jpg" alt="">
                        </figure>
                        <div class="friend-name">
                          <div class="more">
                            <div class="more-post-optns"><i class="ti-more-alt"></i>
                              <ul>
                                <li><i class="fa fa-pencil-square-o"></i>Edit Post</li>
                                <li><i class="fa fa-trash-o"></i>Delete Post</li>
                                <li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
                                <li><i class="fa fa-address-card-o"></i>Boost This Post</li>
                                <li><i class="fa fa-clock-o"></i>Schedule Post</li>
                                <li><i class="fa fa-wpexplorer"></i>Select as featured</li>
                                <li><i class="fa fa-bell-slash-o"></i>Turn off Notifications</li>
                              </ul>
                            </div>
                          </div>
                          <ins><a href="time-line.html" title="">Jack Carter</a> Post Album</ins>
                          <span><i class="fa fa-globe"></i> published: September,15 2020 19:PM </span>
                        </div>
                        <div class="post-meta">
                          <p>
                            Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero.
                          </p>
                          <figure>
                            <div class="img-bunch">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                  <figure>
                                    <a class="strip" href="images/resources/album1.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                    <img src="images/resources/album1.jpg" alt="">
                                    </a>
                                  </figure>
                                  <figure>
                                    <a class="strip" href="images/resources/album2.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                    <img src="images/resources/album2.jpg" alt="">
                                    </a>
                                  </figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                  <figure>
                                    <a class="strip" href="images/resources/album6.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                    <img src="images/resources/album6.jpg" alt="">
                                    </a>
                                  </figure>
                                  <figure>
                                    <a class="strip" href="images/resources/album5.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                    <img src="images/resources/album5.jpg" alt="">
                                    </a>
                                  </figure>
                                  <figure>
                                    <a class="strip" href="images/resources/album4.jpg" title="" data-strip-group="mygroup" data-strip-group-options="loop: false">
                                    <img src="images/resources/album4.jpg" alt="">
                                    </a>
                                    <div class="more-photos">
                                      <span>+15</span>
                                    </div>
                                  </figure>
                                </div>
                              </div>
                            </div>  
                            <ul class="like-dislike">
                              <li><a class="bg-purple" href="#" title="Save to Pin Post"><i class="fa fa-thumb-tack"></i></a></li>
                              <li><a class="bg-blue" href="#" title="Like Post"><i class="ti-thumb-up"></i></a></li>
                              <li><a class="bg-red" href="#" title="dislike Post"><i class="ti-thumb-down"></i></a></li>
                            </ul>
                          </figure> 
                          <div class="we-video-info">
                            <ul>
                              <li>
                                <span class="views" title="views">
                                  <i class="fa fa-eye"></i>
                                  <ins>1.2k</ins>
                                </span>
                              </li>
                              <li>
                                <div class="likes heart" title="Like/Dislike">❤ <span>2K</span></div>
                              </li>
                              <li>
                                <span class="comment" title="Comments">
                                  <i class="fa fa-commenting"></i>
                                  <ins>52</ins>
                                </span>
                              </li>

                              <li>
                                <span>
                                  <a class="share-pst" href="#" title="Share">
                                    <i class="fa fa-share-alt"></i>
                                  </a>
                                  <ins>20</ins>
                                </span> 
                              </li>
                            </ul>
                            <div class="users-thumb-list">
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Anderw">
                                <img alt="" src="images/resources/userlist-1.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="frank">
                                <img alt="" src="images/resources/userlist-2.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Sara">
                                <img alt="" src="images/resources/userlist-3.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Amy">
                                <img alt="" src="images/resources/userlist-4.jpg">  
                              </a>
                              <a data-toggle="tooltip" title="" href="#" data-original-title="Ema">
                                <img alt="" src="images/resources/userlist-5.jpg">  
                              </a>
                              <span><strong>You</strong>, <b>Sarah</b> and <a href="#" title="">24+ more</a> liked</span>
                            </div>
                          </div>
                        </div>
                        <div class="coment-area" style="">
                          <ul class="we-comet">
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/nearly3.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>

                            </li>
                            <li>
                              <div class="comet-avatar">
                                <img src="images/resources/comet-4.jpg" alt="">
                              </div>
                              <div class="we-comment">
                                <h5><a href="time-line.html" title="">Sophia</a></h5>
                                <p>we are working for the dance and sing songs. this video is very awesome for the youngster.
                                  <i class="em em-smiley"></i>
                                </p>
                                <div class="inline-itms">
                                  <span>1 year ago</span>
                                  <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                  <a href="#" title=""><i class="fa fa-heart"></i><span>20</span></a>
                                </div>
                              </div>
                            </li>
                            <li>
                              <a href="#" title="" class="showmore underline">more comments+</a>
                            </li>
                            <li class="post-comment">
                              <div class="comet-avatar">
                                <img src="images/resources/nearly1.jpg" alt="">
                              </div>
                              <div class="post-comt-box">
                                <form method="post">
                                  <textarea placeholder="Post your comment"></textarea>
                                  <div class="add-smiles">
                                    <div class="uploadimage">
                                      <i class="fa fa-image"></i>
                                      <label class="fileContainer">
                                        <input type="file">
                                      </label>
                                    </div>
                                    <span class="em em-expressionless" title="add icon"></span>
                                    <div class="smiles-bunch">
                                      <i class="em em---1"></i>
                                      <i class="em em-smiley"></i>
                                      <i class="em em-anguished"></i>
                                      <i class="em em-laughing"></i>
                                      <i class="em em-angry"></i>
                                      <i class="em em-astonished"></i>
                                      <i class="em em-blush"></i>
                                      <i class="em em-disappointed"></i>
                                      <i class="em em-worried"></i>
                                      <i class="em em-kissing_heart"></i>
                                      <i class="em em-rage"></i>
                                      <i class="em em-stuck_out_tongue"></i>
                                    </div>
                                  </div>

                                  <button type="submit"></button>
                                </form> 
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>

                    </div>
                  </div>
                  </div>
              <button class="btn-view btn-load-more">Load More</button></div><!-- centerl meta -->
              <div class="col-lg-3">
                <aside class="sidebar static right">
                  <div class="widget">
                    <h4 class="widget-title">Mon club</h4>
                    <ul class="fav-community">
                      <li><i class="fa fa-address-card"></i> <?php echo $clubInfo->birthday ?> </li>
                      <li><i class="fa fa-users"></i><a href="#" title="">invitez vos amis</a> pour rejoindre le club</li>
                      <li><i class="fa fa-thumbs-up"></i>13 Membre actif</li>
                      <li><i class="fa fa-rss"></i>13 Tunifans</li>
                      <li><i class="fa fa-globe"></i><a href="<?php echo $clubInfo->email ?>" title="">club Tunivisions <?php echo $clubInfo->name ?></a></li>
                      <li><i class="fa fa-map-marker"></i><?php echo $clubInfo->facebook ?></li>
                    </ul>
                  </div>
                  <div class="widget">
                    <h4 class="widget-title">Share Page</h4>
                    <ul class="socials">
                      <li class="facebook">
                        <a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span> <ins>45 likes</ins></a>
                      </li>
                      <li class="twitter">
                        <a title="" href="#"><i class="fa fa-twitter"></i> <span>twitter</span><ins>25 likes</ins></a>
                      </li>
                      <li class="google">
                        <a title="" href="#"><i class="fa fa-google"></i> <span>google</span><ins>35 likes</ins></a>
                      </li>
                    </ul>
                  </div>
                  <div class="widget">
                    <h4 class="widget-title">Your page</h4> 
                    <div class="your-page">
                      <figure>
                        <a href="#" title=""><img src="images/resources/friend-avatar9.jpg" alt=""></a>
                      </figure>
                      <div class="page-meta">
                        <a href="#" title="" class="underline">My Creative Page</a>
                        <span><i class="ti-comment"></i><a href="insight.html" title="">Messages <em class="bg-blue">9</em></a></span>
                        <span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em class="bg-purple">2</em></a></span>
                      </div>
                      <ul class="page-publishes">
                        <li>
                          <span><i class="ti-pencil-alt"></i>Publish</span>
                        </li>
                        <li>
                          <span><i class="ti-camera"></i>Photo</span>
                        </li>
                        <li>
                          <span><i class="ti-video-camera"></i>Live</span>
                        </li>
                        <li>
                          <span><i class="fa fa-user-plus"></i>Invite</span>
                        </li>
                      </ul>
                      <div class="page-likes">
                        <ul class="nav nav-tabs likes-btn">
                          <li class="nav-item"><a class="active" href="#link1" data-toggle="tab" data-ripple="">likes</a></li>
                           <li class="nav-item"><a class="" href="#link2" data-toggle="tab" data-ripple="">views</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane active fade show" id="link1">
                          <span><i class="ti-heart"></i>884</span>
                            <a href="#" title="weekly-likes">35 new likes this week</a>
                            <div class="users-thumb-list">
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                              <img src="images/resources/userlist-1.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="frank">
                              <img src="images/resources/userlist-2.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Sara">
                              <img src="images/resources/userlist-3.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Amy">
                              <img src="images/resources/userlist-4.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Ema">
                              <img src="images/resources/userlist-5.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Sophie">
                              <img src="images/resources/userlist-6.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Maria">
                              <img src="images/resources/userlist-7.jpg" alt="">  
                            </a>  
                            </div>
                          </div>
                          <div class="tab-pane fade" id="link2">
                            <span><i class="fa fa-eye"></i>440</span>
                            <a href="#" title="weekly-likes">440 new views this week</a>
                            <div class="users-thumb-list">
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Anderw">
                              <img src="images/resources/userlist-1.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="frank">
                              <img src="images/resources/userlist-2.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Sara">
                              <img src="images/resources/userlist-3.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Amy">
                              <img src="images/resources/userlist-4.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Ema">
                              <img src="images/resources/userlist-5.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Sophie">
                              <img src="images/resources/userlist-6.jpg" alt="">  
                            </a>
                            <a href="#" title="" data-toggle="tooltip" data-original-title="Maria">
                              <img src="images/resources/userlist-7.jpg" alt="">  
                            </a>  
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- page like widget -->
                  <div class="widget">
                    <div class="weather-widget low-opacity bluesh">
                      <div class="bg-image" style="background-image: url(images/resources/weather.jpg)"></div>
                      <span class="refresh-content"><i class="fa fa-refresh"></i></span>
                      <div class="weather-week">
                        <div class="icon sun-shower">
                          <div class="cloud"></div>
                          <div class="sun">
                          <div class="rays"></div>
                          </div>
                          <div class="rain"></div>
                        </div>
                      </div>
                      <div class="weather-infos">
                        <span class="weather-tem">25</span>
                        <h3>Cloudy Skyes<i>Sicklervilte, New Jersey</i></h3>
                        <div class="weather-date skyblue-bg">
                          <span>MAY<strong>21</strong></span>
                        </div>
                      </div>
                      <div class="monthly-weather">
                        <ul>
                          <li>
                            <span>Sun</span>
                            <a href="#" title=""><i class="wi wi-day-sunny"></i></a>
                            <em>40°</em>
                          </li>
                          <li>
                            <span>Mon</span>
                            <a href="#" title=""><i class="wi wi-day-cloudy"></i></a>
                            <em>10°</em>
                          </li>
                          <li>
                            <span>Tue</span>
                            <a href="#" title=""><i class="wi wi-day-hail"></i></a>
                            <em>20°</em>
                          </li>
                          <li>
                            <span>Wed</span>
                            <a href="#" title=""><i class="wi wi-day-lightning"></i></a>
                            <em>34°</em>
                          </li>
                          <li>
                            <span>Thu</span>
                            <a href="#" title=""><i class="wi wi-day-showers"></i></a>
                            <em>22°</em>
                          </li>
                          <li>
                            <span>Fri</span>
                            <a href="#" title=""><i class="wi wi-day-windy"></i></a>
                            <em>26°</em>
                          </li>
                          <li>
                            <span>Sat</span>
                            <a href="#" title=""><i class="wi wi-day-sunny-overcast"></i></a>
                            <em>30°</em>
                          </li>
                        </ul>
                      </div>
                      
                                  </div><!-- Weather Widget -->
                  </div><!-- weather-->
                  <div class="widget">
                    <h4 class="widget-title">Invite Friends <a class="see-all" href="#" title="">See All</a></h4>
                    <ul class="invitepage">
                      <li>
                        <figure>
                          <img src="images/resources/friend-avatar.jpg" alt="">
                          <a href="#">Jack carter</a>
                        </figure>
                        <a class="invited" href="#" title=""><i class="ti-check"></i></a>
                      </li>
                      <li>
                        <figure>
                          <img src="images/resources/friend-avatar2.jpg" alt="">
                          <a href="#">Emma watson</a>
                        </figure>
                        <a href="#" title="">Invite</a>
                      </li>
                      <li>
                        <figure>
                          <img src="images/resources/friend-avatar3.jpg" alt="">
                          <a href="#">Andrew</a>
                        </figure>
                        <a href="#" title="">Invite</a>
                      </li>
                      <li>
                        <figure>
                          <img src="images/resources/friend-avatar4.jpg" alt="">
                          <a href="#">Moona Singh</a>
                        </figure>
                        <a class="invited" href="#" title=""><i class="ti-check"></i></a>
                      </li>
                      <li>
                        <figure>
                          <img src="images/resources/friend-avatar5.jpg" alt="">
                          <a href="#">Harry pooter</a>
                        </figure>
                        <a href="#" title="">Invite</a>
                      </li>
                    </ul>
                    
                  </div><!-- page invitation widget --> 
                  <div class="widget">
                    <div class="banner medium-opacity purple">
                      <div class="bg-image" style="background-image: url(images/resources/baner-widgetbg.jpg)"></div>
                      <div class="baner-top">
                        <span><img alt="" src="images/book-icon.png"></span>
                        <i class="fa fa-ellipsis-h"></i>
                      </div>
                      <div class="banermeta">
                        <p>
                          create your own favourit page.
                        </p>
                        <span>like them all</span>
                        <a data-ripple="" title="" href="#">start now!</a>
                      </div>
                    </div>                      
                  </div>
                  <div class="widget stick-widget">
                    <h4 class="widget-title">Profile intro</h4>
                    <ul class="short-profile">
                      <li>
                        <span>about</span>
                        <p>Hi, i am jhon kates, i am 32 years old and worked as a web developer in microsoft </p>
                      </li>
                      <li>
                        <span>fav tv show</span>
                        <p>Sacred Games, Spartcus Blood, Games of Theron </p>
                      </li>
                      <li>
                        <span>favourit music</span>
                        <p>Justin Biber, Shakira, Nati Natasah</p>
                      </li>
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
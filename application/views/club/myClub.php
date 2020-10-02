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
                          <a class="" href="<?php echo base_url() ?>Club/Members/<?php echo $cl ?>">Membes</a>
                        </li>

                        
                      </ul>
                      <ol class="folw-detail">
                        <li><span>Projets</span><ins>101</ins></li>
                        <li><span>Membres</span><ins>1.3K</ins></li>
                        <li><span>Points</span><ins>22k</ins></li>
                      </ol>
                    </div>
                  </div>
                </div>  
              </div><!-- user profile banner  -->
             <!-- sidebar -->
              <div class="col-lg-9">
                
                
                
                <div class="loadMore">
                  

                  <?php foreach ($projectRecords as $projet ) { ?>

                                                <div class="event-box">
                                                    <div class="row merged20">

                                                        <div class="col-lg-4 col-md-4 col-sm-5">
                                                            <figure class="event-thumb"><img src="<?php echo base_url() ?>uploads/projet/<?php echo $projet->banner ?>" alt="">
                                                                <span class="yellow"><?php echo $projet->type ?></span></figure>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-5">
                                                            <div class="event-title">
                                                                <span class="ba"></span>
                                                                <h4><a href="#" title=""><?php echo $projet->titre ?></a></h4>
                                                                <span><i class="fa fa-clock-o"></i> <?php echo $projet->startDate ?></span>
                                                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $projet->startDate ?></span>
                                                                <span><i class="fa fa-money" aria-hidden="true"></i> <?php echo $projet->prix ?> DT</span>
                                                                <ul class="sociaz-media">
                                                                    <li><a title="" href="<?php echo $projet->eventFB ?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                                </ul>
                                                                
                                                                                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                                            <div class="event-time">
                                                                <span class="event-date"><?php echo $projet->startDate ?></span>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                               <?php  } ?>

                  
                  
                  
                  
                  
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
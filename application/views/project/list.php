<section>
        <div class="gap2 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            <!-- user profile banner  -->
                            <!-- sidebar -->
                            <div class="col-lg-9">
                                    <div class="central-meta">
                                        <div class="title-block">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="align-left">
                                                        <h5>Ocean Motel Events</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                                            <form method="post">
                                                                <input type="text" placeholder="Search..">
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
                                                                </select><div class="chosen-container chosen-container-single" style="width: 72px;" title=""><a class="chosen-single"><span>Sort by</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"><li class="active-result result-selected" data-option-array-index="0" style="">Sort by</li><li class="active-result" data-option-array-index="1" style="">A to Z</li><li class="active-result" data-option-array-index="2" style="">See All</li><li class="active-result" data-option-array-index="3" style="">Newest</li><li class="active-result" data-option-array-index="4" style="">oldest</li></ul></div></div>
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
                                    <div class="central-meta">
                                        <div class="row">
                                            <div class="col-lg-12">
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
                                                
                                                                                                    # code...
                                               <?php  } ?>
                                                
                                                
                                            </div>
                                        </div>
                                        <div class="lodmore">
                                            <button class="btn-view btn-load-more"></button>
                                        </div>
                                    </div>
                            </div><!-- centerl meta -->
                        </div>  
                    </div>
                </div>
            </div>
        </div>  
    </section>
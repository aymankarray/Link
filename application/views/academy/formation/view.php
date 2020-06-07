         <div id="content-page" class="content-page">
            <div class="container">
               

                <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"><?php echo $formationInfo->label  ; ?></h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-sm-3">
                                 <div class="nav flex-column nav-pills text-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <?php foreach ($chapters as $key ) { ?>
                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#Ch<?php echo $key->chapterId  ; ?>" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                    <?php echo $key->num  ; ?> - <?php echo $key->titre  ; ?>
                                    </a>
                                    <?php } ?>
                                 </div>
                              </div>
                              <div class="col-sm-9">
                                 <div class="tab-content mt-0" id="v-pills-tabContent">
                                    <?php foreach ($chapters as $key ) { ?>
                                       <div class="tab-pane fade show <?php  if( $key->chapterId == 1){ ?> active<?php } ?>" id="Ch<?php echo $key->chapterId  ; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                          <div class="card" style="width: cover">
                                             <div class="card-title"><?php echo $key->titre  ; ?></div>
                                             <div class="iq-card-body">                                               
                                                <div id="player<?php echo $key->chapterId  ; ?>"></div>
                                                <script>
                                                // 2. This code loads the IFrame Player API code asynchronously.
                                                var tag = document.createElement('script');

                                                tag.src = "https://www.youtube.com/iframe_api";
                                                var firstScriptTag = document.getElementsByTagName('script')[0];
                                                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                                                // 3. This function creates an <iframe> (and YouTube player)
                                                //    after the API code downloads.
                                                var player;
                                                function onYouTubeIframeAPIReady() {
                                                  player = new YT.Player('player<?php echo $key->chapterId  ; ?>', {
                                                    height: '360',
                                                    width: '640',
                                                    videoId: '<?php echo $key->embed  ; ?>',
                                                    events: {
                                                      'onReady': onPlayerReady,
                                                      'onStateChange': onPlayerStateChange
                                                    }
                                                  });
                                                }

                                                // 4. The API will call this function when the video player is ready.
                                                function onPlayerReady(event) {
                                                  event.target.playVideo();
                                                }

                                                // 5. The API calls this function when the player's state changes.
                                                //    The function indicates that when playing a video (state=1),
                                                //    the player should play for six seconds and then stop.
                                                var done = false;
                                                function onPlayerStateChange(event) {
                                                  if (event.data == YT.PlayerState.PLAYING && !done) {
                                                    setTimeout(stopVideo, 6000);
                                                    done = true;
                                                  }
                                                }
                                                function stopVideo() {
                                                  player.stopVideo();
                                                }
                                              </script>
                                             
                                                
                                             
                                          </div>
                                          <hr>
                                          <h5>Description</h5>
                                          <p><?php echo $key->description  ; ?></p>
                                       </div>
                                    <?php } ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>




            </div>
         </div>
      </div>
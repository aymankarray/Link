  
                                
<style>

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;

  width: auto;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
 
  display: none;
  padding: 100px 20px;

}

</style>

                                    

         <div id="content-page" class="content-page">
            <div class="container">
               

                <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h6 class="card-title"><?php echo $formationInfo->label  ; ?></h6>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                       
                              <div class="tab">
                                    <?php foreach ($chapters as $key ) {  ?>

                                    <button class="tablink" onclick="openPage('CH<?php echo $key->chapterId ;?>', this, 'red')" <?php if ($key->num==1 ) {  ?> id="defaultOpen" <?php } ?> >

                                     <?php echo $key->num ;?> - <?php echo $key->titre ;?>
                                        
                                     </button>
         
                                   <?php }  ?>
                              </div>
                                
                                 <?php foreach ($chapters as $key ) {  ?>
                                 <div id="CH<?php echo $key->chapterId ;?>" class="tabcontent">
                                   
                                   
                                   <div class="row">
                                         <div class="card col-md-8 embed-responsive embed-responsive-16by9">
                                          
                                           <div id="player<?php echo $key->chapterId ;?>" class="embed-responsive-item"></div>


                                         </div>
                                          <div class="card col-md-4">
                                             <h6>Note</h6>
                                              <?php echo $key->description ;?>
                                        
                                         </div>
                                   </div>
                                 </div>
                                    <?php }  ?>
                                 
                              </div>

                        </div>


         
         </div>
      </div>



<script>
function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


<script>
      // 2. This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      <?php foreach ($chapters as $key ) {  ?>
      var player<?php echo $key->chapterId ;?> ;
      function onYouTubeIframeAPIReady() {
        player<?php echo $key->chapterId ;?> = new YT.Player('player<?php echo $key->chapterId ;?>', {
          videoId: '<?php echo $key->embed ;?>',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }
      <?php } ?>

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
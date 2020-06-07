  
                                
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
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  display: none;
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
                           
                           <div class="row">
                              <div class=" tab">
                                    <?php foreach ($chapters as $key ) {  ?>

                                    <button class="tablink" onclick="openPage('CH<?php echo $key->chapterId ;?>', this, 'red')" <?php if ($key->num==1 ) {  ?> id="defaultOpen" <?php } ?> >

                                     <?php echo $key->num ;?> - <?php echo $key->titre ;?>
                                        
                                     </button>
         
                                   <?php }  ?>
                              </div>
                                 <br>
                                 <?php foreach ($chapters as $key ) {  ?>
                                 <div id="CH<?php echo $key->chapterId ;?>" class="tabcontent">
                                   
                                   <br>
                                   <div class="row">
                                         <div class="card col-md-8">
                                          <h3><?php echo $key->num ;?> - <?php echo $key->titre ;?></h3>
                             
                                              <iframe  class="embed-responsive-item"  src="https://www.youtube.com/embed/<?php echo $key->embed ;?>" frameborder="0" allow="" allowfullscreen=""></iframe>
                                        
                                         </div>
                                          <div class="card col-md-8">

                                              <?php echo $key->description ;?>
                                        
                                         </div>
                                   </div>
                                 </div>
                                    <?php }  ?>
                                 
                              </div>

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
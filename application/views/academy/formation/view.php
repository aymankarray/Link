  
                                
<style>

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
 
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: var(--iq-primary);
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>

                                    

         <div id="content-page" class="content-page">
            <div class="container">
               

                <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title"><?php echo $formationInfo->label  ; ?></h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           

                              <div class="tab">
                                    <?php foreach ($chapters as $key ) {  ?>
                                   <button class="tablinks" onclick="openCity(event, 'CH<?php echo $key->chapterId ;?>')"  <?php if ($key->num==1 ) {  ?> id="defaultOpen" <?php } ?> >
                                     <?php echo $key->num ;?> - <?php echo $key->titre ;?>
                                   </button>
                                   <?php }  ?>
                                 </div>

                                 <?php foreach ($chapters as $key ) {  ?>
                                 <div id="CH<?php echo $key->chapterId ;?>" class="tabcontent">
                                   <h3><?php echo $key->num ;?> - <?php echo $key->titre ;?></h3>
                                   <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $key->embed ;?>" frameborder="0" allow="" allowfullscreen=""></iframe>
                                   <hr>
                                   <h5>Description</h5>
                                   <p><?php echo $key->description ;?></p>
                                 </div>
                                    <?php }  ?>
                                 




            </div>
         </div>
      </div>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
  
                                
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


.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
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
                                          
                             
                                              <iframe  class="embed-responsive-item"  src="https://www.youtube.com/embed/<?php echo $key->embed ;?>" frameborder="0" allow="" allowfullscreen=""></iframe>
                                        
                                         </div>
                                          <div class="card col-md-4">
                                             <div class="iq-card-header"><h6>Note</h6></div>
                                              <div class="iq-card-body">
                                                 <?php echo $key->description ;?>
                                              </div>
                                              <div class="iq-card-footer" >
                                                 <span class="heading">User Rating</span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star checked"></span>
                                                 <span class="fa fa-star"></span>
                                                   <p>4.1 average based on 254 reviews.</p>
                                                   <hr style="border:3px solid #f1f1f1">

                                                   <div class="row">
                                                     <div class="side">
                                                       <div>5 star</div>
                                                     </div>
                                                     <div class="middle">
                                                       <div class="bar-container">
                                                         <div class="bar-5"></div>
                                                       </div>
                                                     </div>
                                                     <div class="side right">
                                                       <div>150</div>
                                                     </div>
                                                     <div class="side">
                                                       <div>4 star</div>
                                                     </div>
                                                     <div class="middle">
                                                       <div class="bar-container">
                                                         <div class="bar-4"></div>
                                                       </div>
                                                     </div>
                                                     <div class="side right">
                                                       <div>63</div>
                                                     </div>
                                                     <div class="side">
                                                       <div>3 star</div>
                                                     </div>
                                                     <div class="middle">
                                                       <div class="bar-container">
                                                         <div class="bar-3"></div>
                                                       </div>
                                                     </div>
                                                     <div class="side right">
                                                       <div>15</div>
                                                     </div>
                                                     <div class="side">
                                                       <div>2 star</div>
                                                     </div>
                                                     <div class="middle">
                                                       <div class="bar-container">
                                                         <div class="bar-2"></div>
                                                       </div>
                                                     </div>
                                                     <div class="side right">
                                                       <div>6</div>
                                                     </div>
                                                     <div class="side">
                                                       <div>1 star</div>
                                                     </div>
                                                     <div class="middle">
                                                       <div class="bar-container">
                                                         <div class="bar-1"></div>
                                                       </div>
                                                     </div>
                                                     <div class="side right">
                                                       <div>20</div>
                                                     </div>
                                                   </div>
                                              </div>
                                        
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
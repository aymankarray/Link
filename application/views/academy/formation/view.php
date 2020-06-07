  
                                
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

       .star-rating {
              font-size: 0;
              white-space: nowrap;
              display: inline-block;
              width: 250px;
              height: 50px;
              overflow: hidden;
              position: relative;
              background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjREREREREIiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
              background-size: contain;
            }
            .star-rating i {
              opacity: 0;
              position: absolute;
              left: 0;
              top: 0;
              height: 100%;
              width: 20%;
              z-index: 1;
              background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj48cG9seWdvbiBmaWxsPSIjRkZERjg4IiBwb2ludHM9IjEwLDAgMTMuMDksNi41ODMgMjAsNy42MzkgMTUsMTIuNzY0IDE2LjE4LDIwIDEwLDE2LjU4MyAzLjgyLDIwIDUsMTIuNzY0IDAsNy42MzkgNi45MSw2LjU4MyAiLz48L3N2Zz4=');
              background-size: contain;
            }
            .star-rating input {
              -moz-appearance: none;
              -webkit-appearance: none;
              opacity: 0;
              display: inline-block;
              width: 20%;
              height: 50%;
              margin: 0;
              padding: 0;
              z-index: 2;
              position: relative;
            }
            .star-rating input:hover + i,
            .star-rating input:checked + i {
              opacity: 1;
            }
            .star-rating i ~ i {
              width: 40%;
            }
            .star-rating i ~ i ~ i {
              width: 60%;
            }
            .star-rating i ~ i ~ i ~ i {
              width: 80%;
            }
            .star-rating i ~ i ~ i ~ i ~ i {
              width: 100%;
            }
            ::after,
            ::before {
              height: 100%;
              padding: 0;
              margin: 0;
              box-sizing: border-box;
              text-align: center;
              vertical-align: middle;
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
                                     <button class="tablink" onclick="openPage('Quiz', this, 'red')" <?php if ($key->num==1 ) {  ?> id="defaultOpen" <?php } ?> >

                                     Certification
                                        
                                     </button>
                              </div>
                                
                                 <?php foreach ($chapters as $key ) {  ?>
                                 <div id="CH<?php echo $key->chapterId ;?>" class="tabcontent">
                                   
                                   
                                  
                                         <div class="embed-responsive embed-responsive-16by9">
                                          
                             
                                              <iframe  class="embed-responsive-item"  src="https://www.youtube.com/embed/<?php echo $key->embed ;?>" frameborder="0" allow="" allowfullscreen=""></iframe>

                                         </div>
                                    
                                    
                                 </div>
                                    <?php }  ?>
                                 <div id="Quiz" class="tabcontent">

                                   <h2> Reglement de quiz :</h2>
                                   Avant de commencer<br>
                                    Chaque quiz doit être terminé en une seule session ; assurez-vous que votre connexion Internet est stable et que vous avez fini avant de quitter.<br>

                                    Le quiz est en francais. Si vous échouez, vos résultats ne seront ni affichés ni partagés sur T-Link.<br>

                                    Présentation<br>
                                    Répondez aux questions chronométrées à choix multiples<br>

                                    <i class="ri-timer-2-line"></i> Durée d’environ 15 minutes<br>
                                    <i class="ri-check-double-line"></i> Un niveau dans la tranche des 70% est requis pour réussir et avoir un badge<br>
                                    <i class="ri-calendar-2-line"></i> Réessayez dans 1 Semaine si vous échouez<br>
                                     
                                    <span class="star-rating">
                                       <input type="radio" name="note" value="1"><i></i>
                                       <input type="radio" name="note" value="2"><i></i>
                                       <input type="radio" name="note" value="3"><i></i>
                                       <input type="radio" name="note" value="4"><i></i>
                                       <input type="radio" name="note" value="5"><i></i>
                                    </span>

                                   <input type="checkbox" name="" required=""> j'accepte ce reglement de certification<br>
                                   <a href="" class="btn btn-primary" >Envoyer</a> 
                                 </div>
                                 
                              </div>

                        </div>


                        <div class="card">
                           <div class="iq-card-body">
                              <div class="row">      
                                                <div class="col-md-8">
                                                   <h5>Description</h5>
                                                    <hr style="border:1px solid #f1f1f1">

                                                   <?php echo $formationInfo->description ;?>
                                                    
                                                </div>
                                                <div class="col-md-4">
                                                         <h5>4.1 average based on 254 reviews.<h5>
                                                         <hr style="border:1px solid #f1f1f1">

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
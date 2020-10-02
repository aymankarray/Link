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
                                                        <h5>Projets</h5>
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
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ajouter un projet</button>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-1 col-sm-1">
                                                            <div class="option-list">
                                                                <i class="fa fa-ellipsis-v"></i>
                                                                <ul>
                                                                    <!--
                                                                    <li><a title="" href="#">Show Friends Public</a></li>
                                                                    -->
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
                                                
                                               <?php  } ?>
                                                
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                            </div><!-- centerl meta -->
                            <div class="col-lg-3">
                                <aside class="sidebar static right">
                                                                      
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
                                    <div class="widget stick-widget">
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
                                </aside>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>  
    </section>




    <div class="modal fade" id="myModal">
                                            <div class="modal-dialog">
                                              <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Ajouter un projet</h4>
                                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                         <?php $this->load->helper("form"); ?>
                    <form role="form"  id="addproject" action="<?php echo base_url() ?>Project/addNewP" method="post" role="form"  enctype="multipart/form-data">
                        


                           

                    
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Banner</label>
                                      
                                       
                                            <input type="file" name="file" id="file" class="dropify" required/>
                                       
                                         
                                                                           
                                       <p >le format de fichier doit etre JPG ou JPEG avec une taile maximale de 500 ko </p>
                                      <p id="error1" style="display:none; color:#FF0000;">
                                          Format d'image invalide! Le format d'image doit être JPG, JPEG.
                                          </p>
                                          <p id="error2" style="display:none; color:#FF0000;">
                                          La taille maximale du fichier est de 500 ko.
                                          </p>
                                    </div>

                                    <script type="text/javascript">
                                          $('#submitt').prop("disabled", true);
                                            var a=0;
                                            //binds to onchange event of your input field
                                            $('#file').bind('change', function() {
                                              if ($('input:submit').attr('disabled',false)){
                                                 $('input:submit').attr('disabled',true);
                                                 }
                                                var ext = $('#file').val().split('.').pop().toLowerCase();
                                                if ($.inArray(ext, ['jpg','jpeg']) == -1){
                                                   $('#error1').slideDown("slow");
                                                   $('#error2').slideUp("slow");
                                                   a=0;
                                                 }else{
                                                   var picsize = (this.files[0].size);
                                                   if (picsize > 500000){
                                                   $('#error2').slideDown("slow");
                                                 a=0;
                                                 }else{
                                                 a=1;
                                                    $('#error2').slideUp("slow");
                                                 }
                                                    $('#error1').slideUp("slow");
                                                 if (a==1){
                                                 $('input:submit').attr('disabled',false);
                                               }
                                            }
                                        });
                                    </script>
                                    
                                </div>
                            </div>
                            <div class="row"> 
                              <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Cible  &nbsp; &nbsp; <br> </label>
                                        
                                        <input type="radio" name="cible" id="Publique" value="Publique" required> Publique
                                                
                                        &nbsp;&nbsp;
                                        
                                        <input type="radio" name="cible" id="prive" value="Privé"> Privé
                                          
                                       
                                        &nbsp;&nbsp;
                                        
                                        <input type="radio" name="cible" id="Only" value="Only tunimateur" > Only tunimateur
                           

                                        <script type="text/javascript">
                                          $( "#Publique" ).click(function() {
                                              $("#facebook").prop("required", true);
                                            });
                                          $( "#Only" ).click(function() {
                                              $("#facebook").prop("required", true);
                                            });
                                          $( "#prive" ).click(function() {
                                              $("#facebook").prop("required", false);
                                            });
                                        </script>


                                    </div>
                                </div>
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Lien d'évenement facebook : </label>
                                        <input type="url" name="facebook" id="facebook" class="form-control" >
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="fname">Type</label>
                                        <select class="form-control" id="type" name="type" >
                                            <option value="Evenement">Evenement</option>
                                            <option value="Formation">Formation</option>
                                            <option value="Conférence">Conférence</option>
                                            <option value="Action">Action</option>
                                            <option value="Couverture Mediatique">Couverture Mediatique</option>
                                            <option value="Compétition">Compétition</option>
                                            <option value="Soirée">Soirée</option>
                                        </select>
                                    </div>
                                    
                                </div>


                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="fname">Titre</label>
                                        <input type="text" class="form-control required" id="Titre" name="Titre" maxlength="255" required >
                                    </div>
                                    
                                </div>
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">Description</label>
                                       <textarea class="form-control" name="description" id="tinymceExample" rows="20" required></textarea>

                                    </div>
                                    
                                </div>
                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Date debut</label>
                                        <!-- min="<?php echo date('Y-m-d').'T00:00' ?>" -->
                                        <input type="datetime-local" class="form-control "  min="<?php echo date('Y-m-d').'T00:00' ?>"   id="debut" name="debut"  required >
                                    </div>
                                </div>

                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Date fin</label>
                                        <!-- min="<?php echo date('Y-m-d').'T00:00' ?>" -->
                                        <input type="datetime-local" class="form-control"  min="<?php echo date('Y-m-d').'T00:00' ?>"   id="fin" name="fin"  required >
                                    </div>
                              </div>
                            

                              <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="fname">Local</label>
                                          <input type="text" class="form-control " id="local" name="local" maxlength="255" required >      


                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Capacité</label>
                                          <input type="number" class="form-control " id="capacite" name="capacite"  required >      


                                    </div>
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Prix</label>
                                          <input type="number" class="form-control" id="prix" name="prix"  required >      


                                    </div>
                                </div>



                            </div>
                            <br>
                            <br>
                       
                            <input type="submit" class="btn btn-primary" value="Envoyer" />
                            <input type="reset" class="btn btn-secondary" value="Reset" />
                            <br>
                            <br>
                       
                    </form>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                              </div>
                                            </div>
                                        </div><!-- fade Modal -->

<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/socialv/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 17:36:47 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Tunivsions Link | Inscription </title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo base_url() ;  ?>images/icon.svg" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/responsive.css">
            <link rel="stylesheet" href="<?php echo base_url() ;  ?>assets/css/dropify.min.css">
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151434993-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-151434993-1');
        </script>

   </head>
   <body onload="getLocation()">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-page">
          <div id="container-inside">
              <div id="circle-small"></div>
              <div id="circle-medium"></div>
              <div id="circle-large"></div>
              <div id="circle-xlarge"></div>
              <div id="circle-xxlarge"></div>
          </div>
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center pt-5">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="<?php echo base_url() ;  ?>images/logo blanc2.svg" class="img-fluid" width="" alt="logo"></a>
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <?php foreach ($ActuRecords as $key ) {
                                  ?>
                                
                                <div class="item">
                                    <img src="<?php echo base_url() ?>uploads/Actu/<?php echo $key->image ?>" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">
                                    <?php 
                                                        $string = strip_tags( $key->titre  );
                                                        if (strlen($string) > 100){

                                                            // truncate string
                                                            $stringCut = substr($string, 0, 100);
                                                            $endPoint = strrpos($stringCut, ' ');

                                                            //if the string doesn't contain any space then it will cut without word basis.
                                                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                            $string .= '... ';
                                                            }

                                                         echo $string ;
                                                         ?>  </h4>
                                    <p><?php 
                                                        $string = strip_tags( $key->description  );
                                                        if (strlen($string) > 55){

                                                            // truncate string
                                                            $stringCut = substr($string, 0, 100);
                                                            $endPoint = strrpos($stringCut, ' ');

                                                            //if the string doesn't contain any space then it will cut without word basis.
                                                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                            $string .= '... ';
                                                            }

                                                         echo $string ;
                                                         ?>  </p>
                                </div>
                                
                               <?php } ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-white pt-5">
                        <div class="sign-in-from" style="height:834px ;overflow:auto;" >
                            <h1 class="mb-0">S'inscrire</h1>
                            <p>Cette application est déstiné aux clubs Tunivisions.</p>

                                  <?php
            $this->load->helper('form');
             $var1 = $this->input->get('var1');
             $var2 = $this->input->get('var2');
             $var3 = $this->input->get('var3');
            ?>
          <!--begin::Form-->
    <form  role="form" class="kt-form" runat="server" action="<?php echo base_url() ?>Register/registerNewUser?var1=<?php echo $var1 ?>&var2=<?php echo $var2 ?>&var3=<?php echo $var3 ?>"     method="post" enctype="multipart/form-data"  >
      
      <div  class="text-center">
            <div   id="fb-root" class=""></div>
              <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0"></script>
              <div class="fb-page" data-href="https://www.facebook.com/Tunivisionsfoundation" data-tabs="" data-width="1000" data-height="700" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Tunivisionsfoundation" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Tunivisionsfoundation">Tunivisions Foundation <br> <br></a></blockquote></div>
           
        </div>
              <hr>
            

            <?php if ($var1!=Null &&   $var2 != Null  &&  $var3 == 1  ) { ?> 

            
            <div class="form-group">
              <input class="form-control" type="text" placeholder="CIN"  pattern="[0-9]{8}"  name="cin" 
              <?php if  ($var3!=1){ ?>required <?php } ?>  >
            </div>
            <div class="form-group">
             
              <input class="form-control" type="text" placeholder="Nom et prénom" name="fname" required>
            </div>
            <div class="form-group">
              Date de naissance <input class="form-control " type="date" placeholder="Date de naissance" name="birth" required>
            </div>
            <div class="form-group">
            <SELECT class="form-control" type="text" placeholder="sexe" name="sexe" required>
              <option value="" > sexe </option>
              <option value="Homme"> Homme</option>
              <option value="Femme"> Femme</option>
            </SELECT>
          </div>
             <div class="row">
                  <div class="col-md-6">                                
                      <div class="form-group">
                      
                                  <select class="form-control" name="gouvernorat" id="gouvernorat" required >
                                      <option value="">-- Gouvernorat --</option>
                                  </select>


                      </div>
                  </div>
                  <div class="col-md-6">                                
                      <div class="form-group">
                    
                                  <select class="form-control" name="delegation" id="delegation" required >
                                      <option value="">-- Delegation --</option>
                                   </select>

                      </div>
                  </div>
            </div>
            <div class="form-group">
              <input class="form-control" type="email" placeholder="Email" name="email"  required>
            </div>
            <div class="form-group">
              <input class="form-control" type="password" minlength="8" placeholder="Mot de passe" name="password" required>
            </div>
            <div class="form-group">
              <input class="form-control" type="password" minlength="8" placeholder="Confirmation mot de passe" name="rpassword" required>
            </div>
            <div class="form-group">
              <input class="form-control" type="text" pattern="[0-9]{2}\d{6}" placeholder="mobile" name="mobile" required>
            </div>
            <?php if  ($var3==1){ ?>
              <div class="form-group">
                  <input class="form-control" type="text" pattern="[0-9]{2}\d{6}" placeholder="Mobile de parent" name="mobile" required>
            </div>
            <?php } ?> 

            <div class="form-group">
            
              <input class="form-control" pattern="http://www\.facebook\.com\/(.+)|https://www\.facebook\.com\/(.+)" type="url"  placeholder="facebook | Format : |https://www.facebook.com/UserName " name="facebook" required>
            </div>
            <div class="form-group">
              <span>Photo de profile : </span>
              <input type="file" name="fileToUpload" id="fileToUpload" class="dropify" required>
             
            </div>

            <div class="form-group">
              <div class="col kt-align-left">
                <br>
                <label class="kt-checkbox">
                  <input type="checkbox" name="agree" required> j'accepte <a href="<?php echo base_url(); ?>Register/reglement" class="kt-link kt-login__link kt-font-bold">le manuel de procedure de la foundation</a>.
                  <span></span>
                </label>
                <span class="form-text text-muted"></span>
              </div>
            </div>
             <?php } ?>
            <div class="kt-login__actions">          <?php if ($var1!=Null || $var2!=Null ) { ?> 
              <input type="submit" value="S'inscrire" id="submitt"  class="btn btn-primary"> &nbsp;&nbsp;<?php } else { ?><div class="alert alert-danger alert-dismissable">
                            Tu doit ètre parrainé par un président des club Tunivisions                    
                        </div> <?php }   ?>
             
            </div>

          </form>
                              
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
 <script    src="<?php echo base_url() ;  ?>assets/js/jquery.min.js"></script>
      <script   src="<?php echo base_url() ;  ?>assets/js/popper.min.js"></script>
      <script    src="<?php echo base_url() ;  ?>assets/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script   src="<?php echo base_url() ;  ?>assets/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script  src="<?php echo base_url() ;  ?>assets/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script  src="<?php echo base_url() ;  ?>assets/js/waypoints.min.js"></script>
      <script  src="<?php echo base_url() ;  ?>assets/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script  src="<?php echo base_url() ;  ?>assets/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script defer  src="<?php echo base_url() ;  ?>assets/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script  src="<?php echo base_url() ;  ?>assets/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script   src="<?php echo base_url() ;  ?>assets/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script  src="<?php echo base_url() ;  ?>assets/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script  src="<?php echo base_url() ;  ?>assets/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script  src="<?php echo base_url() ;  ?>assets/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script  src="<?php echo base_url() ;  ?>assets/js/lottie.js"></script>
      <!-- Chart Custom JavaScript -->
      <script  src="<?php echo base_url() ;  ?>assets/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script  src="<?php echo base_url() ;  ?>assets/js/custom.js"></script>

      <script src="<?php echo base_url() ;  ?>assets/js/dropify.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

      <script type="text/javascript">
         
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        
      </script>
       <script>


             var x = document.getElementById("demo");

              function getLocation() {
                if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(showPosition, showError);
                } else { 
                  x.innerHTML = "Geolocation is not supported by this browser.";
                }
              }

              function showPosition(position) {

                var  a = document.getElementById("myForm").action ;

                document.getElementById("myForm").action =  a+"?Latitude="+ position.coords.latitude + "&Longitude="+ position.coords.longitude ;


                x.innerHTML = "Latitude: " + position.coords.latitude + 
                "<br>Longitude: " + position.coords.longitude;
              }

              function showError(error) {
                switch(error.code) {
                  case error.PERMISSION_DENIED:
                                Swal.fire({
                                  title: 'il est strictement obligatoire d\'activer la géolocalisation.',
                                  width: 600,
                                  allowOutsideClick: false,
                                  padding: '3em',
                                  background: '#fff url(/images/trees.png)',
                                  backdrop: `
                                    rgba(0,0,123,0.4)
                                    url("/images/nyan-cat.gif")
                                    left top
                                    no-repeat
                                  `
                                })
                    break;
                  case error.POSITION_UNAVAILABLE:
                    x.innerHTML = "Location information is unavailable."
                    break;
                  case error.TIMEOUT:
                    x.innerHTML = "The request to get user location timed out."
                    break;
                  case error.UNKNOWN_ERROR:
                    x.innerHTML = "An unknown error occurred."
                    break;
                }

            }
      </script>


<script type="text/javascript">
    $('.form_date').datepicker({ yearRange: '1990:2001' });
</script>


<script type="text/javascript">
      $('#submitt').prop("disabled", true);
        var a=0;
        //binds to onchange event of your input field
        $('#fileToUpload').bind('change', function() {
          if ($('input:submit').attr('disabled',false)){
             $('input:submit').attr('disabled',true);
             }
            var ext = $('#fileToUpload').val().split('.').pop().toLowerCase();
            if ($.inArray(ext, ['jpg','jpeg']) == -1){
               $('#error1').slideDown("slow");
               $('#error2').slideUp("slow");
               a=0;
             }else{
               var picsize = (this.files[0].size);
               if (picsize > 100000){
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
<script type="text/javascript">
$( document ).ready( function()
{
    var json ;
    var gouvernorat = $( '#gouvernorat' );
    var delegation = $( '#delegation' );
    
   
    var d = $.ajax({
    url: '<?php echo base_url(); ?>assets/json/tunisia.json',
    type: "GET",
    dataType: 'json',
    success: function (data) {
        console.log(data);
           $.each( data , function (index, value)
        {
        gouvernorat.append('<option value="' + index + '">' +  index  + '</option>');
        });

        gouvernorat.change( function()
        {
        var gouv = $(this).val();
        var deleg = data[ gouv ];

        $('option', delegation).remove();
        delegation.append('<option value="">-- Delegation --</option>');

        $.each( deleg, function (index, value)
        {
        delegation.append('<option value="' + value['cp'] + ' - ' +  value['localite'] + ' - ' + value['delegation'] + '">' + value['cp'] + ' - ' +  value['localite'] + ' - ' + value['delegation'] + '</option>');
        });
        });    

    } 
    });



        
    });
</script>
   </body>

<!-- Mirrored from iqonic.design/themes/socialv/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 17:36:48 GMT -->
</html>

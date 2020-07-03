
<!doctype html>
<html lang="en">
   
<!-- Mirrored from iqonic.design/themes/socialv/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 17:36:47 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Tunivsions Link | Se connecter </title>
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
                        <div class="sign-in-from">
                            <h1 class="mb-0">New Password</h1>
                            <p>Cette application est déstiné aux clubs Tunivisions.</p>

                              <?php
                                        $this->load->helper('form');
                                        $error = $this->session->flashdata('error');
                                        if($error)
                                        {
                                            ?>
                                            <div class="alert alert-danger alert-dismissable">
                                                
                                                <?php echo $error; ?>                    
                                            </div>
                                        <?php }
                                        $success = $this->session->flashdata('success');
                                        if($success)
                                        {
                                            ?>
                                            <div class="alert alert-success alert-dismissable">
                                                
                                                <?php echo $success; ?>                    
                                            </div>
                                      <?php } ?>
        <?php
                    $this->load->helper('form');
                     $userId = $this->input->get('userID');
                    ?>
                  <!--begin::Form-->

                    <form  role="form" class="kt-form" runat="server"  id="myForm" action="<?php echo base_url() ?>Register/MotDePassechangeF/<?php echo  $userId ?>"  id=''   method="post" enctype="multipart/form-data"  >
                            <div  style="align-content: center;" id="fb-root"></div>
                              <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0"></script>
                              <div class="fb-page" data-href="https://www.facebook.com/Tunivisionsfoundation" data-tabs="" data-width="450" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Tunivisionsfoundation" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Tunivisionsfoundation">Tunivisions Foundation</a></blockquote></div>
                            
                            <div class="form-group">
                              <input class="form-control" type="password" minlength="8" placeholder="nouveau mot de passe" name="password" required>
                            </div>
                            <div class="form-group">
                              <input class="form-control" type="password" minlength="8" placeholder="confirmation du nouveau mot de passe " name="cpassword" required>
                            </div>
                            

                           
                            <div class="kt-login__actions">         
                              <input type="submit" value="Changer" id="submitt"  class="btn btn-primary float-right" > &nbsp;&nbsp; 
                 
                             
                            </div>

                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?php echo base_url() ;  ?>assets/js//jquery.min.js"></script>
      <script src="<?php echo base_url() ;  ?>assets/js//popper.min.js"></script>
      <script src="<?php echo base_url() ;  ?>assets/js//bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//waypoints.min.js"></script>
      <script src="<?php echo base_url() ;  ?>assets/js//jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//apexcharts.js"></script>
      <!-- lottie JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//lottie.js"></script>
      <!-- Slick JavaScript --> 
      <script src="<?php echo base_url() ;  ?>assets/js//slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//smooth-scrollbar.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="<?php echo base_url() ;  ?>assets/js//custom.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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
   </body>

<!-- Mirrored from iqonic.design/themes/socialv/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Apr 2020 17:36:48 GMT -->
</html>

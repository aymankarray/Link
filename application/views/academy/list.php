<div class="header-for-bg">
            <div class="background-header position-relative">
               <img src="<?php echo base_url()  ?>assets/images/page-img/profile-bg8.jpg" class="img-fluid w-100 rounded rounded" alt="header-bg">
               <div class="title-on-header">
                  <div class="data-block">
                     <h2>Tunivisions Academy</h2>
                  </div>
               </div>
            </div>
         </div>


<div id="content-page" class="content-page">
            <div class="container">
               <div class="row">
                  

                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Charte & JD</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <a href="#"> </a>
                           </div>
                        </div>
						<div class="iq-card-body">
                           <ul id="JD" class="d-flex list-inline m-0 p-0">
                              
                              <li class="text-center col-sm-2">
                                 <div class="music-thumbnail position-relative mb-3">
                                    <a href="#"><img src="<?php echo base_url()  ?>assets/images/page-img/n1.jpg" alt="music-thumb" class="img-fluid w-100"></a>
                                    <div class="play-btn">
                                       <a href="#"><i class="ri-play-fill text-white"></i></a>
                                    </div>
                                 </div>
                                 <h6>Sean Paul</h6>
                                 <p class="mb-0">Best Advice</p>
                              </li>
                              
                              <li class="text-center col-sm-2">
                                 <div class="music-thumbnail position-relative mb-3">
                                    <a href="#"><img src="<?php echo base_url()  ?>assets/images/page-img/n8.jpg" alt="music-thumb" class="img-fluid w-100"></a>
                                    <div class="play-btn">
                                       <a href="#"><i class="ri-play-fill text-white"></i></a>
                                    </div>
                                 </div>
                                 <h6>Ciara</h6>
                                 <p class="mb-0">Best Advice</p>
                              </li>
                           </ul>
                        </div>



                     </div>
                  </div>
                  

               </div>
            </div>
         </div>


         <script type="text/javascript">
         	jQuery('#JD').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            focusOnSelect: true,
            arrows: false,
            responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3
                }
            }, {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 1
                }
            }],
           
        });
         </script>
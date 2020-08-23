   

      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="#">Maiza Bahaedinne</a> & Tunivisions Foundation All Rights Reserved.
               </div>
               <div id="demo1" ></div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
      <script   src="<?php echo base_url() ;  ?>assets/js/popper.min.js"></script>
      <script    src="<?php echo base_url() ;  ?>assets/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script defer  src="<?php echo base_url() ;  ?>assets/js/jquery.appear.js"></script>
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
      <script defer  src="<?php echo base_url() ;  ?>assets/js/select2.min.js"></script>
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


             var x = document.getElementById("demo1");

              function getLocation() {
                if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(showPosition, showError);
                } else { 
                  x.innerHTML = "Geolocation is not supported by this browser.";
                }
              }

              function showPosition(position) {
                x.innerHTML = "Latitude: " + position.coords.latitude + 
                "<br>Longitude: " + position.coords.longitude;
              }

              function showError(error) {
                switch(error.code) {
                  case error.PERMISSION_DENIED:
                                let timerInterval
                                      Swal.fire({
                                        title: 'Nouvelle condition ',
                                        html: 'il est strictement obligatoire d\'activer la géolocalisation.',
                                        timer: 8000,
                                        allowOutsideClick: false,
                                        timerProgressBar: true,
                                        onBeforeOpen: () => {
                                          Swal.showLoading()
                                          timerInterval = setInterval(() => {
                                            const content = Swal.getContent()
                                            if (content) {
                                              const b = content.querySelector('b')
                                              if (b) {
                                                b.textContent = Swal.getTimerLeft()
                                              }
                                            }
                                          }, 100)
                                        },
                                        onClose: () => {
                                          clearInterval(timerInterval)
                                        }
                                      }).then((result) => {
                                        /* Read more about handling dismissals below */
                                        if (result.dismiss === Swal.DismissReason.timer) {
                                          window.location.replace("<?php echo base_url() ?>logout");
                                        }
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

       <script defer type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

          <script type="text/javascript">
            $(document).ready( function () {
                $('#tableid').DataTable();
            } );

          </script>
          

           <script type="text/javascript">
         
          (function(jQuery) {

            "use strict";

            jQuery(document).ready(function() {


               /*---------------------------------------------------------------------
                     slick
                  -----------------------------------------------------------------------*/
                  jQuery('.slick-slider').slick({
                      centerMode: true,
                      centerPadding: '60px',
                      slidesToShow: 9,
                      slidesToScroll: 1,
                      focusOnSelect: true,
                      responsive: [{
                          breakpoint: 992,
                          settings: {
                              arrows: false,
                              centerMode: true,
                              centerPadding: '30',
                              slidesToShow: 3
                          }
                      }, {
                          breakpoint: 480,
                          settings: {
                              arrows: false,
                              centerMode: true,
                              centerPadding: '15',
                              slidesToShow: 1
                          }
                      }],
                      nextArrow: '<a href="#" class="ri-arrow-left-s-line left"></a>',
                      prevArrow: '<a href="#" class="ri-arrow-right-s-line right"></a>',
                  });

                  jQuery('#JD').slick({
                      slidesToShow: 4,
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

                   jQuery('#recent-music').slick({
                      slidesToShow: 6,
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

                    jQuery('#top-music').slick({
                      slidesToShow: 6,
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

                  

                    });

        })(jQuery);
         </script>


         <script type="text/javascript">

var myQuestions = [
    <?php foreach ($questions as $key ) { ?>
    {
        question: "<?php echo $key->Question ; ?> ",
        answers: {
            a: '<?php echo $key->choice1 ; ?>',
            b: '<?php echo $key->choice2 ; ?>',
            c: '<?php echo $key->choice3 ; ?>',
            d: '<?php echo $key->choice4 ; ?>'
        },
        correctAnswer: '<?php echo $key->Answer1 ; ?>'
    },
    <?php } ?> 
    
];

var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);

function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

    function showQuestions(questions, quizContainer){
        // we'll need a place to store the output and the answer choices
        var output = [];
        var answers;

        // for each question...
        for(var i=0; i<questions.length; i++){
            
            // first reset the list of answers
            answers = [];

            // for each available answer...
            for(letter in questions[i].answers){

                // ...add an html radio button
                answers.push(
                    '<label>'
                        + '<input type="radio" name="question'+i+'" value="'+letter+'"> &nbsp;&nbsp; '
                        + letter + ': '
                        + questions[i].answers[letter]
                    + '</label> <br>'
                );
            }

            // add this question and its answers to the output
            output.push(
                '<div class="question"> <h4>' + questions[i].question + '</h4></div> <br> '
                + '<div class="answers">' + answers.join('') + '</div>'
            );
        }

        // finally combine our output list into one string of html and put it on the page
        quizContainer.innerHTML = output.join('');
    }


    function showResults(questions, quizContainer, resultsContainer){
        
        // gather answer containers from our quiz
        var answerContainers = quizContainer.querySelectorAll('.answers');
        
        // keep track of user's answers
        var userAnswer = '';
        var numCorrect = 0;
        
        // for each question...
        for(var i=0; i<questions.length; i++){

            // find selected answer
            userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
            
            // if answer is correct
            if(userAnswer===questions[i].correctAnswer){
                // add to the number of correct answers
                numCorrect++;
                
                // color the answers green
                answerContainers[i].style.color = 'lightgreen';
            }
            // if answer is wrong or blank
            else{
                // color the answers red
                answerContainers[i].style.color = 'red';
            }
        }

        var a = (numCorrect / (questions.length + numCorrect)) * 100
        var b = 100 - a
        if( b>70  ){   alert('Félicitaion vous avez réussir dans ce exam')  ; }
        
        // show number of correct answers out of total
        resultsContainer.innerHTML = numCorrect + '/' + questions.length + ' = ' b;

       
    }

    // show questions right away
    showQuestions(questions, quizContainer);
    
    // on submit, show results
    submitButton.onclick = function(){
        showResults(questions, quizContainer, resultsContainer);
        quizContainer.style.display = 'none';
        submitButton.style.display = 'none';
    }

}

</script>

 
   
<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
   <defs id="SvgjsDefs1002"></defs>
   <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
   <path id="SvgjsPath1004" d="M0 0 "></path></svg>
</body>
</html>


 <div id="content-page" class="content-page" onload="countDown()" >
    <div class="container" >
        
     
        
        <div class="row">
        	<div class="col-sm-12">
	        <div class="iq-card">
		        <div class="iq-card-header d-flex justify-content-between">
		        	<div class="iq-header-title">
		        	<h4 class="card-title" ><?php echo $Formation->label ?></h4>
		        	<h4 id="horloge" class="text-right" onload="timerContDown()" ></h4>   
		        	
		        	</div>
		        </div>
		        <div class="iq-card-body">	
		              		
		        <div id="quiz"></div>
		        
                <button id="submit">Envoyer</button>
				
				<div id="results"></div>
		        </div>
		      </div>
	       </div>
	    </div>

		

    </div>
</div>


<script type="text/javascript">




		// Set the date we're counting down to
								var countDownDate = new Date().getTime() + 2 * 60000;

								// Update the count down every 1 second
								var x = setInterval(function() {

								  // Get today's date and time
								  var now = new Date().getTime();
								    
								  // Find the distance between now and the count down date
								  var distance = countDownDate - now;
								    
								  // Time calculations for days, hours, minutes and seconds
								  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
								  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
								  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
								  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
								    
								  // Output the result in an element with id="demo"
								  document.getElementById("horloge").innerHTML =  minutes + "m " + seconds + "s ";
								    
								  // If the count down is over, write some text 
								  if (distance < 0) {
								    clearInterval(x);
								    document.getElementById("horloge").innerHTML = "EXPIRED";
								  }
								}, 1000);



}


</script>

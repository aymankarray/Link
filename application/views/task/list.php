<section>
		<div class="gap gray-bg">
			<div class="container">
				<div class="row" id="page-contents">
					<div class=" col-lg-12">
						<div class="central-meta">
							<span><h2> Gestion des tache :  </h2> <?php echo $projet->titre ?></span>
							<button></button> 
							<div id="calendar"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	  <script type="text/javascript">
        $(document).on('ready', function(){
        
        'use strict';
         
         var date = new Date();
         var d = date.getDate();
         var m = date.getMonth();
         var y = date.getFullYear();

         var calendar = $('#calendar').fullCalendar({
         	eventClick: function(info) {
		      var eventObj = info.event;

		      if (eventObj.url) {
		        alert(
		          'Clicked ' + eventObj.title + '.\n' +
		          'Will open ' + eventObj.url + ' in a new tab'
		        );

		        window.open(eventObj.url);

		        info.jsEvent.preventDefault(); // prevents browser from following link in current tab.
		      } else {
		        alert('Clicked ' + eventObj.title);
		      }
		    },
              header: {
                   left: 'prev,next today',
                   center: 'title',
                   right: 'month,agendaWeek,agendaDay'
              },
                   selectable: true,
                   selectHelper: true,
                   select: function(start, end, allDay) {
                   var title = prompt('Event Title:');
                   if (title) {
                   calendar.fullCalendar('renderEvent',
              {
                   title: title,
                   start: start,
                   end: end,
                   allDay: allDay
              },
                   true // make the event "stick"
              );
              }
                   calendar.fullCalendar('unselect');
              },
                   editable: false,
                   events: [
              {
                   title: 'All Day Event',
                   start: new Date(y, m, 1),
                   end: new Date(y, m, 2)
              }
              ]
         });

    });
   </script>
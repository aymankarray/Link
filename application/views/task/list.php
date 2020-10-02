<section>
		<div class="gap gray-bg">
			<div class="container">
				<div class="row" id="page-contents">
					<div class=" col-lg-12">
						<div class="central-meta">
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
                   start: new Date(y, m, 1)
              }
              ]
         });

    });
   </script>
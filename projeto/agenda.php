<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <meta charset='utf-8' />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <script src='js/index.global.min.js'></script>
    <script src='js/core/locales-all.global.min.js'></script>
    <script src='js/core/bootstrap5/index.global.min.js'></script>
    <script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
     themeSystem: 'bootstrap5',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      locale: 'pt-br',
      initialDate: '2023-01-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: false,
      selectMirror: false,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      eventClick: function(arg) {
        if (confirm('Are you sure you want to delete this event?')) {
          arg.event.remove()
        }
      },
      editable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: 'get_reserva.php'
    });

    calendar.render();
  });

    </script>
    <style>
     body {
        margin: 40px 10px;
        padding: 0;
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        font-size: 14px;
        }

        #calendar {
        max-width: 1100px;
        margin: 0 auto;
        }

    </style>
  </head>
  <body>
    <div id='calendar'></div>
  </body>
</html>
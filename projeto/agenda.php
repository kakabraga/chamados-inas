<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <meta charset='utf-8' />
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src='js/index.global.min.js'></script>
    <script src='js/core/locales-all.global.min.js'></script>
    <script src='js/core/bootstrap5/index.global.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
      //initialDate: '2023-01-12',
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
      eventClick: function(info) {
        $('#atender').modal({show: true}); 
      },
      editable: false,
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
        <!-- Modal reserva -->
        <div class="modal fade" id="reserva" tabindex="-1" role="dialog" aria-labelledby="TituloAtendimento" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <form id="form_reserva" action="save_reserva.php" method="post">
                <input type="hidden" name="id" id="atender_id"/>
                <input type="hidden" name="atendente" value="<?=$usuario_logado->id ?>"/>
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TituloAtendimento">Reserva</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        <span id="atender_usuario"></span><br/>
                        <strong>"<span id="atender_descricao"></span>"</strong>
                    </p>
                    <div class="form-group row">
                        <label for="categoria" class="col-sm-2 col-form-label">Categoria:</label>
                        <div class="col-sm-10">
                            <select id="categoria" name="categoria" class="form-control form-control-sm" required>
                                <option value="">Selecione</option>    
                            </select>
                        </div>
                        </div> 
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btn_atender">Atender</button>
                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancelar</button>
                </div>
                </div>
                </form>
            </div>
        </div>

  </body>
</html>
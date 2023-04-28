document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'interaction', 'dayGrid' ],
    locale: 'es',
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay'
    },
    defaultDate: moment().format("YYYY-MM-DD"),
    selectable: true,
    editable: true,
    events: [],
    eventRender: function(info) {
      var date = info.event.start;
	  var ajaxurl = my_ajax_object.ajax_url;

      var id = moment(date).format('DDMMYYYY');
      var event = {
        id: id,
        title: info.event.title,
        start: date
      };
      calendar.addEvent(event);
    }
  });
  
  calendar.on('dateClick', function(info) {
    var date = info.date;
	var ajaxurl = my_ajax_object.ajax_url;

    var id = moment(date).format('DDMMYYYY');
    var data = {
      action: 'get_event_by_id',
      id: id
    };
    jQuery.post(ajaxurl, data, function(response) {
	  var ajaxurl = my_ajax_object.ajax_url;
      var event = JSON.parse(response);
      var cardHtml = '<div class="card"><div class="card-body"><h5 class="card-title">' + event.title + '</h5><p class="card-text">' + event.description + '</p></div></div>';
      // Aquí se podría agregar lógica adicional para mostrar la tarjeta en algún lugar específico de la página.
      alert('El evento seleccionado es: ' + event.title);
    });
  });
  
  calendar.render();
});

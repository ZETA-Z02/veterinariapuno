function myMenuFunction() {
  var menuBtn = document.getElementById("myNavMenu");

  if (menuBtn.className === "nav-menu") {
    menuBtn.className += "responsive";
  } else {
    menuBtn.className = "nav-menu";
  }
}

/* ---------Dark mode---------*/
const body = document.querySelector("body"),
  toggleSwitch = document.getElementById("toggle-switch");

toggleSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");
});

/*----------Typing Effect--------- */
var TypingEffect = new Typed(".typedText", {
  strings: ["Perritos", "Gatitos", "Pericos"],
  loop: true,
  typeSpeed: 100,
  backSpeed: 80,
  backDelay: 2000,
});

/* --------------Scroll animation------------------*/
const sr = ScrollReveal({
  origin: "top",
  distance: "80px",
  duration: 2000,
  reset: true,
});
sr.reveal(".featured-name", {
  delay: 100,
});
sr.reveal(".text-info", {
  delay: 200,
});
sr.reveal(".text-btn", {
  delay: 200,
});
sr.reveal(".social_icons", {
  delay: 200,
});
sr.reveal(".featured-image", {
  delay: 320,
});
sr.reveal(".project-box", {
  interval: 200,
});
sr.reveal(".top-header", {});
const srLeft = ScrollReveal({
  origin: "left",
  distance: "80px",
  duration: 2000,
  reset: true,
});
srLeft.reveal(".about-info", { delay: 100 });
srLeft.reveal(".contact-info", { delay: 100 });
const srRight = ScrollReveal({
  origin: "left",
  distance: "80px",
  duration: 2000,
  reset: true,
});
srRight.reveal(".skill", { delay: 100 });
srRight.reveal(".skill-box", { delay: 100 });

/*------active link--------- */
//const sections = document.querySelector(".section[id]");


// CALENDAR --------------------------------
$(document).ready(function () {
  dni()
  $("#modal").hide();
  $("#datos-cita").hide();
  $("#enviar").hide();
  $("#btn-cerrar").on("click", function () {
    $("#modal").hide();
  })
  var calendarEl = document.getElementById("calendar");
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
    headerToolbar: {
      center: "dayGridMonth,timeGridWeek",
    },
    locale: 'es',
    // events: "http://localhost/veterinaria/citas/get",
    eventSources: [
      {
        url: "http://localhost/veterinariapuno/main/Get",
        method: 'POST'
      }
    ],
  });
  calendar.render();
  reservar(calendar);
  insert(calendar);
  getHora(calendar);
});
function reservar(calendar) {
  calendar.on('dateClick', function (info) {
    let date = info.date;
    let hoy = new Date();
    //DESCOMENTAR ESTA LINEA:
    if (new Date(date) >= hoy) {
      // if (true) {
      let fecha = date.toISOString().split('T')[0];
      const events = calendar.getEvents();
      const totalReservas = events.filter(event => {
        return event.start.toISOString().split('T')[0] === fecha;
      }).length;
      if (totalReservas < 4) {
        $("#modal").show();
        $("#fecha").val(fecha);
      } else {
        alert('El dia seleccionado ya tiene una cita reservada');
      }
    } else {
      alert("No se puede seleccionar fechas anteriores a hoy");
    }
  });

  //console.log('fecha: '+info.dateStr);
  // console.log('fecha: '+info.date);
  // console.log('todo el dia '+info.allDay);
  // console.log('day El '+info.dayEl);
  // console.log('Cordinales: '+info.jsEvent.pageX+','+info.jsEvent.pageY);
  // console.log('Current view type: '+info.view.type);
  // console.log('Current view: '+info.view);
  // console.log('Current view title: '+info.view.title);
  // console.log('Current view activeStart: '+info.view.activeStart);
  // console.log('Current view activeEnd: '+info.view.activeEnd);
  // console.log('Current view currentStart: '+info.view.currentStart);
  // console.log('Current view currentEnd: '+info.view.currentEnd);
}
function insert(calendar) {
  var calendar = calendar;
  $("#form-reservar").on("submit", function (e) {
    e.preventDefault();
    let data = $(this).serialize();
    console.log(data);
    $.ajax({
      type: "POST",
      url: "http://localhost/veterinariapuno/main/reservar",
      data: data,
      success: function (response) {
        if (response == 1 || response == true) {
          alert("Ya tiene cita, no puede reservar otra");
          $("#modal").hide();
          e.target.reset();
          return;
        }
        console.log(response);
        $("#modal").hide();
        e.target.reset();
        //calendar.render();
        calendar.refetchEvents();
        alert("Cita Reservada, Lleve su dni a la cita. Gracias por su preferencia")
      }, error: function (error) {
        console.log('error POST');
      }
    });
  })
}

function dni() {
  var token = "apis-token-8574.bPsef4wHOYjVwA7bFoDMZqLLrNrAMKiY";
  $("#dni").on("keyup", function () {
    var dni = $("#dni").val();
    //console.log(dni.length);
    if (dni.length == 8) {
      $.ajax({
        url: `http://localhost/veterinariapuno/main/dni`,
        type: "POST",
        data: { dni: dni },
        success: function (response) {
          let data = JSON.parse(response);
          if (data == 1) {
            alert("El DNI debe tener 8 dígitos");
          } else {
            //console.log(data);
            $("#nombre").val(data.nombres);
            $("#apellido").val(
              data.apellidoPaterno + " " + data.apellidoMaterno
            );
            return false;
          }
        },
        error: function (xhr, status, error) {
          console.log(error + "->No se pudo hacer la solicitud a la API");
        },
      });
    } else {
      console.log("no hay dni");
    }
  });
}
function getHora(calendar) {
  calendar.on('dateClick', function (info) {
    let date = info.date;
    let fecha = date.toISOString().split('T')[0];
    //console.log(fecha,' ',date);
    $.ajax({
      type: "POST",
      url: `http://localhost/veterinariapuno/main/getHora`,
      data: { fecha },
      dataType: "json",
      success: function (response) {
        console.log(response);
        html = '';
        if (!Array.isArray(response)) {
          response = Object.values(response);
        }
        for (let i = 0; i < response.length; i++) {
          html += `<option value="${response[i]}">${response[i]}</option>`;
        }
        $("#hora").html(html);
      }, error: function (error) {
        console.log(error);
      }
    });
  })
}
numberLeght('#telefono,#dni','9');
function numberLeght(selector, maxLength) {
  $(selector).on("input", function () {
    let valor = $(this)
      .val()
      .replace(/[^0-9]/g, "");
    if (valor.length > maxLength) {
      valor = valor.slice(0, maxLength);
    }
    $(this).val(valor);
  });
}

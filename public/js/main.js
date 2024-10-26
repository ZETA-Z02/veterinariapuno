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
  const sections = document.querySelector(".section[id]");
  function scrollActive() {
    const scrollY = window.scrollY;
    sections.forEach((current) => {
      const sectionHeight = current.offsetHeight,
        sectionTop = current.offsetTop - 50,
        sectionId = current.getAttibute("id");
      if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
        document
          .querySelector(".nav-menu a[href*=" + sectionId + "]")
          .classList.add("active-link");
      } else {
        document
          .querySelector(".nav-menu a[href*=" + sectionId + "]")
          .classList.remove("active-link");
      }
    });
  }
  window.addEventListener("scroll", scrollActive);

// CALENDAR --------------------------------
$(document).ready(function(){
  console.log("jquery, calendar")
  var calendarEl = document.getElementById("calendar");
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
    headerToolbar: {
      center: "dayGridMonth,timeGridWeek,timeGridDay",
    },
    locale: 'es',
    // events: "http://localhost/veterinaria/citas/get",
    eventSources: [
      {
        url       : "http://localhost/veterinariapuno/main/Get",
        method    : 'POST'
      }
    ] ,
  
    
    dateClick: function(info){
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
      info.dayEl.style.backgroundColor = 'red';
    },
  });
  calendar.render();
  entrada(calendar);
  //calendar.next();
});
function entrada(calendar){
  calendar.on('dateClick',function(infor){
    calendar.render();
    console.log(infor.dateStr);
  });
}
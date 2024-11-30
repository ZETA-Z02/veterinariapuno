$(document).ready(function () {
  getespecies();
  getrazas();
  btn_siguiente();
});

function btn_siguiente(){
    $("#siguiente").click(function (){
        $("#datos-cita").show();
        $("#enviar").show();
        $("#siguiente").hide();
        $("#boleta").hide();
    })
}


function getespecies() {
  $.ajax({
    type: "GET",
    url: `http://localhost/veterinariapuno/main/especies`,
    dataType: "json",
    success: function (response) {
      console.log(response);
      let html = "";
      response.forEach((element) => {
        html += `<option value="${element.idespecie}">${element.especie}</option>`;
      });
      $("#especie").html(html);
    },
    error: function (error) {
      console.log("success GET");
    },
  });
}
function getrazas() {
  $(document).on("click", function () {
    $.ajax({
      type: "POST",
      url: `http://localhost/veterinariapuno/main/razas`,
      data: { idespecie: $("#especie").val() },
      dataType: "json",
      success: function (response) {
        console.log(response);
        let html = "";
        response.forEach((element) => {
          html += `<option value="${element.idraza}">${element.raza}</option>`;
        });
        $("#raza").html(html);
      },
      error: function (error) {
        console.log("success GET");
      },
    });
  });
//   $(document).on("change", "#especie", function () {
//     console.log($("#especie").val());
//     $.ajax({
//       type: "POST",
//       url: `http://localhost/veterinariapuno/main/razas`,
//       data: { idespecie: $("#especie").val() },
//       dataType: "json",
//       success: function (response) {
//         console.log(response);
//         let html = "";
//         response.forEach((element) => {
//           html += `<option value="${element.idraza}">${element.raza}</option>`;
//         });
//         $("#raza").html(html);
//       },
//       error: function (error) {
//         console.log("success GET");
//       },
//     });
//   });
}

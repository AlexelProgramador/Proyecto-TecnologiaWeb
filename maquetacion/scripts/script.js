$(document).ready(function () {
  // Registrarse
  $(".email").hide();
  //Cuando pulsamos el boton registrarse aparece el input email
  $(".registrarse").click(function (e) {
    e.preventDefault();
    $(".email").show();
    $(".registrarse").addClass("active").removeClass("disabled");
    $(".ingresar").addClass("disabled").removeClass("active");
    $(".btnForm").html("Registrarse");
  });
  //Si pulsamos ingresar se vuelve a ocultar el input email.
  $(".ingresar").click(function (e) {
    e.preventDefault();
    console.log("Pro");
    $(".email").hide();
    $(".ingresar").addClass("active").removeClass("disabled");
    $(".registrarse").addClass("disabled").removeClass("active");
    $(".btnForm").html("Ingresar");
  });

  // buscador
  $(".botonBuscar").click(function (e) {
    e.preventDefault();
    $(".card").removeClass("d-none");
    var filter = $(".inputControl").val(); // get the value of the input, which we filter on
    console.log(filter);
    $("#contenido")
      .find('.card .card-body h4:not(:contains("' + filter + '"))')
      .parent()
      .parent()
      .addClass("d-none");
  });

  //   Boton filtro
  $(".dropdown-item").click(function (e) {
    e.preventDefault();
    $(".card").removeClass("d-none");
    var filter = $(this).text(); // get the value of the input, which we filter on
    $("#contenido")
      .find('.card .card-body h4:not(:contains("' + filter + '"))')
      .parent()
      .parent()
      .addClass("d-none");
  });
});
// $(".dropdown-menu li").filter(function() {
//     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//   });
//inputControl texto escribir
//botonBuscar
// var txt = $(this).text().toLowerCase();
// $("#contenido *").filter(function () {
//   $(this).toggle($(this).text().toLowerCase().indexOf(txt) > -1);
// });

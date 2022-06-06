$(document).ready(function () {
  // buscador
  $(".botonBuscar").click(function (e) {
    e.preventDefault();
    var txt = $(".inputControl").val().toLowerCase();
    $(".container *").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(txt) > -1);
    });
  });
  //   Boton filtro
  $(".dropdown-item").click(function (e) {
    e.preventDefault();
    var value = $(this).text().toLowerCase();
    $(".container *").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});
// $(".dropdown-menu li").filter(function() {
//     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//   });
//inputControl texto escribir
//botonBuscar

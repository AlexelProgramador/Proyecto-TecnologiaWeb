$(document).ready(function () {
    // Ocultamos el input email del formulario
    $(".email").hide();
    //Cuando pulsamos el boton registrarse aparece el input email
    $(".registrarse").click(function (e) {
      e.preventDefault();
      $(".email").show();
      $(".registrarse").addClass("active");
      $(".ingresar").removeClass("active");
      $(".ingresar").addClass("disabled");
      $(".btnForm").html("Registrarse");
    });
    //Si pulsamos ingresar se vuelve a ocultar el input email.
    $(".ingresar").click(function (e) {
      e.preventDefault();
      $(".email").hide();
      $(".ingresar").addClass("active");
      $(".registrarse").removeClass("active");
      $(".registrarse").addClass("disabled");
      $(".btnForm").html("Ingresar");
    });
  });
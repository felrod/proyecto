$(document).ready(function() {
  $("#submit").on("click", function() {
      var condiciones = $("#check").is(":checked");
      if (!condiciones) {
          alert("Debe aceptar los términos y condiciones");
          event.preventDefault();
      }
  });
});

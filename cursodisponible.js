document.addEventListener('DOMContentLoaded', function() {
  var botonesInscribirse = document.querySelectorAll('.boton-inscribirse');

  botonesInscribirse.forEach(function(boton) {
      boton.addEventListener('click', function() {
          var idCurso = boton.getAttribute('data-id');
          // Establecer el valor en el campo oculto
          document.getElementById('id_curso').value = idCurso;

          if (confirm('¿Seguro que desea inscribirse en este curso (' + idCurso + ')?')) {
              // Submit el formulario cuando el usuario confirme
              document.getElementById('id_curso_form').submit();
          }
      });
  });
});



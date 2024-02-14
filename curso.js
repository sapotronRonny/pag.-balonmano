function validarFormulario() {
    // Validación para asegurar que el cupo no sea cero
    var cupo = document.getElementById('cupo').value;
    var cupoError = document.getElementById('cupoError');

    if (cupo <= 0) {
        cupoError.innerHTML = 'El cupo debe ser mayor a cero.';
        return false;
    } else {
        cupoError.innerHTML = '';
    }

    return true;
}
document.addEventListener('DOMContentLoaded', function() {
    var botonesEliminar = document.querySelectorAll('.boton-eliminar');

    botonesEliminar.forEach(function(boton) {
      boton.addEventListener('click', function() {
        var idServicio = boton.getAttribute('data-id');
        if (confirm('¿Seguro que desea eliminar este curso?')) {
          window.location.href = 'eliminar_servicio.php?id=' + idServicio;
        }
      });
    });
  });
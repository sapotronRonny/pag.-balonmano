function validarFormulario() {
  // Aquí puedes agregar la lógica de validación según tus necesidades.
  // Por ejemplo, validar que los campos no estén vacíos.

  var correo = document.getElementById("email").value;
  var contrasena = document.getElementById("contrasena_hash").value;  

  if (correo === "" || contrasena === "") {
      alert("Por favor, complete todos los campos.");
      return false; // Evitar el envío del formulario
  }

  // Si la validación es exitosa, puedes dejar que el formulario se envíe.
  return true;
}

<?php
// Incluye el archivo de conexión a la base de datos
include('conexion.php');

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $email = $_POST['email'];
    $contrasena_hash = $_POST['contrasena_hash'];

    // Query SQL para obtener la información del usuario
    $query = "SELECT * FROM empleados WHERE email = '$email'";
    $result = mysqli_query($conexion, $query);

    // Verifica si la consulta fue exitosa
    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            // Verifica
            $contrasenaAlmacenada = $row['contrasena_hash'];
            if (password_verify($contrasena_hash, $contrasenaAlmacenada)) {
                // Credenciales correctas
                $response['autenticado'] = true;
                header('Location: homedeadmin.html');
                exit();
            } else {
                // Credenciales incorrectas
                $_SESSION['mensaje'] = "Contraseña incorrecta.";
            }
        } else {
            // Usuario no encontrado
            $_SESSION['mensaje'] = "Usuario no encontrado.";
        }
    } else {
        $_SESSION['mensaje'] = "Error al realizar la consulta: " . mysqli_error($conexion);
    }
}

// Cierra la conexión fuera del bloque if para garantizar que se cierre incluso si no se ejecuta la condición
mysqli_close($conexion);

header('Location: login.html');
exit();
?>

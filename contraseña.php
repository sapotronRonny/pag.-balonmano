<?php
// Calcular el hash de la contraseña
$contrasena = 'Jeanmoreira18';
$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

// Incluir la conexión a la base de datos aquí
include 'conexion.php'; 

// Evitar la inyección de SQL usando consultas preparadas
$query = "INSERT INTO empleados (nombre, apellido, email, contrasena_hash)
          VALUES (?, ?, ?, ?)";

// Preparar la consulta
$stmt = mysqli_prepare($conexion, $query);

// Verificar si la preparación fue exitosa
if ($stmt) {
    // Bind de parámetros
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $apellido, $email, $contrasena_hash);
    // Asignar valores a los parámetros
    $nombre = 'jean';
    $apellido = 'moreira';
    $email = 'jeanpierre@gmail.com';
    // Ejecutar la consulta
    $result = mysqli_stmt_execute($stmt);

    // Verificar si la consulta fue exitosa
    if ($result) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }

    // Cerrar la consulta preparada
    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos aquí
mysqli_close($conexion);
?>
<?php
// Calcular el hash de la contraseña
$contrasena = 'Jeanmoreira18';
$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

// Incluir la conexión a la base de datos aquí
include 'conexion.php'; 

// Evitar la inyección de SQL usando consultas preparadas
$query = "INSERT INTO empleados (nombre, apellido, email, contrasena_hash)
          VALUES (?, ?, ?, ?)";

// Preparar la consulta
$stmt = mysqli_prepare($conexion, $query);

// Verificar si la preparación fue exitosa
if ($stmt) {
    // Bind de parámetros
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $apellido, $email, $contrasena_hash);
    // Asignar valores a los parámetros
    $nombre = 'jean';
    $apellido = 'moreira';
    $email = 'jeanpierre@gmail.com';
    // Ejecutar la consulta
    $result = mysqli_stmt_execute($stmt);

    // Verificar si la consulta fue exitosa
    if ($result) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }

    // Cerrar la consulta preparada
    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos aquí
mysqli_close($conexion);
?>
<?php
// Calcular el hash de la contraseña
$contrasena = 'Jeanmoreira18';
$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

// Incluir la conexión a la base de datos aquí
include 'conexion.php'; 

// Evitar la inyección de SQL usando consultas preparadas
$query = "INSERT INTO empleados (nombre, apellido, email, contrasena_hash)
          VALUES (?, ?, ?, ?)";

// Preparar la consulta
$stmt = mysqli_prepare($conexion, $query);

// Verificar si la preparación fue exitosa
if ($stmt) {
    // Bind de parámetros
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $apellido, $email, $contrasena_hash);
    // Asignar valores a los parámetros
    $nombre = 'jean';
    $apellido = 'moreira';
    $email = 'jeanpierre@gmail.com';
    // Ejecutar la consulta
    $result = mysqli_stmt_execute($stmt);

    // Verificar si la consulta fue exitosa
    if ($result) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }

    // Cerrar la consulta preparada
    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos aquí
mysqli_close($conexion);
?>
<?php
// Calcular el hash de la contraseña
$contrasena = 'Jeanmoreira18';
$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

// Incluir la conexión a la base de datos aquí
include 'conexion.php'; 

// Evitar la inyección de SQL usando consultas preparadas
$query = "INSERT INTO empleados (nombre, apellido, email, contrasena_hash)
          VALUES (?, ?, ?, ?)";

// Preparar la consulta
$stmt = mysqli_prepare($conexion, $query);

// Verificar si la preparación fue exitosa
if ($stmt) {
    // Bind de parámetros
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $apellido, $email, $contrasena_hash);
    // Asignar valores a los parámetros
    $nombre = 'jean';
    $apellido = 'moreira';
    $email = 'jeanpierre@gmail.com';
    // Ejecutar la consulta
    $result = mysqli_stmt_execute($stmt);

    // Verificar si la consulta fue exitosa
    if ($result) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }

    // Cerrar la consulta preparada
    mysqli_stmt_close($stmt);
} else {
    echo "Error al preparar la consulta: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos aquí
mysqli_close($conexion);
?>

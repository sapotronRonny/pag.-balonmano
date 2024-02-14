<?php
// Incluye el archivo de conexión a la base de datos
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $texto = $_POST['descripcion'];
    $contenido = $_POST['contenido'];

    // Subir la imagen y obtener la ruta
    $imagen = $_FILES['imagen'];
    $imagenNombre = $imagen['name'];
    $imagenTmpPath = $imagen['tmp_name'];
    $imagenPath = 'imagenes/carga/' . $imagenNombre; // Ajusta la carpeta según tus necesidades

    move_uploaded_file($imagenTmpPath, $imagenPath);

    // Insertar en la base de datos
    $query = "INSERT INTO noticias (titulo, descripcion, imagen_path, contenido) VALUES (?, ?, ?,?)";
    $stmt = mysqli_prepare($conexion, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssss", $titulo, $texto, $imagenPath,$contenido);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            header('Location: noticiaadmi_html.php');
            exit();
        } else {
            echo 'Error al ejecutar la consulta: ' . mysqli_error($conexion);
        }

        mysqli_stmt_close($stmt);
    } else {
        echo 'Error al preparar la consulta: ' . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
?>

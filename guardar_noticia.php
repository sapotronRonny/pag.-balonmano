<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    // Guardar la imagen en una carpeta y obtener la ruta
    $imagen_path = 'imagenes/' . basename($_FILES['imagen']['name']);
    move_uploaded_file($_FILES['imagen']['tmp_name'], $imagen_path);

    // Insertar la noticia en la base de datos
    $insertar_noticia = "INSERT INTO noticias2 (titulo, contenido, imagen_path) VALUES ('$titulo', '$contenido', '$imagen_path')";
    mysqli_query($conexion, $insertar_noticia);

    // Redireccionar a la página de noticias (puedes cambiar esto según tu estructura de carpetas)
    header('Location: seccionnoticiaadmin_html.php');
}
?>

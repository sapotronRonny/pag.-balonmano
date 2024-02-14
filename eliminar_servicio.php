<?php
include('conexion.php');

if (isset($_GET['id'])) {
    $idServicio = $_GET['id'];
    $queryEliminar = "DELETE FROM curso WHERE id = $idServicio";
    mysqli_query($conexion, $queryEliminar);

    // Redirigir a la página de consulta después de la eliminación
    header('Location: curso_html.php');
    exit;
}
?>

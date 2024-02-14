<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>CURSOS EN LINEA ULEAM</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='curso.css'>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
    
        <script src='curso.js'></script>
    </head>
<body>
    <header>
        <div class="logo">
            <a href="homedeadmin.html">
                <img src="imagenes/logo_escuela.png" alt="Logo de la empresa">
            </a>
        </div>
        <div class="botones">
            <a class="prueba" href="aver_html.php">
                <button id="registro" class="boton">AGREGAR PLANTEL</button>
            </a>
            <a class="prueba" href="curso_html.php">
                <button id="registro" class="boton">AGREGAR CURSOS</button>
            </a>
            <a class="prueba" href="registro.html">
                <button id="registro" class="boton">REGISTRAR</button>
            </a>
            <a class="prueba" href="noticiaadmi_html.php">
                <button id="registro" class="boton">NOTICIAS</button>
            </a>

        </div>

    </header>   
        <div id="imagenp">
            <div id="titulosec">
                <div id="tituloprincipal">CURSOS</div>
                <div id="textopequeno">cursos disponibles</div>
                <a href="homedeadmin.html">
                <div id="textonegrilla">Inicio</div>
                </a>
            </div>
        </div>

        <br><br>
<br><br>

<h1>nuevos cursos</h1>

<form action="procesar_formulario.php" method="post" enctype="multipart/form-data" onsubmit="return validarFormulario();">
    <label for="codigo">Código:</label>
    <input type="text" id="codigo" name="codigo" required>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="tipo">Tipo:</label>
    <input type="text" id="tipo" name="tipo" required>

    <label for="fecha_inicio">Fecha de Inicio:</label>
    <input type="date" id="fecha_inicio" name="fecha_inicio" required>

    <label for="fecha_fin">Fecha de Fin:</label>
    <input type="date" id="fecha_fin" name="fecha_fin" required>

    <label for="horario">Horario:</label>
    <input type="text" id="horario" name="horario" required>

    <label for="lugar">Lugar:</label>
    <input type="text" id="lugar" name="lugar" required>

    <label for="entrenador">Entrenador:</label>
    <input type="text" id="entrenador" name="entrenador" required>

    <label for="cupo">Cupo:</label>
    <input type="number" id="cupo" name="cupo" required>
    <div id="cupoError" class="error-message"></div>

    <button type="submit" >Guardar Evento</button>
</form>

<?php
include('conexion.php');
$consulta = "SELECT * FROM curso";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<div class="news-card">';
        echo '<p>Codigo:' . $fila['codigo'] . '</p>';
        echo '<p>Nombre: ' .$fila ['nombre'] . '</p>';
        echo '<p>Tipo: ' . $fila['tipo'] . '</p>';
        echo '<p>Inicio: ' . $fila['fecha_inicio'] . '</p>';
        echo '<p>Fin: ' . $fila['fecha_fin'] . '</p>';
        echo '<p>Horario: ' . $fila['horario'] . '</p>';
        echo '<p>Lugar: ' . $fila['lugar'] . '</p>';
        echo '<p>Entrenador: ' . $fila['entrenador'] . '</p>';
        echo '<td><button class="boton-eliminar" data-id="' . $fila['id'] . '">Eliminar</button></td>';
        echo '</div>';
    }
} else {
    echo '<p>No hay noticias para mostrar.</p>';
}
?>

        <div class="footer">
            <img class="logotipo" src="imagenes/logo_escuela.png" alt="Logotipo Grande">
            <img class="imagenes-pequenas" src="imagenes/face.png" alt="Imagen Pequeña 1">
            <img class="imagenes-pequenas" src="imagenes/tiktok.png" alt="Imagen Pequeña 2">
            <img class="imagenes-pequenas" src="imagenes/insta.png" alt="Imagen Pequeña 3">
            <img class="imagenes-pequenas" src="imagenes/youtubes.png" alt="Imagen Pequeña 4">
            <a href="index.html">
                <div id="textonegrilla">SALIR DE MODO ADMINISTRADOR</div>
                </a>
            <div class="clear"></div>
               
        </div>
           
</body>
</html>
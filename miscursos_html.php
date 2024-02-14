<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>CURSOS EN LINEA ULEAM</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='cursosdisponibles.css'>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200&display=swap" rel="stylesheet">
        <script src='cursodisponible.js'></script>

    </head>
<body class="bodydatos">
    <header>
        <div class="logo">
            <a href="homejugador.html">
                <img src="imagenes/logo_escuela.png" alt="Logo de la empresa">
            </a>
        </div>
        <div class="botones">
            <a class="prueba" href="perfildejugador_html.php">
            <button id="registro" class="boton">PERFIL</button>
            </a>
            <a class="prueba" href="cursodisponible_html.php">
                <button id="registro" class="boton">CURSOS</button>
            </a>
            <a class="prueba" href="miscursos_html.php">
                <button id="registro" class="boton">MIS CURSOS</button>
            </a>
            <a class="prueba" href="homejugador.html">
            <button id="noticias" class="boton">HOME</button>
            </a>
            <a class="prueba" href="index.html">
            <button id="registro" class="boton">SALIR</button>
            </a>

        </div>
    </header>


<!-- comienza el cuerpo de la pag -->
<div id="imagenp">
    <div id="titulosec">
        <div id="tituloprincipal">MIS CURSOS</div>
        <div id="textopequeno">Cursos Inscritos</div>
        <a href="homejugador.html">
        <div id="textonegrilla">Inicio</div>
        </a>
    </div>
</div>

<br><br>
<br><br>

<h1>Cursos </h1>
<?php
include('conexion.php');

// Obtener el último nombre de la base de datos
$consultaUltimoNombre = "SELECT nombre FROM inscripcion ORDER BY id DESC LIMIT 1";
$resultadoUltimoNombre = mysqli_query($conexion, $consultaUltimoNombre);

if ($resultadoUltimoNombre && mysqli_num_rows($resultadoUltimoNombre) > 0) {
    $fila = mysqli_fetch_assoc($resultadoUltimoNombre);
    $ultimoNombre = $fila['nombre'];

    // Utilizar $ultimoNombre en tu consulta actual
    $consultaCursosInscritos = "SELECT curso.* FROM curso
                                JOIN inscripcion ON curso.id = inscripcion.id_curso
                                WHERE inscripcion.nombre = '$ultimoNombre'";

    $resultadoCursosInscritos = mysqli_query($conexion, $consultaCursosInscritos);

    if ($resultadoCursosInscritos && mysqli_num_rows($resultadoCursosInscritos) > 0) {
        while ($cursoInscrito = mysqli_fetch_assoc($resultadoCursosInscritos)) {
            // Mostrar información del curso
            echo '<div class="news-card">';
            echo '<p>Codigo:' . $cursoInscrito['codigo'] . '</p>';
            echo '<p>Nombre: ' . $cursoInscrito['nombre'] . '</p>';
            echo '<p>Horario: ' . $cursoInscrito['horario'] . '</p>';
            echo '<p>Lugar: ' . $cursoInscrito['lugar'] . '</p>';
            echo '<p>Entrenador: ' . $cursoInscrito['entrenador'] . '</p>';
            echo '</div>';
            // ... Otros detalles del curso
        }
    } else {
        echo '<p>No estás inscrito en ningún curso.</p>';
    }
} else {
    echo '<p>No se pudo obtener el último nombre.</p>';
}
?>




   
<div class="footer">
    <img class="logotipo" src="imagenes/logo_escuela.png" alt="Logotipo Grande">
    <img class="imagenes-pequenas" src="imagenes/face.png" alt="Imagen Pequeña 1">
    <img class="imagenes-pequenas" src="imagenes/tiktok.png" alt="Imagen Pequeña 2">
    <img class="imagenes-pequenas" src="imagenes/insta.png" alt="Imagen Pequeña 3">
    <img class="imagenes-pequenas" src="imagenes/youtubes.png" alt="Imagen Pequeña 4">
    
    <div class="clear"></div>
       
</div>
</body>
</html>
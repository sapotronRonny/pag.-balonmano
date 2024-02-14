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
        <div id="tituloprincipal">CURSOS</div>
        <div id="textopequeno">Cursos Disponibles</div>
        <a href="homejugador.html">
        <div id="textonegrilla">Inicio</div>
        </a>
    </div>
</div>

<br><br>
<br><br>

<h1>Cursos Disponibles</h1>

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
        echo '<p>Cupo: ' . $fila['cupo'] . '</p>';
        echo "<form action='inscripcion_html.php' method='post'>";
echo "<input type='hidden' name='id_curso' value='" . $fila['id'] . "'>";
echo "<button type='submit' class='boton-inscribirse'>Inscribirse</button>";
echo "</form>";
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
    
    <div class="clear"></div>
       
</div>
</body>
</html>
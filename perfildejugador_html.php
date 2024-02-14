<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CURSOS EN LINEA ULEAM</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styleperfil.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
</head>
<body>
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
            <a class="prueba" href="datosjugador.html">
            <button id="registro" class="boton">MIS DATOS</button>
            </a>
            <a class="prueba" href="cursodisponible_html.php">
                <button id="registro" class="boton">CURSOS</button>
            </a>
            <a class="prueba" href="miscursos_html.php">
                <button id="registro" class="boton">MIS CURSOS</button>
            </a>
            <a class="prueba" href="index.html">
                <button id="registro" class="boton">SALIR</button>
            </a>

        </div>
    </header>

    <div id="imagenp">
        <div id="titulosec">
            <div id="tituloprincipal">PERFIL</div>
            <div id="textopequeno">Información de contacto</div>
            <a href="homejugador.html">
            <div id="textonegrilla">Inicio</div>
            </a>
        </div>
    </div>

    <div class="general">
        <div class="cuadro_verde" ALIGN="LEFT">
            <section class="foto" ALIGN="CENTER">
                <img src="imagenes/21W (3).jpg" style="background-color: #00b0f03c; padding: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            </section>
            <section class="datos">
                <h2>JUGADOR</h2>
                <br>
                <h2>Datos personales</h2>
                <ul><br>
                <?php
                    include('conexion.php');

                    $consulta = "SELECT * FROM jugadores ORDER BY id DESC LIMIT 1";
                    $resultado = mysqli_query($conexion, $consulta);

                    if (mysqli_num_rows($resultado) > 0) {
                         $fila = mysqli_fetch_assoc($resultado);

                            echo '<div class="cliente-card">';
                            echo '<p>Nombre:' . $fila['nombre'] . '</p>';
                            echo '<p>apellido: ' .$fila ['apellido'] . '</p>';
                            echo '<p>Cedula de ciudadania: ' . $fila['cedula'] . '</p>';
                            echo '<p>edad: ' . $fila['fecha_nacimiento'] . '</p>';
                            echo '<p>correo: ' . $fila['correo'] . '</p>';
                            echo '<p>telefono: ' . $fila['telefono'] . '</p>';
                            echo '</div>';
                        } else {
                            echo '<p>No hay usuarios para mostrar.</p>';
                        }
                        ?>

                    
                </ul>
            </section>
        </div>
    </div>

</body>
</html>
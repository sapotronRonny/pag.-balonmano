<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>CURSOS EN LINEA ULEAM</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='stylenoti.css'>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200&display=swap" rel="stylesheet">
    
        
    </head>
<body>
    <header>
        <div class="logo">
            <a href="index.html">
                <img src="imagenes/logo_escuela.png" alt="Logo de la empresa">
            </a>
        </div>
        <div class="botones">
            <a class="prueba" href="acercade.html">
            <button id="acercade" class="boton">A CERCA DE</button>
            </a>
            <a class="prueba" href="calendario.html">
            <button id="calendario" class="boton">CALENDARIO</button>
            </a>
            <a class="prueba" href="noticias_html.php">
            <button id="noticias" class="boton">NOTICIAS</button>
            </a>
            <a class="prueba" href="registrogo.html">
            <button id="registro" class="boton">INSCRIBETE</button>
            </a>

        </div>
    </header>

    

<!-- comienza el cuerpo de la pag -->
<div id="imagenp">
    <div id="titulosec">
        <div id="tituloprincipal">NOTICIAS</div>
        <div id="textopequeno">Noticias del club</div>
        <a href="index.html">
        <div id="textonegrilla">Inicio</div>
        </a>
    </div>
</div>


<div class="columnas">
<!-- reemplazar por la interfaz de pazmiño -->
<br><br><br><br>
<!--
<div class="news-card">
    <img src="B:\Users\pazmi\Downloads\IMAGENES\salita.jpg" alt="Imagen de noticias">
    <h2><a href="seccionnoticia.html">de las noticias</a></h2> 
    <p>Descripción de las noticias...</p>
  </div>-->
  
  </div>
  <div class="columnas">
    <?php
    include('conexion.php');
    $consulta = "SELECT * FROM noticias";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) > 0) {
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<div class="news-card">';
            echo '<img src="' . $fila['imagen_path'] . '" alt="Imagen de noticias">';
            echo '<h2><a href="seccionnoticia_html.php">' . $fila['titulo'] . '</a></h2>';
            echo '<p>' . $fila['descripcion'] . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>No hay noticias para mostrar.</p>';
    }
    ?>
</div>
  <div class="pagination">
    <button>1</button>
    <button>2</button>
    <button>3</button>
    <button>4</button>
    <button>5</button>
    <button>Siguiente</button>
  </div>
  


<!-- hasta aqui -->

   
   <div class="footer">
    <img class="logotipo" src="imagenes/logo_escuela.png" alt="Logotipo Grande">
    <img class="imagenes-pequenas" src="imagenes/face.png" alt="Imagen Pequeña 1">
    <img class="imagenes-pequenas" src="imagenes/tiktok.png" alt="Imagen Pequeña 2">
    <img class="imagenes-pequenas" src="imagenes/insta.png" alt="Imagen Pequeña 3">
    <img class="imagenes-pequenas" src="imagenes/youtubes.png" alt="Imagen Pequeña 4">
    <a href="login.html">
        <div id="textonegrilla">LOGIN DE ADMINISTRADOR</div>
    </a>
    <a href="loginjugador.html">
        <div id="textonegrilla">LOGIN DE JUGADOR</div>
    </a>
    <div class="clear"></div>
       
</div>
</body>
</html>
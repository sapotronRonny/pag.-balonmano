<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>CURSOS EN LINEA ULEAM</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='styleplanteladmin.css'>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
    
        <script src='scriptplantadmin.js'></script>
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
                <div id="tituloprincipal">PLANTEL</div>
                <div id="textopequeno">Jugadores 2023</div>
                <a href="homedeadmin.html">
                <div id="textonegrilla">Inicio</div>
                </a>
            </div>
        </div>

        <br><br>
        <!-- 
        <div
        <div id="miembrosp">
            <div class="columna">
                <div class="cont_inter">
                    <div class="cuadrado"><img class="imgcont" src="imagenes/21W (3).jpg" alt="Imagen"></div>
                    <div class="rectangulo"><div class="titulo">Título del Rectángulo</div>
                    <div class="texto_pequeno">Texto más pequeño centrado a la izquierda.</div></div>
                </div>
                <div class="cont_inter">
                    <div class="cuadrado"><img class="imgcont" src="imagenes/manta.jpg" alt="Imagen"></div>
                    <div class="rectangulo"><div class="titulo">Título del Rectángulo</div>
                    <div class="texto_pequeno">Texto más pequeño centrado a la izquierda.</div></div>
                </div>
               
                
            </div>
            <div class="columna">
                <div class="cont_inter">
                    <div class="cuadrado"><img class="imgcont" src="imagenes/se.jpg" alt="Imagen"></div>
                    <div class="rectangulo"><div class="titulo">Título del Rectángulo</div>
                    <div class="texto_pequeno">Texto más pequeño centrado a la izquierda.</div></div>
                </div>
                <div class="cont_inter">
                    <div class="cuadrado"><img class="imgcont" src="imagenes/se.jpg" alt="Imagen"></div>
                    <div class="rectangulo"><div class="titulo">Título del Rectángulo</div>
                    <div class="texto_pequeno">Texto más pequeño centrado a la izquierda.</div></div>
                </div>
               
            </div>
        </div>
        -->
<br><br>
        
            <div class="columna">
                <?php
                include('conexion.php');
                // Consulta para obtener los elementos de la base de datos
                $consulta = "SELECT * FROM plantel";
                $resultado = mysqli_query($conexion, $consulta);

                // Verificar si hay resultados
                if (mysqli_num_rows($resultado) > 0) {
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo '<div class="cont_inter">';
                        echo '<div class="cuadrado" style:"flex: 0 0 30%;"><img class="imgcont" src="' . $fila['imagen_path'] . '" alt="Imagen"></div>';
                        echo '<div class="rectangulo" style:"flex: 1;"><div class="titulo">' . $fila['titulo'] . '</div><div class="texto_pequeno">' . $fila['texto'] . '</div></div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No hay elementos para mostrar.</p>';
                }
                ?>
                </div>
            


        <div id="ventanaSuperpuesta" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #fff; padding: 20px; border-radius: 8px;">
                <!-- Agrega el formulario con action y method -->
                <form action="guardar_plantel.php" method="post" enctype="multipart/form-data">
                    <label for="imagenInput">Seleccionar Imagen:</label>
                    <input type="file" id="imagenInput" name="imagen" accept="image/*" required>
                
                    <label for="textoTitulo">Título:</label>
                    <input type="text" id="textoTitulo" name="titulo" required>
                
                    <label for="textoPequeno">Texto Pequeño:</label>
                    <input type="text" id="textoPequeno" name="texto" required>
                
                    <button type="submit">Agregar Contenedor</button>
                    <button type="button" onclick="cerrarVentana()">Cancelar</button>
                </form>
                
                <!-- Fin del formulario -->
            </div>
        </div>
        
        <button onclick="mostrarVentana()">Agregar Plantel</button>

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
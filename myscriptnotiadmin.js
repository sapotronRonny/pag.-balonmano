function mostrarVentanaAgregarNoticia() {
    var ventana = document.getElementById('ventanaAgregarNoticia');
    ventana.style.display = 'block';
}

function cerrarVentanaAgregarNoticia() {
    var ventana = document.getElementById('ventanaAgregarNoticia');
    ventana.style.display = 'none';
}

function agregarNoticia() {
    var imagenInput = document.getElementById('imagenInput');
    var titulo = document.getElementById('titulo').value;
    var descripcion = document.getElementById('descripcion').value;

    if (imagenInput.files.length > 0 && titulo && descripcion) {
        var imagenUrl = URL.createObjectURL(imagenInput.files[0]);

        var nuevaNoticia = document.createElement('div');
        nuevaNoticia.className = 'news-card';
        nuevaNoticia.id = 'noticia' + Date.now(); // Asignar un ID único

        var imagen = document.createElement('img');
        imagen.src = imagenUrl;
        imagen.alt = 'Imagen de noticias';
        nuevaNoticia.appendChild(imagen);

        var tituloElement = document.createElement('h2');
        var enlaceTitulo = document.createElement('a');
        enlaceTitulo.href = 'seccionnoticiaadmin.html'; // Reemplazar con el enlace correcto
        enlaceTitulo.textContent = titulo;
        tituloElement.appendChild(enlaceTitulo);
        nuevaNoticia.appendChild(tituloElement);

        var descripcionElement = document.createElement('p');
        descripcionElement.textContent = descripcion;
        nuevaNoticia.appendChild(descripcionElement);

        // Botón de eliminación
        var btnEliminar = document.createElement('button');
        btnEliminar.textContent = 'Eliminar Noticia';
        btnEliminar.onclick = function () {
            eliminarNoticia(nuevaNoticia.id);
        };
        nuevaNoticia.appendChild(btnEliminar);

        document.body.insertBefore(nuevaNoticia, document.querySelector('.pagination'));

        cerrarVentanaAgregarNoticia();
    } else {
        alert('Por favor, complete todos los campos.');
    }
}

function eliminarNoticia(id) {
    var noticia = document.getElementById(id);
    if (noticia) {
        noticia.parentNode.removeChild(noticia);
    }
}
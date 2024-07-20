<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Noticias</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="./tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
        language: 'es',
        toolbar: 'undo redo | styles forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | image',
        menubar: false,
        statusbar: false,
        branding: false
      })
    </script>
</head>

<body>
    <!-- Formulario de Entrada de Datos -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Agregar Nueva Noticia</h3>
                        <form action="save_new.php" id="formulario" name="formulario" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>
                            <div class="form-group">
                                <label for="categoria">Categoría</label>
                                <input type="text" class="form-control" id="categoria" name="categoria" required>
                            </div>
                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input type="file" class="form-control" id="imagen" name="imagen" required>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="date" class="form-control" id="fecha" name="fecha" required>
                            </div>
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Guardar Noticia</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      const formulario = document.querySelector('form');
      formulario.addEventListener('click', (e) => {

        const titulo = document.querySelector('#titulo').value;
        const categoria = document.querySelector('#categoria').value;
        const imagen = document.querySelector('#imagen').value;
        const descripcion = tinymce.activeEditor.getContent();
        const fecha = document.querySelector('#fecha').value;
        const usuario = document.querySelector('#usuario').value;
        if (!titulo || !categoria || !imagen || !descripcion || !fecha || !usuario) {
          evento.preventDefault();
          alert('Todos los campos son obligatorios');
        }else{
            console.log(descripcion);
        }
      });
    </script>
</body>

</html>

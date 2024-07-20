<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Noticias</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    require_once "../conf/db.php";
    try {
        $query = $pdo->query("SELECT * FROM new where id_new =" . $id);
        $noticias = $query->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
    <div class="container">
        <div class="row">
            <?php
            // Parámetros de paginación
            $articulo_url = "./assets/img/news/";
            $articulos_por_pagina = 6;
            $articulos_por_linea = 3;
            $pagina_actual = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
            $inicio = ($pagina_actual - 1) * $articulos_por_pagina;
            $noticias_paginadas = array_slice(
                $noticias,
                $inicio,
                $articulos_por_pagina
            );

            // Imprimir noticias
            foreach ($noticias_paginadas as $key => $noticia) { ?>
                <div class="col-md-12 espacio-noticia-footer">
                    <div class="noticia p-3 bg-white">
                        <h2 class="text-center"><?= $noticia[
                            "titulo_new"
                        ] ?></h2>
                        <div class="info justify-content-center">
                            <span class="categoria"><?= $noticia[
                                "categories_new"
                            ] ?></span>
                        </div>

                        <div class="info">
                            <?php $imagenes = explode(
                                ",",
                                $noticia["imagenes_new"]
                            ); ?>
                            <img src="<?= $articulo_url .
                                $imagenes[0] ?>.png" class="img-thumbnail" alt="Imagen de la Noticia">
                        </div>
                        <div>
                            <p class="justify full-width"><?= $noticia[
                                "descripcion_new"
                            ] ?></p>
                        </div>
                        <div class="info justify-content-between">
                            <p class="left"><small><?= date(
                                "Y-m-d",
                                strtotime($noticia["fecha_new"])
                            ) ?></small></p>
                            <p class="right mb-10"><small><?= $noticia[
                                "usuario_new"
                            ] ?></small></p>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>

    <!-- Formulario de Entrada de Datos -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Agregar Nueva Noticia</h3>
                        <form action="guardar_noticia.php" method="post" enctype="multipart/form-data">
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
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="5" required></textarea>
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
</body>

</html>

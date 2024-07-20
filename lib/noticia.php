<?php
require_once "conf/db.php";
try {
    $query = $pdo->query("SELECT * FROM new where id_new =". $id);
    $noticias = $query->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
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
                    <h2 class="text-center"><?= $noticia["titulo_new"] ?></h2>
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
                            $imagenes[0] ?>" class="img-thumbnailalt=" Imagen de la Noticia">
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

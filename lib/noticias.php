<?php
require_once 'conf/db.php';
$pagina_actual = $_GET['pagina'] ?? 1;
try {
    $query = $pdo->query('SELECT * FROM new ORDER BY id_new DESC');
    $noticias = $query->fetchAll();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

function extracto($texto)
{
    $extracto = mb_substr($texto, 0, 65) . '...';
    return $extracto;
}
?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-10w mx-auto">
            <h2 class="display-8 mb-4">Explora el fascinante mundo de la tecnología</h2>
            <p class="lead">En mi blog, te invito a descubrir el emocionante universo de la programación, la
                inteligencia artificial y cómo estas herramientas pueden ser aprovechadas para superar desafíos y
                alcanzar nuevos objetivos. Desde las últimas noticias sobre avances en IA hasta consejos prácticos para
                dominar nuevos lenguajes de programación, cada entrada está diseñada para inspirarte y ayudarte a
                navegar en este emocionante viaje hacia el futuro tecnológico. ¡Únete a mí y descubre cómo la innovación
                puede transformar nuestras vidas!</p>
        </div>
    </div>
</div>

<div class="container container-news">
    <div class="row">
        <?php
        $articulo_url = "../assets/img/news/";
        $articulos_por_pagina = 6;
        $inicio = ($pagina_actual - 1) * $articulos_por_pagina;

        $noticias_paginadas = array_slice($noticias, $inicio, $articulos_por_pagina);
        foreach ($noticias_paginadas as $key => $noticia){
            $id = $noticia['id_new'];
        ?>
            <div class="col-md-4 mb-3">
                <a href="./noticia.php?id=<?= $id;?>" class="noticias-formato">
                    <div class="noticia p-3 bg-white">
                        <h2 class="text-center"><?= $noticia['titulo_new'] ?></h2>
                        <div class="info justify-content-center">
                            <span class="categoria"><?= $noticia['categories_new'] ?></span>
                        </div>

                        <div class="info">
                            <?php $imagenes = explode(",", $noticia['imagenes_new']) ?>
                            <img src="<?= $articulo_url . $imagenes[0] ?>" class="img-thumbnailalt=" Imagen de la Noticia">
                        </div>
                        <div class="extracto">
                            <p><?= extracto($noticia['descripcion_new']) ?></p>
                        </div>
                        <div class="info justify-content-between">
                            <p class="left"><small><?= date('Y-m-d', strtotime($noticia['fecha_new'])) ?></small></p>
                            <p class="right"><small><?= $noticia['usuario_new'] ?></small></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php
        }
        ?>
    </div>
    <?php
    $total_articles = count($noticias);
    $total_pages = ceil($total_articles / $articulos_por_pagina);
    ?>

     <div class="container mb-5">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center flex-wrap">
                <?php if ($pagina_actual > 1) : ?>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina_actual - 1 ?>" tabIndex="-1" aria-disabled="true">Previous</a>
                    </li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                    <li class="page-item <?php echo ($i == $pagina_actual) ? 'active' : '' ?>">
                        <a class="page-link" href="?pagina=<?php echo $i ?>"><?php echo $i ?></a>
                    </li>
                <?php endfor; ?>
                <?php if ($pagina_actual < $total_pages) : ?>
                    <li class="page-item">
                        <a class="page-link" href="?pagina=<?php echo $pagina_actual + 1 ?>">Next</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>

</div>
</div>

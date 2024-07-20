<?php

include_once "./vendor/autoload.php";
include_once "./lib/menu.php";
$id = isset($_GET['id']) ? $_GET['id'] : "";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias | Noé Moreno</title>
    <link rel="icon" href="./assets/images/logo.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/fortawesome/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>
    <?php
    include_once "./lib/menu.php";
    //include_once './lib/filtro.php';
    include_once "./lib/noticia.php";
    include_once "./lib/footer.php";
    ?>

    <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>

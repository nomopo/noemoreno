<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contactar | Noé Moreno</title>
    <link rel="icon" href="./assets/images/logo.ico">
    <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/fortawesome/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("envioemail").submit();
        }
    </script>
	<style>
        body {
            background-image: url('./assets/img/2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php require_once 'lib/menu.php';
    require_once 'lib/contactar.php';
    require_once 'lib/footer.php'; ?>

    <!-- <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function initMap() {
            var location = {
                lat: 41.14936828613281,
                lng: 1.1185309886932373
            }; // Reemplaza con tus coordenadas
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }

        // Carga el mapa cuando la página esté completamente cargada
        window.onload = initMap;
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArxWfNKWIpKF8HSlZcVWyCaIt3lLtH6Ag&callback=initMap">
    </script> -->
</body>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "1122";
$dbname = "noemoreno";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Recoge los datos del formulario
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];
$usuario = $_POST['usuario'];

// Manejo de la carga de la imagen
$target_dir = "assets/img/news/";
$target_file = $target_dir . basename($_FILES["imagen"]["name"]);
$image_name = basename($_FILES["imagen"]["name"]);

// Mueve la imagen al directorio 'uploads'
if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
    echo "La imagen ". basename( $_FILES["imagen"]["name"]). " ha sido subida.";
} else {
    echo "Lo siento, hubo un error subiendo tu archivo.";
}

// Consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO new (titulo_new, categories_new, imagenes_new, descripcion_new, fecha_new, usuario_new) 
VALUES ('$titulo', '$categoria', '$image_name', '$descripcion', '$fecha', '$usuario')";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Registro insertado con éxito";
} else {
  echo "Error insertando el registro: " . $conn->error;
}

$conn->close();
?>
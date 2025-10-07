<?php
session_start();
$varsesion = $_SESSION['id'];
$varsesion1 = $_SESSION['usuario'];
$varsesion2 = $_SESSION['creador'];
if ($varsesion == null || $varsesion1 == '') {
  echo 'usted no tiene autorizacion';
  header("location: /");
  die();
}

// Verificar si se subió el archivo
if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
  $nombreOriginal = $_FILES['archivo']['name'];
  $tipoArchivo = $_FILES['archivo']['type'];
  $rutaTemporal = $_FILES['archivo']['tmp_name'];
  $detalle = $_POST['detalle'];

  // Carpeta destino
  $carpetaDestino = "../";
  if (!is_dir($carpetaDestino)) {
    mkdir($carpetaDestino, 0755, true);
  }

  // Ruta final
  $rutaFinal = $carpetaDestino . basename($nombreOriginal);

  // Mover archivo
  if (move_uploaded_file($rutaTemporal, $rutaFinal)) {
    // Guardar en la base de datos
    require '../Modelo/conexion_bd.php';
    $sql = $con->prepare("INSERT INTO archivos (nombreOriginal, ruta, detalle, tipo, creador) VALUES ('$nombreOriginal','$rutaFinal','$detalle','$tipoArchivo','$varses ion2')");
    $sql->execute();
    $sql=null;

    header("location: ../Vistas/Usuario.php?id=1");
   // echo "Archivo subido y registrado correctamente.";
  } else {
    echo "Error al mover el archivo.";
  }
} else {
  echo "No se recibió ningún archivo.";
}
?>
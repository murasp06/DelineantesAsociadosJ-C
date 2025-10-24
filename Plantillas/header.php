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
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta author="Murasp06"> -->
    <meta name="description" content="Trazos Asociados J&C, delineantes">
    <title>Trazos Asociados J&C</title>

    <link rel="shortcut icon" href="../Image/Logo TAJ&C.png" type="image/x-icon-png-jpg">

    <!-- feuente poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <!-- link a los dns de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- link css bootstrap sin conexion -->
    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css"> -->


    <!-- link para los iconos de bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <!-- para los modeos 3d -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.css">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " style="background-color:#BF9264;">
        <div class="container-fluid">
            <!-- <a class="navbar-brand fw-bolder text-white" href="#">Trazos Asociados J&C</a> -->
            <a class="navbar-brand fw-bolder text-white" href="/"><img src="../Image/Logo_TAJ&C.png" class="rounded-4"
                    width="40" height="40" alt=""> Trazos Asociados J&C </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <!-- <select style="background-color: #1c1c1c;color:white" name="idioma" id="">
                    <option value=""><a href="#" class="nav-link px-2 text-white">Español</a></option>
                    <option value=""><a href="#" class="nav-link px-2 text-white">Ingles</a></option>
                </select>  -->

                <a href="#" class="nav-link px-2 text-white fw-semibold">Cuenta</a>
                <a href="../Controlador/cerrar-session.php" class="btn btn-danger fw-semibold">Cerrar sesion</a>
            </div>
        </div>
    </nav>
    <div class="  bg-body-tertiary ">
        <p class=" text-center border fw-semibold pt-1 mb-0">Bienvenid@ <strong class="text-success"><?php echo $varsesion1?></strong></p>
    </div>
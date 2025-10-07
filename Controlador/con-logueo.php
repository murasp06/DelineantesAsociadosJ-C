<?php

require "../Modelo/conexion_bd.php";

if (!empty($_POST["btnlogin"])) {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];  

    $sql = $con->prepare("SELECT * FROM usuariosT WHERE mail='$usuario' AND pwd ='$clave' ");
    $sql->execute();
    $registros = $sql->fetchAll(PDO::FETCH_OBJ);
    foreach ($registros as $dato)
    if($dato->rol == 2 AND $dato->activo == 1 ) {    
      session_start();
      $_SESSION['id']=$dato->idUsuario;
      $_SESSION['usuario']=$dato->nombre." ".$dato->apellidos;
      $_SESSION['creador']=$dato->mail;
      header("location: ../Vistas/Usuario.php");
    }elseif($dato->rol == 2 AND $dato->activo == 0){
        echo'<div class="bg-danger">Tu cuenta fue eliminada.</div>';
    }else{
        echo'<div class="bg-danger">Ingresa tu usuario o contraseña correctamente.</div>';
    }
}

$sql=null;
?>

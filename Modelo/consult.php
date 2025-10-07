<?php
// llamaos la conexion a la bd
require "conexion_bd.php";

// consulta a bd en la tabla de usuarios toda la informacion
$sql=$con->prepare("SELECT * FROM usuariost");
$sql->execute();
$consult_usuarios=$sql->fetchAll(PDO::FETCH_OBJ);

// consulta para la cantidad de usuarios registrados
// $sql=$con->prepare("SELECT count(1) FROM usuarios");
// $sql->execute();
// $cantidad_user=$sql->fetchColumn();

// consulta de archivos
$varsesion2 = $_SESSION['creador'];
// $sql=$con->prepare("SELECT * FROM archivos WHERE creador LIKE '$varsesion2'");
$sql=$con->prepare("SELECT * FROM archivos");
$sql->execute();
$consult_archivos=$sql->fetchAll(PDO::FETCH_OBJ);


?>
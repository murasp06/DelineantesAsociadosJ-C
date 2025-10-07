<?php

$servidor="sql101.infinityfree.com"; //aqui va el ip o nombre del dominio
$bd="if0_39924453_trazosjc";
$usuario="if0_39924453";
$pass="Kalisto0608";

// $servidor="localhost"; //aqui va el ip o nombre del dominio
// $bd="trazosjc";
// $usuario="root";
// $pass="";
try{
    $con=new PDO("mysql:host=$servidor;dbname=$bd",$usuario,$pass);
}catch(Exception $ex){
    echo "error de conexion ".$ex->getMessage();
}

?>
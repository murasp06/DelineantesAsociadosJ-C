<?php 

// require('../model/conexion.php');
// $con = conectar();


$nombre=$_POST["name"];
$mail=$_POST["email"];
$mensaje=$_POST["mensaje"];

//no trealizar verificacion de variable vacia ya que el formulario lo obliga a poner informacion

// $sql = "INSERT INTO  formulario_contacto (nombre,correo,mensaje) 
// VALUES ('$nombre','$correo','$mensaje')";
// $query=mysqli_query($con,$sql);

// if($query){
//     header("location: ../index.php");
// }else{
//     echo '<script>alert("tu mensaje no se pudo enviar");  </script>';
// }

//  //cerrar la conexion a la bd.
// // para cerrar la conexion a la bd se asigna null a la variable que construye el pdo
// $sql=null;




?>

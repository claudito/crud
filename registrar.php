<?php 
include('config.php');
include('bd/conexion.php');
$db = new Conexion();

$nombres   = $_POST['nombres']; 
$apellidos = $_POST['apellidos']; 
$edad      = $_POST['edad']; 


$query   ="INSERT INTO alumno(nombres,apellidos,edad)VALUES('$nombres','$apellidos','$edad')";
$result  =$db->query($query);
if(!$result)
echo "error";
else
header('Location: ./?m=r');




 ?>
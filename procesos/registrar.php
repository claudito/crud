<?php 
include('../config.php');
include('../bd/conexion.php');
$db = new Conexion();

$nombres   = $_POST['nombres']; 
$apellidos = $_POST['apellidos']; 
$edad      = $_POST['edad']; 
$area      = $_POST['area']; 


$query   ="INSERT INTO alumno(nombres,apellidos,edad,area_id)VALUES('$nombres','$apellidos','$edad','$area')";
$result  =$db->query($query);
if(!$result)
echo "error";
else
header('Location: '.PATH.'?m=r');



 ?>
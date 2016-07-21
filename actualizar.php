<?php 
include('config.php');
include('bd/conexion.php');
$db = new Conexion();

$codigo    = $_POST['codigo']; 
$nombres   = $_POST['nombres']; 
$apellidos = $_POST['apellidos']; 
$edad      = $_POST['edad']; 


$query   ="UPDATE alumno SET nombres='$nombres',
         apellidos='$apellidos',edad='$edad' WHERE codigo='$codigo'";
$result  =$db->query($query);
if(!$result)
echo "error";
else
header('Location: ./?m=a');




 ?>
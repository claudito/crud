<?php 
include('config.php');
include('bd/conexion.php');
$db = new Conexion();

$codigo    = $_POST['codigo']; 

$query   ="DELETE FROM alumno  WHERE codigo='$codigo'";
$result  =$db->query($query);
if(!$result)
echo "error";
else
header('Location: ./?m=e');




 ?>
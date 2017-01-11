<?php include('config.php'); ?>
<?php include('bd/conexion.php'); ?>
<?php 	
$db = new Conexion();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de ALumnos</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

<style>
.center{text-align: center;}
</style>

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

<?php 
error_reporting(0);
if ($_GET['m']=='a')
 {

echo '<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	Registro Actualizado
</div>';
 
	
}
else if ($_GET['m']=='e')
{
echo '<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	Registro Eliminado
</div>';
 
}
else if ($_GET['m']=='r')
{
echo '<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	Alumno Registrado Correctamente
</div>';
 
}
 ?>


		 
     <div class="panel panel-default">
     	<!-- Default panel contents -->
     	<div class="panel-heading">Lista de Alumnos
        <div class="pull-right">
     	<?php include('modal/registrar.php'); ?>
     	</div>
     	</div>
     	
     	<div class="panel-body">
     	<?php include('grid/consulta.php'); ?>
     	</div>
 
     </div>


		</div>
	</div>
</div>
</body>
</html>
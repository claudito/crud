<?php 
$query   ="SELECT * FROM alumno";
$result  = $db->query($query);
 ?>



<table id="consulta" class="table table-condensed table-bordered">
	<thead>
		<tr class="active">
			<th>Codigo</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Edad</th>
			<th width="30" class="center"><label class="btn btn-primary btn-sm">
            <i class="glyphicon glyphicon-refresh"></i>
			actualizar</label></th>
			<th width="30" class="center"><label class="btn btn-danger btn-sm">
            <i class="glyphicon glyphicon-trash"></i>
			eliminar</label></th>
		</tr>
	</thead>
	<tbody>
		<?php 
        
        while ($fila = mysqli_fetch_object($result))
         {
         ?>

         <tr>
         <?php 
       error_reporting(0);
          
			$txt                       ='modal-container-';
			$txtx                      ='#modal-container-';
			$txt                       .=$i;
			$txtx                      =$txtx.=$i;
			
			
			$txtb                       ='modal-containerb-';
			$txtxb                     ='#modal-containerb-';
			$txtb                      .=$j;
			$txtxb                      =$txtxb.=$j;
?>
			<td><?php echo $fila->codigo; ?></td>
			<td><?php echo $fila->nombres; ?></td>
			<td><?php echo $fila->apellidos; ?></td>
			<td><?php echo $fila->edad; ?></td>
			<td class="center">
			<a id="modal-899574" href='<?php echo $txtxb;?>'
			role="button" class="btn" data-toggle="modal">
			<label class="btn btn-primary btn-sm">
            <i class="glyphicon glyphicon-refresh"></i>
			actualizar</label></a>
			</td>
			<td class="center">
			<a id="modal-899574" href='<?php echo $txtx;?>'
			role="button" class="btn" data-toggle="modal">
			<label class="btn btn-danger btn-sm">
            <i class="glyphicon glyphicon-trash"></i>
			eliminar</label></a>
			</td>


			<!-- INICIO MODAL ACTUALIZAR -->
			<div class="modal fade" id="<?php echo $txtb;?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 class="modal-title text-primary" id="myModalLabel">
			Actualizar Alumno
			</h4>
			</div>
			<div class="modal-body">
			
			<form method="POST" action="actualizar.php">
            
            <input type="hidden" name="codigo" value="<?php echo $fila->codigo; ?>">

			<label>Nombres</label>
			<input type="text"  name="nombres" value="<?php echo $fila->nombres ?>" class="form-control"/>
			<label>Apellidos</label>
			<input type="text"  name="apellidos" value="<?php echo $fila->apellidos ?>" class="form-control"/>
			<label>Edad</label>
			<input type="number" min="1"  name="edad" value="<?php echo $fila->edad ?>" class="form-control"/>

			</div>
			<div class="modal-footer">
			<button type="submit" class="btn btn-primary">Actualizar</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 

			</form>
		
			</div>
			</div>
			
			</div>
			
			</div>
			<!-- FIN MODAL ACTUALIZAR -->

<!-- INICIO MODAL ELIMINAR -->
			<div class="modal fade" id="<?php echo $txt;?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 class="modal-title text-danger" id="myModalLabel">
			Eliminar Alumno
			</h4>
			</div>
			<div class="modal-body">
			
             <form action="eliminar.php" method="POST">
	
<input type="hidden" name="codigo" value="<?php echo $fila->codigo ?>"	>





¿Esta seguro de eliminar al alumno <?php echo $fila->nombres.' '.$fila->apellidos; ?>?

			</div>
			<div class="modal-footer">
			<button type="submit" class="btn btn-danger">Eliminar</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
</form>
			</div>
			
			</div>
			
			</div>
			<!-- FIN MODAL ELIMINAR -->

		</tr>

		<?php
		$i=$i+1;
		$j=$j+1;
			

		}

		 ?>
	</tbody>
</table>

<script>
$(document).ready(function() {
    $('#consulta').DataTable();
} );	
</script>
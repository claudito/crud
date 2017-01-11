<?php 
$query   ="SELECT a.codigo,a.nombres,a.apellidos,a.edad,ar.nombre,a.area_id,ar.id FROM alumno as a INNER JOIN area as ar ON 
a.area_id=ar.id";
$result  = $db->query($query);
 ?>

<table id="consulta" class="table table-condensed table-bordered">
	<thead>
		<tr class="active">
			<th>Codigo</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Edad</th>
			<th>Área</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		<?php 
        
        while ($fila = mysqli_fetch_object($result))
         {
         ?>

         <tr>
		<?php 

		$modal_a   ='modal_a';
		$button_a  ='#modal_a';
		$modal_a   .=$a;
		$button_a  =$button_a.=$a;
        /*
		$modal_e   ='modal_e';
		$button_e  ='#modal_e';
		$modal_e   .=$e;
		$button_e  =$button_e.=$e;
        */
		?>
			<td><?php echo $fila->codigo; ?></td>
			<td><?php echo $fila->nombres; ?></td>
			<td><?php echo $fila->apellidos; ?></td>
			<td><?php echo $fila->edad; ?></td>
			<td><?php echo $fila->nombre; ?></td>
			<td>
			<a  data-toggle="modal" href='<?php echo $button_a; ?>'>
			<i class="glyphicon glyphicon-edit"></i>
			</a>

			</td>
             <?php 
          include('modal/actualizar.php');
          //include('modal/eliminar.php');
           ?>

         


		</tr>

		<?php
		$a=$a+1;
		//$e=$e+1;
			

		}

		 ?>
	</tbody>
</table>

<script>
$(document).ready(function() {
    $('#consulta').DataTable();
} );	
</script>
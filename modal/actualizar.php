
<div class="modal fade" id="<?php echo $modal_a; ?>">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Actualizar</h4>
			</div>
			<form action="procesos/actualizar.php" method="POST" autocomplete="Off">
			<div class="modal-body">
             
            <input type="hidden" name="codigo" value="<?php echo $fila->codigo; ?>">

             <div class="form-group">
             <label>Nombres</label>
             <input type="text" name="nombres" class="form-control" required="" value="<?php echo $fila->nombres; ?>">
             </div>

             <div class="form-group">
             <label>Apellidos</label>
             <input type="text" name="apellidos" class="form-control" required="" value="<?php echo $fila->apellidos; ?>">
             </div>

             <div class="form-group">
             <label>Edad</label>
             <input type="text" name="edad" class="form-control" required="" value="<?php echo $fila->edad; ?>">
             </div>

             <div class="form-group">
             <label>Área</label>
			<select name="area" id="" class="form-control" required="">
			<option value="<?php echo $fila->id ?>"><?php echo $fila->nombre ?></option>
			<?php 
			$query1  = "SELECT * FROM area WHERE id NOT LIKE'".$fila->id."'";
			$result1 = $db->query($query1);
			while ($fila1 = mysqli_fetch_object($result1)) 
			{
			echo "<option value='$fila1->id'>$fila1->nombre</option>";
			} 	
			?>
			</select>
             </div>
			
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Actualizar</button>
			</div>
			</form>
		</div>
	</div>
</div>
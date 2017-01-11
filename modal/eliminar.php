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
			
             <form action="procesos/eliminar.php" method="POST">
	
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
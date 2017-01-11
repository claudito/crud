<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
  Registrar Alumno
</button>

<form action="procesos/registrar.php" method="POST">

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrar Alumno</h4>
      </div>
      <div class="modal-body">
        <label>Nombres</label>
        <input type="text" name="nombres" class="form-control" required="">

        <label>Apellidos</label>
        <input type="text" name="apellidos" class="form-control" required="">

        <label>Edad</label>
        <input type="number" name="edad" min="1" max="99"  name="edad" class="form-control" required="">

        <label for="">Área</label>
        <select name="area" id="" class="form-control" required="">
      <option value="">[Seleccionar]</option>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </div>
</div>

</form>
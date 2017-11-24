<!--Borrar usuario -->
<div class="modal fade" id="borrar_usuario" role="dialog">
    <div class="modal-dialog">
    <form method="POST" action="../php/eliminar_usuario.php">
      <!-- Modal contenido -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>';
       <div class="modal-body">
       <div class="alert alert-danger">
       <strong>¡Alerta!</strong> ¿Realmente desea eliminar de manera permanente esté usuario?.
          </div>    
        </div> 
        <div class="modal-footer">
          <a class="btn btn-danger" href=<?php echo ' "../php/eliminar_usuario.php?id={$row[0]}"';?>>Eliminar</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
    </form>
      </div>
      </div>


<!--Modal eliminar Empleado -->
<div class="modal fade" id="borrar_empleado" role="dialog" align="center">
    <div class="modal-dialog">
    <form method="POST" action="../php/eliminar_usuario.php">
      <!-- Modal contenido -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
       <div class="modal-body">
       <div class="alert alert-danger">
       <strong>¡Alerta!</strong> ¿Realmente desea eliminar de manera permanente esté empleado?.
          </div>    
        </div> 
        <div class="modal-footer">
          <a class="btn btn-danger">Eliminar</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
    </form>
      </div>
      </div>

<!-- Modal eliminar Productos Publicados -->
<div class="modal fade" id="borrar_producto" role="dialog" align="center">
    <div class="modal-dialog">
    <form method="POST" action="../php/eliminar_usuario.php">
      <!-- Modal contenido -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>';
       <div class="modal-body">
       <div class="alert alert-danger">
       <strong>¡Alerta!</strong> ¿Realmente desea eliminar de manera permanente esté Producto?.
          </div>    
        </div> 
        <div class="modal-footer">
          <a class="btn btn-danger" href=<?php echo ' "../php/eliminar_usuario.php?id={$row[0]}"';?>>Eliminar</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
    </form>
      </div>
      </div>


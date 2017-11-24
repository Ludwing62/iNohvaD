<!-- // Modal Modificar usuario -->
<div class="modal fade" id="modifica_usuario" role="dialog">
    <div class="modal-dialog">
    <form method="POST" action="../php/modificar_usuario.php">
      <!-- Modal contenido -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="alert alert-info">
    <strong>Modificar Datos del usuario.</strong> 
          </div>
        </div>
       <div class="modal-body">
                <form role="form" name="registro" action="../php/registro.php" method="POST">
                      <div class="form-group">
                              <label >Nombre</label>
                              <input type="text" class="form-control" name="nombre" placeholder="Ingresar nombre">
                      </div>
                      <div class="form-group">
                              <label for="fullname">Apellido</label>
                              <input type="text" class="form-control" id="fullname" name="apellido" placeholder="Ingresar apellidos">
                      </div>
                      <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
                      </div>
                      
                              <div class="modal-footer">
                                  <a class="btn btn-info" href=<?php echo ' "../php/eliminar_usuario.php?id={$row[0]}"';?>>Actualizar</a>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              </div>
                </form>
        </div>
        </div> 
        
    </form>
      </div>
      </div>
</form></div></div>

<!-- // Modal modificar Empleado -->
<div class="modal fade" id="modifica_empleado" role="dialog">
    <div class="modal-dialog">
    <form method="POST" action="../php/modificar_producto.php">
      <!-- Modal contenido -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <div class="alert alert-info" align="center">
    <strong>Modificar Datos del Empleado.</strong> 
          </div>
        </div>
       <div class="modal-body">
                <form role="form" name="registro" action="../php/registro.php" method="POST">
                      <div class="form-group">
                              <label >Nombre</label>
                              <input type="text" class="form-control" name="nombre" placeholder="Ingresar nombre">
                      </div>
                      <div class="form-group">
                              <label for="fullname">Apellido</label>
                              <input type="text" class="form-control" id="fullname" name="apellido" placeholder="Ingresar apellidos">
                      </div>
                      <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
                      </div>
                      
                              <div class="modal-footer">
                                  <a class="btn btn-info" href=<?php echo ' "../php/eliminar_usuario.php?id={$row[0]}"';?>>Actualizar</a>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              </div>
                </form>
      </div>
      </div>
</form></div></div>

<!-- // Modal modificar producto -->
<div class="modal fade" id="modifica_producto" role="dialog">
    <div class="modal-dialog">
    <form method="POST" action="../php/modificar_producto.php">
      <!-- Modal contenido -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <div class="alert alert-info" align="center">
    <strong>Modificar Datos del Producto.</strong> 
          </div>
        </div>
       <div class="modal-body">
                <form role="form" name="registro" action="../php/registro.php" method="POST">
                      <div class="form-group">
                              <label >Nombre</label>
                              <input type="text" class="form-control" name="nombre" placeholder="Ingresar nombre">
                      </div>
                      <div class="form-group">
                              <label for="fullname">Apellido</label>
                              <input type="text" class="form-control" id="fullname" name="apellido" placeholder="Ingresar apellidos">
                      </div>
                      <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
                      </div>
                      
                              <div class="modal-footer">
                                  <a class="btn btn-info" href=<?php echo ' "../php/eliminar_usuario.php?id={$row[0]}"';?>>Actualizar</a>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              </div>
                </form>
        </div>    
        </div> 
        
</form></div></div>


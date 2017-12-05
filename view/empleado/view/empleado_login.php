<!DOCTYPE html>
<html>
<head>
    <title>Login/Empleado</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="image/css/nivo-slider.css">
    <link rel="stylesheet" href="image/css/mi-slider.css">
</head>
<body>
  <?php include '../../../lib/empleado_navbar.php'; ?>
  <br><br><br>

    <div class="container">
<div class="row">
<div class="col-md-6">
        <h2>Bienvenido Empleado, Disfrute su visita.</h2>

        <form role="form" name="login" action="../../../core/empleado_login.php" method="post"  >
          <div class="form-group">
            <label for="username">INGRESAR USUARIO</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Nombre del administrador">
          </div>
          <div class="form-group">
            <label for="password">PASSWORD</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
          </div>

          <button type="submit" class="btn btn-default">Ingresar</button>
        </form>
</div>
</div>
</div>
        
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
    <script src="../../../lib/js/valida_login.js"></script>
</body>
</html>
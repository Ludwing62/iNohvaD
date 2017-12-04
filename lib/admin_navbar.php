<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand"><strong>iNohva Mérida</strong></a>
       <ul class="nav navbar-nav">
      <li><a href="../administrador/view/admin_usuario.php">USUARIOS</a></li>
      <li><a href="../administrador/view/admin_empleados.php">EMPLEADOS</a></li>
    
      <li><a href="producto/admin/bannerlist.php">PRODUCTOS PUBLICADOS</a></li>
    </ul>
    </div>

    <ul class="nav navbar-nav navbar-right">
       <li><a class="navbar-brand" href="./registro.php"></a></li>
      <li><a href="./home.php"></a></li>
      <?php if(!isset($_SESSION["user_id"])):?>
    <?php else:?>
    
    <?php endif;?>
        
      <li class="dropdown"><a href="../../../../index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-exclamation-sign"></span></a></li>
      
      <ul class="nav navbar-nav">

      <li class="dropdown">
         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" align="center"><span class="glyphicon glyphicon-user"> <?php echo $_SESSION['user_id']; ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../../view/administrador/admin_inventario.php"><span class="glyphicon glyphicon-inbox"></span> Inventario </a></li>
          
          <li><a href="../../core/admin_logout.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesión </a></li>
          
        </ul>
       
                
    </ul>

  </div>
</nav>
  

</body>
</html>


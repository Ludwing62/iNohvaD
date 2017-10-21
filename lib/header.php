<?php
class header{
function getHeader() {
?>
<meta charset="UTF-16">
<header>
  <nav class="nav navbar-itsp navbar-static-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">User Platform</a>     
    </div>
    <!-- Menú de Usuario -->
    <ul class="nav navbar-nav navbar-itsp navbar-right">
        <li><a class="navbar-brand-user"><span class="glyphicon glyphicon-user"></span>INFORMACION</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión </a></li>
    </ul>
    <a href="index.php" class="navbar-right"><img src="../img/casa.png" height="40" width="40"></a>
  </div>
</nav>
    </header>
  <?php
  }
}

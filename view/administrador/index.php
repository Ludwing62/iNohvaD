<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido Administrador</title>
</head>
<body>
<?php include '../../lib/admin_navbar.php'; ?>
</body>
</html>
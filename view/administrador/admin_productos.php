<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Productos Publicados</title>
	<?php include '../../lib/admin_navbar.php'; ?>

</head>
<body>

</body>
</html>
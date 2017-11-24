<?php
	$db_host="localhost";
	$db_user="root";
	$db_password="";
	$db_name="alltrips";
	$db_table_name="empleados";
	   $db_connection = mysql_connect($db_host, $db_user, $db_password);

	if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
	}
$nombre = utf8_decode($_POST['nombre']);
$apellido = utf8_decode($_POST['apellido']);
$email = utf8_decode($_POST['email']);
$usuario = utf8_decode($_POST['usuario']);
$clave = utf8_decode($_POST['password']);


$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE Email = '".$email."'", $db_connection);

if (mysql_num_rows($resultado)>0)
{

header('Location: Fail.html');

} else {
	
	$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`Nombre` , `Apellido` , `Email`, `Usuario`, `Password`) VALUES ("' . $nombre . '", "' . $apellido . '", "' . $email . '", "' . $usuario . '", "' . $clave . '")';

mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	
header('Location: ../../../view/administrador/admin_usuario.php');

}

mysql_close($db_connection);

		
?>
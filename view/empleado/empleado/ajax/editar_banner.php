<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["nombre"])){
	/* Llamar la Cadena de Conexion*/ 
	include ("../../../../../core/config.php");
	// escaping, additionally removing everything that could be (html/javascript-) code
     $nombre = mysqli_real_escape_string($con,(strip_tags($_POST['nombre'], ENT_QUOTES)));
	 $descripcion = mysqli_real_escape_string($con,($_POST['descripcion']));
	 $precio = intval($_POST['precio']);
	 $estado = intval($_POST['estado']);
	 $id_producto=intval($_POST['id_producto']);
	 $sql="UPDATE producto SET nombre='$nombre', descripcion='$descripcion', precio='$precio', estado='$estado' WHERE id='$id_producto'";
	 $query = mysqli_query($con,$sql);
	// if user has been added successfully
	if ($query) {
		$messages[] = "Datos  han sido actualizados satisfactoriamente.";
	} else {
		$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
	}
	
	if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
		}
		if (isset($messages)){
			
			?>
			<div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>¡Bien hecho!</strong>
					<?php
						foreach ($messages as $message) {
								echo $message;
							}
						?>
			</div>
			<?php
		}
		
}
?>
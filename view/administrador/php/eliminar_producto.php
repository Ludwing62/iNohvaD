<?php
include("../../core/config.php");
$conexion=Conectarse();

$ID = (int) $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM producto WHERE id_producto =$ID";

if ($conexion->query($sql) === TRUE) {
    echo "Borrado Exitosamente";
} else {
    echo "Error al borrar: " . $conexion->error;
}

$conexion->close();
?>

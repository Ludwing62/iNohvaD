<?php
include("../../core/config.php");
$conexion=Conectarse();

$ID = (int) $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM inventario WHERE id_inventario =$ID";

if ($conexion->query($sql) === TRUE) {
    echo "Borrado Exitosamente";
} else {
    echo "Error al borrar: " . $conexion->error;
}

$conexion->close();
?>

<?php
// conectar bd
include 'config/database.php';
 
// obtener id de producto
$id = isset($_GET['id']) ? $_GET['id'] : "";
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : "";
$user_id=1;
 
// eliminar consulta
$query = "DELETE FROM cart_items WHERE product_id=? AND user_id=?";
 
// prepaerar consulta
$stmt = $con->prepare($query);
 
// enlazar valores
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $user_id);
 
// ejecutar consulta
if($stmt->execute()){
    // redirigir y decirle al usuario que el producto fue eliminado
    header('Location: carro.php?action=removed&id=' . $id . '&nombre=' . $nombre);
}
 
// si se elimino el error
else{
    // redirigir y decirle al usuario que fallo
    header('Location: carro.php?action=failed&id=' . $id . '&nombre=' . $nombre);
}
?>
<?php
// conexion a la base de datos
include 'config/database.php';
 
// obtener id de producto
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "";
$quantity=intval($quantity);
$user_id=1;
 
// eliminar consulta
$query = "UPDATE cart_items SET quantity=? WHERE product_id=? AND user_id=?";
 
// preparar consulta
$stmt = $con->prepare($query);
 
// ligar valores
$stmt->bindParam(1, $quantity);
$stmt->bindParam(2, $id);
$stmt->bindParam(3, $user_id);
 
// ejecutar consulta
if($stmt->execute()){
    // redirigir y decir al usuario que el producto se elimino
    header('Location: carro.php?action=quantity_updated&id=' . $id . '&name=' . $name);
}
 
// si se elimina el error
else{
    // redirigir y decirle al usuario que hubo un error
    header('Location: carro.php?action=failed&id=' . $id . '&name=' . $name);
}
?>
<?php
// conexion bd
include 'config/database.php';
 
//detalles del producto
$id = isset($_GET['id']) ?  $_GET['id'] : die;
$name = isset($_GET['name']) ?  $_GET['name'] : die;
$quantity  = isset($_GET['quantity']) ?  $_GET['quantity'] : die;
$user_id=1;
$created=date('Y-m-d H:i:s');
 
// insertar consulta
$query = "INSERT INTO cart_items SET product_id=?, quantity=?, user_id=?, created=?";
 
// prepare consulta
$stmt = $con->prepare($query);
 
// enlazar valores
$stmt->bindParam(1, $id);
$stmt->bindParam(2, $quantity);
$stmt->bindParam(3, $user_id);
$stmt->bindParam(4, $created);
 
// si la ia insercion a la bd tuvo exito
if($stmt->execute()){
    header('Location: productos.php?action=added&id=' . $id . '&name=' . $name);
}
 
// si falla
else{
     header('Location: productos.php?action=failed&id=' . $id . '&name=' . $name);
}
 
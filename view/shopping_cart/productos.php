<?php
// conexion a la bd
include 'config/database.php';
 
// encabezado de pagina
$page_title="Lista de productos";
include 'head.php';
 
// to prevent undefined index notice
$action = isset($_GET['action']) ? $_GET['action'] : "";
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
$name = isset($_GET['name']) ? $_GET['name'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "1";
 
// mostrar mensaje
if($action=='added'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> ¡agregado a tu carrito!";
    echo "</div>";
}
 
else if($action=='failed'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$name}</strong> No se pudo agregar a su carrito!";
    echo "</div>";
}
 
// seleccionar productos de la bd
$query = "SELECT p.id, p.name, p.price, ci.quantity 
        FROM products p 
            LEFT JOIN cart_items ci
                ON p.id = ci.product_id 
        ORDER BY p.name";
 
$stmt = $con->prepare( $query );
$stmt->execute();
 
// conteo de numero de productos devueltos
$num = $stmt->rowCount();
 
if($num>0){
     
    //start table
    echo "<table class='table table-hover table-responsive table-bordered'>";
     
        // encabezado de la tabla de productos a mostrar
        echo "<tr>";
            echo "<th class='textAlignLeft'>Nombre del producto</th>";
            echo "<th>Precio (USD)</th>";
            echo "<th style='width:5em;'>Cantidad</th>";
            echo "<th>Acciones</th>";
        echo "</tr>";
         
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
             
            //aqui se crea nueva fila de tabla para registro
            echo "<tr>";
                echo "<td>";
                    echo "<div class='product-id' style='display:none;'>{$id}</div>";
                    echo "<div class='product-name'>{$name}</div>";
                echo "</td>";
                echo "<td>&#36;" . number_format($price, 2, '.' , ',') . "</td>";
                if(isset($quantity)){
                    echo "<td>";
                             echo "<input type='text' name='quantity' value='{$quantity}' disabled class='form-control' />";
                    echo "</td>";
                    echo "<td>";
                        echo "<button class='btn btn-success' disabled>";
                            echo "<span class='glyphicon glyphicon-shopping-cart'></span> Agregado!";
                        echo "</button>";
                    echo "</td>";             
                }else{
                    echo "<td>";
                             echo "<input type='number' name='quantity' value='1' class='form-control' />";
                    echo "</td>";
                    echo "<td>";
                        echo "<button class='btn btn-primary add-to-cart'>";
                            echo "<span class='glyphicon glyphicon-shopping-cart'></span> Añadir a la cesta";
                        echo "</button>";
                    echo "</td>";
                }
            echo "</tr>";
        }
         
    echo "</table>";
}
 
// echo para decirle al usuario si no hay productos en la base de datos
else{
    echo "No hay productos encontrados.";
}
 
include 'footer.php';
?>
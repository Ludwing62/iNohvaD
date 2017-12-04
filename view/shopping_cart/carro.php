<?php
// connect to database
include 'config/database.php';
 
// headers
$page_title="Carrito";
include 'head.php';
 
// parametros
$action = isset($_GET['action']) ? $_GET['action'] : "";
$titulo = isset($_GET['titulo']) ? $_GET['titulo'] : "";
 
// Mensaje por si no hay nada
if($action=='removed'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$titulo}</strong> fue eliminado del carrito!";
    echo "</div>";
}
 
else if($action=='quantity_updated'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$titulo}</strong> la cantidad ha sido actualizada!";
    echo "</div>";
}
 
else if($action=='failed'){
        echo "<div class='alert alert-info'>";
        echo "<strong>{$titulo}</strong> no se pudo actualizar la cantidad!";
    echo "</div>";
}
 
else if($action=='invalid_value'){
        echo "<div class='alert alert-info'>";
        echo "<strong>{$titulo}</strong> cantidad es inválida!";
    echo "</div>";
}
 
// Seleccionar productos en el carro
$query="SELECT p.id, p.titulo, p.orden, ci.quantity, ci.quantity * p.orden AS subtotal  
            FROM cart_items ci  
                LEFT JOIN banner p 
                    ON ci.product_id = p.id";
 
$stmt=$con->prepare( $query );
$stmt->execute();
 
// contar numero de filas devueltas
$num=$stmt->rowCount();
 
if($num>0){
     
    //inicio de la tabla
    echo "<table class='table table-hover table-responsive table-bordered'>";
     
    // encabezado de la tabla
    echo "<tr>";
        echo "<th class='textAlignLeft'>Nombre del producto</th>";
        echo "<th>Precio (MXN)</th>";
            echo "<th style='width:15em;'>Cantidad</th>";
            echo "<th>Sub Total</th>";
            echo "<th>Acciones</th>";
    echo "</tr>";
         
    $total=0;
     
    while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
       
        echo "<tr>";
            echo "<td>";
                        echo "<div class='product-id' style='display:none;'>{$id}</div>";
                        echo "<div class='product-name'>{$titulo}</div>";
            echo "</td>";
            echo "<td>&#36;" . number_format($orden, 2, '.', ',') . "</td>";
            echo "<td>";
                        echo "<div class='input-group'>";
                            echo "<input type='number' name='quantity' value='{$quantity}' class='form-control'>";
                             
                            echo "<span class='input-group-btn'>";
                                echo "<button class='btn btn-info update-quantity' type='button'><i class='glyphicon glyphicon-refresh'></i> Actualizar</button>";
                            echo "</span>";
                             
                        echo "</div>";
                echo "</td>";
                echo "<td>&#36;" . number_format($subtotal, 2, '.', ',') . "</td>";
                echo "<td>";
            echo "<a href='eliminar.php?id={$id}&name={$titulo}' class='btn btn-danger'>";
                        echo "<span class='glyphicon glyphicon-remove'></span> Quitar del carrito";
            echo "</a>";
            echo "</td>";
        echo "</tr>";
             
        $total += $subtotal;
    }
     
    echo "<tr>";
    echo "<td><b>Total</b></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td>&#36;" . number_format($total, 2, '.', ',') . "</td>";
    echo "<td>";
            echo "<a href='#' class='btn btn-success'>";
            echo "<span class='glyphicon glyphicon-shopping-cart'></span> Pagar";
            echo "</a>";
    echo "</td>";
    echo "</tr>";
         
    echo "</table>";
}else{
    echo "<div class='alert alert-danger'>";
    echo "<strong>No se han encontrado productos</strong> en tu carrito!";
    echo "</div>";
}

include 'footer.php';
?>
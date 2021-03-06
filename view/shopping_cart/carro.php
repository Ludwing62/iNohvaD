<?php
// connect to database
include 'config/database.php';
 
// headers
$page_title="Carrito";
include 'head.php';
 
// parametros
$action = isset($_GET['action']) ? $_GET['action'] : "";
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : "";
 
// Mensaje por si no hay nada
if($action=='removed'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$nombre}</strong> fue eliminado del carrito!";
    echo "</div>";
}
 
else if($action=='quantity_updated'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$nombre}</strong> la cantidad ha sido actualizada!";
    echo "</div>";
}
 
else if($action=='failed'){
        echo "<div class='alert alert-info'>";
        echo "<strong>{$nombre}</strong> no se pudo actualizar la cantidad!";
    echo "</div>";
}
 
else if($action=='invalid_value'){
        echo "<div class='alert alert-info'>";
        echo "<strong>{$nombre}</strong> cantidad es inválida!";
    echo "</div>";
}
 
// Seleccionar productos en el carro
$query="SELECT p.id, p.nombre, p.precio, ci.quantity, ci.quantity * p.precio AS subtotal  
            FROM cart_items ci  
                LEFT JOIN producto p 
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
                        echo "<div class='product-name'>{$nombre}</div>";
            echo "</td>";
            echo "<td>&#36;" . number_format($precio, 2, '.', ',') . "</td>";
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
            echo "<a href='eliminar.php?id={$id}&name={$nombre}' class='btn btn-danger'>";
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

            echo'<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">';
            echo'<input type="hidden" name="cmd" value="_xclick">';
            echo'<input type="hidden" name="hosted_button_id" value="72FJN9M2VEYH2">';
            echo'<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">';
            echo'<img alt="" border="0" src="https://www.sandbox.paypal.com/es_XC/i/scr/pixel.gif" width="1" height="1">';
            echo'</form>';

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
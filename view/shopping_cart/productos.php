<?php
// conexion a la bd
include 'config/database.php';
 
// encabezado de pagina
$page_title="Lista de productos";
include 'head.php';
 
// to prevent undefined index notice
$action = isset($_GET['action']) ? $_GET['action'] : "";
$id = isset($_GET['id']) ? $_GET['id'] : "1";
$titulo = isset($_GET['titulo']) ? $_GET['titulo'] : "";
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : "1";
 
// mostrar mensaje
if($action=='added'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$titulo}</strong> ¡agregado a tu carrito!";
    echo "</div>";
}
 
else if($action=='failed'){
    echo "<div class='alert alert-info'>";
        echo "<strong>{$titulo}</strong> No se pudo agregar a su carrito!";
    echo "</div>";
}
 
// seleccionar productos de la bd
$query = "SELECT p.id, p.titulo, p.url_image, p.orden, ci.quantity 
        FROM banner p 
            LEFT JOIN cart_items ci
                ON p.id = ci.product_id 
        ORDER BY p.titulo";
 
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
            echo "<th>Imagen</th>";
            echo "<th>Precio (MXN)</th>";
            echo "<th style='width:5em;'>Cantidad</th>";
            echo "<th>Acciones</th>";
        echo "</tr>";
         
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
             
            //aqui se crea nueva fila de tabla para registro
            echo "<tr>";
                echo "<td>";
                    echo "<div class='product-id' style='display:none;'>{$id}</div>";
                    echo "<div class='product-name'>{$titulo}</div>";
                echo "<td>";
                    echo "<img  height='125px' width='125px' class='product-image' src=../administrador/producto/img/banner/$url_image?> </img>";
//            <img height="100" width="100" src="php/'.$row["imagen"].'" alt="img01" /></td><td>
                echo "</td>";
                echo "<td>&#36;" . number_format($orden, 2, '.' , ',') . "</td>";
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
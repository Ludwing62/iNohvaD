<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
          
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="productos.php">Inohva Muebles</a>
        </div>
          
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?php echo $page_title=="Products" ? "class='active'" : ""; ?> >
                    <a href="productos.php">Productos</a>
                </li>
                <li <?php echo $page_title=="Products" ? "class='active'" : ""; ?> >
                    <a href="">Login</a>
                </li>
                <li <?php echo $page_title=="Cart" ? "class='active'" : ""; ?> >
                    <a href="carro.php">
                        <?php
                        // query para contar los productos en el carrito
                        $query = "SELECT count(*) FROM cart_items WHERE user=1";
                      
                        // preparar la declaracion de la consulta
                        $stmt = $con->prepare( $query );
                         
                        // ejecutar solicitud
                        $stmt->execute();
                      
                        // obtener valor de fila
                        $rows = $stmt->fetch(PDO::FETCH_NUM);
                      
                        // devolver conteo
                        $cart_count=$rows[0];
                        ?>
                        Carrito <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                    </a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->

    </div>
</div>
<!-- /navbar -->
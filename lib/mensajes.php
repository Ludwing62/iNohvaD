<?php
  function imprimirMensaje(){
     /*
      * FUNCION IMPRIMIR MENSAJE:
      * 
      * recibe en GET:
      *     message =  "Mensaje a mostrar"
      *     tipo    = 
      *                 001 - Sucess -  Exito en la transaccion
      *                 002 - Info -    Información Adicional
      *                 003 - warning - Advertencia
      *                 004 - Danger  - Peligro o Error en la transaccion.
      */
            if($_GET){
                if($_GET['message']){
                    $message= $_GET['message'];
                    $tipo=$_GET['tipo'];
                    if ($tipo=="001"){
                        $messageTipo="alert alert-success";
                    }
                    elseif ($tipo=="002"){
                        $messageTipo="alert alert-info";
                    }
                    elseif ($tipo=="003"){
                        $messageTipo="alert alert-warning";
                    }
                    elseif ($tipo=="004"){
                        $messageTipo="alert alert-danger";
                    }
                }
            }
                if (!empty($message)) {
                    //echo "<p class=\"error\">" . "Mensaje: ". $message . "</p>";
                    ?>
                    <div class="<?php echo $messageTipo;?> alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Nota:</strong> <?php echo $message; ?>
                    </div>
                <?php            
                } 
                /////////////FINALIZA LA IMPRESIÓN DEL MENSAJE /////////////////
    }

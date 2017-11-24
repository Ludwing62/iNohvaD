 <?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
 <head>


                            <title>Administrador / Empleados</title>
                            <script type="text/javascript">
                        (function(document) {
                          'use strict';

                          var LightTableFilter = (function(Arr) {

                            var _input;

                            function _onInputEvent(e) {
                              _input = e.target;
                              var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
                              Arr.forEach.call(tables, function(table) {
                                Arr.forEach.call(table.tBodies, function(tbody) {
                                  Arr.forEach.call(tbody.rows, _filter);
                                });
                              });
                            }

                            function _filter(row) {
                              var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
                              row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
                            }

                            return {
                              init: function() {
                                var inputs = document.getElementsByClassName('light-table-filter');
                                Arr.forEach.call(inputs, function(input) {
                                  input.oninput = _onInputEvent;
                                });
                              }
                            };
                          })(Array.prototype);

                          document.addEventListener('readystatechange', function() {
                            if (document.readyState === 'complete') {
                              LightTableFilter.init();
                            }
                          });

                        })(document);
                        </script>
                            <style type="text/css">


body

{
  margin: 0;
  padding: 0;
  background: white url(http://www.red-team-design.com/wp-content/themes/redv2/images/back.jpg) no-repeat left top;
}

#main
{
  width: 1240px;
  margin: 80px auto 0 auto;
  background: white;
  -moz-border-radius: 8px;
  -webkit-border-radius: 8px;
  padding: 30px;
  border: 1px solid #adaa9f;
  -moz-box-shadow: 0 2px 2px #9c9c9c;
  -webkit-box-shadow: 0 2px 2px #9c9c9c;
}

/*Features table------------------------------------------------------------*/
.features-table
{
  width: 100%;
  margin: 10px auto;
  border-collapse: separate;
  border-spacing: 0;
  text-shadow: 0 1px 0 #fff;
  color: #2a2a2a;
  background: #fafafa;  
  background-image: -moz-linear-gradient(top, #fff, #eaeaea, #fff); /* Firefox 3.6 */
  background-image: -webkit-gradient(linear,center bottom,center top,from(#fff),color-stop(0.5, #eaeaea),to(#fff)); 
}

.features-table td
{
  height: 70px;
  line-height: 70px;
  padding: 0 20px;
  border-bottom: 1px solid #cdcdcd;
  box-shadow: 0 1px 0 white;
  -moz-box-shadow: 0 1px 0 white;
  -webkit-box-shadow: 0 1px 0 white;
  white-space: nowrap;
  text-align: center;
}

/*Body*/
.features-table tbody td
{
  text-align: center;
  font: normal 12px Verdana, Arial, Helvetica;
  width: 180px;
}

.features-table tbody td:first-child
{
  width: auto;
  text-align: left;
}

.features-table td:nth-child(1), .features-table td:nth-child(3), .features-table td:nth-child(5)
{
  background: #efefef;
  background: rgba(144,144,144,0.15);
  border-right: 1px solid white;
}


.features-table td:nth-child(7)
{
  background: #e7f3d4;  
  background: rgba(184,243,85,0.3);
}

/*Header*/
.features-table thead td
{
  font: bold 1.3em 'trebuchet MS', 'Lucida Sans', Arial;  
  -moz-border-radius-topright: 10px;
  -moz-border-radius-topleft: 10px; 
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-top: 1px solid #eaeaea; 
}

.features-table thead td:first-child
{
  border-top: none;
}

/*Footer*/
.features-table tfoot td
{
  font: bold 1.4em Georgia;  
  -moz-border-radius-bottomright: 10px;
  -moz-border-radius-bottomleft: 10px; 
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border-bottom: 1px solid #dadada;
}

.features-table tfoot td:first-child
{
  border-bottom: none;
}

#buscar{
  width: 300px;
  font-size: 22px;
  color: black;
  background: #E0E0E0 ;
  padding-left: 20px ;
  text-align: center;
  border-radius: 10px;
  padding: 10px;
  margin:10px; 
}

    </style> 
    <?php include '../../../lib/admin_navbar.php'; ?>

    <div id="main">
    
    <div class="container-fluid bg-2 text-center">
  <h3>LISTA / EMPLEADOS</h3>
  <p>Información de los empleados </p>
  <td><a title='Agregar empleado' href='modificar.php?id={$row[0]}' class='btn btn-success'><span class='glyphicon glyphicon-user'></span> Agregar Empleado</a>
  <!-- <a href="../../module/administrador/views/registroform.php" class="btn btn-success navbar-btn" title="Agregar empleado" ><span  class='glyphicon glyphicon-user'></span></a><br> -->
  
</div>
<center>
  <div class="derecha" id="buscar">Buscar <input type="search" class="light-table-filter" data-table="order-table" placeholder="Filtro"></div>
  </center>
  <div class="datagrid"></div>
    <table class="features-table order-table">
    <?php  
        include '../../../core/config.php';        
        

        $link = Conectarse();  
        $result= mysqli_query($link,"Select * from usuarios WHERE tipo_usuario = 2");
        while ($row=mysqli_fetch_row($result))

        {   
          echo  "<tr>";

                echo"<td>$row[0]</td>";
                echo"<td>$row[1]</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";
                echo"<td>$row[4]</td>";
                echo"<td>$row[7]</td>";



              // Opciones de Eliminar y Modificar empleado, activa modal.
               echo "<td>
                <button type='button'  class='btn btn-info btn-lg' data-toggle='modal' data-target='#modifica_empleado' title='Eliminar Empleado'><span class='glyphicon glyphicon-pencil'></span></button>

                <button type='button'  class='btn btn-danger btn-lg' data-toggle='modal' data-target='#borrar_empleado' title='Modificar Empleado'><span class='glyphicon glyphicon-trash'></span></button></td>";
          echo  "</tr>";
            // En este include, se llama al modal eliminar empleado
             include '../modal/eliminar_usuario.php';
            // En este include se llama al modal modificar empleado
             include '../modal/modificar.php'; 


        
        }
    ?>

        <thead>
          <tr>
            <td>ID USUARIO</td>
            <td>NOMBRE</td>
            <td>APELLIDO</td>
            <td>EMAIL</td>
            <td>USUARIO</td>
            <td>FECHA DE REGISTRO</td>
            <td>ACCIONES</td>
          </tr>
        </thead>
        <tfoot>
         
        </tbody>
    </table>
    

  </div>
 
 </body>
 </head>
</html>

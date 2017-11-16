<?php include '../../core/grafica.php';?>
<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
  print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Bienvenido Administrador</title>
        <?php include '../../lib/admin_navbar.php'; ?>
       

        <br><br><br>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
${demo.css}
        </style>
        <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Relación de ventas, 2017'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'ventas',
            data: [

            <?php 
            $sql=mysql_query("select * nota_venta");
            while($res=mysql_fetch_array($sql)){
                ?>
            ['<?php echo $res['precio']; ?>', 45.0],

            <?php            
            }
            ?>
          
          ]
        }]
    });
});


        </script>
    </head>
    <body>
        
<script src="../../lib/Highcharts-4.1.5/js/highcharts.js"></script>
<script src="../../lib/Highcharts-4.1.5/js/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

    </body>
</html>
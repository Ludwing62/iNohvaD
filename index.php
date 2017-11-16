<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Bienvenido a iNohva Muebles</title>
    <style>
        footer {
      background-color: #FFFFFF;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 90%; /* Set width to 100% */
      margin: auto;
      min-height:90px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
    </style>

</head>
<body>
    <?php include 'lib/navbar_principal.php'; ?>
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>


    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/1.jpg" alt="img">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="img/1.jpg" alt="img">
        <div class="carousel-caption">
        </div>      
      </div>

       <div class="item">
        <img src="img/1.jpg" alt="img">
        <div class="carousel-caption">
        </div>      
      </div>
    
     <div class="item">
        <img src="img/1.jpg" alt="img">
        <div class="carousel-caption">
        </div>      
      </div>
  
    </div>


    <!-- Controles Izquierda y Derecha -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
</div><br>
<!-- Lo más destacado -->
<div class="container text-center">    
  <h3>¡LO MÁS VENDIDO!</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="img/6.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Producto 1</p>
        <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"> Agregar</span></button>
    </div>
    <div class="col-sm-4"> 
      <img src="img/11.jpg" class="img-responsive" style="width:100%" alt="Image">  
      <p>Producto 2</p>
        <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"> Agregar</span></button>
    </div>
    <div class="col-sm-4">
      <img src="img/7.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Producto 3</p>
      <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart"> Agregar</span></button>
    </div>
  </div>
</body>
<?php include 'lib/footer.php'; ?>
</html>
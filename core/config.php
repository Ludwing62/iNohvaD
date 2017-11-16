<?php
$host="localhost";
$user="root";
$password="";
$db="inohvamerida";
$con = new mysqli($host,$user,$password,$db);



  

  function Conectarse() 
  {
    $link = mysqli_connect("localhost", "root", "", "inohvamerida");
    if(!$link)
    {
      echo '<br>Ha sucedido un error inesperado en la conexiÃ³n de la base de datos';
    }
    return $link;
  }

  function disconnectDB($link)
  {
    $close = mysqli_close($link);
    if(!$close)
    {
      echo '<br>Ha sucedido un error inesperado en la desconexiÃ³n de la base de datos';
    }
    return $close;
  }

?>
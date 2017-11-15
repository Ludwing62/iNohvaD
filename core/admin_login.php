
<?php

if(!empty($_POST)){
  if(isset($_POST["username"]) &&isset($_POST["password"])){
    if($_POST["username"]!=""&&$_POST["password"]!=""){
      include "config.php";
     
     $user_id=null;
      $sql1= "select * from administrador where (usuario=\"$_POST[username]\" or email=\"$_POST[username]\") and password=\"$_POST[password]\" ";

     
      $query = $con->query($sql1);
      while ($r=$query->fetch_array()) {

        $user_id=$r["usuario"];
        $id_usuario=$r["id_administrador"];        
        $email=$r["email"];   
       
       


    break;
      }   

      if($user_id==null){
        print "<script>alert(\"Acceso invalido.\");window.location='../view/administrador/admin_login.php';</script>";
      }else{
        session_start();
        $_SESSION["user_id"]=$user_id;
        $_SESSION["email"]=$email;
        $_SESSION["id_usuario"]=$id_usuario;
        



        print "<script>window.location='../view/administrador/index.php?id=$id_usuario';</script>";        
      }
  
    }
  }
}



?>
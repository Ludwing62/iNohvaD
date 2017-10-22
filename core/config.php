
<!--Nombre, contraseña, del -->
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Crear conexión 
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Conexión Fallida: " . $conn->connect_error);
} 
echo "Conexión Exitosa";
?>
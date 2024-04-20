<?php 
$host = "localhost"; 
$db_user = "root"; 
$db_password = "Rockandroll1850065952"; 
$db_name = "bd_fisei_elearnning"; 

// Conexión a la base de datos
$conn = new mysqli($host, $db_user, $db_password, $db_name);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
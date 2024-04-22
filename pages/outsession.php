<?php 
session_start();
session_destroy();

setcookie("nombreusuario", $username, time() - 84600, "/");
setcookie("contrasena", $password, time() - 84600, "/");
setcookie("cursouario", $curso, time() - 84600, "/");

header("location: index.php");

exit();

?>
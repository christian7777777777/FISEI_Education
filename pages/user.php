<?php 
    include("../includes/header.php");
    include("../includes/conexionbd.php");
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if($_POST['Boton']=="Registrar"){
            $nombreUsuario = trim($_POST['NombreUsuario']);
            $apellidoUsuario = trim($_POST['ApellidoUsuario']);
            $cedulaUsuario = trim($_POST['CedulaUsuario']);
            $edadUsuario = trim($_POST['EdadUsuario']);
            $telefonoUsuario = trim($_POST['TelefonoUsuario']);
            $emailUsuario = trim($_POST['EmailUsuario']);
            $contrasenaUsuario = trim($_POST['ContrasenaUsuario']);
            $generoUsuario = trim($_POST['GeneroUsuario']);
            $cursoUsuario = trim($_POST['CursoUsuario']);
            
            $fecha = date("Y-m-d H:i:s");
            $consulta = "INSERT INTO `registro_usuarios` (`id`, `Nombres`, `Apellidos`, `Cedula`, `Edad`, `Telefono`, `Email`, `Contrasena`, `Genero`, `Curso`, `Fecha_Registro`) 
            VALUES (NULL, '$nombreUsuario', '$apellidoUsuario', '$cedulaUsuario', '$edadUsuario', '$telefonoUsuario', '$emailUsuario', '$contrasenaUsuario', '$generoUsuario', '$cursoUsuario', '$fecha');";
            
            $resultado = mysqli_query($conn, $consulta);
            
            if($resultado){
                ?>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Te has registrado correctamente!!! <?php echo $nombreUsuario ?>!</strong>Inicia Sesion para empezar el curso<a href="login.php" class="alert-link"><?php echo $cursoUsuario?></a>.
                </div>
                <?php
            }else{
                ?>
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Fallo en Registro!</strong> Vueleve a Intentarlo <a href="RegistroUsuario.php" class="alert-link">Registrarse</a>.
                </div>
                <?php
            }
        }
        elseif($_POST['Boton']=="Login"){

            if (strlen($_POST["EmailUsuario"]) >= 1 && strlen($_POST["ContrasenaUsuario"]) >= 1 ){
                $username = trim($_POST["EmailUsuario"]);
                $password = trim($_POST["ContrasenaUsuario"]);
        
                #$consulta = "INSERT INTO `datos2` (`ID`, `Nombre`, `Correo`, `Cedula`, `Fecha`) VALUES (NULL, '$name', '$email', '$cedula', '$fecha');";
                $consulta = "SELECT COUNT(*) as contar, Curso FROM registro_usuarios WHERE Email='$username' AND Contrasena='$password'";
        
                $resultado = mysqli_query($conn, $consulta);
        
                $array = mysqli_fetch_array($resultado);
        
                if ($array['contar']>0){
                    session_start();
                    $curso = $array['Curso'];
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    $_SESSION['curso'] = $curso;

                    header("location: curso/index.php");
                    setcookie("nombreusuario", $username, time() + 84600, "/");
                    setcookie("cursouario", $curso, time() + 84600, "/");
                    setcookie("contrasena", $password, time() + 84600, "/");
                }else{
                    ?>
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Fallo en Inicio de Sesion !!!</strong> Usuario o Contrasena Incorrectos <a href="login.php" class="alert-link">Reintentar</a>.
                    </div>
                    <?php 
                }
            
            }else{
                ?>
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Fallo en Inicio de Sesion !!!</strong> Complete todos los datos <a href="login.php" class="alert-link">Reintentar</a>.
                </div>
                <?php 
            }
        }
    }
    include("../includes/footer.php");
?>
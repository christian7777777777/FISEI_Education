<?php 
    include("../includes/header.php");
    include("../includes/conexionBD.php");
    
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
            
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO `usuarios` (`ID`, `Nombres`, `Apellidos`, `Cedula`, `Edad`, `Telefono`, `Email`, `Contrasena`, `Genero`, `Curso`, `Fecha_Registro`) 
            VALUES (NULL, '$nombreUsuario', '$apellidoUsuario', '$cedulaUsuario', '$edadUsuario', '$telefonoUsuario', '$emailUsuario', '$contrasenaUsuario', '$generoUsuario', '$cursoUsuario', '$fecha');";
            
            $resultado = mysqli_query($conn, $consulta);
            
            if($resultado){
                ?>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Bien Hecho <?php echo $nombreUsuario ?>!</strong> Te has registrado correctamente!!!<a href="index.php" class="alert-link"><?php echo $cursoUsuario?></a>.
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
                $consulta = "SELECT COUNT(*) as contar, Curso FROM usuarios WHERE Email='$username' AND Contrasena='$password'";
        
                $resultado = mysqli_query($conn, $consulta);
        
                $array = mysqli_fetch_array($resultado);
        
                if ($array['contar']>0){
                    session_start();
                    $_SESSION['username'] = $username;
                    $curso = $array['Curso'];
                    
                    if($curso=="Programacion Web"){
                        header("location: ProgramacionWeb/index.php");
                    }
                    /*elseif($curso=="Electronica Basica"){

                    }elseif($curso=="Automatizacion"){

                    }elseif($curso=="Introduccion a la Robotica"){

                    }*/
        
                    setcookie("nombreusuario", $username, time() + 84600, "/");
                    setcookie("contrasena", $password, time() + 84600, "/");
        
        
                }else{
        
                    ?>
                    <h3 class="error"> Usuario o Contrasena Incorrectos</h3>
                    <?php 
                }
            
            }else{
                ?>
                <h3 class="error">Complete todos los datos</h3>
                <?php 
            }


        }
    }
    include("../includes/footer.php");
?>
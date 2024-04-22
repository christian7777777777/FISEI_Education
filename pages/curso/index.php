<?php  
    session_start();
    $name = $_SESSION['username'];
    $password = $_SESSION['password'];
    $curso = $_SESSION['curso'];

    if(strlen($name) >= 1 && strlen($password) >= 1 ){
        if($curso=="Programacion Web"){
            $logo = "img/portada_ProgramacionWeb.jpg";
        }elseif($curso=="Electronica Basica"){
            $logo = "img/portada_ElectronicaBasica.jpeg";
        }elseif($curso=="Automatizacion"){
            $logo = "img/portada_Automatizacion.webp";
        }elseif($curso=="Introduccion a la Robotica"){
            $logo = "img/portada_IntroduccionRobotica.webp";
        }
    }else{
        header("location: ../login.php");
    }
include("includes/header.php");
?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <h3>Plataforma Virtual FISEI E-Learnning</h3>
                <p class="lead">Programacion Web</p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="sponsor">
                    <img src=<?php echo "$logo" ;?> alt="logo portada" width="400" height="200">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="jumbotron">
            <h1 class="display-3"><?php echo $curso ;?></h1>
            <p class="lead">Bienvenodo al curso !!! <?php echo "<strong> $name </strong>"?></p>
            <hr class="my-2">
            <p>More info</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Empezar</a>
            </p>
        </div>
<?php include("includes/footer.php");?>
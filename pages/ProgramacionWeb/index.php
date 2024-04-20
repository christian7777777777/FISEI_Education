<?php 
    include("includes/header.php");
    session_start();
    $name = $_SESSION['username'];
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
                    <img src="img/portada.jpg" alt="logo portada" width="400" height="200">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="jumbotron">
            <h1 class="display-3">Programacion WEB</h1>
            <p class="lead">Bienvenodo al curso !!! <?php echo "<strong> $name </strong>"?></p>
            <hr class="my-2">
            <p>More info</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Empezar</a>
            </p>
        </div>

<?php include("includes/footer.php");?>
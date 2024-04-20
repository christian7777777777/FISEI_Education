<?php include("../includes/header.php");?>
<div class="jumbotron">
    <h3 class="display-3 text-center">Iniciar Sesion</h3>
    <form  action="user.php" method="post">
        <fieldset>
            <div>
                <label for="EmailUsuario" class="form-label mt-4">Direccion de Email</label>
                <input type="email" class="form-control" id="EmailUsuario" name="EmailUsuario" aria-describedby="emailHelp" placeholder="Ingresa tu email">
                <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más.</small>
            </div>
            <div>
                <label for="ContrasenaUsuario" class="form-label mt-4">Contrasena</label>
                <input type="password" class="form-control" id="ContrasenaUsuario" name="ContrasenaUsuario" placeholder="Ingresa tu Contrasena" autocomplete="off">
            </div>
        </fieldset>
        <fieldset>
        <div>
                <input type="submit" class="btn btn-primary" value="Login" name="Boton">
            </div> 
        </fieldset>
    </form>
</div>
<?php include("../includes/footer.php");?>
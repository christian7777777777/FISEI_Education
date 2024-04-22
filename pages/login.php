<?php include("../includes/header.php");?>
<div class="card border-primary mb-3 " style="max-width: 40rem;">
  <div class="card-header text-center">
    <h2>Login</h2>
  </div>
  <div class="card-body">
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
                <br>
                <input type="submit" class="btn btn-primary" value="Login" name="Boton">
            </div> 
        </fieldset>
    </form>
</div>
<?php include("../includes/footer.php");?>
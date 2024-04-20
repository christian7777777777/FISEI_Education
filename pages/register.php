<?php include("../includes/header.php");?>
<div class="jumbotron">
    <h3 class="display-3 text-center">Registrarse</h3>
    <form action="user.php" method="post">
        <fieldset>
            <legend class="mt-4 text-center">Datos Personales</legend>
            <div>
                <label for="NombreUsuario" class="form-label mt-4">Nombres Completos</label>
                <input type="text" class="form-control" id="NombreUsuario" name="NombreUsuario" placeholder="Ingresa tus dos Nombres">
            </div>
            <div>
                <label for="ApellidoUsuario" class="form-label mt-4">Apellidos Completos</label>
                <input type="text" class="form-control" id="ApellidoUsuario" name="ApellidoUsuario" placeholder="Ingresa tus dos Apellidos">
            </div>
            <div>
                <label for="CedulaUsuario" class="form-label mt-4">Cedula</label>
                <input type="number" class="form-control" id="CedulaUsuario" name="CedulaUsuario" placeholder="Ingresa tu numero de cedula" autocomplete="off">
            </div>
            <div>
                <label for="EdadUsuario" class="form-label mt-4">Edad</label>
                <input type="number" class="form-control" id="EdadUsuario" name="EdadUsuario" placeholder="Ingresa tu Edad" autocomplete="off">
            </div>
            <div>
                <label for="TelefonoUsuario" class="form-label mt-4">Telefono/celular</label>
                <input type="number" class="form-control" id="TelefonoUsuario" name="TelefonoUsuario" placeholder="Ingresa tu numero de telefono o celular" autocomplete="off">
            </div>
        </fieldset>
        <fieldset>
            <legend class="mt-4 text-center">Credenciales de Acceso</legend>
            <div>
                <label for="EmailUsuario" class="form-label mt-4">Direccion de Email</label>
                <input type="email" class="form-control" id="EmailUsuario" name="EmailUsuario" aria-describedby="emailHelp" placeholder="Ingresa tu email">
                <small id="emailHelp" class="form-text text-muted">Procura ingresar una direccion email valida</small>
            </div>
            <div>
                <label for="ContrasenaUsuario" class="form-label mt-4">Contrasena</label>
                <input type="password" class="form-control" id="ContrasenaUsuario" name="ContrasenaUsuario" placeholder="Ingresa tu Contrasena" autocomplete="off">
            </div>
        </fieldset>
        <fieldset>
            <legend class="mt-4 text-center">Genero</legend>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="GeneroUsuario" id="optionsRadios1" value="Masculino" checked="">
                <label class="form-check-label" for="optionsRadios1">Masculino</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="GeneroUsuario" id="optionsRadios2" value="Femenino">
                <label class="form-check-label" for="optionsRadios2">Femenino</label>
            </div>
            <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="GeneroUsuario" id="optionsRadios3" value="Otros" >
                <label class="form-check-label" for="optionsRadios3">Otros</label>
            </div>
        </fieldset>
        <fieldset>
            <legend class="mt-4 text-center">Curso</legend>
            <div>
                <label for="CursoUsuario" class="form-label mt-4">Elige un curso</label>
                <select class="form-select" id="CursoUsuario" name="CursoUsuario">
                    <option>Programacion Web</option>
                    <option>Electronica Basica</option>
                    <option>Automatizacion</option>
                    <option>Introduccion a la Robotica</option>
                </select>
            </div>
        </fieldset>
        <fieldset>
            <legend class="mt-4 text-center">Terminos y Condiciones</legend>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="true" id="flexCheckDefault" required="">
                <label class="form-check-label" for="flexCheckDefault">He leido y Acepto los terminos y condiciones</label>
            </div>
        </fieldset>
        <fieldset>
            <input type="submit" class="btn btn-primary" value="Registrar" name="Boton">
        </fieldset>
    </form>
</div>
<?php include("../includes/footer.php");?>
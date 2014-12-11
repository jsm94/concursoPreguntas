<div class="container-fluid">
    <div class="jumbotron">
        <h1>Inicia sesión</h1>
    </div>
</div>
<div class="container">
    <div class="col-md-6 col-md-offset-2 col-xs-12">
        <form role="form" action="modulos/crearUsuario.php" method="post">
            <div class="form-group">
                <label for="user">Nombre de usuario</label>
                <input required type="text" class="form-control" name="user" id="user" placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input required type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña">
            </div>
            <button type="submit" class="btn btn-default">Inicia sesión</button> |
            <button type="submit" class="btn btn-default">Regístrate</button>
        </form>
    </div>
</div>

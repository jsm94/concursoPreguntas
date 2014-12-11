<div class="container-fluid">
    <div class="jumbotron">
        <h1>Antes de empezar...</h1>
        <h2>debes de crear la base de datos</h2>
    </div>
</div>
<div class="container">
    <h4>Rellena los siguientes campos para crear la base de datos</h4>
    <br>
    <div class="col-md-6 col-md-offset-2 col-xs-12">
        <form role="form" action="modulos/crearBD.php" method="post">
            <div class="form-group">
                <label for="dominio">Dominio</label>
                <input type="text" class="form-control" name="dominio" id="dominio" placeholder="ej. localhost, www.ejemplo.es, 192.168.1.130...">
            </div>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input type="text" class="form-control" name="user" id="user" placeholder="ej. usuConPreg">
                <p class="help-block">Introduce el usuario administrador de la base de datos. Te recomendamos crear un usuario nuevo para esta base de datos</p>
            </div>
            <div class="form-group">
                <label for="dominio">Contraseña</label>
                <input type="password" class="form-control" name="pass" id="dominio" placeholder="Introduce la contraseña del usuario de la base de datos">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>
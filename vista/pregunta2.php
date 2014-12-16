<div class="container">
    <h1>Pregunta 2</h1>
    <br>
    <div class="col-md-6 col-md-offset-2 col-xs-12">
        <form role="form" action="modelo/comprobarPregunta.php" method="post">
            <div class="form-group">
                <label for="dominio"><h3>¿Cuál es el limite de edad establecido para participar en los Juegos Olímpicos?</h3></label>
                <!-- Respuestas -->
                <div class="radio">
                    <label>
                        <input type="radio" name="respuesta" value="1">18
                    </label>
                    <label>
                        <input type="radio" name="respuesta" value="2">16
                    </label>
                    <label>
                        <input type="radio" name="respuesta" value="3">Ninguna
                    </label>
                </div>
                <!-- Valores predeterminados -->
                <input type="hidden" name="respuestaCorrecta" value="3">
                <input type="hidden" name="pregunta" value="p2">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

<div class="container">
    <h1>Pregunta 1</h1>
    <br>
    <div class="col-md-6 col-md-offset-2 col-xs-12">
        <form role="form" action="modelo/comprobarPregunta.php" method="post">
            <div class="form-group">
                <label for="dominio"><h3>¿En qué deporte se usa tiza?</h3></label>
                <!-- Respuestas -->
                <div class="radio">
                    <label>
                        <input type="radio" name="respuesta" value="1">Billard
                    </label>
                    <label>
                        <input type="radio" name="respuesta" value="2">Ping-Pong
                    </label>
                    <label>
                        <input type="radio" name="respuesta" value="3">Petanca
                    </label>
                </div>
                <!-- Valores predeterminados -->
                <input type="hidden" name="respuestaCorrecta" value="1">
                <input type="hidden" name="pregunta" value="p1">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

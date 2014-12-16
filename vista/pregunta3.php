<div class="container">
    <h1>Pregunta 3</h1>
    <br>
    <div class="col-md-6 col-md-offset-2 col-xs-12">
        <form role="form" action="modelo/comprobarPregunta.php" method="post">
            <div class="form-group">
                <label for="dominio"><h3>¿Qué órgano segrega la hormona insulina?</h3></label>
                <!-- Respuestas -->
                <div class="radio">
                    <label>
                        <input type="radio" name="respuesta" value="1">El intestino grueso
                    </label>
                    <label>
                        <input type="radio" name="respuesta" value="2">El páncreas
                    </label>
                    <label>
                        <input type="radio" name="respuesta" value="3">El hígado
                    </label>
                </div>
                <!-- Valores predeterminados -->
                <input type="hidden" name="respuestaCorrecta" value="2">
                <input type="hidden" name="pregunta" value="p3">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>

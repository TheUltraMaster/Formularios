<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuestionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Crear Cuestionario</h1>
        <form method="POST" action="generar_cuestionario.php">
            <div id="preguntas-container">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Cuestionario:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <!-- Primera Pregunta -->
                <div class="pregunta mb-3">
                    <label for="pregunta-1" class="form-label">Pregunta 1:</label>
                    <input type="text" class="form-control" id="pregunta-1" name="preguntas[1][pregunta]" required>

                    <label class="form-label">Opciones:</label>
                    <div class="opciones-container" id="opciones-1">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="preguntas[1][opciones][]" required>
                            <div class="input-group-text">
                                <input type="radio" name="preguntas[1][respuesta_correcta]" value="1" required>
                            </div>
                        </div>
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="preguntas[1][opciones][]" required>
                            <div class="input-group-text">
                                <input type="radio" name="preguntas[1][respuesta_correcta]" value="2">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary btn-sm" onclick="agregarOpcion(1)">Agregar Opción</button>
                </div>
            </div>

            <button type="button" class="btn btn-primary mb-3" onclick="agregarPregunta()">Agregar Otra Pregunta</button>
            <button type="submit" class="btn btn-success">Generar Cuestionario</button>
        </form>
    </div>

   <script src="./index.js"></script>
</body>
</html>


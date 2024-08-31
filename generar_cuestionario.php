<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuestionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="./generar_cuestionario.css">
</head>
<body>
    <div class="container cuestionario-container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombreCuestionario = $_POST['nombre'];
            $preguntas = $_POST['preguntas'];

            echo "<h1 class='mb-4'>Cuestionario: " . htmlspecialchars($nombreCuestionario) . "</h1>";
            echo "<form method='POST' action='evaluar_cuestionario.php'>";

            foreach ($preguntas as $index => $pregunta) {
                echo "<h3 class='mt-3'>Pregunta $index: " . htmlspecialchars($pregunta['pregunta']) . "</h3>";
                echo "<div class='opciones-container'>";
                
                foreach ($pregunta['opciones'] as $opcionIndex => $opcion) {
                    echo "<div class='form-check form-check-inline'>";
                    echo "<input class='form-check-input' type='radio' name='respuestas[$index]' value='" . htmlspecialchars($opcion) . "' required>";
                    echo "<label class='form-check-label'>" . htmlspecialchars($opcion) . "</label>";
                    echo "</div>";
                }
                
                echo "</div>";

                // Guarda la respuesta correcta como un campo oculto para su evaluación posterior
                $correcta = $pregunta['opciones'][$pregunta['respuesta_correcta'] - 1];
                echo "<input type='hidden' name='correctas[$index]' value='" . htmlspecialchars($correcta) . "'>";
            }

            echo "<div class='text-center mt-4'>";
            echo "<button type='submit' class='btn btn-primary'>Enviar Respuestas</button>";
            echo "</div>";
            echo "</form>";
        }
        ?>
    </div>
</body>
</html>

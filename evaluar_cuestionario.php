<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Cuestionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./evaluar_cuestionario.css">
</head>
<body>
    <div class="container resultados-container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $respuestas = $_POST['respuestas'];
            $correctas = $_POST['correctas'];
            $aciertos = 0;

            echo "<h1>Resultados del Cuestionario</h1>";

            foreach ($respuestas as $index => $respuesta) {
                $respuestaCorrecta = $correctas[$index];
                if ($respuesta == $respuestaCorrecta) {
                    echo "<p class='resultado-correcto'>Pregunta $index: Correcto</p>";
                    $aciertos++;
                } else {
                    echo "<p class='resultado-incorrecto'>Pregunta $index: Incorrecto. La respuesta correcta era: $respuestaCorrecta</p>";
                }
            }

            echo "<h2>Puntaje Final: $aciertos/" . count($respuestas) . "</h2>";
        }
        ?>
    </div>
</body>
</html>

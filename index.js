let contadorPreguntas = 1;

function agregarOpcion(preguntaId) {
    const opcionesContainer = document.getElementById(`opciones-${preguntaId}`);
    const numOpciones = opcionesContainer.getElementsByClassName('input-group').length;

    if (numOpciones >= 10) return; // Limitar a 10 opciones

    const nuevaOpcion = document.createElement('div');
    nuevaOpcion.classList.add('input-group', 'mb-2');
    nuevaOpcion.innerHTML = `
        <input type="text" class="form-control" name="preguntas[${preguntaId}][opciones][]" required>
        <div class="input-group-text">
            <input type="radio" name="preguntas[${preguntaId}][respuesta_correcta]" value="${numOpciones + 1}">
        </div>
    `;
    opcionesContainer.appendChild(nuevaOpcion);
}

function agregarPregunta() {
    if (contadorPreguntas >= 10) return; // Limitar a 10 preguntas

    contadorPreguntas++;
    const container = document.getElementById('preguntas-container');
    const nuevaPregunta = document.createElement('div');
    nuevaPregunta.classList.add('pregunta', 'mb-3');
    nuevaPregunta.innerHTML = `
        <label for="pregunta-${contadorPreguntas}" class="form-label">Pregunta ${contadorPreguntas}:</label>
        <input type="text" class="form-control" id="pregunta-${contadorPreguntas}" name="preguntas[${contadorPreguntas}][pregunta]" required>

        <label class="form-label">Opciones:</label>
        <div class="opciones-container" id="opciones-${contadorPreguntas}">
            <div class="input-group mb-2">
                <input type="text" class="form-control" name="preguntas[${contadorPreguntas}][opciones][]" required>
                <div class="input-group-text">
                    <input type="radio" name="preguntas[${contadorPreguntas}][respuesta_correcta]" value="1" required>
                </div>
            </div>
            <div class="input-group mb-2">
                <input type="text" class="form-control" name="preguntas[${contadorPreguntas}][opciones][]" required>
                <div class="input-group-text">
                    <input type="radio" name="preguntas[${contadorPreguntas}][respuesta_correcta]" value="2">
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-secondary btn-sm" onclick="agregarOpcion(${contadorPreguntas})">Agregar Opción</button>
    `;
    container.appendChild(nuevaPregunta);
}
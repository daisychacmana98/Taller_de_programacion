function mostrarConfirmacion() {
    var modal = document.getElementById("confirmationModal");
    modal.style.display = "flex";
}


function cerrarConfirmacion() {
    var modal = document.getElementById('confirmationModal');
    modal.style.display = 'none';
}

function mostrarFormulario() {
    var formulario = document.getElementById('formulario');
    formulario.style.display = 'block';
}

function mostrarModal() {
    var modal = document.getElementById('modal');
    modal.style.display = 'block';
}

function cerrarModal() {
    var modal = document.getElementById('modal');
    modal.style.display = 'none';
}
function registrarEstudiante() {
    var codigo = document.getElementsByName('codigo')[0].value;
    var nombre = document.getElementsByName('nombre')[0].value;
    var telefono = document.getElementsByName('telefono')[0].value;
    var direccion = document.getElementsByName('direccion')[0].value;

    var formData = new FormData();
    formData.append('codigo', codigo);
    formData.append('nombre', nombre);
    formData.append('telefono', telefono);
    formData.append('direccion', direccion);
    formData.append('foto', document.querySelector('input[name=foto]').files[0]); // Add the photo

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Show the response in the modal
                mostrarModal(xhr.responseText);
            } else {
                alert('Error al registrar al estudiante.');
                console.error('Error al registrar al estudiante. Código de estado:', xhr.status);
            }
        }
    };

    xhr.open('POST', 'registration_form.php', true);
    xhr.send(formData);

    // Check if the form exists before adding the event listener
    var form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function () {
            alert('¡Estudiante registrado con éxito!');
        });
    } else {
        console.error('Form not found.');
    }
}


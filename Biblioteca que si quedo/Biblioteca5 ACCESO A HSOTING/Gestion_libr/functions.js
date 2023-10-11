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

function registrarLibro() {
    console.log("registrarLibro called");
    var titulo = document.getElementsByName('titulo')[0].value;
    var autor = document.getElementsByName('autor')[0].value;
    var editorial = document.getElementsByName('editorial')[0].value;
    var estado = document.getElementsByName('estado')[0].value;
    var descripcion = document.getElementsByName('descripcion')[0].value;
    var formData = new FormData();
    formData.append('titulo', titulo);
    formData.append('autor', autor);
    formData.append('editorial', editorial);
    formData.append('estado', estado);
    formData.append('descripcion', descripcion);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            console.log('Respuesta del servidor:', xhr.responseText);
            mostrarModal(xhr.responseText);  // Mostrar la respuesta directamente

            if (xhr.status !== 200) {
                console.error('Error al registrar al libro. Código de estado:', xhr.status);
                alert('Error al registrar al libro.');
            }
        }
    };

    xhr.open('POST', 'registration_form.php', true);
    xhr.send(formData);
}

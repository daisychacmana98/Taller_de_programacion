
<style>
  
   .modal-content button {
        background-color: #1C276F;
        color: #fff;
        padding: 10px 30px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-size: 22px;
        font-weight: bold;
                            justify-content: center;
                                    margin: 0 auto;
                                    text-align: center;}    margin: 10px; /* Añade margen alrededor de los botones */




    }
.modal-content button:hover {
      background-color: #0566D8;
}


.modal p{
text-align: center;
}

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
            border-radius: 5px;
            margin: 0 auto;
                    justify-content: center;



        }

.modal-content {
    background-color: #ffffff;
    padding: 10px;
    width: 40%;
    border-radius: 5px;
    margin: 0 auto;
    text-align: center; /* Alinea el contenido al centro */
height: auto;

}



        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

.modal-content .fa {
    font-size: 95px;
    color: #1C276F;
    margin-bottom: 10px;
    margin: 0 auto;
    text-align: center;
}

</style>



<div id="confirmationModal" class="modal">
  <div class="modal-content" style="height: 300px;">
    <span class="close" onclick="cerrarConfirmacion()">&times;</span>
<br>
    <h2>Confirmación de Eliminación</h2>
                <i class=" fa fas fa-exclamation-triangle"></i> <!-- Icono de alerta de Font Awesome -->

    <p>¿Estás seguro de que quieres eliminar los estudiantes seleccionados?</p>
    <br>
    <button onclick="eliminarFila(this)">Eliminar</button>
    <button onclick="cerrarConfirmacion()">Cancelar</button>
  </div>
</div>
<script src="functions.js"></script>
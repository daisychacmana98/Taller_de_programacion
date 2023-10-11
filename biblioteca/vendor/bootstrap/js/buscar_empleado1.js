$(buscar_persona());
function buscar_persona(consulta){
	$.ajax({
		url:'../conexion/buscar_empleado1.php',
		type:'POST',
		dataType:'html',
		data:{consulta:consulta},
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
}
$(document).on('keyup','#buscar',function(){
	var valor=$(this).val();
	if (valor !="") {
		buscar_persona(valor);
	}else{
		buscar_persona();
	}

})
$(buscar());
function buscar(consulta){
	$.ajax({
		url:'../conexion/buscar_persona.php',
		type:'POST',
		dataType:'html',
		data:{consulta:consulta},
	})
	.done(function(respuesta){
		$("#caja").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	})
}
$(document).on('keyup','#validationCustom01',function(){
	var valor=$(this).val();
	if (valor !="") {
		buscar(valor);
	}else{
		buscar();
	}

})
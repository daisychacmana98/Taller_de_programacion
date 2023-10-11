$(buscar_libros());
function buscar_libros(consulta){
	$.ajax({
		url:'../conexion/buscar_libro.php',
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
		buscar_libros(valor);
	}else{
		buscar_libros();
	}

})
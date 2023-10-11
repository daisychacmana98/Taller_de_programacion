<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="icofont/icofont.min.css">
</head>
<body>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table" id="tabla">
                   <thead class="text-center">
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Categoría</th>
                        <th><button type="button" class="btn btn-info" id="agregar">Agregar <i class="icofont-plus"></i></button></th>                                  
                   </thead>
                   <tbody>
                       <tr class="fila_fija">
                           <td>
                               <div class="md-input-wrapper">
                                   <input type="text" name="tema[]" class="form-control" required="required">
                               </div>
                           </td>
                           <td>
                               <div class="md-input-wrapper">
                                   <input type="text" name="temaok[]" class="form-control" required="required">
                               </div>
                           </td>
                           <td>
                               <div class="md-input-wrapper">
                                   <input type="text" name="temanext[]" class="form-control" required="required">
                               </div>
                           </td>
                           <td class="text-center eliminar">
                                <button type="button" class="btn btn-danger" id="menos"><i class="icofont-ui-delete"></i></button>
                           </td>                       </tr>
                   </tbody> 
                </table>
            </div><!--Fin del tableresponsive-->
        </div><!--Fin del colmd12-->
<script src="vendor/jquery/jquery.min.js" type="text/javascript"></script>                                        
<script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>   
<script src="vendor/bootstrap/js/fila.js" type="text/javascript"></script>   
</body>
</html>
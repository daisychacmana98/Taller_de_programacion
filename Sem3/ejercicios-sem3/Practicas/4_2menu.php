<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

body{
    font-family: Arial, sans-serif;
    background-color: #007bff;
    margin: 0;
	text-align: center;
	height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
	font-size:20px;

}
a{
    color: #fff;
    font-weight: bold;
	

}

a:hover{
	color: #ff55f6;
}
.boton{

    background-color: #ff55f6;
    color: #fff;
    padding: 10px 25px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size:16px;

}
.boton:hover{
    background-color: #fff;
    color: #007bff;
}
select{
    padding: 10px 40px;
    border-radius: 5px;
    width:180px;
    font-size:16px;

}

textarea{
    font-family: Arial, sans-serif;
    font-size:16px;
    border-radius: 10px;
    width:180px;
}
</style>
</head>
<script language="Javascript">
function selec(v)
{
if (v==1)
 Menu.txt.value="Nos devuelve el número de carácteres de una cadena.";
if (v==2)
 Menu.txt.value="Divide una cadena en varias usando un carácter separador.";
if (v==3)
 Menu.txt.value="Formatea una cadena de texto al igual que printf pero el resultado es devuelto como una cadena.";
if (v==4)
 Menu.txt.value="Devuelve una subcadena de otra, empezando por inicio y de longitud longitud.";
if (v==5)
 Menu.txt.value="Elimina los saltos de línea y los espacios finales de una cadena.";
if (v==6)
 Menu.txt.value="Busca una cadena dentro de otra cadena indicándonos la posición en la que se encuentra.";
if (v==7)
 Menu.txt.value="Reemplaza una cadena1 por otra cadena2 en un texto.";
}
// <select name="cadenas" onChange="return selec(Cadenas.value);">
</script>
<div >
<form action="4_2form.php" target="topFrame" name="Menu" method="POST">
 <select name="cadenas" onChange="return selec(cadenas.value);">
 <option value="1" title="H">strlen
 <option value="2" title="H">split
 <option value="3" title="H">sprintf
 <option value="4" title="H">substr
 <option value="5" title="H">chop
 <option value="6" title="H">strpos
 <option value="7" title="H">str_replace
 </select>
 <br>
 <br>
 <textarea name="txt" rows="6" cols="15" ></textarea>
 <br>
 
 <br>
 <input type="submit" value="Procesar Ejemplos" name="submit" width="15" class="boton">
 </form>
</div> 
</body>
</html>
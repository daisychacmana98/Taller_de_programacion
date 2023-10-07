<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <?php
    $animales = array();
    $animales[0] = "Gato";
    $animales[1] = "Perro";
    $animales[2] = "Elefante";
    ?> 

    <h1>Lista de Animales</h1>
    <ul>
        <li><?php echo $animales[0]; ?></li>
        <li><?php echo $animales[1]; ?></li>
        <li><?php echo $animales[2]; ?></li>
    </ul>
</body>
</html>

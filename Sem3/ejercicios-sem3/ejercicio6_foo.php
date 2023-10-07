<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Variables y Constantes</title>
<link rel="stylesheet" href="styles.css">

</head>

<body>



<?php
if (isset($_POST["username"]) && isset($_POST["email"])) {
    $nombre = $_POST["username"];
    $email = $_POST["email"];
    echo "Su nombre y su email son: $nombre, $email";
} else {
    echo "Por favor, complete el formulario.";
}
?>
   
</body>
</html>
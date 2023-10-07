<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <?php
    function conectar($servidor, $usuario, $password, $base_datos){
        $link = new mysqli($servidor, $usuario, $password, $base_datos);
        if ($link->connect_error) {
            die("Connection failed: " . $link->connect_error);
        }
        return $link;
    }

    $conexion = conectar("localhost", "usuariomysql", "passmysql", "basededatos");
    $sql = "SELECT nombre, email FROM amigos ORDER BY nombre";
    $result = $conexion->query($sql);

    while ($row = $result->fetch_assoc()) {
        $nombre = $row["nombre"];
        $email = $row["email"];
        echo "<a href='mailto:$email'><b>$nombre</b></a><br>";
    }

    $result->free_result();
    $conexion->close();
    ?> 
</body>
</html>

=======
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <?php
    function conectar($servidor, $usuario, $password, $base_datos){
        $link = new mysqli($servidor, $usuario, $password, $base_datos);
        if ($link->connect_error) {
            die("Connection failed: " . $link->connect_error);
        }
        return $link;
    }

    $conexion = conectar("localhost", "usuariomysql", "passmysql", "basededatos");
    $sql = "SELECT nombre, email FROM amigos ORDER BY nombre";
    $result = $conexion->query($sql);

    while ($row = $result->fetch_assoc()) {
        $nombre = $row["nombre"];
        $email = $row["email"];
        echo "<a href='mailto:$email'><b>$nombre</b></a><br>";
    }

    $result->free_result();
    $conexion->close();
    ?> 
</body>
</html>

>>>>>>> 98662125281aef85276e8ac7dd885ba481fbdb87

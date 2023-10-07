<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    <?php
    function sumaRecursiva($a, $b){
        $suma = $a + $b;
        return $suma;
    }

    function dosmasdos(){
        $sumatoria = sumaRecursiva(2, 2);
        echo $sumatoria;
    }

    dosmasdos();
    ?> 
</body>
</html>


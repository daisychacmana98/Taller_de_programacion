<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Alerta Suma</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <script language="JavaScript">
    function revisa1(n) {
        if (n == "")
            alert("Este campo no debe estar vacío");
    }

    function revisa(m, n) {
        var a = 0;
        if (m == "") {
            a = 1;
            alert("Debe ingresar el Valor A:");
        } else
        if (n == "") {
            a = 1;
            alert("Debe ingresar el Valor B:");
        }
        if (a == 0)
            f.action = "valida.php"
    }
    </script>
    <form action="1__2.php" method="POST"> 
        <h1>Suma de dos valores </h1>
        
    Valor A:<input type="text" name="A" onBlur="return revisa1(A.value);">
        
    Valor B:<input type="text" name="B" onBlur="return revisa1(B.value);">
        
    <input type="submit" name="submit" value="Enviar" onMouseMove="return
revisa(A.value,B.value);">
    </form>
</body>

</html>
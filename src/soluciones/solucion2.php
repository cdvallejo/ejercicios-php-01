<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
        $total = $_GET["total"];

        $resultado = ($total * 0.21) + $total;
        $resultadoRedondeado = round($resultado, 2);
        echo "El total con IVA es: ", round($resultadoRedondeado,2)," €"; 
    ?>
    <br><br>
    <a href="../index.html">Página principal</a>  
</body>
</html>
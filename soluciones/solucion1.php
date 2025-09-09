<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        $euros = $_GET["euros"];
        $valor_pesetas = 166.386;

        $resultado = $euros * $valor_pesetas;
        echo "$euros € son $resultado en pesetas"; 
    ?>
    <br><br>
    <a href="../index.html">Página principal</a>  
</body>
</html>
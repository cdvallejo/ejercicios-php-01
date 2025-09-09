<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $hora = $_GET["hora"];

        if ($hora >= 6 && $hora <= 12) {
            echo "Buenos días"; 
        } else if ($hora >= 13 && $hora <= 20) {
            echo "Buenas tardes"; 
        } else {
            echo "Buenas noches";
        }
    ?>
    <br><br>
    <a href="../index.html">Página principal</a>  
</body>
</html>
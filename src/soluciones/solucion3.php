<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        if (isset($_GET["radio"]) && isset($_GET["altura"])) {
            $radio = $_GET["radio"];
            $altura = $_GET["altura"];
    
            $radio *= $radio;
            // La variable M_PI del sistema ya tiene le número
            $volumen = (M_PI * $radio * $altura) / 3;
            $volumenRedondeado = round($volumen, 2);
    
            echo "El volumen del cono es: $volumenRedondeado cm³"; 
        } else {
            echo "Por favor, introduce radio y altura en la URL.";
        }
    ?>
    <br><br>
    <a href="../index.html">Página principal</a>  
</body>
</html>
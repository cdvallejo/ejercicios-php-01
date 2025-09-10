<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $numero3 = $_POST["numero3"];

        $aux = 0;
        if ($numero1 >= $numero2) {
            $aux = $numero1;
            $numero1 = $numero2;
            $numero2 = $aux;
        }

        if ($numero2 >= $numero3) {
            $aux = $numero2;
            $numero2 = $numero3;
            $numero3 = $aux;
        }

        // Puede que el número 2 sea ahora mayor que número1 tras el cambio del número3
        if ($numero1 >= $numero2) {
            $aux = $numero1;
            $numero1 = $numero2;
            $numero2 = $aux;
        }

        echo "Números ordenados de mayor a menor: $numero1, $numero2, $numero3";
    ?>
    <br><br>
    <a href="../index.html">Página principal</a>  
</body>
</html>
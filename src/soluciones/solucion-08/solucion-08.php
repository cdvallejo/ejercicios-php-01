<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ejercicio 8</title>
</head>

<body>
    <header>
        <h1>Ejercicios PHP - Relación 1</h1>
        <h3>Alumno: Carlos D. Vallejo Aranda</h3>
        <img src="../../img/yo-42-avatar-centrado.jpg" alt="">
    </header>
    <main>
        <div class="ejercicio">
            <h2>Ejercicio 1</h2>
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

                echo "Números ordenados de menor a mayor: $numero1, $numero2, $numero3";
            ?>
        </div>
    </main>

    <div class="volver">
        <a href="../../index.php">Página principal</a>
    </div>
    
</body>

</html>
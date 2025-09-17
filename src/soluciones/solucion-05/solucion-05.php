<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ejercicio 5</title>
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
                $horas = $_GET["horas"];
                $salario12 = 0;
                $salario16 = 0;
                $salarioTotal = 0;

                for ($i = 1; $i <= $horas; $i++) {
                    if ($i <= 40) {
                        $salario12 += 12;
                    } else {
                        $salario16 += 16;
                    }
                    $salarioTotal = $salario12 + $salario16;
                }
                
                echo "El salario total es de <b>$salarioTotal €</b><br>";
                if ($horas > 40) {
                    $horasExtras = $horas - 40;
                    echo "$salario12 € por las 40 primeras horas a 12€ y $salario16 € por $horasExtras hora/s extra/s a 16€.";
                }
            ?>
        </div>
    </main>

    <div class="volver">
        <a href="../../index.html">Página principal</a>
    </div>
    
</body>

</html>
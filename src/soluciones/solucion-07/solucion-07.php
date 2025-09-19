<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ejercicio 1</title>
</head>

<body>
    <header>
        <h1>Ejercicios PHP - Relación 1</h1>
        <h3>Alumno: Carlos D. Vallejo Aranda</h3>
        <img src="../../img/yo-42-avatar-centrado.jpg" alt="">
    </header>
    <main>
        <div class="ejercicio">
            <h2>Ejercicio 7</h2>
            <?php
                $hora = $_GET["hora"];
                $minuto = $_GET["minuto"];

                $horasRestantes = 24 - $hora;
                //1 hora  son 3600 segundos. Calculamos cuántos segundos de las horas restantes
                
                $segundosRestantesHoras = (($horasRestantes - 1) * 3600);
                // Calculamos los segundos de la primera hora si no se introdujo en punto
                $segundosRestantesMinuto = (60 - $minuto) * 60;

                //Total:
                $total = $segundosRestantesHoras + $segundosRestantesMinuto;
                
                echo "Quedan $total segundos hasta la medianoche.";
        
            ?>
        </div>
    </main>

    <div class="volver">
        <a href="../../index.php">Página principal</a>
    </div>
    
</body>

</html>
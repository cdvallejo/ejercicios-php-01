<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
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
        
        echo "Quedan $total segundos hasta medianoche.";
  
    ?>
    <br><br>
    <a href="../index.html">Página principal</a>  
</body>
</html>
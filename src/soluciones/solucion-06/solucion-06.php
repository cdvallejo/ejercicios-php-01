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
            <h2>Ejercicio 6</h2>
    <?php
        $dia = $_GET["dia"];
        $mes = $_GET["mes"];

        // Año fijo 2000 para trabajar con fecha (da igual el año)
        $fecha = new DateTime("2000-$mes-$dia");

        // Franja de signos con sus fechas
        $ariesInicio     = new DateTime("2000-03-21");
        $ariesFin        = new DateTime("2000-04-19");
        $tauroInicio     = new DateTime("2000-04-20");
        $tauroFin        = new DateTime("2000-05-20");
        $geminisInicio   = new DateTime("2000-05-21");
        $geminisFin      = new DateTime("2000-06-20");
        $cancerInicio    = new DateTime("2000-06-21");
        $cancerFin       = new DateTime("2000-07-22");
        $leoInicio       = new DateTime("2000-07-23");
        $leoFin          = new DateTime("2000-08-22");
        $virgoInicio     = new DateTime("2000-08-23");
        $virgoFin        = new DateTime("2000-09-22");
        $libraInicio     = new DateTime("2000-09-23");
        $libraFin        = new DateTime("2000-10-22");
        $escorpioInicio  = new DateTime("2000-10-23");
        $escorpioFin     = new DateTime("2000-11-21");
        $sagitarioInicio = new DateTime("2000-11-22");
        $sagitarioFin    = new DateTime("2000-12-21");
        $capriInicio1    = new DateTime("2000-12-22");
        $capriFin1       = new DateTime("2000-12-31");
        $capriInicio2    = new DateTime("2000-01-01");
        $capriFin2       = new DateTime("2000-01-19");
        $acuarioInicio   = new DateTime("2000-01-20");
        $acuarioFin      = new DateTime("2000-02-18");
        $piscisInicio    = new DateTime("2000-02-19");
        $piscisFin       = new DateTime("2000-03-20");

        $signo = "";
        
        switch (true) {
            case ($fecha >= $ariesInicio && $fecha <= $ariesFin):
                $signo = "Aries";
                break;
            case ($fecha >= $tauroInicio && $fecha <= $tauroFin):
                $signo = "Tauro";
                break;
            case ($fecha >= $geminisInicio && $fecha <= $geminisFin):
                $signo = "Géminis";
                break;
            case ($fecha >= $cancerInicio && $fecha <= $cancerFin):
                $signo = "Cáncer";
                break;
            case ($fecha >= $leoInicio && $fecha <= $leoFin):
                $signo = "Leo";
                break;
            case ($fecha >= $virgoInicio && $fecha <= $virgoFin):
                $signo = "Virgo";
                break;
            case ($fecha >= $libraInicio && $fecha <= $libraFin):
                $signo = "Libra";
                break;
            case ($fecha >= $escorpioInicio && $fecha <= $escorpioFin):
                $signo = "Escorpio";
                break;
            case ($fecha >= $sagitarioInicio && $fecha <= $sagitarioFin):
                $signo = "Sagitario";
                break;
            case ($fecha >= $capriInicio1 && $fecha <= $capriFin1):
                $signo = "Capricornio";
                break;
            case ($fecha >= $capriInicio2 && $fecha <= $capriFin2):
                $signo = "Capricornio";
                break;
            case ($fecha >= $acuarioInicio && $fecha <= $acuarioFin):
                $signo = "Acuario";
                break;
            case ($fecha >= $piscisInicio && $fecha <= $piscisFin):
                $signo = "Piscis";
                break;
        }

        echo "Tu signo del zodiaco es $signo.";
    ?>
        </div>
    </main>

    <div class="volver">
        <a href="../../index.html">Página principal</a>
    </div>
    
</body>

</html>
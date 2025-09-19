<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ejercicio 3</title>
</head>

<body>
    <header>
        <h1>Ejercicios PHP - Relación 1</h1>
        <h3>Alumno: Carlos D. Vallejo Aranda</h3>
        <img src="../../img/yo-42-avatar-centrado.jpg" alt="">
    </header>
    <main>
        <div class="ejercicio">
            <h2>Ejercicio 3</h2>
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
        </div>
    </main>

    <div class="volver">
        <a href="../../index.php">Página principal</a>
    </div>
    
</body>

</html>
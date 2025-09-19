<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ejercicio 2</title>
</head>

<body>
    <header>
        <h1>Ejercicios PHP - Relación 1</h1>
        <h3>Alumno: Carlos D. Vallejo Aranda</h3>
        <img src="../../img/yo-42-avatar-centrado.jpg" alt="">
    </header>
    <main>
        <div class="ejercicio">
            <h2>Ejercicio 2</h2>
    <?php
        $total = $_GET["total"];

        $resultado = ($total * 0.21) + $total;
        $resultadoRedondeado = round($resultado, 2);
        echo "El total con IVA es: ", round($resultadoRedondeado,2)," €"; 
    ?>
    <br><br>
        </div>
    </main>

    <div class="volver">
        <a href="../../index.php">Página principal</a>
    </div>
    
</body>

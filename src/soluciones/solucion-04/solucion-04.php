<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ejercicio 4</title>
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
                $hora = $_GET["hora"];

                if ($hora >= 6 && $hora <= 12) {
                    echo "Buenos días ☀️"; 
                } else if ($hora >= 13 && $hora <= 20) {
                    echo "Buenas tardes 🌄"; 
                } else {
                    echo "Buenas noches 🌙";
                }
            ?>
        </div>
    </main>

    <div class="volver">
        <a href="../../index.html">Página principal</a>
    </div>
    
</body>

</html>
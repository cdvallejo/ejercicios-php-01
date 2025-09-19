<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ejercicio 15</title>
</head>

<body>
    <header>
        <h1>Ejercicios PHP - Relación 1</h1>
        <h3>Alumno: Carlos D. Vallejo Aranda</h3>
        <img src="../../img/yo-42-avatar-centrado.jpg" alt="">
    </header>
    <main>
        <div class="ejercicio">
            <h2>Ejercicio 15</h2>
            <p>Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas podría saltar
            un alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el tablero con un color diferente
            para estas casillas donde puede saltar la figura. El alfil se mueve siempre en diagonal. El tablero cuenta
            con 64 casillas. Las columnas se indican con las letras de la "a" a la "h" y las filas se indican del 1 al
            8.</p>

            <form action="index.php" method="post">
                <label for="numero">Introduce un número entero positivo: </label>
                <input type="number" name="numero" min="0" required>
                <input type="submit" value="Aceptar">
            </form>

            <?php
                if (isset($_POST["numero"])) { // Se comprueba número enviado
                    $numero = $_POST["numero"];
                    echo "<br>";

                    $i = $numero;
                    if ($i == 0) {
                        echo "$numero";
                    } else {
                        $factorial = 1;
                        while ($i > 0) {
                            $factorial *= $i;
                            $i--;
                        }
                    }
                    echo "El factorial de $numero es $factorial.";
                }
            ?>
        </div>
    </main>
    <div class="volver">
        <a href="../../index.php">Página principal</a>
    </div>
    
</body>

</html>
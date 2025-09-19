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
            <h2>Ejercicio 13</h2>
            <p>Escribe un programa que calcule el factorial de un número entero leído por teclado.</p>

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
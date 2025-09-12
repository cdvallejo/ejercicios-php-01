<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <p>Programa que calcula el factorial de un número entero leído por teclado.</p> 

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
    <br><br>
    <a href="../../index.html">Página principal</a>  
</body>
</html>

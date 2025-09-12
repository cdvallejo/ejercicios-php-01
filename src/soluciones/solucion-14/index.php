<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <p>Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos suman según el juego de la brisca. 
        Emplea un array asociativa para obtener los puntos a partir del nombre de la figura de la carta. Asegúrate de que no se repite ninguna carta, 
        igual que si las hubieras cogido de una baraja de verdad.</p> 

    <form action="index.php" method="post">
        <input type="submit" name="comenzar" value="Comenzar">
    </form>

    <?php
        if (isset($_POST["comenzar"])) { // Se comprueba número enviado
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

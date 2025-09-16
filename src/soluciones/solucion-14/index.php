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
        if (isset($_POST["comenzar"])) { 
            $palos = ["copas", "espadas", "bastos", "oros"];
            $valores = ["as", "2", "3", "4", "5", "6", "7", "sota", "caballo", "rey"];

            $puntos = [
                "as" => 11,
                "3" => 10,
                "rey" => 4,
                "caballo" => 3,
                "sota" => 2,
                "2" => 0,
                "4" => 0,
                "5" => 0,
                "6" => 0,
                "7" => 0,
            ];
            echo "<br>";

            $cartasSacadas = [];
            $sumaPuntos = 0;
            for ($i = 1; $i <= 10; $i++) {
                $nPalo = rand(0, 3);
                $nValor = rand(0, 9);

                // guardamos el palo y el valor sacado en un nuevo array asociativo para guardar las cartas sacadas
                $valorSacado = $valores[$nValor];
                $paloSacado = $palos[$nPalo];
                $carta = "$valorSacado de $paloSacado"; 

                if (!in_array($carta, $cartasSacadas)) {
                    $cartasSacadas[] = $carta; // vamos agregando las cartas al array
                    echo "- ", $carta, " > ", $puntos[$valores[$nValor]]; // con el array asociativo sacamos los puntos de cada valor
                    echo "<br>";
                    $sumaPuntos += $puntos[$valores[$nValor]]; 
                } else {
                    $i--; // que repita esa iteración porque la carta se ha repetido
                }
            }
            echo "<br><b>Total puntuación: </b> $sumaPuntos";
        }
    ?>
    <br><br>
    <a href="../../index.html">Página principal</a>  
</body>
</html>

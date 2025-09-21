<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Ejercicio 15</title>
</head>

<body>
    <header>
        <h1>Ejercicios PHP - Relación 1</h1>
        <h3>Alumno: Carlos D. Vallejo Aranda</h3>
        <img src="../../img/yo-42-avatar-centrado.jpg" alt="avatar">
    </header>
    <main>
        <div class="ejercicio">
            <h2>Ejercicio 15</h2>
            <p>Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas podría saltar
                un alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el tablero con un color diferente
                para estas casillas donde puede saltar la figura. El alfil se mueve siempre en diagonal. El tablero cuenta
                con 64 casillas. Las columnas se indican con las letras de la "a" a la "h" y las filas se indican del 1 al
                8.</p>

            <h2>Movimiento de un alfil</h2>

            <?php
            $tableroInicial = !isset($_GET["filaAlfil"]); // Si no hay coordenadas es verdadero y pinta el tablero inicial

            if ($tableroInicial) {
            ?>
                <table>
                    <tr class="margen-coordenadas">
                        <td></td>
                        <td>a</td>
                        <td>b</td>
                        <td>c</td>
                        <td>d</td>
                        <td>e</td>
                        <td>f</td>
                        <td>g</td>
                        <td>h</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="margen-coordenadas">8</td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="margen-coordenadas">8</td>
                    </tr>
                    <tr>
                        <td class="margen-coordenadas">7</td>
                        <td class="negro"></td>
                        </td>
                        <td class="blanco"></td>
                        </td>
                        <td class="negro"></td>
                        </td>
                        <td class="blanco"></td>
                        </td>
                        <td class="negro"></td>
                        </td>
                        <td class="blanco"></td>
                        </td>
                        <td class="negro"></td>
                        </td>
                        <td class="blanco"></td>
                        </td>
                        <td class="margen-coordenadas">7</td>
                    </tr>
                    <tr>
                        <td class="margen-coordenadas">6</td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="margen-coordenadas">6</td>
                    </tr>
                    <tr>
                        <td class="margen-coordenadas">5</td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="margen-coordenadas">5</td>
                    </tr>
                    <tr>
                        <td class="margen-coordenadas">4</td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>

                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="margen-coordenadas">4</td>
                    </tr>
                    <tr>
                        <td class="margen-coordenadas">3</td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>

                        <td class="blanco"></td>
                        <td class="margen-coordenadas">3</td>
                    </tr>
                    <tr>
                        <td class="margen-coordenadas">2</td>
                        <td class="blanco"></td>

                        <td class="negro"></td>

                        <td class="blanco"></td>

                        <td class="negro"></td>

                        <td class="blanco"></td>

                        <td class="negro"></td>

                        <td class="blanco"></td>

                        <td class="negro"></td>
                        <td class="margen-coordenadas">2</td>
                    </tr>
                    <tr>
                        <td class="margen-coordenadas">1</td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="negro"></td>
                        <td class="blanco"></td>
                        <td class="margen-coordenadas">1</td>
                    </tr>
                    <tr class="margen-coordenadas">
                        <td></td>
                        <td>a</td>
                        <td>b</td>
                        <td>c</td>
                        <td>d</td>
                        <td>e</td>
                        <td>f</td>
                        <td>g</td>
                        <td>h</td>
                        <td></td>
                    </tr>
                </table>
            <?php
            }
            ?>


            <?php
            $tableroInicial = true;

            if (isset($_GET["filaAlfil"])) { // Se comprueba número enviado
                $filaAlfil = $_GET["filaAlfil"];
                $colAlfil = $_GET["colAlfil"];
                $color = "";
                $tableroInicial = false;

                echo "Selección: $colAlfil - $filaAlfil <br>";

                // Detectamos el número de columna (a, b, c...)
                $colArray = ["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5, "f" => 6, "g" => 7, "h" => 8];
                $NumColAlfil = $colArray[$colAlfil];
                $colAlfil = $NumColAlfil;
            ?>
                <table>
                    <tr class="margen-coordenadas">
                        <td></td>
                        <td>a</td>
                        <td>b</td>
                        <td>c</td>
                        <td>d</td>
                        <td>e</td>
                        <td>f</td>
                        <td>g</td>
                        <td>h</td>
                        <td></td>
                    </tr>
                    <tr>
                        <?php

                        for ($fila = 8; $fila > 0; $fila--) {
                            echo "<tr>";
                            echo "<td class='margen-coordenadas'>$fila</td>";
                            for ($col = 1; $col <= 8; $col++) {
                                if (($col + $fila) % 2 != 0) { // si la suma de fila y col es par la casilla es blanca
                                    $color = "blanco";
                                } else {
                                    $color = "negro"; // si la suma de fila y col es impar la casilla es negra
                                }
                                echo "<td class='$color'>";

                                if ($fila == $filaAlfil && $col == $colAlfil) {
                                    echo "<img src='img/alfil.png' alt='alfil'>";
                                } else if (casillaAlfil($fila, $col, $filaAlfil, $colAlfil)) {
                                    echo "<img src='img/alfil-transparente.png' alt='alfil-transparente'>";
                                }

                                echo "</td>";
                            }
                            echo "<td class='margen-coordenadas'>$fila</td>";
                            echo "</tr>";
                        }
                        ?>
                    <tr class="margen-coordenadas">
                        <td></td>
                        <td>a</td>
                        <td>b</td>
                        <td>c</td>
                        <td>d</td>
                        <td>e</td>
                        <td>f</td>
                        <td>g</td>
                        <td>h</td>
                        <td></td>
                    </tr>
                </table>
            <?php


            }

            // Fuera del if, lo puse sin querer en el if y podía dar error
            function casillaAlfil($fila, $col, $filaAlfil, $colAlfil)
            {
                return abs($fila - $filaAlfil) == abs($col - $colAlfil);
            }

            ?>

            <!-- Formulario -->
            <form action="index.php" method="get">
                <label for="columna">Columna:</label>
                <select name="colAlfil" id="columna" required>
                    <option value="">-- Selecciona --</option>
                    <option value="a">a</option>
                    <option value="b">b</option>
                    <option value="c">c</option>
                    <option value="d">d</option>
                    <option value="e">e</option>
                    <option value="f">f</option>
                    <option value="g">g</option>
                    <option value="h">h</option>
                </select>

                <label for="fila">Fila:</label>
                <input type="number" name="filaAlfil" id="fila" min="1" max="8" required>

                <input type="submit" value="Aceptar">
            </form>

        </div>
    </main>
    <div class="volver">
        <a href="../../index.php">Página principal</a>
    </div>

</body>

</html>
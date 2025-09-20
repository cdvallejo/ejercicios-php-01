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

            <h2>Movimiento de un alfil</h2>

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

            <form action="index.php" method="get">
                <label for="coordenada"> Introduzca las coordenadas del alfil (ejemplo: e4)</label>
                <br>
                <input type="text" name="coordenada" required>
                <input type="submit" value="Aceptar">
            </form>

            <?php
            if (isset($_GET["coordenada"])) { // Se comprueba número enviado
                $coordenada = $_GET["coordenada"];
                echo "<br>";

                $color = "";
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
                            for ($col = 8; $col > 0; $col--) {
                                if ($col / 2 != 0) {
                                    $color = "negro";
                                    echo "<td class=$color></td>";
                                } else {
                                    $color = "blanco";
                                    echo "<td class=$color></td>";
                                }
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
            ?>
        </div>
    </main>
    <div class="volver">
        <a href="../../index.php">Página principal</a>
    </div>

</body>

</html>
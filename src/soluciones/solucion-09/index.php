<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        if (isset($_POST["numero"])) {
            $numero = $_POST["numero"];
            $total = 0;
            
            echo "<p>Tabla de multiplicar del $numero:</p>"
    ?>
        <table>
    <?php 
            for ($i = 1; $i <= 10; $i++) {
                $total = $numero * $i;
                echo "<tr><td>$numero x $i = $total</td></tr>";
            }
    ?>
        </table>
    <?php
        } else {
    ?>
            <p>Tabla de multiplicar: Por favor, seleccione un número del 1 al 10.</p>
            <form action="index.php" method="post">
                <label for="numero">Elige un número a multiplicar: </label>
                <input type="number" name="numero" min="0" required>
                <input type="submit" value="Mostrar tabla">
            </form>
    <?php
        }
    ?>
    <br><br>
    <a href="../../index.html">Página principal</a>  
</body>
</html>
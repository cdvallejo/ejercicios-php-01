<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ejercicio 9</title>
</head>

<body>
    <header>
        <h1>Ejercicios PHP - Relación 1</h1>
        <h3>Alumno: Carlos D. Vallejo Aranda</h3>
        <img src="../../img/yo-42-avatar-centrado.jpg" alt="">
    </header>
    <main>
        <div class="ejercicio">
             <h2>Ejercicio 9</h2>
            <p>Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una
            tabla (etiqueta "table" de HTML).</p>
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
        </div>
    </main>

    <div class="volver">
        <a href="../../index.php">Página principal</a>
    </div>
    
</body>

</html>
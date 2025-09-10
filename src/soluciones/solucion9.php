<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        if (isset($_POST)) {
            $numero = $_POST["numero"];

            
        } else {
    ?>
        <p>Tabla de multiplicar.</p>
        <form action="solucion9.php" method="post">
            <label for="numero">Elige un número a multiplicar: </label>
            <input type="number" name="numero" min="0" required>
            <input type="submit" value="Mostrar tabla">
        </form>
    <?php
        }
    ?>
    <br><br>
    <a href="../index.html">Página principal</a>  
</body>
</html>
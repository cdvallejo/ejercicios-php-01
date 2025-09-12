<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <p>Este programa muestra los n primeros números de la serie de Fibonacci.</p> 
    <p>Por favor, introduzca n: </p>

    <form action="index.php" method="post">
        <label for="numero">Número a introducir: </label>
        <input type="number" name="numero" min="1" required>
        <input type="submit" value="Introducir número">
    </form>

    <?php
    if (isset($_POST["numero"])) { // Se comprueba número enviado
        $numero = $_POST["numero"];
        $fibonacci = [0];
        echo "<br>";
        for ($i = 0; $i < $numero; $i++) {
            if ($fibonacci[$i] == 0) { // caso primer número
                echo $fibonacci[$i];
                $fibonacci[$i + 1] = 1;
            } else if ($fibonacci[$i] == 1){ // caso segundo número (1)
                echo $fibonacci[$i]; 
                $fibonacci[$i + 1] = $fibonacci[$i] + $fibonacci[$i -1]; // empezamos a sumar las dos posiciones anteriores
            } else {
                echo $fibonacci[$i]; 
                $fibonacci[$i + 1] = $fibonacci[$i] + $fibonacci[$i -1];
            }
            if ($i + 1 == $numero) {
                echo ".";
            } else {
                echo ", ";
            }
        }
    }
    ?>
    
    <br><br>
    <a href="../../index.html">Página principal</a>  
</body>
</html>


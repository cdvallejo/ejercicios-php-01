<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ejercicio 11</title>
</head>

<body>
    <header>
        <h1>Ejercicios PHP - Relación 1</h1>
        <h3>Alumno: Carlos D. Vallejo Aranda</h3>
        <img src="../../img/yo-42-avatar-centrado.jpg" alt="">
    </header>
    <main>
        <div class="ejercicio">
            <h2>Ejercicio 11</h2>
            <p>Escribe un programa que muestre los n primeros términos de la serie de Fibonacci. El primer
            término de la serie de Fibonacci es 0, el segundo es 1 y el resto se calcula sumando los dos
            anteriores, por lo que tendríamos que los términos son 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89,
            144... El número n se debe introducir por teclado.</p>

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
    
        </div>
    </main>
   
    <div class="volver">
        <a href="../../index.html">Página principal</a>
    </div>
    
</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <p>Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen de las 5 que se deben dar a elegir mediante un formulario.</p> 
    <p>Por favor, introduzca la altura de la pirámide: </p>

    <form action="index.php" method="post">
        <label for="plantas">Número de plantas de la pirámide: </label>
        <input type="number" name="plantas" min="1" required>
        <input type="submit" value="Pintar pirámide">
    </form>

    <?php
    if (isset($_POST["plantas"])) { // Se comprueba número enviado
        $plantas = $_POST["plantas"];

        for ($altura = 1; $altura <= $plantas; $altura++) {
            for ($fila = 1; $fila <= $altura + 2; $fila++) {
                echo "*";
            }
            echo "*";
        }
    }
    ?>
    
    <br><br>
    <a href="../../index.html">Página principal</a>  
</body>
</html>

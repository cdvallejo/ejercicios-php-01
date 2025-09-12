<?php
    session_start();

    if (!isset($_SESSION["suma"]) && !isset($_SESSION["cont"])) {
        $_SESSION["suma"] = 0; 
        $_SESSION["cont"] = 0;
    }

    $_SESSION["nombreUsuario"] = "Carlos Vallejo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <p>Este programa calcula la media de los números positivos introducidos. 
        Vaya introduciendo números (puede parar introduciendo un número negativo).</p>

    <form action="index.php" method="post">
        <label for="numero">Número a introducir: </label>
        <input type="number" name="numero" required>
        <input type="submit" value="Introducir número">
    </form>

    <?php
    if (isset($_POST["numero"])) { // Se comprueba número enviado
        if ($_POST["numero"] >= 0) {
            $numero = $_POST["numero"];
            $_SESSION["suma"]+= $numero;
            $_SESSION["cont"]++;
        }
        if ($_POST["numero"] < 0) {
            $media =  $_SESSION["suma"] / $_SESSION["cont"];
            echo "<br>La media de todos los números introducidos es: ", round($media, 2);
        }
    }
    ?>
    
    <br><br>
    <a href="reset.php"><button>Resetear</button></a>
    <br><br>
    <a href="../../index.html">Página principal</a>  
</body>
</html>


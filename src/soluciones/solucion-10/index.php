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
    <link rel="stylesheet" href="../../css/style.css">
    <title>Ejercicio 10</title>
</head>

<body>
    <header>
        <h1>Ejercicios PHP - Relación 1</h1>
        <h3>Alumno: Carlos D. Vallejo Aranda</h3>
        <img src="../../img/yo-42-avatar-centrado.jpg" alt="">
    </header>
    <main>
        <div class="ejercicio">
            <h2>Ejercicio 10</h2>
            <p>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A
            priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de
            introducir los datos cuando meta un número negativo. Ese último número que indica el final no se computa en
            la media.</p>

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
        </div>
    </main>
 
    <div class="volver">
    <a href="reset.php"><button>Resetear</button></a>
    <br><br>
    <a href="../../index.html">Página principal</a>  
    </div>
    
</body>

</html>


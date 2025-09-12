<?php
    session_start();

    // Destruye $_SESSION["visitas"]
    unset($_SESSION["cont"]);
    unset($_SESSION["suma"]);

    // Redirección automática a la página principal
    header("Location: index.php");

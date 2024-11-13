<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            $cf = $_GET["cf"];
            $eta = $_GET["eta"];
            if (!isset($_SESSION["registrazioni"])) {
                $_SESSION["nRegistrazioni"] = 0;
                $_SESSION["registrazioni"] = array();
            }
            $_SESSION["nRegistrazioni"]++;
            $elemento = array($cf => $eta);
            array_push($_SESSION["registrazioni"], $elemento);
        ?>
        <p>Inserimento eseguito</p>
        <a href="form.html">Ritorna alla pagina precendente</a>
    </body>
</html>
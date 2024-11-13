<?php
    session_start();
?>
<style>
    .stileTabella {
        border: solid, black, 2px;
        border-collapse: collapse;
    }
</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RISULTATI</title>
    </head>
    <body>
        <table class="stileTabella">
            <tr>
                <th class="stileTabella">Codice fiscale</th>
                <th class="stileTabella">Età</th>
            </tr>
        <?php
            if (isset($_SESSION["registrazioni"])) {
                $totEta = 0;
                foreach ($_SESSION["registrazioni"] as $elemento) {
                    foreach ($elemento as $cf => $eta) {
                        echo "<tr><td class='stileTabella'>$cf</td><td class='stileTabella'>$eta</td></tr>";
                        $totEta += intval($eta);
                    }
                }
                echo "</table>";
                echo "<p>Numero registrazioni: " . $_SESSION["nRegistrazioni"] . "</p>";
                $mediaEta = $totEta / $_SESSION["nRegistrazioni"];
                echo "<p>Età media: " . round($mediaEta, 0) . "</p>";
            } else {
                echo "<h2>Non è stata fatta nessuna registrazione</h2>";
            }
        ?>
    </body>
</html>
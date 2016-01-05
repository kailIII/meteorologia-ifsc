<?php
$tempC = 17.6;
$CtoF = $tempC / 5 * 9 + 32;

$tempF = 58;
$FtoC = 5 * ($tempF - 32) / 9;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Temperatura</title>
    </head>
    <body>
        <h4>C em F</h4>
        <i>Temperatura °C:</i> <?php print $tempC?>ºC <br>
        <i>Temperatura °C em °F: </i> <?php print number_format($CtoF, 1, ',', '.')?>ºF
        <hr>
        <h4>F em C</h4>
        <i> Temperatura °F:</i> <?php print $tempC?>ºF <br>
        <i>Temperatura °F em °C: </i> <?php print number_format($FtoC, 1, ',', '.')?>ºC
    </body>
</html>
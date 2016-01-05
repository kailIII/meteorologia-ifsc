<?php
$tempC = 30.0;
$CtoF = $tempC / 5 * 9 + 32;

$tempF = 72.0;
$FtoC = 5 * ($tempF - 32) / 9;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Conversão de temperatura</title>
    </head>
    <body>
        <h1>Celsius para Farenheit</h1>
        <strong>Temperatura:</strong> <?php print $tempC?>ºC <br>
        <strong>Temperatura C em F: </strong> <?php print number_format($CtoF, 1, ',', '.')?>ºF
        <hr>
        <h1>Farenheit para Celsius</h1>
        <strong>Temperatura:</strong> <?php print $tempC?>ºF <br>
        <strong>Temperatura F em C: </strong> <?php print number_format($FtoC, 1, ',', '.')?>ºC
    </body>
</html>
<?php
function ctof($temperatura) {
    return $temperatura / 5 * 9 + 32;
}

function ftoc($temperatura) {
    return 5 * ($temperatura - 32) / 9;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Conversão de temperatura</title>
        <style>
            * {
                margin:0;
                padding:0;
            }
            body {
                font-size: 14px;
                font-family:sans-serif;
                padding:5%;
            }
            body div {
                display:block;
                padding: 4px;
            }
        </style>
    </head>
    <body>
        <h1>Conversão de temperatura</h1>
        <form method="post" action="php_exercicio2.php" validate>
            <div>
                <label for="temperatura">Temperatura:</label> <input type="text" name="temperatura" required autofocus/>
            </div>
            <div>
                <label for="tipo">Tipo de conversão:</label>
                <select name="tipo" id="tipo" required>
                    <option value="">Selecione</option>
                    <option value="ctof">Celcius para Farenheit</option>
                    <option value="ftoc">Farenheit para Celcius</option>
                </select>
            </div>
            <input type="submit" value="Converter"/>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $temperatura = (float) $_POST['temperatura'];

            if ($_POST['tipo'] == 'ctof') {
                ?>
                Valor convertido de Celsius para Farenheit (<?php print $_POST['temperatura']?>ºC): <?php print number_format(ctof($temperatura), 1, ',', '.')?>ºF
                <?php
            }

            if ($_POST['tipo'] == 'ftoc') {
                ?>
                Valor convertido de Farenheit para Celsius (<?php print $_POST['temperatura']?>ºF): <?php print number_format(ftoc($temperatura), 1, ',', '.')?>ºC
                <?php
            }
        }
        ?>
    </body>
</html>
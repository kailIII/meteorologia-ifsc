<?php

$temperatura = null;
$convertido = null;
$unidade = '';

// Celsius para Farenheit
function CelsiusToFarenheit($temperatura) {
    return $temperatura / 5 * 9 + 32;
}

// Celsius para Kelvin
function CelsiusToKelvin($temperatura) {
    return $temperatura + 273.15;
}

// Farenheit para Celsius
function FarenheitToCelsius($temperatura) {
    return 5 * ($temperatura - 32) / 9;
}

// Farenheit para Kelvin
function FarenheitToKelvin($temperatura) {
    return CelsiusToKelvin(CelsiusToFarenheit($temperatura));
}

// Kelvin para Celsius
function KelvinToCelsius($temperatura) {
    return $temperatura - 273.15;
}

// Kelvin para Farenheit
function KelvinToFarenheit($temperatura) {
    return CelsiusToFarenheit(KelvinToCelsius($temperatura));
}

// Verificando se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['temperatura'])) { // isset(): função que verifica se determinado índice ou variável existe (http://php.net/manual/pt_BR/function.isset.php)

        /**
         * // (float) converte o conteúdo para float, pois via _POST a variavel chega como string e não como inteiro/float
         * // str_replace(): caso exista uma vírgula no valor (antes da conversão para float), troca por ponto, pois o PHP trabalha no formato americano (http://php.net/manual/pt_BR/function.str-replace.php)
         **/
        $temperatura = (float) str_replace(',', '.', $_POST['temperatura']);

        $acao = $_POST['origem'].'_'.$_POST['destino'];
        switch ($acao) {
            case 'c_c':
                $convertido = $temperatura;
                $unidade = 'ºC';
                break;
            case 'c_f':
                $convertido = CelsiusToFarenheit($temperatura);
                $unidade = 'ºF';
                break;
            case 'c_k':
                $convertido = CelsiusToKelvin($temperatura);
                $unidade = 'K';
                break;

            case 'f_c':
                $convertido = FarenheitToCelsius($temperatura);
                $unidade = 'ºC';
                break;
            case 'f_f':
                $convertido = $temperatura;
                $unidade = 'ºF';
                break;
            case 'f_k':
                $convertido = FarenheitToKelvin($temperatura);
                $unidade = 'K';
                break;

            case 'k_c':
                $convertido = KelvinToCelsius($temperatura);
                $unidade = 'ºC';
                break;
            case 'k_f':
                $convertido = KelvinToFarenheit($temperatura);
                $unidade = 'ºF';
                break;
            case 'k_k':
                    $convertido = $temperatura;
                    $unidade = 'K';
                break;
        }
    }

    $origem = $_POST['origem'];
    $destino = $_POST['destino'];
}
else {
    $origem = 'c';
    $destino = 'f';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Conversão de temperatura</title>
        <link rel="stylesheet" href="trabalho2.css" type="text/css" />
    </head>
    <body>
        <div class="wrapper">
            <form validate method="POST" action="trabalho2.php">
                <table class="principal">
                    <tr>
                        <td class="celula_esquerda">
                            <table class ="tabela">
                                <tr>
                                    <td>
                                        <input type="radio" name="origem"  value="c" <?php if ($origem == 'c') { print 'checked'; }?>/> <br>Celsius
                                    </td>
                                    <td>
                                        <input type="radio" name="origem" value="f" <?php if ($origem == 'f') { print 'checked'; }?>/> <br>Farenheit
                                    </td>
                                    <td>
                                        <input type="radio" name="origem" value="k" <?php if ($origem == 'k') { print 'checked'; }?>/> <br>Kelvin
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <input class="botao" type="submit" value="Converter"/>
                        </td>
                        <td class="celula_direita">
                            <table class="tabela">
                                <tr>
                                    <td>
                                        <input type="radio" name="destino"  value="c" <?php if ($destino == 'c') { print 'checked'; }?>/><br> Celsius
                                    </td>
                                    <td>
                                        <input type="radio" name="destino" value="f" <?php if ($destino == 'f') { print 'checked'; }?>/> <br>Farenheit
                                    </td>
                                    <td>
                                        <input type="radio" name="destino" value="k" <?php if ($destino == 'k') { print 'checked'; }?>/> <br>Kelvin
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="celula_esquerda">
                            <input class="valor" type="text" name="temperatura" value="<?php print $temperatura?>"/>
                        </td>
                        <td></td>
                        <td class="celula_direita">
                           <div class="resposta"> <?php print number_format($convertido, 2, ',', '.').$unidade?></div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
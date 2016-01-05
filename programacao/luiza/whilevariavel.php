<html>
<head>
<title>Média</title>
</head>
<body>

<?php

$nota[]=5;
$nota[]=7;
$nota[]=8;
$nota[]=7;
$nota[]=7;
$nota[]=52;
$x=0;
$soma=0;

do
{
    $soma = $soma + $nota[$x];
    $x=$x+1;
} while ($x < count($nota));

echo "<h1>A Média é: ".($soma/count($nota))."</h1>";

	?>

</body>
</html>
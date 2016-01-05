<html>
<head>
<title>Média</title>
</head>
<body>

<?php

$nota[1]=10;
$nota[2]=9;
$nota[3]=8;
$nota[4]=7;
$nota[5]=7;
$soma=0;
$N_notas = count($nota);

for ($x=1; $x<=$N_notas; $x=$x+1)
{
    $soma +=$nota[$x];
}

$media = $soma/$N_notas;

echo "<h1>A Média é: ".$media."</h1>";
?>

</body>
</html>
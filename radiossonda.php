<?php
print '<pre>';
$v  = explode(' ', 'TTAA 57001 83899 99014 21412 04002 00124 21227 12005');

$dia  = ($v[1][0].$v[1][1])-50;
$hora = $v[1][2].$v[1][3];

print "
Tipo: {$v[0]} | Dia: {$dia} | Hora: {$hora} | Estação: {$v[2]}
";
//print_r($v);

print '</pre>';
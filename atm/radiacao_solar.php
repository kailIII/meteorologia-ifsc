<?php
/**
 * Esv = 940*(J/(s*m²))*3600 (em 1h ao meio dia Solar)
 **/

/**
 * Calculo de irradiancia baseado na distancia do Sol
 * E = (P/A) = (P/(4*pi*d²))
 **/

$d = 150000000.0*1000; // Distancia do sol em metros
$P = 3.85*(pow(10, 26));

print number_format($P/((4*pi())*pow($d, 2)), 2).'W/m²';

